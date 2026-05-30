@extends('template')
@section('title', 'Data Sepatu')
@section('konten')

    <a href="/sepatu/tambah" class="btn btn-primary"> + Tambah Sepatu Baru</a>

    <br />
    <br />

    <p>Cari Data Sepatu :</p>
    <form action="/sepatu/cari" method="GET" class="form-inline">
        <div class="form-group">
            <input type="text" name="cari" placeholder="Cari Merk Sepatu .." class="form-control">
            <input type="submit" value="CARI" class="btn btn-light">
        </div>
    </form>

    <br />

    <table class="table table-striped table-hover">
        <tr>
            <th>Kode</th>
            <th>Merk Sepatu</th>
            <th class="text-center">Stock</th>
            <th class="text-center">Status</th>
            <th class="text-center">Opsi</th>
        </tr>
 @foreach($sepatu as $s)
    <tr>
        <td>{{ $s->kodesepatu }}</td>
        <td>{{ $s->merksepatu }}</td>
        <td class="text-center">{{ $s->stocksepatu }}</td>
        <td class="text-center">
            @if($s->tersedia == '1')
                ✅ Tersedia
            @else
                ❌ Kosong
            @endif
        </td>
        <td class="text-center">
            <a href="/sepatu/edit/{{ $s->kodesepatu }}" class="btn btn-warning">Edit</a>
            <a href="/sepatu/hapus/{{ $s->kodesepatu }}" class="btn btn-danger">Hapus</a>
        </td>
    </tr>
    @endforeach
</table>

    {{ $sepatu->links() }}

@endsection
