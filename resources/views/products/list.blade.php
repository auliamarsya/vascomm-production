@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-sm-12">
            @include('layouts.alert')

            <div class="card">
                <div class="card-header d-flex justify-content-between">
                    <div class="d-flex align-items-center">
                        {{ __('Products') }}
                    </div>
                    <div>
                        <a href="{{ route('products.create') }}" class="btn btn-primary">Create Product</a>
                    </div>
                </div>

                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">Image</th>
                                    <th scope="col">Name</th>
                                    <th scope="col">Price</th>
                                    <th scope="col">Stock</th>
                                    <th scope="col">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse ($products as $key => $product)
                                <tr>
                                    <th data-bs-toggle="modal" data-bs-target="#detail{{$key}}" class="align-middle" style="cursor: pointer" scope="row">{{ $key+1 }}</th>
                                    <td data-bs-toggle="modal" data-bs-target="#detail{{$key}}" class="align-middle" style="cursor: pointer"><img height="50" onerror="this.onerror=null;this.src='https://via.placeholder.com/50';" src="{{ asset($product->image) ?? $product->image }}" alt="{{ $product->name }}"></td>
                                    <td data-bs-toggle="modal" data-bs-target="#detail{{$key}}" class="align-middle" style="cursor: pointer">{{ $product->name }}</td>
                                    <td data-bs-toggle="modal" data-bs-target="#detail{{$key}}" class="align-middle" style="cursor: pointer">@currency($product->price)</td>
                                    <td data-bs-toggle="modal" data-bs-target="#detail{{$key}}" class="align-middle" style="cursor: pointer">{{ $product->qty }}</td>
                                    <td>
                                        <a href="{{ 'edit/'.$product->id }}" class="btn btn-warning">Edit</a>
                                        <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#delete{{$key}}">
                                            Delete
                                        </button>
                                        <!-- Modal -->
                                        <div class="modal fade" id="delete{{$key}}" tabindex="-1" aria-labelledby="delete{{$key}}Label" aria-hidden="true">
                                            <div class="modal-dialog">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h5 class="modal-title" id="delete{{$key}}Label">Delete Confirmation</h5>
                                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                    </div>
                                                    <div class="modal-body">
                                                        Are you sure want to delete this product?
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                                        <a href="{{ 'destroy/'.$product->id }}" class="btn btn-primary">Delete Product</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </td>

                                    <!-- Modal -->
                                    <div class="modal fade" id="detail{{$key}}" tabindex="-1" aria-labelledby="detail{{$key}}Label" aria-hidden="true">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="detail{{$key}}Label">Description Product</h5>
                                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                </div>
                                                <div class="modal-body">
                                                    {!! $product->description ?? "-" !!}
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </tr>
                                @empty
                                <tr>
                                    <td colspan="6" class="text-center">There's no data</td>
                                </tr>
                                @endforelse
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

