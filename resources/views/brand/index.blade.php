@extends('layouts.app')

@section('content')

<h2>Brand</h2>

<a href="{{ url('brand/create')}}" class="btn btn-primary mb-3">Tambah Brand</a>

<table class="table table-bordered">
    <thead>
        <tr>
            <th>No</th>
            <th>Nama Brand</th>
            <th>Aksi</th>
        </tr>
    </thead>
    <tbody>
        @foreach ( $rows as $row)
        <tr>
            <td>{{ $row->brand_id }}</td>
            <td>{{ $row->nama_brand }}</td>
            
        </tr>
        @endforeach
        
    </tbody>
</table>

@endsection