@extends('template')
@section('title', 'Data Belanja')
@section('konten')

    <a href="/kbc/tambah" class="btn btn-primary">Tambah</a>
    <br />
    <br />

    <table class="table table-striped table-hover">
        <tr>
            <th>Kode Pembelian</th>
            <th>Kode Barang</th>
            <th>Jumlah Pembelian</th>
            <th>Harga per item</th>
            <th>Total</th>
            <th>Action</th>
        </tr>

        @foreach ($kbc as $k)
            <tr>
                <td>{{ $k->ID }}</td>
                <td>{{ $k->KodeBarang }}</td>
                <td>{{ $k->jumlah }}</td>
                <td>{{ number_format($k->Harga) }}</td>
                <td>{{ number_format($k->jumlah * $k->Harga) }}</td>
                <td>
                    <a href="/kbc/tambah" class="btn btn-success">Beli</a>
                    <a href="/kbc/batal/{{ $k->ID }}" class="btn btn-danger">Batal</a>
                </td>
            </tr>
        @endforeach
    </table>

    </table>
@endsection
