<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $user = Auth::user();
        $page = Auth::user()->getRoleNames()[0] . '.dashboard';
        
        if (!$user->hasVerifiedEmail()) {
            return view($page)->with('warning', 'Silakan verifikasi email Anda terlebih dahulu.');
        }
        return view($page);
    }
}