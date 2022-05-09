@extends('layouts.default')
@section('content')
@section('tittle','Forgotten Password')
<section class="after-header p-tb-10">
    <div class="container">
        <ul class="breadcrumb">
                        <li><a href="index"><i class="material-icons" title="Home">home</i></a></li>
                        <li><a href="account">Account</a></li>
                        <li><a href="forgotten">Forgotten Password</a></li>
                    </ul>
    </div>
</section>
<div class="container ac-layout">
    <div class="panel m-auto">
        <div class="p-head"> <h2 class="text-center">Forgot Your Password?</h2></div>
        <div class="p-body">
            <form action="forgotten" method="post" enctype="multipart/form-data">
                <div class="form-group required">
                    <label for="input-username">Enter Your Phone / E-Mail</label>
                    <input type="text" name="username" value="" placeholder="Enter Your Phone / E-Mail" id="input-username" class="form-control">
                </div>
                <button type="submit" class="btn btn-primary">Continue</button>
            </form>
        </div>
    </div>
</div>
@endsection