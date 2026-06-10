@extends('template')
@section('title', 'Data Belanja')
@section('konten')

<a href="/kbc/tambah" class="btn btn-primary">Tambah</a>
    <br />
    <br />

  <h3>Beli Barang</h3>

    <form action="/kbc/beli" method="post">
        {{ csrf_field() }}

        <div class="form-group">
            <label>Kode Barang</label>
            <input type="text" name="KodeBarang" class="form-control">
        </div>

        <div class="form-group">
            <label>Jumlah Pembelian</label>
            <input type="text" name="Jumlah" class="form-control">
        </div>

        <div class="form-group">
            <label>Harga per item</label>
            <input type="text" name="Harga" class="form-control">
        </div>

        <br>

        <input type="submit" value="Beli" class="btn btn-primary">
        <a href="/kbc" class="btn btn-secondary">Kembali</a>
    </form>
@endsection
