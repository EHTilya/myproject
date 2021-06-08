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
            <form action="/project/myproject/public/orderPlace" method="POST">
                @csrf
                <div class="form-group">
                  <input type="text" name="address" class="form-control" placeholder="enter your Address"><br>
                </div>
                <div class="form-group">
                  <label for="pwd">Payment Method</label><br>
                  <input type="radio" value="cash" name="control number"><span> Control Number</span><br>
                  </div>       
                <button type="submit" class="btn btn-success">Order Now</button>
              </form>
            
        </div>
    </div>
      
     
@endsection