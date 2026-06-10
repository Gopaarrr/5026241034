<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Validation\Rule;

class KeranjangBelanjaController extends Controller
{

// Menampilkan Tabel Keranjang Belanja
    public function index()
    {
        $kbc = DB::table('keranjangbelanja')->get();
        return view('kbc.index', ['kbc' => $kbc]);
    }

    public function beli()
    {
        return view('kbc.beli');
    }

    public function tambah(request $request)
    {
        DB::table('keranjangbelanja')->insert([
            'KodeBarang' => $request->KodeBarang,
            'Jumlah' => $request->Jumlah,
            'Harga' => $request->Harga,
        ]);

        return redirect('/kbc');
    }

	// method untuk hapus data pegawai
	public function batal($id)
	{
		// menghapus data pegawai berdasarkan id yang dipilih
		DB::table('keranjangbelanja')->where('ID',$id)->delete();

		// alihkan halaman ke halaman pegawai
		return redirect('/kbc');
	}
}
