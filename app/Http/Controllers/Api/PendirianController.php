<?php

namespace App\Http\Controllers\Api;

use App\Http\Requests\PendirianRequest;
use App\Mail\ChangeStatusMail;
use App\Models\Pendirian;
use App\Models\StatusDokumen;
use App\Models\User;
use App\Http\Controllers\Controller;
use Dompdf\Dompdf;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Storage;

class PendirianController extends Controller
{
    private function handleFileUpload(Request $request, Pendirian $pendirian, $columnName)
    {
        if ($request->hasFile($columnName)) {
            $file = $request->file($columnName);
            $extension = $file->getClientOriginalExtension();
            $fileName = date('YmdHis') . '.' . $pendirian->user_id . '.' . $extension;
            $file->storeAs('public/perizinanPendirian/' . $columnName, $fileName);
            $pendirian->$columnName = $fileName;
        }
    }

    public function getAllPendirian(PendirianRequest $request)
    {
        try {
            $pendirians = Pendirian::when($request->has('statusDokumen_id'), function ($query) use ($request) {
                $query->where('statusDokumen_id', $request->statusDokumen_id);
            })
                ->when($request->has('category_id'), function ($query) use ($request) {
                    $query->where('category_id', $request->category_id);
                })
                ->get();

            $transformedData = $pendirians->map(function ($pendirian) {
                $user = User::findOrFail($pendirian->user_id);

                $statusDokumen = StatusDokumen::findOrFail($pendirian->statusDokumen_id);

                $category = [
                    1 => "TK",
                    2 => "SD",
                    3 => "SMP"
                ];

                $pendirian->status_dokumen = $statusDokumen->Name;
                $pendirian->category = $category[$pendirian->category_id];

                $data = collect($user->toArray())->merge($pendirian->toArray());

                return $data;
            });


            return response()->json(['data' => $transformedData], 200);
        } catch (\Exception $e) {
            return response()->json(['message' => $e->getMessage()], 500);
        }
    }


    public function getPendirianById($pendirianId)
    {
        try {
            $user = Auth::user();
            $pendirian = Pendirian::findOrFail($pendirianId);

            $statusDokumen = StatusDokumen::findOrFail($pendirian->statusDokumen_id);

            $category = [
                1 => "TK",
                2 => "SD",
                3 => "SMP"
            ];

            $pendirian->status_dokumen = $statusDokumen->Name;
            $pendirian->category = $category[$pendirian->statusDokumen_id];

            $response = collect($user->toArray())->merge($pendirian->toArray());

            return response()->json(['data' => $response], 200);
        } catch (\Exception $e) {
            return response()->json(['message' => $e->getMessage()], 500);
        }
    }

    public function createPendirian(PendirianRequest $request)
    {
        try {
            $user = Auth::user();

            $category = [
                "TK" => 1,
                "SD" => 2,
                "SMP" => 3
            ];

            // Mendapatkan kategori ID atau menggunakan nilai default
            $category_id = $category[$request->category] ?? null;

            $inputPendirian = array_merge(
                ['user_id' => $user->id],
                ['category_id' => $category_id],
                ['statusDokumen_id' => 1],
                $request->validated()
            );

            $pendirian = new Pendirian($inputPendirian);

            // Loop through validated data to handle file uploads
            foreach ($request->validated() as $key => $input) {
                $this->handleFileUpload($request, $pendirian, $key);
            }

            $pendirian->save();

            // Create a response array with user and pendirian data

            $pendirian->user = $user;
            $response = collect($user->toArray())->merge($pendirian->toArray());

            return response()->json(['data' => $response, 'message' => 'Data Created Pendirian successfully'], 201);
        } catch (\Exception $e) {
            return response()->json(['message' => $e->getMessage()], 500);
        }
    }


    public function updatePendirian(PendirianRequest $request, $pendirianId)
    {
        try {
            $pendirian = Pendirian::findOrFail($pendirianId);
            $user = User::findOrFail($pendirian->user_id);

            foreach ($request->validated() as $key => $input) {
                if ($request->hasFile($key) && $pendirian->$key) {
                    Storage::delete('public/perizinanPendirian/' . $key . '/' . $pendirian->$key);
                }
            }

            $pendirian->fill($request->validated());

            // Menyimpan file yang diunggah ke penyimpanan (storage) jika ada
            foreach ($request->validated() as $key => $input) {
                $this->handleFileUpload($request, $pendirian, $key);
            }

            $pendirian->save();

            $targetStatuses = [3, 8, 11];
            if (in_array($pendirian->statusDokumen_id, $targetStatuses)) {
                $status = StatusDokumen::where('id', $pendirian->statusDokumen_id);
                $pendirian->status_dokumen = $status->name;
                Mail::to($pendirian->email)->send(new ChangeStatusMail($pendirian));

            } elseif ($pendirian->statusDokumen_id == 10) {

                $data = array('name' => 'jarwo');

                $perizinan = $pendirian;
                $imgGaruda = public_path('QRCode/garuda.jpg');
                $jadiGaruda = base64_decode($imgGaruda);

                $ttdKepalaDinas = public_path('QRCode/ttd-kepala-dinas.jpg');
                $jadiTTD = base64_decode($ttdKepalaDinas);

                $dompdf = new Dompdf();
                $view = view('mail.izinTerbitPdf', compact('perizinan', 'jadiGaruda', 'jadiTTD'));
                $dompdf->loadHTML($view);
                $dompdf->render();
                $output = $dompdf->output();

                $filename = date('YmdHis') . '.' . "surat_izin_terbit.pdf";
                Storage::put('public/perizinanPendirian/surat_terbit/' . $filename, $output);

                // Save To Database
                $perizinan->surat_terbit = $filename . $request->surat_terbit;
                $perizinan->save();

                $user = User::where('id', $perizinan->user_id);

                $emailPemohon = $user->email;

                Mail::send(['file' => 'mail'], $data, function ($message) use ($dompdf, $emailPemohon) {
                    $message->to($emailPemohon)->subject('Surat Izin Terbit');

                    $message->attachData($dompdf->output(), 'surat_izin_terbit.pdf');

                    $message->from('AksaraCode@company.com', 'AksraCode');
                });
            }

            $data = collect($user->toArray())->merge($pendirian->toArray());


            return response()->json(['data' => $data, 'message' => 'Data Updated Pendirian successfully'], 200);
        } catch (\Exception $e) {
            return response()->json(['message' => $e->getMessage()], 500);
        }
    }


    public function deletePendirian($pendirianId)
    {
        try {
            $user = Auth::user();

            // Mencari Pendirian berdasarkan ID
            $pendirian = Pendirian::findOrFail($pendirianId);

            // Memastikan bahwa pengguna yang mengakses memiliki hak akses
            if ($user->id !== $pendirian->user_id) {
                return response()->json(['message' => 'Unauthorized'], 403);
            }

            // Menghapus file gambar yang terkait dengan data yang akan dihapus
            foreach ($pendirian->getAttributes() as $key => $value) {
                if ($value) {
                    Storage::delete('public/perizinanPendirian/' . $key . '/' . $value);
                }
            }

            // Menghapus data dari basis data
            $pendirian->delete();

            return response()->json(['message' => 'Data Deleted Successfully'], 200);
        } catch (\Exception $e) {
            return response()->json(['message' => $e->getMessage()], 500);
        }
    }

    public function deleteInvalidFile(PendirianRequest $request, $id, $field)
    {
        try {
            $pendirian = Pendirian::findOrFail($id);

            if (!$pendirian->$field) {
                return response()->json(['message' => 'File not found'], 404);
            }

            Storage::delete('public/perizinanPendirian/' . $field . '/' . $pendirian->$field);

            $pendirian->$field = null;
            $pendirian->save();

            return response()->json(['message' => 'File deleted successfully'], 200);
        } catch (\Exception $e) {
            return response()->json(['message' => $e->getMessage()], 500);
        }
    }
}
