<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;

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
        if (Auth::user()->role == 'admin') {
            return view('admin.dashboard.index');
        }

        else if (Auth::user()->role == 'pemohon') {
            return view('pemohon.dashboard.index');
        }

        else if (Auth::user()->role == 'pengawas') {
            return view('pengawas.dashboard.index');
        }

        else if (Auth::user()->role == 'petugas') {
            return view('petugas.dashboard.index');
        }

        else {
            return view('home');
        }

    }
}
