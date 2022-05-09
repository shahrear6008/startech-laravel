@extends('layouts.default') 
@section('content')
@include('pages.account.header')
@include('pages.account.nav')
 <!-- <div style="width:100%" class="alert success">  
               <span class="material-icons">task_alt</span>
                Your password change successfully
              </div>
    

  <div style="color:red; width:100%" class="alert alert-danger">  
              <i class="material-icons">error</i> 
              Your password do not match try again
            </div> -->

<div class="ac-title"><a href="{{('account/profile')}}"><span class="material-icons">arrow_back</span></a><h1>Change Password</h1></div>

<div class="ac-title-help-text">Please type and confirm to change your current password.</div>

<form action="{{url('changepw')}}" method="post" enctype="multipart/form-data">
@csrf
        <div class="form-group">
             
        </div>
        <div class="form-group required">
            <label for="input-password">Password</label>
            <input type="password" name="password" value="" placeholder="Password" id="input-password" class="form-control">            
        </div>
        <div class="form-group required">
            <label for="input-confirm">Password Confirm</label>
            <input type="password" name="confirmpassword" value="" placeholder="Password Confirm" id="input-confirm" class="form-control">
                    </div>
        <button type="submit" name="submit" class="btn btn-primary">Continue</button>
    </form>
</div>
</div>
@endsection