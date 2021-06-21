@extends('master')
@section('content')
<div class="custom-product">
  
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

<div class="trending-wrapper left">
        <!-- Trigger the modal with a button -->
        <button type="button" class="btn btn-info btn-lg " data-toggle="modal" data-target="#myModal1">Open Men Designs</button>
      
        <!-- Modal -->
        <div class="modal fade" id="myModal1" role="dialog">
          <div class="modal-dialog modal-sm">
          
            <!-- Modal content-->
            <div class="modal-content">
              <div class="modal-body">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <a href="/l_shirt" class="">
                  <img class="category-image"src="{{asset('images/long.png')}}" alt="">
                </a>
                <b>Shati la mikono mirefu</b>
              </div>
              <div class="modal-body">
              <a href="/m_trouse" class="">
                  <img class="category-image"src="{{asset('images/m_trouse.jpg')}}" alt="">
              </a>
              <b>Suruali</b>
              </div>
              <div class="modal-body">
                <a href="s_shirt" class="">
                    <img class="category-image"src="{{asset('images/short.jpg')}}" alt="">
                </a>
                <b>Shati la mikono mifupi</b>
                </div>
                <div class="modal-body">
                  <a href="/short" class="">
                      <img class="category-image"src="{{asset('images/pant.jpg')}}" alt=""> 
                  </a>
                  <b>kaptula</b>
                  </div>
      
              <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
              </div>
            </div>
            
          </div>
        </div>

      
</div>
<div class="trending-wrapper right">
  <!-- Trigger the modal with a button -->
  <button type="button" class="btn btn-info btn-lg " data-toggle="modal" data-target="#myModal">Open Women Designs</button>

  <!-- Modal -->
  <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog modal-sm">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-body">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <a href="/skirt" class="">
            <img class="category-image"src="{{asset('images/skirt.png')}}" alt="">
          </a>
          <b>Sketi</b>
        </div>
        <div class="modal-body">
        <a href="/w_trouse" class="">
            <img class="category-image"src="{{asset('images/w_trouse.jpg')}}" alt="">
        </a>
        <b>Suruali</b>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
      
    </div>
  </div>
  




@endsection
