<?php

namespace App\Http\Controllers\Api;
use App\Http\Requests\OperasionalRequest;
use App\Models\Operasional;
use App\Models\StatusDokumen;
use App\Models\User;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class OperasionalController extends Controller
{
    private function handleFileUpload(Request $request, Operasional $operasional, $columnName)
    {
        if ($request->hasFile($columnName)) {
            $file = $request->file($columnName);
            $extension = $file->getClientOriginalExtension();
            $fileName = date('YmdHis') . '.' . $operasional->user_id . '.' . $extension;
            $file->storeAs('public/operasional/' . $columnName, $fileName);
            $operasional->$columnName = $fileName;
        }
    }

    public function getAllOperasional(OperasionalRequest $request)
    {
        try {
            $operasionals = Operasional::when($request->has('statusDokumen_id'), function ($query) use ($request) {
                $query->where('statusDokumen_id', $request->statusDokumen_id);
            })
            ->when($request->has('category_id'), function ($query) use ($request) {
                $query->where('category_id', $request->category_id);
            })
            ->get();

            $transformedData = $operasionals->map(function ($operasional) {
                $user = User::findOrFail($operasional->user_id);

                $statusDokumen = StatusDokumen::findOrFail($operasional->statusDokumen_id);

                $category = [
                    1 => "TK",
                    2 => "SD",
                    3 => "SMP"
                ];

                $operasional->status_dokumen = $statusDokumen->Name;
                $operasional->category = $category[$operasional->statusDokumen_id];

                $data = collect($user->toArray())->merge($operasional->toArray());
                
                return $data;
            });
    

            return response()->json(['data' => $transformedData], 200);
        } catch (\Exception $e) {
            return response()->json(['message' => $e->getMessage()], 500);
        }
    }


    public function getOperasionalById($operasionalId)
    {
        try {
            $user = Auth::user();
            $operasional = Operasional::findOrFail($operasionalId);

            $statusDokumen = StatusDokumen::findOrFail($operasional->statusDokumen_id);

                $category = [
                    1 => "TK",
                    2 => "SD",
                    3 => "SMP"
                ];

                $operasional->status_dokumen = $statusDokumen->Name;
                $operasional->category = $category[$operasional->statusDokumen_id];

            $response = collect($user->toArray())->merge($operasional->toArray());

            return response()->json(['data' => $response], 200);
        } catch (\Exception $e) {
            return response()->json(['message' => $e->getMessage()], 500);
        }
    }

    public function createOperasional(OperasionalRequest $request)
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

        $inputOperasional = array_merge(
            ['user_id' => $user->id],
            ['category_id' => $category_id],
            ['statusDokumen_id' => 1],
            $request->validated()
        );

        $operasional = new Operasional($inputOperasional);

        // Loop through validated data to handle file uploads
        foreach ($request->validated() as $key => $input) {
            $this->handleFileUpload($request, $operasional, $key);
        }

        $operasional->save();

        // Create a response array with user and operasional data

        $operasional->user = $user;
        $response = collect($user->toArray())->merge($operasional->toArray());

        return response()->json(['data' => $response, 'message' => 'Data Created Operasional successfully'], 201);
    } catch (\Exception $e) {
        return response()->json(['message' => $e->getMessage()], 500);
    }
}

    
    public function updateOperasional(OperasionalRequest $request, $operasionalId)
    {
        try {
            $operasional = Operasional::findOrFail($operasionalId);
            $user = User::findOrFail($operasional->user_id);

            foreach ($request->validated() as $key => $input) {
                if ($request->hasFile($key) && $operasional->$key) {
                    Storage::delete('public/operasional/' . $key . '/' . $operasional->$key);
                }
            }

            $operasional->fill($request->validated());

            // Menyimpan file yang diunggah ke penyimpanan (storage) jika ada
            foreach ($request->validated() as $key => $input) {
                $this->handleFileUpload($request, $operasional, $key);
            }

             $operasional->save();

             $data = collect($user->toArray())->merge($operasional->toArray());


            return response()->json(['data' => $data, 'message' => 'Data Updated Operasional successfully'], 200);
        } catch (\Exception $e) {
            return response()->json(['message' => $e->getMessage()], 500);
        }
    }


    public function deleteOperasional($operasionalId)
    {
        try {
            $user = Auth::user();

            // Mencari Operasional berdasarkan ID
            $operasional = Operasional::findOrFail($operasionalId);

            // Memastikan bahwa pengguna yang mengakses memiliki hak akses
            if ($user->id !== $operasional->user_id) {
                return response()->json(['message' => 'Unauthorized'], 403);
            }

            // Menghapus file gambar yang terkait dengan data yang akan dihapus
            foreach ($operasional->getAttributes() as $key => $value) {
                if ($value) {
                    Storage::delete('public/operasional/' . $key . '/' . $value);
                }
            }

            // Menghapus data dari basis data
            $operasional->delete();

            return response()->json(['message' => 'Data Deleted Successfully'], 200);
        } catch (\Exception $e) {
            return response()->json(['message' => $e->getMessage()], 500);
        }
    }
}
