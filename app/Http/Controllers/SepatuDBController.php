<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class SepatuDBController extends Controller
{
    public function index()
    {
        // mengambil data dari table sepatu dengan pagination
        $sepatu = DB::table('sepatu')->paginate(10);

        // MENGARAHKAN KE VIEW BARU: indexspt.blade.php
        return view('indexspt', ['sepatu' => $sepatu]);
    }

    // method untuk menampilkan view form tambah sepatu
    public function tambah()
    {
        // MENGARAHKAN KE VIEW BARU: tambahspt.blade.php
        return view('tambahspt');
    }

    // method untuk insert data ke table sepatu
    public function store(Request $request)
    {
        // LOGIKA OTOMATIS: Jika stok kurang dari atau sama dengan 0, maka '0', selain itu '1'
        $status_tersedia = ($request->stocksepatu <= 0) ? '0' : '1';

        // insert data ke table sepatu
        DB::table('sepatu')->insert([
            'merksepatu' => $request->merksepatu,
            'stocksepatu' => $request->stocksepatu,
            'tersedia' => $status_tersedia
        ]);

        // alihkan halaman ke halaman utama sepatu
        return redirect('/sepatu');
    }

    // method untuk edit data sepatu
    public function edit($id)
    {
        // mengambil data sepatu berdasarkan id yang dipilih
        $sepatu = DB::table('sepatu')->where('kodesepatu', $id)->get();

        // MENGARAHKAN KE VIEW BARU: editspt.blade.php
        return view('editspt', ['sepatu' => $sepatu]);
    }

    // update data sepatu
    public function update(Request $request)
    {
        // LOGIKA OTOMATIS: Jika stok kurang dari atau sama dengan 0, maka '0', selain itu '1'
        $status_tersedia = ($request->stocksepatu <= 0) ? '0' : '1';

        // update data sepatu
        DB::table('sepatu')->where('kodesepatu', $request->kodesepatu)->update([
            'merksepatu' => $request->merksepatu,
            'stocksepatu' => $request->stocksepatu,
            'tersedia' => $status_tersedia
        ]);

        // alihkan halaman ke halaman utama sepatu
        return redirect('/sepatu');
    }

    // method untuk hapus data sepatu
    public function hapus($id)
    {
        // menghapus data sepatu berdasarkan id yang dipilih
        DB::table('sepatu')->where('kodesepatu', $id)->delete();

        // alihkan halaman ke halaman utama sepatu
        return redirect('/sepatu');
    }

    public function cari(Request $request)
    {
        // menangkap data pencarian
        $cari = $request->cari;

        // mengambil data dari table sepatu sesuai pencarian data merk
        $sepatu = DB::table('sepatu')
        ->where('merksepatu', 'like', "%".$cari."%")
        ->paginate();

        // MENGARAHKAN KE VIEW BARU: indexspt.blade.php
        return view('indexspt', ['sepatu' => $sepatu]);
    }
}
