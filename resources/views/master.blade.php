<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Online Tailor</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>
    {{View::make('header')}}
    @yield('content')
    {{View::make('footer')}}
</body>
<style>
    .custom-login{
        height: 500px;
        padding-top: 50px;
    }
    .custom-register{
        height: 500px;
        padding-top: 10px;
    }
    .custom-product{
        height: 400px;
    }
    img.slider-img{
        height: 400px !important;
    }
    .slider-text{
        background-color: #35443585 !important;
    }
    .trending-item{
        float: left;
        width: 20%;
    }
    .trending-image{
        height: 100px;
    }
    .trending-wrapper{
        margin: 30px;
    }
    .detail-img{
        height: 200px !important;
    }
    .search-box{
        width: 300px !important;
    }
    .cart-list-devider{
        border-bottom: 1px solid #ccc;
        margin-bottom: 20px;
        padding-bottom: 20px;

    }
    .order-button{
        padding-bottom:10px; 
    }
</style>
 
</html>