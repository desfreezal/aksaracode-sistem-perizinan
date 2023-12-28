<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PendirianController extends Controller
{
    public function createPendirian()
    {
        return view('pemohon.izin-pendirian.data-pemohon');
    }
    public function postStep1(Request $request)
    {
        session()->put('step1', $request->all()); 

        $peruntukan = $request->input('peruntukan');

        return redirect("/dashboard/izin-pendirian/step2?peruntukan=$peruntukan");
    }
    public function step2()
    {
        return view('pemohon.izin-pendirian.detail-yayasan');
    }
    public function postStep2(Request $request)
    {
        

        return view('pemohon.izin-pendirian.detail-yayasan');
    }

    public function step3()
    {
        return view('pemohon.izin-pendirian.upload-berkas');
    }

    public function step4()
    {
        return view('pemohon.izin-pendirian.detail-pendirian');
    }
}
