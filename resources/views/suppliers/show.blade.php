@extends('layouts.app')

@section('title', 'Show Suppliers')

@section('contents')
    <h1 class="mb-0">Detail Suppliers</h1>
    <hr />
    <div class="row">
        <div class="col mb-3">
            <label class="form-label">Name</label>
            <input type="text" name="name" class="form-control" placeholder="Name" value="{{ $suppliers->name }}" readonly>
        </div>
        <div class="col mb-3">
            <label class="form-label">Contact_person</label>
            <input type="text" name="contact_person" class="form-control" placeholder="Contact Person" value="{{ $suppliers->contact_person }}" readonly>
        </div>
    <div class="col mb-3">
        <label class="form-label">Phone</label>
        <input type="text" name="phone" class="form-control" placeholder="Phone" value="{{ $suppliers->phone }}" readonly>
    </div>
<div class="col mb-3">
    <label class="form-label">Email</label>
    <input type="text" name="email" class="form-control" placeholder="Email" value="{{ $suppliers->email }}" readonly>
</div>
    <div class="row">
        <div class="col mb-3">
            <label class="form-label">Created At</label>
            <input type="text" name="created_at" class="form-control" placeholder="Created At" value="{{ $suppliers->created_at }}" readonly>
        </div>
        <div class="col mb-3">
            <label class="form-label">Updated At</label>
            <input type="text" name="updated_at" class="form-control" placeholder="Updated At" value="{{ $suppliers->updated_at }}" readonly>
        </div>
    </div>
@endsection
