@extends('template')
@section('title', 'Data Nilai Kuliah')
@section('konten')

    <a href="/nk/tambah" class="btn btn-primary mb-3">+ Tambah Data</a>

    <table class="table table-striped table-hover">
        <thead class="table-dark">
            <tr>
                <th>ID</th>
                <th>NRP</th>
                <th>Nilai Angka</th>
                <th>SKS</th>
                <th>Nilai Huruf</th>
                <th>Bobot</th>
            </tr>
        </thead>
        <tbody>
            {{-- Menggunakan forelse untuk menangani kondisi data kosong --}}
            @forelse($nk as $row)
            <tr>
                <td>{{ $row->ID }}</td>
                <td>{{ $row->NRP }}</td>
                <td>{{ $row->NilaiAngka }}</td>
                <td>{{ $row->SKS }}</td>
                <td>{{ $row->NilaiHuruf }}</td>
                <td>{{ $row->Bobot }}</td>
            </tr>
            @empty
            {{-- Pesan ini muncul jika database kosong --}}
            <tr>
                <td colspan="6" class="text-center">Data belum tersedia. Silakan tambahkan data baru.</td>
            </tr>
            @endforelse
        </tbody>
    </table>

@endsection
