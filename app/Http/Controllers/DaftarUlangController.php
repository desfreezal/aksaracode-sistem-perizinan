<?php

namespace App\Http\Controllers;

use App\Http\Requests\DaftarUlangRequest;
use App\Models\DaftarUlang;
use Dompdf\Dompdf;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;
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

    public function update_status_dokumen(Request $req)
    {
        $permohonan = DaftarUlang::find($req->id);

        $permohonan->statusDokumen_id = $req->statusDokumen_id;
        $permohonan->save();

        return back()->with('sukses_dikirim','Status Dokumen Berhasil Diupdate');
    }


    public function permohonan_selesai(Request $req){
        $permohonan = DaftarUlang::find($req->id);

        $imgGaruda = public_path('QRCode/garuda.jpg');
        $jadiGaruda = base64_decode($imgGaruda);

        $ttdKepalaDinas = public_path('QRCode/ttd-kepala-dinas.jpg');
        $jadiTTD = base64_decode($ttdKepalaDinas);
        $emailPemohon = $permohonan->email;


        // Convert HTML TO PDF
        $data = array('name' => 'jarwo');
            $dompdf = new Dompdf();
            $view = view('mail.izinTerbitPdf',compact('permohonan','jadiGaruda','jadiTTD'));
            $dompdf->loadHTML($view);
            $dompdf->render();
            $output = $dompdf->output();
        // Save To storage
            $filename = date('YmdHis').'.'."surat_izin_terbit.pdf";
            Storage::put('public/daftarUlang/surat_terbit/'.$filename,$output);

        // Save To Database
            $permohonan->surat_terbit = $filename.$req->surat_terbit;
            $permohonan->statusDokumen_id = 10;
            $permohonan->save();

            // Kirim Email Beserta file Attach
        Mail::send(['file' => 'mail'], $data, function ($message)use($dompdf,$emailPemohon) {
            $message->to($emailPemohon)->subject('Surat Izin Terbit');

            $message->attachData($dompdf->output(),'surat_izin_terbit.pdf');

            $message->from('AksaraCode@company.com','AksaraCode');
        });

        return redirect()->route('admin-dinas-pengesahan-dokumen')->with('sukses_dikirim','Permohonan Selesai, Surat Izin Terbit Telah DIkirim');
    }
}
