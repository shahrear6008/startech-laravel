@extends('layouts.default') 

@section('content')
@include('pages.account.header')
@include('pages.account.nav')
<div class="ac-title"><a href="account"><span class="material-icons">arrow_back</span></a><h1>Address Book</h1></div>


<div class="card-wrap user-address">
 
                <div class="card">
                    <div class="title"><span></span><span class="mark">Default</span></div>
                    <div class="actions">
                        <a class="ac-icon" href="editaddress"><span class="material-icons">edit</span></a>
                        <a class="ac-icon" href="deladdress.php?id="><span class="material-icons">delete</span></a>
                    
                    </div>
                </div>
              
                <a class="card add-new" href="{{url('account/addnewaddress')}}"><span class="material-icons">add</span><span>New Address</span></a>
    </div>
   </div>
 </div>

 @endsection