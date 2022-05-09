@extends('layouts.default')
@section('content')

<!-- after-header  -->
<section class="after-header p-tb-10">
    <div class="container">
        <ul class="breadcrumb">
        <li>
          <a href="/">
            <i class="material-icons">home</i>
          </a>
        </li>
        <li>
          <a href="account">
          Login
        </a>
      </li>
    </ul>
  </div>
</section>

<div class="container ac-layout before-login">
  <div class="panel m-auto">
    <div class="p-head">
      <h2 class="text-center">Account Login</h2>
    </div>
    
    <div class="p-body">
      
    @if(Session::has('email_error'))
    <div style="color:red" class="alert alert-danger">
      <i class="material-icons">error</i>
      {{Session::get('email_error')}}
    </div>
    @endif
    @if(Session::has('pass_error'))
    <div style="color:red" class="alert alert-danger">
      <i class="material-icons">error</i>
      {{Session::get('pass_error')}}
    </div>
         
    @endif
   
    
      <form action="{{'loginUser'}}" method="post" enctype="multipart/form-data">

      @csrf
  
        <div class="form-group">
       
          <label class="control-label" for="input-username">Phone / E-Mail </label>
          <input type="text" name="email" value="" placeholder="Phone / E-Mail" id="input-username" class="form-control">
        </div>
        <div class="form-group">
      
          <label class="control-label" for="input-password">Password </label>  
          <a class="forgot-password" href="{{url('forgotten')}}">Forgotten Password?</a>
          <input type="password" name="password" value="" placeholder="Password" id="input-password" class="form-control">
        </div>
        <button type="submit" class="btn btn-primary">Login</button>
      </form>
    
      <p class="no-account-text">
        <span>Don't have an account?</span>
      </p>
      <a class="btn st-outline" href="{{url('register')}}">Create Your Account</a>
    </div>
  </div>
</div>
@stop


