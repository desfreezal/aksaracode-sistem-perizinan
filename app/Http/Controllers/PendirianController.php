<?php

namespace App\Http\Controllers;

use App\Http\Requests\PendirianRequest;
use App\Models\Pendirian;
use Illuminate\Http\Request;

class PendirianController extends Controller
{
    public function createPendirian(PendirianRequest $request)
    {
        

        return view('pemohon.izin-pendirian.data-pemohon');
    }

    public function store(PendirianRequest $request)
    {
        $pendirian = new Pendirian($request->validated());

        $pendirian->save();

        return view('pemohon.lacak-permohonan');
    }
}
