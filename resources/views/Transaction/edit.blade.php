@extends('layouts.app')

@section('title', 'Edit Transaction')

@section('contents')
    <h1 class="mb-0">Edit Transaction</h1>
    <hr />
    <form action="{{ route('transaction.update', $transaction->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="row">
            <div class="col mb-3">
                <label class="form-label">Transaction Type</label>
                <input type="text" name="transaction_type" class="form-control" placeholder="Transaction Type" value="{{ $transaction->transaction_type }}" >
            </div>
            <div class="col mb-3">
                <label class="form-label">Quantity</label>
                <input type="text" name="quantity" class="form-control" placeholder="Quantity" value="{{ $transaction->quantity }}" >
            </div>
        <div class="col mb-3">
            <label class="form-label">Transaction Date</label>
            <input type="text" name="transaction_date" class="form-control" placeholder="Transaction Date" value="{{ $transaction->transaction_date }}" >
        </div>
        </div>
        <div class="row">
            <div class="d-grid">
                <button class="btn btn-warning">Update</button>
            </div>
        </div>
    </form>
@endsection
