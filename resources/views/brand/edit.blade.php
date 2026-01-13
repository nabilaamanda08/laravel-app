@extends('layouts.app')

@section('content')

    <h2>Edit Brand</h2>

    <form action="/brand/{{ $brand->brand_id }}" method="POST">
        @csrf
        @method('PUT')
        <div class="mb-3">
            <label for="nama_brand" class="form-label fw-bold">Nama Brand</label>
            <input type="text" class="form-control" name="nama_brand" id="nama_brand" value="{{ $brand->nama_brand }}">
        </div>
        <button type="submit" class="btn btn-primary">Update</button>
    </form>

@endsection