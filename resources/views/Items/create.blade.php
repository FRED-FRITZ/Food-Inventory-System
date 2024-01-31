@extends('layouts.app')

@section('title', 'Create Items')

@section('contents')
    <h1 class="mb-0">Add Items</h1>
    <hr />
    <form action="{{ route('items.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="row mb-3">
            <div class="col">
                <input type="text" name="name" class="form-control" placeholder="Name">
            </div>
            <div class="col">
                <input type="text" name="current_stock" class="form-control" placeholder="Current Stock">
            </div>
        <div class="col">
            <input type="text" name="reorder_level" class="form-control" placeholder="Reorder Level">
        </div>
    <div class="col">
        <input type="text" name="description" class="form-control" placeholder="Description">
    </div>
</div>

        <div class="row">
            <div class="d-grid">
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </div>
    </form>
@endsection
