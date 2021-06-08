<?php

use App\Http\Controllers\ProductController;
$total=0;
if(Session::has('user'))
{
  $total= ProductController::cartItem();
}
?>

<nav class="navbar navbar-inverse">
    <div class="container-fluid">
      <div class="navbar-header">
        <a class="navbar-brand" href="#">Online Tailor</a>
      </div>
      <ul class="nav navbar-nav">
        <li class="active"><a href="#">Home</a></li>
        <li><a href="">Orders</a></li>
      </ul>
      <form class="navbar-form navbar-left" action="/project/myproject/public/search">
        <div class="form-group">
          <input type="text" name="query" class="form-control search-box" placeholder="Search">
        </div>
        <button type="submit" class="btn btn-default">Search</button>
      </form>
      <ul class="nav navbar-nav navbar-right">
        <li><a href="#"><span class="glyphicon glyphicon-shopping-cart"></span> cart({{$total}})</a></li>
        <li><a href="project/myproject/public/register"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
        <li><a href="project/myproject/public/login"><span class="glyphicon glyphicon-log-in"></span>  Login</a></li>
      </ul>
    </div>
  </nav>