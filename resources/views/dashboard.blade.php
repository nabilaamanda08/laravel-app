@extends('layouts.dashboard')

@section('content')

<h2>Dashboard</h2>

<div class="alert-info">Hi, You Are Logged in!</div>

<div class="row">
    <div class="col-md-4 mb-4">
        <div class="card text-white bg-info">
            <div class="card-body">
                <h5 class="card-title"><i class="fas fa-box"></i> Jumlah Brand</h5>
                <p class="card-text">{{ $brandCount }}</p>
                <a href="{{ route('brand.index') }}" class="btn btn-light">Lihat Brand</a>
            </div>
        </div>
    </div>

    <div class="col-md-4 mb-4">
        <div class="card text-white bg-success">
            <div class="card-body">
                <h5 class="card-title"><i class="fas fa-shoe-prints"></i> Jumlah Model</h5>
                <p class="card-text">{{ $modelCount }}</p>
                <a href="{{ route('model.index') }}" class="btn btn-light">Lihat Model</a>
            </div>
        </div>
    </div>

    <div class="col-md-4 mb-4">
        <div class="card text-white bg-warning">
            <div class="card-body">
                <h5 class="card-title"><i class="fas fa-list"></i> Jumlah Detail</h5>
                <p class="card-text">{{ $detailCount }}</p>
                <a href="{{ route('detail.index') }}" class="btn btn-light">Lihat Detail</a>
            </div>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-md-12">
        <div class="card text-white bg-keunggulan">
            <div class="card-body">
                <h4 class="card-title">Keunggulan Kami</h4>
                <ul class="list-group">
                    <li class="list-group-item">✨ Kualitas Produk Terbaik</li>
                    <li class="list-group-item">🚚 Pengiriman Cepat ke Seluruh Indonesia</li>
                    <li class="list-group-item">💸 Harga Terjangkau dan Banyak Diskon</li>
                    <li class="list-group-item">🔒 Garansi Produk dan Kebijakan Pengembalian Barang</li>
                    <li class="list-group-item">📞 Pelayanan Pelanggan 24/7</li>
                </ul>
            </div>
        </div>
    </div>
</div>




@endsection