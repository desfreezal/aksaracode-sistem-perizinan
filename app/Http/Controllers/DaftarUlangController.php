<?php

namespace App\Http\Controllers;

use App\Http\Requests\DaftarUlangRequest;
use App\Models\DaftarUlang;
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
    public function createDaftarUlang(DaftarUlangRequest $request)
    {
        return view('pemohon.izin-daftarUlang.data-pemohon');
    }

    public function store(DaftarUlangRequest $request)
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

            return view('pemohon.lacak-permohonan');

        } catch (\Exception $e) {
            throw $e;
        }
    }

    public function update(DaftarUlangRequest $request, $id)
    {
        try {
            $user = Auth::user();

            $daftarUlang = DaftarUlang::findOrFail($id);

            if ($user->id !== $daftarUlang->user_id) {
                return response()->json(['message' => 'Unauthorized'], 403);
            }

            foreach ($request->validated() as $key => $input) {
                if ($request->hasFile($key) && $daftarUlang->$key) {
                    Storage::delete('public/daftarUlang/' . $key . '/' . $daftarUlang->$key);
                }
            }

            $daftarUlang->fill(array_merge(
                ['user_id' => $user->id],
                ['category_id' => 1],
                ['statusDokumen_id' => 1],
                $request->validated()
            ));

            // Menyimpan file yang diunggah ke penyimpanan (storage) jika ada
            foreach ($request->validated() as $key => $input) {
                $this->handleFileUpload($request, $daftarUlang, $key);
            }

            $daftarUlang->save();

            $response = collect($user->toArray())->merge($daftarUlang->toArray());

            return view('pemohon.lacak-permohonan');
        } catch (\Exception $e) {
            throw $e;
        }
    }
}