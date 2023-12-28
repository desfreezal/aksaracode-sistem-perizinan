<?php

namespace App\Http\Controllers\Api\Pendirian;
use App\Http\Requests\PendirianRequest;
use App\Models\Pendirian;
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
            // $pendirians = Pendirian::all();

            // Retrieve all pendirians along with their associated users
            $pendirians = Pendirian::with('user')->get();

            // var_dump($pendirians);
            // die();

            // Transform the user_id to username in each pendirian
            $transformedData = $pendirians->map(function ($pendirian) {
                $pendirian->username = optional($pendirian->user)->username;
                unset($pendirian->user_id); // Hapus field user_id jika tidak ingin menampilkannya
                return $pendirian;
            });
    

            return response()->json(['data' => $transformedData], 200);
        } catch (\Exception $e) {
            return response()->json(['message' => $e->getMessage()], 500);
        }
    }


    public function getPendirianById($pendirianId)
    {
        try {
            $pendirian = Pendirian::findOrFail($pendirianId);

            return response()->json(['data' => $pendirian], 200);
        } catch (\Exception $e) {
            return response()->json(['message' => $e->getMessage()], 500);
        }
    }

    public function createPendirian(PendirianRequest $request)
    {
        try {
            $user = Auth::user();
            // Buat pengguna

            $inputPendirian = array_merge(['user_id' => $user->id], ['category_id' => 1],['statusDokumen_id' => 1] ,$request->validated());

            
            $pendirian = new Pendirian($inputPendirian);


            // Menyimpan file yang diunggah ke penyimpanan (storage) jika ada
            foreach ($request->validated() as $key => $input) {
                $this->handleFileUpload($request, $pendirian, $key);
            }

            $pendirian->save();

            $pendirian->user_id = $user->name;

            return response()->json(['data' => $pendirian, 'message' => 'Data Crated Pendirian successfully'], 201);
        } catch (\Exception $e) {
            return response()->json(['message' => $e->getMessage()], 500);
        }
    }

    
    public function updatePendirian(PendirianRequest $request, $pendirianId)
    {
        try {
            $user = Auth::user();

            // Mencari Pendirian berdasarkan ID
            $pendirian = Pendirian::findOrFail($pendirianId);

            // Memastikan bahwa pengguna yang mengakses memiliki hak akses
            if ($user->id !== $pendirian->user_id) {
                return response()->json(['message' => 'Unauthorized'], 403);
            }

            // Menghapus file gambar yang terkait dengan data yang akan diubah
            foreach ($request->validated() as $key => $input) {
                if ($request->hasFile($key) && $pendirian->$key) {
                    Storage::delete('public/perizinanPendirian/' . $key . '/' . $pendirian->$key);
                }
            }

            // Mengganti nilai array (contoh: mengganti nama pengguna)
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

             // Menyimpan perubahan ke basis data
             $pendirian->save();

            return response()->json(['data' => $pendirian, 'message' => 'Data Updated Pendirian successfully'], 200);
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
