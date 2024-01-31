@extends('layouts.app')

@section('title', 'Edit Category')

@section('contents')
    <h1 class="mb-0">Edit Category</h1>
    <hr />
    <form action="{{ route('category.update', $category->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="row">
            <div class="col mb-3">
                <label class="form-label">Item name</label>
                <input type="text" name="item_name" class="form-control" placeholder="Item Name" value="{{ $category->item_name }}" >
            </div>
            <div class="col mb-3">
                <label class="form-label">Quantity</label>
                <input type="text" name="quantity" class="form-control" placeholder="Quantity" value="{{ $category->quantity }}" >
            </div>
        <div class="col mb-3">
            <label class="form-label">Unit</label>
            <input type="text" name="unit" class="form-control" placeholder="Unit" value="{{ $category->unit }}" >
        </div>
        <div class="col mb-3">
            <label class="form-label">Expiry Date</label>
            <input type="text" name="expiry_date" class="form-control" placeholder="Expiry Date" value="{{ $category->expiry_date }}" >
        </div>
        <div class="col mb-3">
            <label class="form-label">Category</label>
            <input type="text" name="category" class="form-control" placeholder="Category" value="{{ $category->category }}" >
        </div>

        </div>
        <div class="row">
            <div class="d-grid">
                <button class="btn btn-warning">Update</button>
            </div>
        </div>
    </form>
@endsection
