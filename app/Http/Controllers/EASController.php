<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Validation\Rule;

class EASController extends Controller
{
    public function index () {
        $eas = DB::table('mypegawai')->get();

        return view('eas.index', ['eas' => $eas]);
    }

    public function tambah()
    {
        return view('eas.tambah');
    }

    public function store(Request $request)
    {
        $request->validate([
            'kodepegawai' => 'required|alpha_num|size:9|unique:mypegawai,kodepegawai',
            'namalengkap' => 'required|string|max:50',
            'divisi' => 'nullable|size:5',
            'departemen' => 'nullable|size:10',
        ]);

DB::table('mypegawai')->insert([
        'kodepegawai' => $request->kodepegawai,
        'namalengkap' => $request->namalengkap,
        'divisi'      => $request->divisi,
        'departemen'  => $request->departemen,
    ]);

        return redirect()->route('eas.index')->with('success', 'Data Pegawai Berhasil Ditambahkan!');
    }

    public function view($kodepegawai)
{
    // Mengambil satu data pegawai berdasarkan kodepegawai
    $eas = DB::table('mypegawai')->where('kodepegawai', $kodepegawai)->first();

    if (!$eas) {
        abort(404);
    }
    return view('eas.view', compact('eas'));
}
}

