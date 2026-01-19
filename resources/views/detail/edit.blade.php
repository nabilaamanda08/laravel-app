@extends('layouts.dashboard')

@section('content')

<h2>Edit Detail</h2>

<form action="{{ route('detail.update', $detail->detail_id) }}" method="POST">
    @csrf
    @method('PUT') 

    <div class="mb-3">
        <label for="ukuran" class="form-label fw-bold">Ukuran</label>
        <input type="text" class="form-control" name="ukuran" id="ukuran" value="{{ $detail->ukuran }}" required>
    </div>

    <div class="mb-3">
        <label for="warna" class="form-label fw-bold">Warna</label>
        <input type="text" class="form-control" name="warna" id="warna" value="{{ $detail->warna }}" required>
    </div>

    <div class="mb-3">
        <label for="kondisi" class="form-label fw-bold">Kondisi</label>
        <input type="text" class="form-control" name="kondisi" id="kondisi" value="{{ $detail->kondisi }}" required>
    </div>

    <div class="mb-3">
        <label for="harga" class="form-label fw-bold">Harga</label>
        <input type="number" class="form-control" name="harga" id="harga" value="{{ $detail->harga }}" required>
    </div>

    <div class="mb-3">
        <label for="model_id" class="form-label fw-bold">Pilih Model</label>
        <select name="model_id" id="model_id" class="form-control" required>
            <option value="">Pilih Model</option>
            @foreach ($models as $model)
                <option value="{{ $model->model_id }}" @if($detail->model_id == $model->model_id) selected @endif>
                    {{ $model->nama_model }}
                </option>
            @endforeach
        </select>
    </div>

    <button type="submit" class="btn btn-primary">Update</button>
</form>

@endsection
