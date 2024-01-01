<?php

namespace App\Http\Controllers;

use App\Http\Requests\OperasionalRequest;
use App\Models\Operasional;
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
    public function createOperasional(OperasionalRequest $request)
    {
        return view('pemohon.izin-operasional.data-pemohon');
    }

    public function store(OperasionalRequest $request)
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

            return view('pemohon.lacak-permohonan');

        } catch (\Exception $e) {
            throw $e;
        }
    }

    public function update(OperasionalRequest $request, $id)
    {
        try {
            $user = Auth::user();

            $operasional = Operasional::findOrFail($id);

            if ($user->id !== $operasional->user_id) {
                return response()->json(['message' => 'Unauthorized'], 403);
            }

            foreach ($request->validated() as $key => $input) {
                if ($request->hasFile($key) && $operasional->$key) {
                    Storage::delete('public/operasional/' . $key . '/' . $operasional->$key);
                }
            }

            $operasional->fill(array_merge(
                ['user_id' => $user->id],
                ['category_id' => 1],
                ['statusDokumen_id' => 1],
                $request->validated()
            ));

            // Menyimpan file yang diunggah ke penyimpanan (storage) jika ada
            foreach ($request->validated() as $key => $input) {
                $this->handleFileUpload($request, $operasional, $key);
            }

            $operasional->save();

            $response = collect($user->toArray())->merge($operasional->toArray());

            return view('pemohon.lacak-permohonan');
        } catch (\Exception $e) {
            throw $e;
        }
    }
}
