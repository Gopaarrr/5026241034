@extends('template')
@section('title', 'Data Buku')
@section('konten')


    <table class="table table-striped table-hover">
        <thead class="table-dark">
            <tr>
                <th>Judul</th>
                <th>Penulis</th>
                <th>Tahun</th>
                <th>Kategori</th>
                <th>Ketersediaan</th>
                <th>Pinjam</th>
            </tr>
        </thead>
        <tbody>

            @foreach($lat as $row)
                <tr>
                    <td>{{ $row->judul }}</td>
                    <td>{{ $row->penulis }}</td>
                    <td>{{ $row->tahun }}</td>
                    <td>{{ $row->Kategori }}</td>
                    <td>{{ $row->Ketersediaan }}</td>
                    <td>
                        @if ($row->sedang_dipinjam == 0)
                            <a href="/lat/update/{{ $row->ID }}" class="btn btn-primary">Pinjam Buku</a>
                        @endif
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>

@endsection
