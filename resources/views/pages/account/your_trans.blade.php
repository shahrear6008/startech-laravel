@extends('layouts.default') 

@section('content')
@include('pages.account.header')
@include('pages.account.nav')


<div class="ac-title"><a href="account"><span class="material-icons">arrow_back</span></a><h1>Your Transactions</h1></div>
@foreach($customer_info as $row)
<div class="ac-amount-summary">
        <span class="material-icons lg">account_balance_wallet</span>
        <div class="details">
            <p>Your current balance is:</p>
            <span class="amount">{{$row->Store_Credit}}৳</span>
        </div>
    </div>
   </div>
</div>
@endforeach
@endsection