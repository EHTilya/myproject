@extends('master')
@section('content')
<div class="container custom-register">
    <div class="row justify-content-center">
        <div class="col-sm-4 col-sm-offset-4">
            <form action="/project/myproject/public/register" method="POST" >
                @csrf
                <div class="form-group">
                    <label for="exampleInputName"><b>First name</b> </label>
                    <input type="text" name="fname" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" >
                  </div>
                  <div class="form-group">
                    <label for="exampleInputName"><b>Last name</b> </label>
                    <input type="text" name="lname" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" >
                  </div>
                <div class="form-group">
                  <label for="exampleInputEmail1"><b>Email</b> </label>
                  <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" >
                </div>
                <div class="form-group">
                    <input type="hidden" name="role" value="customer" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" >
                  </div>
                 
                <div class="form-group">
                    <label for="exampleInputName"><b>Phone Number</b> </label>
                    <input type="number" name="phone" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" >
                  </div>
                <div class="form-group">
                  <label for="exampleInputPassword1"><b>Password</b></label>
                  <input type="password" name="password" class="form-control" id="exampleInputPassword1">
                </div>
                <button type="submit" class="btn btn-primary">Add Stuff</button>
              </form>  

        </div>
        
    </div> 
    
</div>
@endsection
