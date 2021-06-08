@extends('master')
@section('content')
<div class="custom-product">
    <div class="col-sm-10">  
        <div class="trending-wrapper">
            <h1>My Orders</h1>
            @foreach ($order as $item)
            <div class=" row searched-item cart-list-devider">
                <div class="col-sm-3">
                        <img  class="trending-image" src="{{$item->gallery}}" alt="Chania">
                </div>
                <div class="col-sm-4">
                    <div class="">
                    <h2>Name: {{$item->name}}</h2>
                    <h5>Description: {{$item->description}}</h5>
                    <h5>Delivery Status: {{$item->order_status}}</h5>
                    <h5>Delivery address: {{$item->address}}</h5>
                    <h5>Order description: {{$item->order_description}}</h5>
                    <h5>Phone Number: {{$item->phone}}</h5>
                    <h5>Description: {{$item->description}}</h5>
                    <h5>Payment method: {{$item->payment_method}}</h5>
                    </div>
                </div>
            </div>
            @endforeach
        </div>

    </div>
</div>
@endsection