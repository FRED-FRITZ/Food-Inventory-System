@extends('layouts.app')

@section('title', 'Create Suppliers')

@section('contents')
    <h1 class="mb-0">Add Suppliers</h1>
    <hr />
    <form action="{{ route('suppliers.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="row mb-3">
            <div class="col">
                <input type="text" name="name" class="form-control" placeholder="Name">
            </div>
            <div class="col">
                <input type="text" name="contact_person" class="form-control" placeholder="Contact Person">
            </div>
        <div class="col">
            <input type="text" name="phone" class="form-control" placeholder="Phone">
        </div>
    <div class="col">
        <input type="text" name="email" class="form-control" placeholder="Email">
    </div>
</div>

        <div class="row">
            <div class="d-grid">
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </div>
    </form>
@endsection
