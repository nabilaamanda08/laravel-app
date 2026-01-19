@extends('layouts.dashboard')

@section('content')

<h2>Model</h2>

<a href="{{ url('model/create') }}" class="btn btn-primary mb-3">Tambah Model</a>

<table class="table table-bordered">
    <thead>
        <tr>
            <th>No</th>
            <th>Nama Model</th>
            <th>Nama Brand</th>
            <th>Aksi</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($models as $index => $model)
        <tr>
            <td>{{ $index + 1 }}</td> 
            <td>{{ $model->nama_model }}</td>
            <td>{{ $model->brand->nama_brand }}</td>
            <td>
                <a href="{{ url('model/' . $model->model_id . '/edit') }}" class="btn btn-primary btn-sm">Edit</a>

                <form action="{{ url('model/' . $model->model_id) }}" method="POST" class="d-inline">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger btn-sm"
                        onclick="return confirm('Yakin ingin menghapus data?')">Hapus</button>
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>

@endsection
