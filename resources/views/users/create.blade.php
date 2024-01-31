@extends('layouts.app')

@section('title', 'Create Users')

@section('contents')
    <h1 class="mb-0">Add Users</h1>
    <hr />
    <form action="{{ route('users.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="row mb-3">
            <div class="col">
                <input type="text" name="name" class="form-control" placeholder="Full Name">
            </div>
            <div class="col">
                <input type="text" name="email" class="form-control" placeholder="Email">
            </div>
        </div>
        <div class="row mb-3">
            <div class="col">
                <input type="text" name="role" class="form-control" placeholder="Role">
            </div>
            <div class="col">
                <textarea class="form-control" name="status" placeholder="Status"></textarea>
            </div>
            <div class="col">
                <textarea class="form-control" name="password" placeholder="Password"></textarea>
            </div>
        </div>

        <div class="row">
            <div class="d-grid">
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </div>
    </form>
@endsection
