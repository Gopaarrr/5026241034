@extends('template')
@section('title', 'Data Sepatu')
@section('konten')

    <a href="/sepatu" class="btn btn-secondary mb-4">Kembali</a>

    <div class="card">
        <div class="card-header">
            Form Tambah Data Sepatu
        </div>

        <div class="card-body">
            <form action="/sepatu/store" method="post">
                {{ csrf_field() }}

                <div class="row mb-3">
                    <label for="merksepatu" class="col-sm-2 col-form-label">Merk Sepatu</label>
                    <div class="col-sm-10">
                        <input type="text" name="merksepatu" id="merksepatu" class="form-control" required>
                    </div>
                </div>

                <div class="row mb-3">
                    <label for="stocksepatu" class="col-sm-2 col-form-label">Stock Sepatu</label>
                    <div class="col-sm-10">
                        <input type="number" name="stocksepatu" id="stocksepatu" class="form-control" required>
                    </div>
                </div>

                <div class="row">
                    <div class="offset-sm-2 col-sm-10">
                        <input type="submit" value="Simpan Data" class="btn btn-primary">
                    </div>
                </div>

            </form>
        </div>
    </div>

@endsection
