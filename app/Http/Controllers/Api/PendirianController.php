<?php

namespace App\Http\Controllers\Api;

use App\Http\Requests\PendirianRequest;
use App\Models\Pendirian;
use App\Models\StatusDokumen;
use App\Models\User;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
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

    public function getAllPendirian()
    {
        try {
            $pendirians = Pendirian::get();

            $transformedData = $pendirians->map(function ($pendirian) {
                $user = User::findOrFail($pendirian->user_id);

                $statusDokumen = StatusDokumen::findOrFail($pendirian->statusDokumen_id);

                $category = [
                    1 => "TK",
                    2 => "SD",
                    3 => "SMP"
                ];

                $pendirian->status_dokumen = $statusDokumen->Name;
                $pendirian->category = $category[$pendirian->statusDokumen_id];

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
            $user = Auth::user();

            $pendirian = Pendirian::findOrFail($pendirianId);

            if ($user->id !== $pendirian->user_id) {
                return response()->json(['message' => 'Unauthorized'], 403);
            }

            foreach ($request->validated() as $key => $input) {
                if ($request->hasFile($key) && $pendirian->$key) {
                    Storage::delete('public/perizinanPendirian/' . $key . '/' . $pendirian->$key);
                }
            }

            $pendirian->fill(array_merge(
                ['user_id' => $user->id],
                ['category_id' => 1],
                ['statusDokumen_id' => 1],
                $request->validated()
            ));

            // Menyimpan file yang diunggah ke penyimpanan (storage) jika ada
            foreach ($request->validated() as $key => $input) {
                $this->handleFileUpload($request, $pendirian, $key);
            }

            $pendirian->save();

            $response = collect($user->toArray())->merge($pendirian->toArray());

            return response()->json(['data' => $response, 'message' => 'Data Updated Pendirian successfully'], 200);
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
}
