@extends('master')
@section('content')

    <div class="container custom-order">
        <div class="cl-sm-10">
            <table class="table">
                <tbody>
                  <tr>
                    <td><b>Amount</b></td>
                    <td>Tsh {{$total}}</td>
                  </tr>
                  <tr>
                    <td><b>Tax</b></td>
                    <td>Tsh 0</td>
                  </tr>
                  <tr>
                    <td><b>Delivery</b></td>
                    <td>Tsh 2000</td>
                  </tr>
                  <tr>
                    <td><b>Total Amount</b></td>
                    <td>Tsh {{$total+10}}</td>
                  </tr>
                </tbody>
              </table>
        </div>
        <div>
            <form action="/project/myproject/public/orderplace" method="POST">
                @csrf
                <div class="form-group">
                  <input type="text" name="address" class="form-control" placeholder="enter your Address"><br>
                </div>
                <div class="form-group">
                    <textarea name="description" id="1" cols="60" rows="5" placeholder="Any description"></textarea>
                </div>  
                <div class="form-group">
                  <input type="number" name="phone" class="form-control" placeholder="enter phone number"><br>
                </div>
                <div class="form-group">
                  <label for="pwd">Payment Method</label><br>
                  <input type="radio" value="cash" name="payment"><span> Control Number</span><br>
                </div>     
                <button type="submit" class="btn btn-success">Order Now</button>
              </form>
            
        </div>
    </div>
      
     
@endsection
