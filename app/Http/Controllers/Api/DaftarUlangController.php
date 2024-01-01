<?php

namespace App\Http\Controllers\Api;

use App\Http\Requests\DaftarUlangRequest;
use App\Http\Requests\PendirianRequest;
use App\Models\DaftarUlang;
use App\Models\StatusDokumen;
use App\Models\User;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class DaftarUlangController extends Controller
{
    private function handleFileUpload(Request $request, DaftarUlang $daftarUlang, $columnName)
    {
        if ($request->hasFile($columnName)) {
            $file = $request->file($columnName);
            $extension = $file->getClientOriginalExtension();
            $fileName = date('YmdHis') . '.' . $daftarUlang->user_id . '.' . $extension;
            $file->storeAs('public/daftarUlang/' . $columnName, $fileName);
            $daftarUlang->$columnName = $fileName;
        }
    }

    public function getAllDaftarUlang(DaftarUlangRequest $request)
    {
        try {
            $daftarUlangs = DaftarUlang::when($request->has('statusDokumen_id'), function ($query) use ($request) {
                $query->where('statusDokumen_id', $request->statusDokumen_id);
            })
            ->when($request->has('category_id'), function ($query) use ($request) {
                $query->where('category_id', $request->category_id);
            })
            ->get();

            $transformedData = $daftarUlangs->map(function ($daftarUlang) {
                $user = User::findOrFail($daftarUlang->user_id);

                $statusDokumen = StatusDokumen::findOrFail($daftarUlang->statusDokumen_id);

                $category = [
                    1 => "TK",
                    2 => "SD",
                    3 => "SMP"
                ];

                $daftarUlang->status_dokumen = $statusDokumen->Name;
                $daftarUlang->category = $category[$daftarUlang->statusDokumen_id];


                $data = collect($user->toArray())->merge($daftarUlang->toArray());

                return $data;
            });


            return response()->json(['data' => $transformedData], 200);
        } catch (\Exception $e) {
            return response()->json(['message' => $e->getMessage()], 500);
        }
    }


    public function getDaftarUlangById($id)
    {
        try {
            $user = Auth::user();
            $daftarUlang = DaftarUlang::findOrFail($id);
            $statusDokumen = StatusDokumen::findOrFail($daftarUlang->statusDokumen_id);

            $category = [
                1 => "TK",
                2 => "SD",
                3 => "SMP"
            ];

            $daftarUlang->status_dokumen = $statusDokumen->Name;
            $daftarUlang->category = $category[$daftarUlang->statusDokumen_id];

            $response = collect($user->toArray())->merge($daftarUlang->toArray());

            return response()->json(['data' => $response], 200);
        } catch (\Exception $e) {
            return response()->json(['message' => $e->getMessage()], 500);
        }
    }

    public function createDaftarUlang(DaftarUlangRequest $request)
    {
        try {
            $user = Auth::user();


            $category = [
                "TK" => 1,
                "SD" => 2,
                "SMP" => 3
            ];

            $category_id = $category[$request->category] ?? null;

            $inputDaftarUlang = array_merge(
                ['user_id' => $user->id],
                ['category_id' => $category_id],
                ['statusDokumen_id' => 1],
                $request->validated()
            );

            $daftarUlang = new DaftarUlang($inputDaftarUlang);

            // Loop through validated data to handle file uploads
            foreach ($request->validated() as $key => $input) {
                $this->handleFileUpload($request, $daftarUlang, $key);
            }

            $daftarUlang->save();

            // Create a response array with user and pendirian data

            $daftarUlang->user = $user;
            $response = collect($user->toArray())->merge($daftarUlang->toArray());

            return response()->json(['data' => $response, 'message' => 'Data Daftar Ulang Created successfully'], 201);
        } catch (\Exception $e) {
            return response()->json(['message' => $e->getMessage()], 500);
        }
    }


    public function updateDaftarUlang(DaftarUlangRequest $request, $daftarUlangId)
    {
        try {
            $daftarUlang = DaftarUlang::findOrFail($daftarUlangId);
            $user = User::findOrFail($daftarUlang->user_id);

            foreach ($request->validated() as $key => $input) {
                if ($request->hasFile($key) && $daftarUlang->$key) {
                    Storage::delete('public/daftarUlang/' . $key . '/' . $daftarUlang->$key);
                }
            }

            $daftarUlang->fill($request->validated());

            // Menyimpan file yang diunggah ke penyimpanan (storage) jika ada
            foreach ($request->validated() as $key => $input) {
                $this->handleFileUpload($request, $daftarUlang, $key);
            }

             $daftarUlang->save();

             $data = collect($user->toArray())->merge($daftarUlang->toArray());


            return response()->json(['data' => $data, 'message' => 'Data Updated DaftarUlang successfully'], 200);
        } catch (\Exception $e) {
            return response()->json(['message' => $e->getMessage()], 500);
        }
    }


    public function deleteDaftarUlang($id)
    {
        try {
            $user = Auth::user();

            $daftarUlang = DaftarUlang::findOrFail($id);

            if ($user->id !== $daftarUlang->user_id) {
                return response()->json(['message' => 'Unauthorized'], 403);
            }

            foreach ($daftarUlang->getAttributes() as $key => $value) {
                if ($value) {
                    Storage::delete('public/daftarUlang/' . $key . '/' . $value);
                }
            }

            // Menghapus data dari basis data
            $daftarUlang->delete();

            return response()->json(['message' => 'Data Deleted Successfully'], 200);
        } catch (\Exception $e) {
            return response()->json(['message' => $e->getMessage()], 500);
        }
    }

    public function deleteInvalidFile(DaftarUlangRequest $request, $id, $field)
    {
        try {
            $pendirian = DaftarUlang::findOrFail($id);

            if (!$pendirian->$field) {
                return response()->json(['message' => 'File not found'], 404);
            }

            Storage::delete('public/daftarUlang/' . $field . '/' . $pendirian->$field);

            $pendirian->$field = null;
            $pendirian->save();

            return response()->json(['message' => 'File deleted successfully'], 200);
        } catch (\Exception $e) {
            return response()->json(['message' => $e->getMessage()], 500);
        }
    }
}
