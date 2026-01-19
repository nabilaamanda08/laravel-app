@extends('layouts.dashboard')

@section('content')

<h2>Detail</h2>

<a href="{{ route('detail.create') }}" class="btn btn-primary mb-3">Tambah Detail</a>

<table class="table table-bordered">
    <thead>
        <tr>
            <th>No</th>
            <th>Ukuran</th>
            <th>Warna</th>
            <th>Kondisi</th>
            <th>Harga</th>
            <th>Model</th>
            <th>Aksi</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($detail as $index => $detail)
        <tr>
            <td>{{ $index + 1 }}</td>
            <td>{{ $detail->ukuran }}</td>
            <td>{{ $detail->warna }}</td>
            <td>{{ $detail->kondisi }}</td>
            <td>{{ $detail->harga }}</td>
            <td>{{ $detail->model->nama_model }}</td> 
            <td>
                <a href="{{ route('detail.edit', $detail->detail_id) }}" class="btn btn-primary btn-sm">Edit</a>

                <form action="{{ route('detail.destroy', $detail->detail_id) }}" method="POST" class="d-inline">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Yakin ingin menghapus data?')">Hapus</button>
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>

@endsection
