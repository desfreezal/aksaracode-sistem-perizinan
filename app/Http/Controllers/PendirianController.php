<?php

namespace App\Http\Controllers;

use App\Http\Requests\PendirianRequest;
use App\Models\Pendirian;
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

    public function createPendirian(PendirianRequest $request)
    {
        

        return view('pemohon.izin-pendirian.data-pemohon');
    }

    public function store(PendirianRequest $request)
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

            return view('pemohon.lacak-permohonan');

        } catch (\Exception $e) {
            throw $e;
        }
    }
    
    public function update(PendirianRequest $request, $id)
    {
        try {
            $user = Auth::user();

            $pendirian = Pendirian::findOrFail($id);

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

            return view('pemohon.lacak-permohonan');
        } catch (\Exception $e) {
            throw $e;
        }
    }
}
