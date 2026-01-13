@extends('layouts.app')

@section('content')

    <h2>Tambah Brand</h2>

    <form action="{{ url('brand') }}" method="POST">
        @csrf
        <!-- <div class="mb-3">
            <label for="brand_id" class="form-label fw-bold">No</label>
            <input type="text" class="form-control" name="brand_id" id="brand_id" required>
        </div> -->
        <div class="mb-3">
            <label for="nama_brand" class="form-label fw-bold">Nama Brand</label>
            <input type="text" class="form-control" name="nama_brand" id="nama_brand" required>
        </div>
        <button type="submit" class="btn btn-primary">Simpan</button>
    </form>

@endsection