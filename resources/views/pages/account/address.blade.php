@extends('layouts.default') 

@section('content')
@include('pages.account.header')
@include('pages.account.nav')
<div class="ac-title"><a href="{{url('account/profile')}}"><span class="material-icons">arrow_back</span></a><h1>Address Book</h1></div>


<div class="card-wrap user-address">
    
 @foreach($address as $row)
              <div class="card">
                <div class="title">
                    <span>{{$row->f_name}} <br> 
                      {{$row->l_name}} <br>{{$row->address_1}} <br> {{$row->city}} <br> {{$row->zone_id}} <br> {{$row->country_id}}
                    </span></div>
                    <div class="actions">
                        <a class="ac-icon" href="{{url('account/editaddress/'.$row->id)}}">
                            <span class="material-icons">edit</span></a>
                        <a class="ac-icon" href="{{url('del_address/'.$row->id)}}"><span class="material-icons">delete</span></a>
                    
                    </div>
                </div>
            @endforeach     
                <a class="card add-new" href="{{url('account/addnewaddress')}}"><span class="material-icons">add</span><span>New Address</span>
            </a>
        </div>
   </div>
 </div>

 @endsection