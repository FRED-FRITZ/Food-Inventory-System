@extends('layouts.app')

@section('title', 'Create Category')

@section('contents')
    <h1 class="mb-0">Add Category</h1>
    <hr />
    <form action="{{ route('category.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="row mb-3">
            <div class="col">
                <input type="text" name="item_name" class="form-control" placeholder="Item Name">
            </div>
            <div class="col">
                <input type="text" name="quantity" class="form-control" placeholder="Quantity">
            </div>
            <div class="col">
                <input type="text" name="unit" class="form-control" placeholder="Unit">
            </div>
            <div class="col">
                <input type="text" name="expiry_date" class="form-control" placeholder="Expiry Date">
            </div>
            <div class="col">
                <input type="text" name="category" class="form-control" placeholder="Category">
            </div>

        <div class="row">
            <div class="d-grid">
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </div>
    </form>
@endsection
