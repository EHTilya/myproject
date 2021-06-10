@extends('master')
@section('content')
<div class="custom-product">

  <div>
    <a href="/project/myproject/public/category">skirt</a>
  </div>
    <div id="myCarousel" class="carousel slide" data-ride="carousel">
        <!-- Indicators -->
        <ol class="carousel-indicators">
          <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
          <li data-target="#myCarousel" data-slide-to="1"></li>
          <li data-target="#myCarousel" data-slide-to="2"></li>
        </ol>
      
        <!-- Wrapper for slides -->
        <div class="carousel-inner">
            @foreach ($products as $item)
            <div class="item {{$item['id']==1?'active':''}}">
                <a href="detail/{{$item['id']}}">
                <img  class="slider-img" src="{{asset($item['gallery'])}} " alt="Chania">
                </a>
                <div class="carousel-caption slider-text">
                  <h3>{{$item['name']}}</h3>
                  <p>{{$item['description']}}</p>
                </div>
              </div>
            @endforeach
        </div>
      
        <!-- Left and right controls -->
        <a class="left carousel-control" href="#myCarousel" data-slide="prev">
          <span class="glyphicon glyphicon-chevron-left"></span>
          <span class="sr-only">Previous</span>
        </a>
        <a class="right carousel-control" href="#myCarousel" data-slide="next">
          <span class="glyphicon glyphicon-chevron-right"></span>
          <span class="sr-only">Next</span>
        </a>
      </div>
</div>
<div class="trending-wrapper">
    <h3>Trending Design</h3>
    @foreach ($products as $item)
    <div class="trending-item">
        <a href="detail/{{$item['id']}}">
        <img  class="trending-image" src="{{$item['gallery']}}" alt="Chania">
        </a>
        <div class="">
          <h3>{{$item['name']}}</h3>
        </div>
      </div>
      
    @endforeach
</div>


<div class="trending-wrapper">
  <h3>T</h3>

  <div class="trending-item">
      <a href="">
      <img  class="trending-image" src="{{asset('images/shirt.jpg')}}" alt="Chania">
      </a>
      <div class="">
        <h3></h3>
      </div>
    </div>
    
    <div class="container">
      <h4>Man</h4>
      <img class="trending-image" src="{{asset('images/man.png')}}" data-toggle="collapse" data-target="#demo" alt="">
      <div id="demo" class="collapse">
              <li>
          <a href="">
          <img class="category-image"src="{{asset('images/long.png')}}" alt="">
        </a></li>
        <li>
          <a href="">
          <img class="category-image"src="{{asset('images/m_trouse.jpg')}}" alt="">
        </a></li>
        <li>
          <a href="">
          <img class="category-image"src="{{asset('images/short.jpg')}}" alt=""> short
        </a></li>


        <li>
          <a href="">
          <img class="category-image"src="{{asset('images/pant.jpg')}}" alt="">
        </a></li>
      </div>
    </div>
    
  
</div>
//list group
<div class="list-group">
  <a href="#" class="list-group-item">First item</a>
  <a href="#" class="list-group-item">Second item</a>
  <a href="#" class="list-group-item">Third item</a>
</div>
//modal
<div class="container">
  <h2>Modal Example</h2>
  <!-- Trigger the modal with a button -->
  <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal">Open Modal</button>
  <img class="trending-image" src="{{asset('images/woman.png')}}" data-toggle="modal" data-target="#myModal" alt="">

  <!-- Modal -->
  <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-body">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <a href="" class="">
            <img class="category-image"src="{{asset('images/skirt.png')}}" alt=""> skirt
          </a>
        </div>
        <div class="modal-body">
        <a href="" class="">
            <img class="category-image"src="{{asset('images/w_trouse.jpg')}}" alt=""> Trouser
        </a>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
      
    </div>
  </div>
  
</div>



@endsection
