@extends('pages.account.index') 

@section('profile')


  
<div class="ac-title">
<a href="{{url('account/profile')}}">
    <span class="material-icons">arrow_back</span>
  </a>
  <h1>Order History</h1>
</div>
	

@foreach($orders as $order)


<div class="cards">
  <div class="card o-card">
    <div class="c-head">
      <div class="left">
        <span class="o-id">
          <span>Order# {{$order->id}}</span>
        </span>
        <span class="o-date">Date Added:{{$order->product_price}} 	</span>
      </div>
      <div class="right">
        <span class="status delivered">
          <span class="material-icons">check_circle</span>
          <span class="status">{{$order->status}}	</span>
        </span>
      </div>		
    </div>
    <div class="c-body">
      <div class="img-n-title">
          <div class="img-wrap">
            <img src="{{asset($order->product_image)}}" alt="Shah Rear  Rahman">
          </div>
          <div class="title">
            <h6 class="item-name">{{$order->product_name}}</h6>
          </div>
      </div>
      <div class="amount">
      {{$order->product_price}}
          
      </div>
      <div class="actions">
        <a href="{{url('account/order_info/'.$order->id)}}" title="View" 
        class="btn ac-btn">View</a>      
      </div>
    </div>
  </div>
</div>

@endforeach

</div>
@endsection
