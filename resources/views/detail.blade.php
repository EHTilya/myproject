
@extends('master')
@section('content')
<div class="container">
<div class="row">
    <div class="col-sm-6">
        <img class="detail-img" src={{$data['gallery']}} alt="">
    </div>
    <div class="col-sm-6">
        <a href="/project/myproject/public/home">Go Back</a>
        <h2>{{$data['name']}}</h2>
        <h3>Price:{{$data['price']}}</h3>
        <h4>Details:{{$data['description']}}</h4>
        <h4>Category:{{$data['category_id']}}</h4>
        <br><br>
<div class="custom-product">

    <div class="container">
        <!-- Trigger the modal with a button -->
        
          <button type="button"  class="btn btn-info btn-lg " data-toggle="modal" data-target="#myModal">Weka Vipimo</button>
        
      
        <!-- Modal -->
        <div class="modal fade" id="myModal" role="dialog">
          <div class="modal-dialog modal-sm">
            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-body">
                  @if ($cat == 1)
                  <h2>No 1</h2>
                  <form action="/project/myproject/public/addToCart" method="POST" role="form">
                    @csrf
                    <center>
                      <label for="psw"><span></span>Vipimo katika cm </label>
                    </center>
                    <div class="form-group">
                      <input type="hidden" name="product_id" value="{{$data['id']}}">
                    </div>
                      <div class="form-group">
                      <input type="hidden" name="tumbo_kiuno" class="form-control" id="usrname" value="0">
                    </div>
                    <div class="form-group">
                      <input type="hidden" name="hipsi" value="0"  class="form-control" id="psw" >
                    </div>
                    <div class="form-group">
                      <input type="hidden" value="0" name="paja" class="form-control" id="psw" placeholder="kipimo cha Paja">
                    </div>
                    <div class="form-group">
                      <input input type="hidden" value="0" name="goti" class="form-control" id="psw">
                    </div>
                    <div class="form-group">
                      <input input type="hidden" value="0" name="upana_chini" class="form-control" id="psw">
                    </div>
                    <div class="form-group">
                      <input input type="hidden" value="0" name="fly" class="form-control" id="psw">
                    </div>
                    <div class="checkbox">
                      <label><input type="checkbox" value="" checked>Remember me</label>
                    </div>
                    <button type="submit" class="btn btn-default btn-success btn-block"><span ></span> Add to Cart</button>
                  </form>
               
                  @elseif ($cat == 2)
                  
                  <form action="/project/myproject/public/addToCart" method="POST" role="form">
                    @csrf
                    <center>
                      <label for="psw"><span></span>Vipimo katika cm </label>
                    </center>
                    <div class="form-group">
                      <input type="hidden" name="product_id" value="{{$data['id']}}">
                    </div>
                      <div class="form-group">
                      <input type="hidden" name="tumbo_kiuno" class="form-control" id="usrname" value="0">
                    </div>
                    <div class="form-group">
                      <input type="hidden" name="hipsi" value="0"  class="form-control" id="psw" >
                    </div>
                    <div class="form-group">
                      <input type="hidden" value="0" name="paja" class="form-control" id="psw" placeholder="kipimo cha Paja">
                    </div>
                    <div class="form-group">
                      <input input type="hidden" value="0" name="goti" class="form-control" id="psw">
                    </div>
                    <div class="form-group">
                      <input input type="hidden" value="0" name="upana_chini" class="form-control" id="psw">
                    </div>
                    <div class="form-group">
                      <input input type="hidden" value="0" name="fly" class="form-control" id="psw">
                    </div>
                    <div class="checkbox">
                      <label><input type="checkbox" value="" checked>Remember me</label>
                    </div>
                    <button type="submit" class="btn btn-default btn-success btn-block"><span ></span> Add to Cart</button>
                  </form>
               
                  @elseif ($cat == 3)


                  <form action="/project/myproject/public/addToCart" method="POST" role="form">
                    @csrf
                    <h2>no 3</h2>
                    <center>
                      <label for="psw"><span></span>Vipimo katika cm </label>
                    </center>
                    <div class="form-group">
                      <input type="hidden" name="product_id" value="{{$data['id']}}">
                    </div>
                      <div class="form-group">
                      <label for="usrname"><span ></span>Tumbo/kiuno</label>
                      <input type="text" name="tumbo_kiuno" class="form-control" id="usrname" placeholder="kipimo cha Tumbo/kiuno">
                    </div>
                    <div class="form-group">
                      <label for="psw"><span></span>Hipsi </label>
                      <input type="text" name="hipsi" class="form-control" id="psw" placeholder="kipimo cha Hipsi">
                    </div>
                    <div class="form-group">
                      <label for="psw"><span></span>Paja</label>
                      <input type="text" name="paja" class="form-control" id="psw" placeholder="kipimo cha Paja">
                    </div>
                    <div class="form-group">
                      <label for="psw"><span></span>Goti </label>
                      <input type="text" name="goti" class="form-control" id="psw" placeholder="kipimo cha Goti">
                    </div>
                    <div class="form-group">
                      <label for="psw"><span></span>Upana wa Chini </label>
                      <input type="text" name="upana_chini" class="form-control" id="psw" placeholder="kipimo cha Upana wa Chini">
                    </div>
                    <div class="form-group">
                      <label for="psw"><span></span>Fly</label>
                      <input type="text" name="fly" class="form-control" id="psw" placeholder="kipimo cha Fly">
                    </div>
                    <div class="checkbox">
                      <label><input type="checkbox" value="" checked>Remember me</label>
                    </div>
                    <button type="submit" class="btn btn-default btn-success btn-block"><span ></span> Add to Cart</button>
                  </form>
                @elseif ($cat == 4)
                  
                <form action="/project/myproject/public/addToCart" method="POST" role="form">
                  @csrf
                  <h2>no 4</h2>
                  <center>
                    <label for="psw"><span></span>Vipimo katika cm </label>
                  </center>
                  <div class="form-group">
                    <input type="hidden" name="product_id" value="{{$data['id']}}">
                  </div>
                    <div class="form-group">
                    <label for="usrname"><span ></span>Tumbo/kiuno</label>
                    <input type="text" name="tumbo_kiuno" class="form-control" id="usrname" placeholder="kipimo cha Tumbo/kiuno">
                  </div>
                  <div class="form-group">
                    <label for="psw"><span></span>Hipsi </label>
                    <input type="text" name="hipsi" class="form-control" id="psw" placeholder="kipimo cha Hipsi">
                  </div>
                  <div class="form-group">
                    <label for="psw"><span></span>Paja</label>
                    <input type="text" name="paja" class="form-control" id="psw" placeholder="kipimo cha Paja">
                  </div>
                  <div class="form-group">
                    <label for="psw"><span></span>Goti </label>
                    <input type="text" name="goti" class="form-control" id="psw" placeholder="kipimo cha Goti">
                  </div>
                  <div class="form-group">
                    <label for="psw"><span></span>Upana wa Chini </label>
                    <input type="text" name="upana_chini" class="form-control" id="psw" placeholder="kipimo cha Upana wa Chini">
                  </div>
                  <div class="form-group">
                    <label for="psw"><span></span>Fly</label>
                    <input type="text" name="fly" class="form-control" id="psw" placeholder="kipimo cha Fly">
                  </div>
                  <div class="checkbox">
                    <label><input type="checkbox" value="" checked>Remember me</label>
                  </div>
                  <button type="submit" class="btn btn-default btn-success btn-block"><span ></span> Add to Cart</button>
                </form>
                  @elseif ($cat == 5)
                  
                  <form action="/project/myproject/public/addToCart" method="POST" role="form">
                    @csrf
                    <h2>no 5</h2>
                    <center>
                      <label for="psw"><span></span>Vipimo katika cm </label>
                    </center>
                    <div class="form-group">
                      <input type="hidden" name="product_id" value="{{$data['id']}}">
                    </div>
                      <div class="form-group">
                      <label for="usrname"><span ></span>Tumbo/kiuno</label>
                      <input type="text" name="tumbo_kiuno" class="form-control" id="usrname" placeholder="kipimo cha Tumbo/kiuno">
                    </div>
                    <div class="form-group">
                      <label for="psw"><span></span>Hipsi </label>
                      <input type="text" name="hipsi" class="form-control" id="psw" placeholder="kipimo cha Hipsi">
                    </div>
                    <div class="form-group">
                      <label for="psw"><span></span>Paja</label>
                      <input type="text" name="paja" class="form-control" id="psw" placeholder="kipimo cha Paja">
                    </div>
                    <div class="form-group">
                      <label for="psw"><span></span>Goti </label>
                      <input type="text" name="goti" class="form-control" id="psw" placeholder="kipimo cha Goti">
                    </div>
                    <div class="form-group">
                      <label for="psw"><span></span>Upana wa Chini </label>
                      <input type="text" name="upana_chini" class="form-control" id="psw" placeholder="kipimo cha Upana wa Chini">
                    </div>
                    <div class="form-group">
                      <label for="psw"><span></span>Fly</label>
                      <input type="text" name="fly" class="form-control" id="psw" placeholder="kipimo cha Fly">
                    </div>
                    <div class="checkbox">
                      <label><input type="checkbox" value="" checked>Remember me</label>
                    </div>
                    <button type="submit" class="btn btn-default btn-success btn-block"><span ></span> Add to Cart</button>
                  </form>
                  @elseif ($cat == 6)          
                  <form action="/project/myproject/public/addToCart" method="POST" role="form">
                    @csrf
                    <h2>no 6</h2>
                    <center>
                      <label for="psw"><span></span>Vipimo katika cm </label>
                    </center>
                    <div class="form-group">
                      <input type="hidden" name="product_id" value="{{$data['id']}}">
                    </div>
                      <div class="form-group">
                      <label for="usrname"><span ></span>Tumbo/kiuno</label>
                      <input type="text" name="tumbo_kiuno" class="form-control" id="usrname" placeholder="kipimo cha Tumbo/kiuno">
                    </div>
                    <div class="form-group">
                      <label for="psw"><span></span>Hipsi </label>
                      <input type="text" name="hipsi" class="form-control" id="psw" placeholder="kipimo cha Hipsi">
                    </div>
                    <div class="form-group">
                      <label for="psw"><span></span>Paja</label>
                      <input type="text" name="paja" class="form-control" id="psw" placeholder="kipimo cha Paja">
                    </div>
                    <div class="form-group">
                      <label for="psw"><span></span>Goti </label>
                      <input type="text" name="goti" class="form-control" id="psw" placeholder="kipimo cha Goti">
                    </div>
                    <div class="form-group">
                      <label for="psw"><span></span>Upana wa Chini </label>
                      <input type="text" name="upana_chini" class="form-control" id="psw" placeholder="kipimo cha Upana wa Chini">
                    </div>
                    <div class="form-group">
                      <label for="psw"><span></span>Fly</label>
                      <input type="text" name="fly" class="form-control" id="psw" placeholder="kipimo cha Fly">
                    </div>
                    <div class="checkbox">
                      <label><input type="checkbox" value="" checked>Remember me</label>
                    </div>
                    <button type="submit" class="btn btn-default btn-success btn-block"><span ></span> Add to Cart</button>
                  </form>
               
                  @else
                  <p>your other</p>
                  
                  <form action="/project/myproject/public/addToCart" method="POST" role="form">
                    @csrf
                    <center>
                      <label for="psw"><span></span>Vipimo katika cm </label>
                    </center>
                    <div class="form-group">
                      <input type="hidden" name="product_id" value="{{$data['id']}}">
                    </div>
                      <div class="form-group">
                      <label for="usrname"><span ></span>Tumbo/kiuno</label>
                      <input type="text" name="tumbo_kiuno" class="form-control" id="usrname" placeholder="kipimo cha Tumbo/kiuno">
                    </div>
                    <div class="form-group">
                      <label for="psw"><span></span>Hipsi </label>
                      <input type="text" name="hipsi" class="form-control" id="psw" placeholder="kipimo cha Hipsi">
                    </div>
                    <div class="form-group">
                      <label for="psw"><span></span>Paja</label>
                      <input type="text" name="paja" class="form-control" id="psw" placeholder="kipimo cha Paja">
                    </div>
                    <div class="form-group">
                      <label for="psw"><span></span>Goti </label>
                      <input type="text" name="goti" class="form-control" id="psw" placeholder="kipimo cha Goti">
                    </div>
                    <div class="form-group">
                      <label for="psw"><span></span>Upana wa Chini </label>
                      <input type="text" name="upana_chini" class="form-control" id="psw" placeholder="kipimo cha Upana wa Chini">
                    </div>
                    <div class="form-group">
                      <label for="psw"><span></span>Fly</label>
                      <input type="text" name="fly" class="form-control" id="psw" placeholder="kipimo cha Fly">
                    </div>
                    <div class="checkbox">
                      <label><input type="checkbox" value="" checked>Remember me</label>
                    </div>
                    <button type="submit" class="btn btn-default btn-success btn-block"><span ></span> Add to Cart</button>
                  </form>
                  @endif
                  </div>
                  <div class="modal-footer">
                    <button type="submit" class="btn btn-default btn-default pull-left" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> Cancel</button>
                    <p>Maelezo ya namna ya vipimo? <a href="#">Msaada</a></p>
                  </div>
                </div>
            
          </div>
        </div>

    
        
</div>

        @endsection
