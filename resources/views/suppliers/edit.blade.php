@extends('layouts.app')

@section('title', 'Edit Suppliers')

@section('contents')
    <h1 class="mb-0">Edit Suppliers</h1>
    <hr />
    <form action="{{ route('suppliers.update', $suppliers->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="row">
            <div class="col mb-3">
                <label class="form-label">Name</label>
                <input type="text" name="name" class="form-control" placeholder="Name" value="{{ $suppliers->name }}" >
            </div>
            <div class="col mb-3">
                <label class="form-label">Contact_person</label>
                <input type="text" name="contact_person" class="form-control" placeholder="contact Person" value="{{ $suppliers->contact_person }}" >
            </div>
        <div class="col mb-3">
            <label class="form-label">Phone</label>
            <input type="text" name="phone" class="form-control" placeholder="Phone" value="{{ $suppliers->phone }}" >
        </div>
    <div class="col mb-3">
        <label class="form-label">Email</label>
        <input type="text" name="email" class="form-control" placeholder="Email" value="{{ $suppliers->email }}" >
    </div>
        </div>
        <div class="row">
            <div class="d-grid">
                <button class="btn btn-warning">Update</button>
            </div>
        </div>
    </form>
@endsection
