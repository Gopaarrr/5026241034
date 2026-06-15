@extends('template')
@section('title', 'Data Sepatu')
@section('konten')

    <a href="/sepatu" class="btn btn-secondary mb-4">Kembali</a>

    @foreach ($sepatu as $s)
        <div class="card">
            <div class="card-header">
                Form Edit Data Sepatu
            </div>

            <div class="card-body">
                <form action="/lat/update" method="post">
                    {{ csrf_field() }}

                    <input type="hidden" name="kodesepatu" value="{{ $s->kodesepatu }}">

                    <div class="row mb-3">
                        <label for="merksepatu" class="col-sm-2 col-form-label">Merk Sepatu</label>
                        <div class="col-sm-10">
                            <input type="text" name="merksepatu" id="merksepatu" class="form-control" required
                                value="{{ $s->merksepatu }}">
                        </div>
                    </div>

                    <div class="row mb-3">
                        <label for="stocksepatu" class="col-sm-2 col-form-label">Stock Sepatu</label>
                        <div class="col-sm-10">
                            <input type="number" name="stocksepatu" id="stocksepatu" class="form-control" required
                                value="{{ $s->stocksepatu }}">
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
    @endforeach

@endsection
