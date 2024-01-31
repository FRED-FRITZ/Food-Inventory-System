@extends('layouts.app')

@section('title', 'Show Items')

@section('contents')
    <h1 class="mb-0">Detail Items</h1>
    <hr />
    <div class="row">
        <div class="col mb-3">
            <label class="form-label">Name</label>
            <input type="text" name="name" class="form-control" placeholder="Name" value="{{ $items->name }}" readonly>
        </div>
        <div class="col mb-3">
            <label class="form-label">Current Stock</label>
            <input type="text" name="current_stock" class="form-control" placeholder="Current_stock" value="{{ $items->current_stock }}" readonly>
        </div>
    <div class="col mb-3">
        <label class="form-label">Reorder Level</label>
        <input type="text" name="phone" class="form-control" placeholder="Reorder_level" value="{{ $items->reorder_level }}" readonly>
    </div>
<div class="col mb-3">
    <label class="form-label">Description</label>
    <input type="text" name="description" class="form-control" placeholder="Description" value="{{ $items->description }}" readonly>
</div>
    <div class="row">
        <div class="col mb-3">
            <label class="form-label">Created At</label>
            <input type="text" name="created_at" class="form-control" placeholder="Created At" value="{{ $items->created_at }}" readonly>
        </div>
        <div class="col mb-3">
            <label class="form-label">Updated At</label>
            <input type="text" name="updated_at" class="form-control" placeholder="Updated At" value="{{ $items->updated_at }}" readonly>
        </div>
    </div>
@endsection
