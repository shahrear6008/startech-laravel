@extends('layouts.default') 

@section('content')
@include('pages.account.header')
@include('pages.account.nav')

<div class="ac-title"><a href="{{url('account/address')}}"><span class="material-icons">arrow_back</span></a><h1>My Account Information</h1></div>
@foreach($customer_info as $row)
<form action="{{url('edit_profile')}}" method="post" enctype="multipart/form-data" class="form-horizontal">
      @csrf
            
            <div class="multiple-form-group">
                <div class="form-group required">
                    <label for="input-firstname">First Name </label>
                    <input type="text" name="firstname" value="{{$row->fname}}" placeholder="First Name" id="input-firstname" class="form-control">
                </div>
            <div class="form-group required">
                <label for="input-lastname">Last Name</label>
                <input type="text" name="lastname" value="{{$row->lname}}" placeholder="Last Name" id="input-lastname" class="form-control">
                            </div>
        </div>
        <div class="form-group required">
            <label for="input-email">E-Mail</label>
            <input type="email" name="email" value="{{$row->email}}" placeholder="E-Mail" readonly="" id="input-email" class="form-control">
                    </div>
        <div class="form-group required">
            <label for="input-telephone">Telephone</label>
            <input type="tel" name="telephone" value="{{$row->mobile}}" placeholder="Telephone" readonly="" id="input-telephone" class="form-control">
                    </div>
        <div class="form-group">
            <label for="input-fax">Fax</label>
            <input type="text" name="fax" value="{{$row->mobile}}" placeholder="Fax" id="input-fax" class="form-control">
        </div>
       <button type="submit" class="btn btn-primary">Continue</button>
    </form>
    @endforeach
</div>
</div>


@endsection