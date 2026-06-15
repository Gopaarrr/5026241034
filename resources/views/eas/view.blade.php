@extends('template')
@section('title', 'Kode Soal mypegawai')
@section('konten')

<div class="card p-4">
        <h3 class="mb-4">Detail Data Pegawai</h3>

        <div class="row mb-3">
            <label class="col-sm-2 col-form-label fw-bold">Kode Pegawai</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" value="{{ $eas->kodepegawai }}" disabled>
            </div>
        </div>

        <div class="row mb-3">
            <label class="col-sm-2 col-form-label fw-bold">Nama Lengkap</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" value="{{ $eas->namalengkap }}" disabled>
            </div>
        </div>

        <div class="row mb-3">
            <label class="col-sm-2 col-form-label fw-bold">Divisi</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" value="{{ $eas->divisi ?? '-' }}" disabled>
            </div>
        </div>

        <div class="row mb-3">
            <label class="col-sm-2 col-form-label fw-bold">Departemen</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" value="{{ $eas->departemen ?? '-' }}" disabled>
            </div>
        </div>

        <div class="row mb-3">
            <div class="col-sm-10 offset-sm-2">
                <a href="{{ route('eas.index') }}" class="btn btn-secondary">Kembali ke Halaman Index</a>
            </div>
        </div>
    </div>
</div>


@endsection
