<?php

namespace App\Http\Controllers;

use App\Models\perusahaan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\kbli;

use PDF;

class PerusahaanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if (Auth::user()->role == 'pemohon') {
            $kbli = kbli::all();
            return view('pemohon.perusahaan.index', compact('kbli'));
        } elseif (Auth::user()->role == 'petugas') {
            return view('petugas.perusahaan.index');
        } elseif (Auth::user()->role == 'pengawas') {
            return view('pengawas.perusahaan.index');
        } elseif (Auth::user()->role == 'admin') {
            return view('admin.perusahaan.index');
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $kbli = kbli::all();
        return view('pemohon.perusahaan.create', compact('kbli'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\perusahaan  $perusahaan
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        if (Auth::user()->role == 'pemohon') {
            return view('pemohon.perusahaan.detail');
        } elseif (Auth::user()->role == 'admin') {
            return view('admin.perusahaan.detail');
        }
       
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\perusahaan  $perusahaan
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        if (Auth::user()->role == 'petugas') {
            return view('petugas.perusahaan.edit');
        } elseif (Auth::user()->role == 'pemohon') {
            return view('pemohon.perusahaan.edit');
        } elseif (Auth::user()->role == 'admin') {
            return view('admin.perusahaan.edit');
        }
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\perusahaan  $perusahaan
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, perusahaan $perusahaan)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\perusahaan  $perusahaan
     * @return \Illuminate\Http\Response
     */
    public function destroy(perusahaan $perusahaan)
    {
        //
    }


    public function cetak_surat(){
        $data = PDF::loadview('petugas.perusahaan.pdf-view');
    	 return $data->stream('laporan.pdf');
        
    }
}
