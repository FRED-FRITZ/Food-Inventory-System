@extends('layouts.app')

@section('title', 'Edit Items')

@section('contents')
    <h1 class="mb-0">Edit Items</h1>
    <hr />
    <form action="{{ route('items.update', $items->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="row">
            <div class="col mb-3">
                <label class="form-label">Name</label>
                <input type="text" name="name" class="form-control" placeholder="Name" value="{{ $items->name }}" >
            </div>
            <div class="col mb-3">
                <label class="form-label">Current Stock</label>
                <input type="text" name="current_stock" class="form-control" placeholder="Current Stock" value="{{ $items->current_stock }}" >
            </div>
        <div class="col mb-3">
            <label class="form-label">Reorder Level</label>
            <input type="text" name="reorder_level" class="form-control" placeholder="Reorder Level" value="{{ $items->reorder_level }}" >
        </div>
    <div class="col mb-3">
        <label class="form-label">Description</label>
        <input type="text" name="description" class="form-control" placeholder="Description" value="{{ $items->description }}" >
    </div>
        </div>
        <div class="row">
            <div class="d-grid">
                <button class="btn btn-warning">Update</button>
            </div>
        </div>
    </form>
@endsection
