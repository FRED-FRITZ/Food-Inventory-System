@extends('layouts.app')

@section('title', 'Profile')

@section('contents')
    <h1 class="mb-0">Orders</h1>
    <hr />

    <form method="POST" enctype="multipart/form-data" id="profile_setup_frm" action="" >
    <div class="row">
        <div class="col-md-12 border-right">
            <div class="p-3 py-5">
                <div class="d-flex justify-content-between align-items-center mb-3">
                    <h4 class="text-right">Food Ordering System</h4>
                </div>
                <div class="row" id="res"></div>
                <div class="row mt-2">

                    <div class="col-md-6">
                        <label class="labels">Food Name</label>
                        <input type="text" name="food_name" class="form-control" placeholder="food name" value="{{ auth()->user()->food_name }}">
                    </div>
                    <div class="col-md-6">
                        <label class="labels">Description</label>
                        <input type="text" name="description" disabled class="form-control" value="{{ auth()->user()->description }}" placeholder="Description">
                    </div>
                </div>
                <div class="row mt-2">
                    <div class="col-md-6">
                        <label class="labels">Price</label>
                        <input type="text" name="price" class="form-control" placeholder="Price" value="{{ auth()->user()->price }}">
                    </div>
                    <div class="col-md-6">
                        <label class="labels">Quantity</label>
                        <input type="text" name="quantity" class="form-control" value="{{ auth()->user()->quantity }}" placeholder="Quantity">
                    </div>
                    <label class="labels">Shipping_address</label>
                        <input type="text" name="shipping_address" class="form-control" value="{{ auth()->user()->shipping_address }}" placeholder="Shipping_address">
                    </div>
                </div>

                <div class="mt-5 text-center"><button id="btn" class="btn btn-primary profile-button" type="submit">Save Profile</button></div>
            </div>
        </div>

    </div>

        </form>
@endsection
