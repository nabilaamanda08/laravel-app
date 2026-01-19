@extends('layouts.dashboard')

@section('content')

    <h2>Edit Model</h2>

    <form action="{{ url('model/' . $model->model_id) }}" method="POST">
        @csrf
        @method('PUT')  

        <div class="mb-3">
            <label for="nama_model" class="form-label fw-bold">Nama Model</label>
            <input type="text" class="form-control" name="nama_model" id="nama_model" value="{{ $model->nama_model }}" required>
        </div>

        <div class="mb-3">
            <label for="brand_id" class="form-label fw-bold">Pilih Brand</label>
            <select name="brand_id" id="brand_id" class="form-control" required>
                <option value="">Pilih Brand</option>
                @foreach ($brands as $brand)
                    <option value="{{ $brand->brand_id }}" 
                        @if ($model->brand_id == $brand->brand_id) selected @endif>
                        {{ $brand->nama_brand }}
                    </option>
                @endforeach
            </select>
        </div>

        <button type="submit" class="btn btn-primary">Update</button>
    </form>

@endsection
