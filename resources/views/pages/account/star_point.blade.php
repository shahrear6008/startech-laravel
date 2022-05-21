@extends('layouts.default') 

@section('content')
@include('pages.account.header')
@include('pages.account.nav')

<div class="ac-title"><a href="{{url('account/profile')}}"><span class="material-icons">arrow_back</span></a><h1>Your Reward Points</h1></div>
@foreach($customer_info as $row)
<div class="ac-amount-summary">
        <span class="material-icons lg">stars</span>
        <div class="details">
            <p>Your total number of reward points is:</p>
            <span class="amount">{{$row->Reward_Points}}</span>
        </div>
    </div>
 </div>
</div>
@endforeach
@endsection