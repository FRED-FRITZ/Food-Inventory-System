@extends('layouts.app')

@section('title', 'Create Transaction')

@section('contents')
    <h1 class="mb-0">Add Transaction</h1>
    <hr />
    <form action="{{ route('transaction.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="row mb-3">
            <div class="col">
                <input type="text" name="transaction_type" class="form-control" placeholder="Transaction Type">
            </div>
            <div class="col">
                <input type="text" name="quantity" class="form-control" placeholder="Quantity">
            </div>
        <div class="col">
            <input type="text" name="transaction_date" class="form-control" placeholder="Transaction Date">
        </div>
</div>

        <div class="row">
            <div class="d-grid">
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </div>
    </form>
@endsection
