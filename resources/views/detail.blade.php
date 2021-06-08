@extends('master')
@section('content')
<div class="container">
<div class="row">
    <div class="col-sm-6">
        <img class="detail-img" src={{$products['gallery']}} alt="">
    </div>
    <div class="col-sm-6">
        <a href="/project/myproject/public/home">Go Back</a>
        <h2>{{$products['name']}}</h2>
        <h3>Price:{{$products['price']}}</h3>
        <h4>Details:{{$products['description']}}</h4>
        <h4>Category:{{$products['category']}}</h4>
        <br><br>
        <form action="/project/myproject/public/addToCart" method="POST">
            @csrf
            <input type="hidden" name="product_id" value="{{$products['id']}}">
            <button class="btn btn-primary">Add To cart</button>

        </form>

        <br><br>
        <button class="btn btn-success">Buy Now</button>
    </div>
</div>
</div>
@endsection
