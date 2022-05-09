<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    
  <head>

 
<meta charset=" -8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <title>@yield('title')</title>
    <link rel="shortcut icon" href="img/icon/logo.png" type="image/x-icon" /> 
    
    <link rel="stylesheet" href="{{asset('css/style.css')}}" />
    <link rel="stylesheet" href="{{asset('css/account.css')}}">
    <link rel="stylesheet" href="{{asset('css/all.min.css')}}" />
    <link rel="stylesheet" href="{{asset('css/preloder.css')}}">
    <link rel="stylesheet" href="{{asset('css/offer.css')}}">
    <link rel="stylesheet" href="{{asset('css/thunder.css')}}">
    <link rel="stylesheet" href="{{asset('css/single.css')}}">
    <link rel="stylesheet" href="{{asset('css/pc_builder.css')}}">
    <link rel="stylesheet" href="{{asset('css/pc-builder.css')}}">
    <link rel="stylesheet" href="{{asset('css/path.css')}}"> 
    <link rel="stylesheet" href="{{asset('css/responsive.css')}}">
    <link rel="stylesheet" href="{{asset('css/range.css')}}">
    <link rel="stylesheet" href="{{asset('css/register.css')}}">
    <link rel="stylesheet" href="{{asset('css/sign_in.css')}}">
    <link rel="stylesheet" href="{{asset('css/choose_product.css')}}">
    <link rel="stylesheet" href="{{asset('css/shopping_cart.css')}}">
    <link rel="stylesheet" href="{{asset('css/checkout.css')}}">
    <link rel="stylesheet" href="{{asset('css/cart.css')}}">
    <link rel="stylesheet" href="{{asset('css/com_product.css')}}">
    <link rel="stylesheet" href="{{asset('css/search.css')}}">
  
    <link rel="stylesheet" href="{{asset('css/order_view.css')}}">
   
     <link rel="stylesheet" href="{{asset('css/common.css')}}">
        
    <link href="https://fonts.googleapis.com/css2?family=Material+Icons" rel="stylesheet">   
       


    <script src="{{asset('js/jquery-1.10.2.min.js')}}"></script>
    <script src="{{asset('js/jquery-ui.js')}}"></script>
    <script src="{{asset('./js/html2canva.js')}}"></script>  
    <link href="{{asset('css/jquery-ui.css')}}" rel="stylesheet">


    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
@section('scripts')
 <script>
    function myfun() {
    var loader = document.querySelector("#loader");
    loader.style.display = "none";
  };
  </script>
  @endsection

  </head>