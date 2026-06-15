@extends('template')
@section('title', 'Kode Soal mypegawai')
@section('konten')

    <div class="card">
        <div class="card-header">
            Form Tambah Data Pegawai
        </div>
        <div class="card-body">
            <form id="formPegawai" action="/eas/store" method="POST">
                @csrf

                <div class="row mb-3">
                    <label for="kodepegawai" class="col-sm-2 col-form-label">Kode Pegawai</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="kodepegawai" name="kodepegawai" maxlength="9">
                    </div>
                </div>

                <div class="row mb-3">
                    <label for="namalengkap" class="col-sm-2 col-form-label">Nama Lengkap</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="namalengkap" name="namalengkap" maxlength="50">
                    </div>
                </div>

                <div class="row mb-3">
                    <label for="divisi" class="col-sm-2 col-form-label">Divisi</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="divisi" name="divisi" maxlength="5">
                    </div>
                </div>

                <div class="row mb-3">
                    <label for="departemen" class="col-sm-2 col-form-label">Departemen</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="departemen" name="departemen" maxlength="10">
                    </div>
                </div>

                <div class="row mb-3">
                    <div class="col-sm-10 offset-sm-2">
                        <button type="submit" class="btn btn-success">Simpan Data</button>
                        <a href="{{ route('eas.index') }}" class="btn btn-secondary">Kembali</a>
                    </div>
                </div>
            </form>
        </div>
    </div>

    <script>
        document.getElementById('formPegawai').addEventListener('submit', function(event) {
            let kodePegawai = document.getElementById('kodepegawai').value.trim();
            let namaLengkap = document.getElementById('namalengkap').value.trim();

            // Regex untuk Alphanumeric (Hanya Huruf dan Angka)
            let alphaNumRegex = /^[a-zA-Z0-9]+$/;
            // Regex untuk Huruf saja (Boleh spasi untuk nama lengkap)
            let alphaRegex = /^[a-zA-Z\s]+$/;

            // Validasi Kode Pegawai
            if (kodePegawai === "") {
                alert("Peringatan: Kode Pegawai WAJIB diisi!");
                event.preventDefault();
                return false;
            } else if (!alphaNumRegex.test(kodePegawai)) {
                alert("Peringatan: Kode Pegawai HANYA boleh berisi HURUF dan ANGKA!");
                event.preventDefault();
                return false;
            }

            // Validasi Nama Lengkap
            if (namaLengkap === "") {
                alert("Peringatan: Nama Lengkap WAJIB diisi!");
                event.preventDefault();
                return false;
            } else if (!alphaRegex.test(namaLengkap)) {
                alert("Peringatan: Nama Lengkap HANYA boleh berisi HURUF!");
                event.preventDefault();
                return false;
            }
        });
    </script>

@endsection
