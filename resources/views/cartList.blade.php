@extends('master')
@section('content')
<div class="custom-product">
    <div class="col-sm-10">  
        <div class="trending-wrapper">
            <h3>Results for selected Design</h3>
            <div class="order-button">
                <a class="btn btn-success" href="/ordernow">Order Now</a>
            </div>
            @foreach ($products as $item)
            <div class=" row searched-item cart-list-devider">
                <div class="col-sm-3">
                        <img  class="trending-image" src="{{$item->gallery}}" alt="Chania">
                    

                </div>
                <div class="col-sm-5">
                    
                    <h2>{{$item->name}}</h2>
                    <h4>{{$item->description}}</h4>
                    <h5>Tsh  {{$item->price}}</h5>

                    
                </div>
                <div class="col-sm-3">
              <a href="/removecart/{{$item->cart_id}}" class="btn btn-warning">Remove to cart</a>      
                </div>
            </div>
            @endforeach
            <a class="btn btn-success" href="/orderNow">Order Now</a>

        </div>

    </div>
</div>
@endsection