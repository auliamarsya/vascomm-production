@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-sm-6">
            @include('layouts.alert')

            <div class="card">
                <div class="card-header d-flex justify-content-between">
                    <div class="d-flex align-items-center">
                        <a href="{{ route('users.index') }}" class="text-decoration-none">Back</a>
                    </div>
                </div>

                <div class="card-body">
                    <div class="row">
                        <div class="col-sm-12">
                            <img style="height: 50vh; width: auto;" src="{{ asset($user->image) }}" onerror="this.onerror=null;this.src='https://via.placeholder.com/50';" class="img-thumbnail rounded" alt="{{ $user->name }}">
                        </div>
                        <div class="col-sm-12 pt-4">
                            <h3><b>{{ $user->name}}</b></h3>
                            <h4>{{ $user->email}}</h4>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

