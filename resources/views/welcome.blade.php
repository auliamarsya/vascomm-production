@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-sm-12">
            <div class="row">
                <div class="col-sm-12">
                    <div id="carouselProductIndicators" class="carousel slide" data-bs-ride="carousel" data-interval="true">
                        <div class="carousel-indicators">
                            <button type="button" data-bs-target="#carouselProductIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                            <button type="button" data-bs-target="#carouselProductIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
                            <button type="button" data-bs-target="#carouselProductIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
                        </div>
                        <div class="carousel-inner" style="height: 500px !important;">
                            @foreach ($banners as $key => $banner)
                            <div class="carousel-item {{ $key == 0 ? 'active' : ''}}">
                                <img src="{{ $banner->image }}" class="d-block w-100 img-responsive">
                            </div>
                            @endforeach
                        </div>
                        <button class="carousel-control-prev" type="button" data-bs-target="#carouselProductIndicators" data-bs-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Previous</span>
                        </button>
                        <button class="carousel-control-next" type="button" data-bs-target="#carouselProductIndicators" data-bs-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Next</span>
                        </button>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-sm-12 pt-5 pb-2">
            <h2><b>ALL PRODUCTS</b></h2>
        </div>

        <div class="col-sm-12 row">
            @forelse ($products as $product)
            <div class="col-sm-3 pb-3">
                <a href="{{ route('products.detail', $product->id) }}" class="text-decoration-none text-dark">
                    <div class="card card-product h-100">
                        <img src="{{ $product->image }}" onerror="this.onerror=null;this.src='https://via.placeholder.com/50';" class="card-img-top img-responsive" alt="{{ $product->name }}">
                        <div class="card-body">
                            <p class="card-text-title crop-text-2">{{ $product->name }}</p>
                            <p class="card-text-price fs-5 text-primary">@currency($product->price)</p>
                        </div>
                    </div>
                </a>                
            </div>
            @empty
            <div class="col-sm-12">There's no product yet</div>
            @endforelse
        </div>
    </div>
</div>
@endsection

