@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <a href="{{ route('products.list') }}" class="btn btn-link p-0 mb-3">
                <i class="bi bi-arrow-left-short fs-5"></i> 
                <span class="fs-5"> back</span>
            </a>
            <div class="card">
                <div class="card-header">
                    {{ __('Create Product') }}
                </div>

                <div class="card-body">
                    <form action="{{ route('products.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="mb-3">
                          <label for="name" class="form-label">Name <span class="text-danger">*</span></label>
                          <input type="text" class="form-control" id="name" name="name" value="{{ old('name')}}" placeholder="Input name..." required>
                          @error('name')
                          <span class="small text-danger">{{ $message }}</span>
                          @enderror
                        </div>
                        <div class="mb-3">
                          <label for="image" class="form-label">Image Products <span class="text-danger">*</span></label>
                          <input type="file" class="form-control" id="image" name="image" value="{{ old('image')}}" accept="image/png, image/jpg, image/jpeg" required>
                          @error('image')
                          <span class="small text-danger">{{ $message }}</span>
                          @enderror
                        </div>
                        <div class="mb-3">
                          <label for="price" class="form-label">Price<span class="text-danger">*</span></label>
                          <input type="number" class="form-control" id="price" name="price" placeholder="Input price..." value="{{ old('price')}}" required>
                          @error('price')
                          <span class="small text-danger">{{ $message }}</span>
                          @enderror
                        </div>
                        <div class="mb-3">
                          <label for="qty" class="form-label">Stock<span class="text-danger">*</span></label>
                          <input type="number" class="form-control" id="qty" name="qty" placeholder="Input stock..." value="{{ old('qty')}}" required>
                          @error('qty')
                          <span class="small text-danger">{{ $message }}</span>
                          @enderror
                        </div>
                        <div class="mb-3">
                          <label for="description" class="form-label">Desription</label>
                          <textarea class="form-control" id="description" name="description" placeholder="Input description..." cols="30" rows="10">{{ old('description')}}</textarea>
                          @error('description')
                          <span class="small text-danger">{{ $message }}</span>
                          @enderror
                        </div>
                        <button type="submit" class="btn btn-primary text-right">Submit</button>
                      </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
