@extends('layouts.app')
@section('title', 'Camp Gear Show')
@section('content')

<div class="" id="content">
<div class="container mt-4">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card shadow-sm">
                <div class="card-header bg-primary text-white">
                    <h5 class="mb-0">Detail Camp Gear</h5>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-4">
                            <img src="{{ asset("images/$item->image") }}" class="img-fluid rounded" alt="Camp Gear Image">
                        </div>
                        <div class="col-md-8">
                            <h4 class="card-title">{{ $item->name }}</h4>
                            <p class="card-text">Ini detail barang dari {{ $item->name }} {{ $item->description }}</p>

                            <div class="mb-3">
                                <span class="badge bg-success me-2">In Stock</span>
                                <span class="text-muted">CODE: CMPG-C-0{{ $item->id }}</span>
                            </div>

                            <div class="row mb-3">
                                <div class="col-6">
                                    <strong>Harga Sewa / Hari:</strong>
                                    <h3 class="text-primary">Rp. {{ $item->price }} / hari</h3>
                                </div>
                                <div class="col-6">
                                    <strong>Rating:</strong>
                                    <div class="text-warning">
                                        <i class="bi bi-star-fill"></i>
                                        <i class="bi bi-star-fill"></i>
                                        <i class="bi bi-star-fill"></i>
                                        <i class="bi bi-star-fill"></i>
                                        <i class="bi bi-star-half"></i>
                                        <span class="text-muted ms-2">4.{{ $item->id }}  ({{ $item->id + 265 }} reviews)</span>
                                    </div>
                                </div>
                            </div>

                            <div class="d-grid gap-2 d-md-flex justify-content-md-start">
                                <button class="btn btn-primary me-md-2" type="button">
                                    <i class="bi bi-cart-plus"></i> Tambahkan ke keranjang
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card-footer text-muted">
                    <small>Last updated: {{ $item->created_at }}</small>
                </div>
            </div>

            <div class="d-grid gap-2 d-md-flex mt-3 justify-content-md-end">
                <a class="btn btn-outline-secondary" href="{{ route('camp_gear.index') }}">
                    <i class="bi bi-arrow-left-circle"></i> Kembali ke daftar camp gear
                </a>
            </div>
        </div>
    </div>
</div>
</div>

@endsection
