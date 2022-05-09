
@extends('layouts.default')
 @section('content')
 
<section class="after-header p-tb-10">
    <div class="container">
        <ul class="breadcrumb">
        <li>
          <a href="/">
          <i class="material-icons">home</i>
          </a>
        </li>
        <li><a href="account">
          Register
        </a></li>
    </ul>
  </div>
</section>

<div class="container ac-layout before-login">

      <div class="panel m-auto">
        <div class="p-head">
          <h2 class="text-center">Register Account</h2>                
            
        </div>
        <div class="p-body">
          @if(Session::has('msg'))
          <p>{{Session::get('msg')}}</p>
          @endif
          <form action="{{url('/registerUser')}}" method="post" enctype="multipart/form-data">
           @csrf
            <div class="multiple-form-group">
              <div class="form-group required">
                <label for="input-firstname">First Name</label>
                <input type="text" name="firstname" value="" placeholder="First Name" id="input-firstname" class="form-control">
              </div>
              <div class="form-group required">
                <label for="input-lastname">Last Name</label>
                <input type="text" name="lastname" value="" placeholder="Last Name" id="input-lastname" class="form-control">
              </div>
            </div>
            <div class="form-group required">
              <label for="input-email">E-Mail</label>
              <input type="email" name="email" value="" placeholder="E-Mail" id="input-email" class="form-control">
            </div>
            
            <div class="form-group required">
              <label for="input-telephone">Telephone</label>
              <input type="tel" name="telephone" value="" placeholder="Telephone" id="input-telephone" class="form-control">
            </div>
            <div class="form-group required">
                      <label for="input-password">Password</label>
                      <input type="password" name="password" value="" placeholder="Password" id="input-password" class="form-control">
                                      </div>
                  <div class="form-group required">
                      <label for="input-confirm">Password Confirm</label>
                      <input type="password" name="confirm" value="" placeholder="Password Confirm" id="input-confirm" class="form-control">
                 </div>
                 <div class="form-group required">
                      <label for="input-otp">OTP</label>
                      <input type="password" name="otp" value="" placeholder="OTP" id="input-otp" class="form-control">
                  </div>
            <!-- <div class="form-group required">
              <label for="input-confirm">Address</label>
              <input type="text" name="address" value="" placeholder="Address" id="input-confirm" class="form-control">
            </div>
            <div class="form-group required">
              <label for="input-confirm">Profile Picture</label>
              <input type="file" name="picture" value=""  id="input-confirm" class="form-control">
            </div> -->
         
            <button type="submit" class="btn btn-primary">Continue</button> <br>
        
            <a href="register" class="btn st-outline">Back</a>
            <p class="no-account-text">
              <span>Already have an account?</span>
            </p>
            <p>If you already have an account with us, please login at the <a href="login">login page</a>. </p>
          </form>
        </div>
      </div>
    </div>
  
  @endsection


