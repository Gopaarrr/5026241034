<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Validation\Rule;

class latihaneasController extends Controller
{
        public function index(){
        $lat = DB::table('buku')->get();

        foreach ($lat as $lt){
        $la = $lt->tahun;
        if ($la <= 2021){
            $lt->Kategori = 'Lama';
        } else {
            $lt->Kategori = 'Baru';
        }
    }

        foreach ($lat as $lt){
        $la = $lt->sedang_dipinjam;
        if ($la == 0){
            $lt->Ketersediaan = 'Tersedia';
        } else {
            $lt->Ketersediaan = 'Tidak Tersedia';
        }
    }
        return view('lat.index', ['lat' => $lat]);
}

public function update($id)
{
    // 1. Ambil data buku berdasarkan ID
    $lat = DB::table('buku')->where('ID', $id)->first();

    if ($lat) {
        $statusBaru = ($lat->sedang_dipinjam == 1) ? 0 : 1;

        DB::table('buku')->where('ID', $id)->update([
            'sedang_dipinjam' => $statusBaru
        ]);
    }
    return redirect('/lat');
}

}
