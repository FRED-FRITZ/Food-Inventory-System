@extends('layouts.app')

@section('title', 'Show Users')

@section('contents')
    <h1 class="mb-0">Detail Users</h1>
    <hr />
    <div class="row">
        <div class="col mb-3">
            <label class="form-label">Full Name</label>
            <input type="text" name="full_name" class="form-control" placeholder="Full Name" value="{{ $users->full_name }}" readonly>
        </div>
        <div class="col mb-3">
            <label class="form-label">Email</label>
            <input type="text" name="email" class="form-control" placeholder="Email" value="{{ $users->email }}" readonly>
        </div>
    </div>
    <div class="row">
        <div class="col mb-3">
            <label class="form-label">Role</label>
            <input type="text" name="role" class="form-control" placeholder="Role" value="{{ $users->role }}" readonly>
        </div>
        <div class="col mb-3">
            <label class="form-label">Status</label>
            <textarea class="form-control" name="status" placeholder="Status" readonly>{{ $users->phone_number }}</textarea>
        </div>
    </div>
    <div class="row">
        <div class="col mb-3">
            <label class="form-label">Created At</label>
            <input type="text" name="created_at" class="form-control" placeholder="Created At" value="{{ $users->created_at }}" readonly>
        </div>
        <div class="col mb-3">
            <label class="form-label">Updated At</label>
            <input type="text" name="updated_at" class="form-control" placeholder="Updated At" value="{{ $users->updated_at }}" readonly>
        </div>
    </div>
    <a href="{{ route('users') }}" type="button" class="btn btn-danger">Back</a>
@endsection
