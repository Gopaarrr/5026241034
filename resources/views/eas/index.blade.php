@extends('template')
@section('title', 'Kode Soal mypegawai')
@section('konten')

    <a href="/eas/tambah" class="btn btn-primary">Tambah data</a>
    <br />
    <br />

    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

<table class="table table-striped table-hover">
        <tr>
            <th>Kode Pegawai</th>
            <th>Nama Lengkap</th>
            <th>Divisi</th>
            <th>Departemen</th>
            <th>View</th>
        </tr>
            @forelse($eas as $key => $p)
            <tr>
                <td>{{ $p->kodepegawai }}</td>
                <td>{{ $p->namalengkap }}</td>
                <td>{{ $p->divisi ?? '-' }}</td>
                <td>{{ $p->departemen ?? '-' }}</td>
                <td>
                    <a href="{{ route('eas.view', $p->kodepegawai) }}" class="btn btn-info btn-sm text-white">View</a>
                </td>
            </tr>
            @empty
            <tr>
                <td colspan="6" class="text-center">Belum ada data pegawai.</td>
            </tr>
            @endforelse
</table>

@endsection
