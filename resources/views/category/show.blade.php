@extends('layouts.app')

@section('title', 'Show Category')

@section('contents')
    <h1 class="mb-0">Detail Category</h1>
    <hr />
    <div class="row">
        <div class="col mb-3">
            <label class="form-label">Item Name</label>
            <input type="text" name="item_name" class="form-control" placeholder="Item Name" value="{{ $category->item_name }}" readonly>
        </div>
        <div class="col mb-3">
            <label class="form-label">Quantity</label>
            <input type="text" name="quantity" class="form-control" placeholder="Quantity" value="{{ $category->quantity }}" readonly>
        </div>
    <div class="col mb-3">
        <label class="form-label">Unit</label>
        <input type="text" name="unit" class="form-control" placeholder="Unit" value="{{ $category->unit }}" readonly>
    </div>
    <label class="form-label">Expiry Date</label>
    <input type="text" name="expiry_date" class="form-control" placeholder="Expiry Date" value="{{ $category->expiry_date }}" readonly>
</div>
<label class="form-label">Category</label>
<input type="text" name="category" class="form-control" placeholder="Category" value="{{ $category->category }}" readonly>
</div>
    <div class="row">
        <div class="col mb-3">
            <label class="form-label">Created At</label>
            <input type="text" name="created_at" class="form-control" placeholder="Created At" value="{{ $category->created_at }}" readonly>
        </div>
        <div class="col mb-3">
            <label class="form-label">Updated At</label>
            <input type="text" name="updated_at" class="form-control" placeholder="Updated At" value="{{ $category->updated_at }}" readonly>
        </div>
    </div>
@endsection
