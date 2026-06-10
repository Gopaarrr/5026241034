<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Validation\Rule;

class NilaiKuliahController extends Controller
{
        // Menampilkan Tabel nilaikuliah
        public function index(){
        $nk = DB::table('nilaikuliah')->get();

        foreach ($nk as $k){
        $nak = $k->NilaiAngka;

        // Logika Nilai Huruf
        if ($nak <= 40){
            $k->NilaiHuruf = 'D';
        }elseif ($nak <= 60){
            $k->NilaiHuruf = 'C';
        }elseif ($nak <= 80){
            $k->NilaiHuruf = 'B';
        }else{
            $k->NilaiHuruf = 'A';
        }

        // Hitung nilai bobot
        $k->Bobot = $nak * $k->SKS;
}
        return view('nk.index', ['nk' => $nk]);
}

        public function tambah(){
        // Mengarahkan ke file view tambah_data
        return view('nk.tambah');
    }

    public function store(Request $request)
    {
        // Menyimpan data ke database
        DB::table('nilaikuliah')->insert([
            'NRP'        => $request->NRP,
            'NilaiAngka' => $request->NilaiAngka,
            'SKS'        => $request->SKS,
        ]);

        // Kembali ke halaman daftar nilai
        return redirect('/nk');
    }
}
