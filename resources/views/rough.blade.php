<div class="container">
    <h2>Modal Login Example</h2>
    <!-- Trigger the modal with a button -->
    <button type="button" class="btn btn-default btn-lg" id="myBtn">Login</button>
  
    <!-- Modal -->
    <div class="modal fade" id="myModal" role="dialog">
      <div class="modal-dialog">
  
        <!-- Modal content-->
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal">&times;</button>
            <h4 style="color:red;"><span class="glyphicon glyphicon-lock"></span> Login</h4>
          </div>
          <div class="modal-body">
            <form role="form">
              <div class="form-group">
                <label for="usrname"><span class="glyphicon glyphicon-user"></span> Username</label>
                <input type="text" class="form-control" id="usrname" placeholder="Enter email">
              </div>
              <div class="form-group">
                <label for="psw"><span class="glyphicon glyphicon-eye-open"></span> Password</label>
                <input type="text" class="form-control" id="psw" placeholder="Enter password">
              </div>
              <div class="checkbox">
                <label><input type="checkbox" value="" checked>Remember me</label>
              </div>
              <button type="submit" class="btn btn-default btn-success btn-block"><span class="glyphicon glyphicon-off"></span> Login</button>
            </form>
          </div>
          <div class="modal-footer">
            <button type="submit" class="btn btn-default btn-default pull-left" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> Cancel</button>
            <p>Not a member? <a href="#">Sign Up</a></p>
            <p>Forgot <a href="#">Password?</a></p>
          </div>
        </div>
      </div>
    </div>
  </div>


<!--Vipimo-->
  <div class="container">
    <!-- Trigger the modal with a button -->
    <button type="button" class="btn btn-default btn-lg" id="myBtn" data-target="#myModal">Login</button>
  
    <!-- Modal -->
    <div class="modal fade" id="myModal" role="dialog">
      <div class="modal-dialog">
  
        <!-- Modal content-->
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal">&times;</button>
            <h4 style="color:red;"><span class="glyphicon glyphicon-lock"></span>Submit</h4>
          </div>
          <div class="modal-body">
            <form role="form">
              <div class="form-group">
                <label for="usrname"><span class="glyphicon glyphicon-user"></span>Tumbo/kiuno</label>
                <input type="text" name="tumbo/kiuno" class="form-control" id="usrname" placeholder="kipimo cha Tumbo/kiuno">
              </div>
              <div class="form-group">
                <label for="psw"><span class="glyphicon glyphicon-eye-open"></span>Hipsi </label>
                <input type="text" name="hipsi" class="form-control" id="psw" placeholder="kipimo cha Hipsi">
              </div>
              <div class="form-group">
                <label for="psw"><span class="glyphicon glyphicon-eye-open"></span>Paja</label>
                <input type="text" name="paja" class="form-control" id="psw" placeholder="kipimo cha Paja">
              </div>
              <div class="form-group">
                <label for="psw"><span class="glyphicon glyphicon-eye-open"></span>Goti </label>
                <input type="text" name="goti" class="form-control" id="psw" placeholder="kipimo cha Goti">
              </div>
              <div class="form-group">
                <label for="psw"><span class="glyphicon glyphicon-eye-open"></span>Upana wa Chini </label>
                <input type="text" name="Upana_chini" class="form-control" id="psw" placeholder="kipimo cha Upana wa Chini">
              </div>
              <div class="form-group">
                <label for="psw"><span class="glyphicon glyphicon-eye-open"></span>Fly</label>
                <input type="text" name="fly" class="form-control" id="psw" placeholder="kipimo cha Fly">
              </div>
              <div class="checkbox">
                <label><input type="checkbox" value="" checked>Remember me</label>
              </div>
              <button type="submit" class="btn btn-default btn-success btn-block"><span class="glyphicon glyphicon-off"></span> Add to Cart</button>
            </form>
          </div>
          <div class="modal-footer">
            <button type="submit" class="btn btn-default btn-default pull-left" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> Cancel</button>
            <p>Maelezo ya namna ya vipimo? <a href="#">Msaada</a></p>
          </div>
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
          <a href="/project/myproject/public/skirt" class="">
            <img class="category-image"src="{{asset('images/skirt.png')}}" alt="">
          </a>
          <b>Sketi</b>
        </div>
        <div class="modal-body">
        <a href="/project/myproject/public/w_trouse" class="">
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
  

  


  <!--Vipimo-->
  <div class="container">
    <!-- Trigger the modal with a button -->
    <button type="button" class="btn btn-default btn-lg" id="myBtn" data-target="#myModal2">Vipimo</button>
  
    <!-- Modal -->
    <div class="modal fade" id="myModal" role="dialog">
      <div class="modal-dialog">
  
        <!-- Modal content-->
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal">&times;</button>
            <h4 style="color:red;"><span class="glyphicon glyphicon-lock"></span>Submit</h4>
          </div>
          <div class="modal-body">
            <form action="/project/myproject/public/addToCart" method="POST"role="form">
              @csrf
              <div class="form-group">
                <input type="hidden" name="product_id" value="{{$products['id']}}">
              </div>
                <div class="form-group">
                <label for="usrname"><span class="glyphicon glyphicon-user"></span>Tumbo/kiuno</label>
                <input type="text" name="tumbo/kiuno" class="form-control" id="usrname" placeholder="kipimo cha Tumbo/kiuno">
              </div>
              <div class="form-group">
                <label for="psw"><span class="glyphicon glyphicon-eye-open"></span>Hipsi </label>
                <input type="text" name="hipsi" class="form-control" id="psw" placeholder="kipimo cha Hipsi">
              </div>
              <div class="form-group">
                <label for="psw"><span class="glyphicon glyphicon-eye-open"></span>Paja</label>
                <input type="text" name="paja" class="form-control" id="psw" placeholder="kipimo cha Paja">
              </div>
              <div class="form-group">
                <label for="psw"><span class="glyphicon glyphicon-eye-open"></span>Goti </label>
                <input type="text" name="goti" class="form-control" id="psw" placeholder="kipimo cha Goti">
              </div>
              <div class="form-group">
                <label for="psw"><span class="glyphicon glyphicon-eye-open"></span>Upana wa Chini </label>
                <input type="text" name="Upana_chini" class="form-control" id="psw" placeholder="kipimo cha Upana wa Chini">
              </div>
              <div class="form-group">
                <label for="psw"><span class="glyphicon glyphicon-eye-open"></span>Fly</label>
                <input type="text" name="fly" class="form-control" id="psw" placeholder="kipimo cha Fly">
              </div>
              <div class="checkbox">
                <label><input type="checkbox" value="" checked>Remember me</label>
              </div>
              <button type="submit" class="btn btn-default btn-success btn-block"><span class="glyphicon glyphicon-off"></span> Add to Cart</button>
            </form>
          </div>
          <div class="modal-footer">
            <button type="submit" class="btn btn-default btn-default pull-left" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> Cancel</button>
            <button class="btn btn-success">Buy Now</button>
            <p>Maelezo ya namna ya vipimo? <a href="#">Msaada</a></p>
          </div>
        </div>
      </div>
    </div>
  </div>
       
    
</div>
</div>
