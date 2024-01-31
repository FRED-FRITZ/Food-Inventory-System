@extends('layouts.app')

@section('title', 'Show Transaction')

@section('contents')
    <h1 class="mb-0">Detail Transaction</h1>
    <hr />
    <div class="row">
        <div class="col mb-3">
            <label class="form-label">Transaction Type</label>
            <input type="text" name="transaction_type" class="form-control" placeholder="Transaction Type" value="{{ $transaction->transaction_type }}" readonly>
        </div>
        <div class="col mb-3">
            <label class="form-label">Quantity</label>
            <input type="text" name="quantity" class="form-control" placeholder="Quantity" value="{{ $transaction->quantity }}" readonly>
        </div>
    <div class="col mb-3">
        <label class="form-label">Transaction Date</label>
        <input type="text" name="transaction_date" class="form-control" placeholder="Transaction Date" value="{{ $transaction->transaction_date }}" readonly>
    </div>
    <div class="row">
        <div class="col mb-3">
            <label class="form-label">Created At</label>
            <input type="text" name="created_at" class="form-control" placeholder="Created At" value="{{ $transaction->created_at }}" readonly>
        </div>
        <div class="col mb-3">
            <label class="form-label">Updated At</label>
            <input type="text" name="updated_at" class="form-control" placeholder="Updated At" value="{{ $transaction->updated_at }}" readonly>
        </div>
    </div>
@endsection
