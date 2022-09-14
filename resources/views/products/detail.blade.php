@extends('layouts.app')

@section('content')
<div class="container">
    <a href="{{ route('home') }}" class="btn btn-link p-0 mb-3 text-decoration-none">
        <span class="fs-5"> back</span>
    </a>

    <div class="card">
        <div class="card-body">
            <div class="row">
                <div class="col-sm-4">
                    <img src="{{ asset($product->image) ?? $product->image }}" onerror="this.onerror=null;this.src='https://via.placeholder.com/50';" alt="{{ $product->name }}" class="img-fluid">
                    <div>Stock: {{ $product->qty }}</div>
                </div>
                <div class="col-sm-8">
                    <div class="fw-bold fs-4 mb-2">{{ $product->name }}</div>
                    <div class="bg-light p-3 fs-3 text-primary">@currency($product->price)</div>
                    <div class="mt-5">
                        <div class="fs-5 mb-2">Product Description</div>
                        <div>{!! $product->description !!}</div>
                    </div>
                    
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
