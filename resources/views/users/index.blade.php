@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-sm-12">
            @include('layouts.alert')

            <div class="card">
                <div class="card-header d-flex justify-content-between">
                    <div class="d-flex align-items-center">
                        {{ __('Users') }}
                    </div>
                </div>

                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">Name</th>
                                    <th scope="col">Email</th>
                                    <th scope="col">Status</th>
                                    <th scope="col">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse ($users as $key => $user)
                                @php
                                $status = $user->is_approved ? "Approved" : "Not Approved";
                                $label = $user->is_approved ? "bg-success" : "bg-danger"
                                @endphp
                                <tr>
                                    <th class="align-middle" scope="row">{{ $key+1 }}</th>
                                    <td class="align-middle">{{ $user->name }}</td>
                                    <td class="align-middle">{{ $user->email }}</td>
                                    <td class="align-middle"><span class="badge {{ $label }}">{{ $status }}</span></td>
                                    <td>
                                        <button type="button" class="btn btn-warning" data-bs-toggle="modal" data-bs-target="#approval{{$key}}">
                                            Approval
                                        </button>
                                        <a class="btn btn-info" href="{{ route("users.detail", $user->id) }}">Detail</a>
                                        <!-- Modal -->
                                        <div class="modal fade" id="approval{{$key}}" tabindex="-1" aria-labelledby="approval{{$key}}Label" aria-hidden="true">
                                            <div class="modal-dialog">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h5 class="modal-title" id="approval{{$key}}Label">Status Approval Confirmation</h5>
                                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                    </div>
                                                    <div class="modal-body">
                                                        Are you sure want to change status to <b>{{ $user->is_approved ? "Not Approved" : "Approved"}}</b> ?
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                                        <a href="{{ 'approval/'.$user->id }}" class="btn btn-primary">{{ $user->is_approved ? "Change to Not Approved" : "Change to Approved"}}</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                                @empty
                                <tr>
                                    <td colspan="5" class="text-center">There's no data</td>
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

