@extends('layouts.default')
@section('content')
@section('title','Order Information')


<section class="after-header p-tb-10">
    <div class="container">
        <ul class="breadcrumb">
        <li>
          <a href="/">
           <i class="material-icons">home</i>
          </a>
        </li>
        <li>
            <a href="{{url('account/order')}}">
            Order History
            </a>
        </li>
        <li>
            <a href="">
            Order Information
            </a>
        </li>
    </ul>
  </div>
</section>

@if(count($order_info)>0) 
@foreach($order_info as $row)
<section class="info-page bg-bt-gray">
  <div class="container ac-layout p-tb-15">
    <div class="row">
      <div class="col-xs-12 col-md-8">
        <div class="ws-box content order-details">
          <div class="head">
            <h1>Order Information</h1>
            <span class="status">{{$row->status}}</span>
          </div>
          <div class="g-box">
            <div class="row">
              <div class="col-md-6 address">
                <h5>Shipping Address</h5>
                <address>{{$row->f_name}} <br>{{$row->l_name}} <br>{{$row->address_1}} <br>{{$row->city}}<br>{{$row->zone_id}}<br>{{$row->country_id}} </address>
                <div class="telephone p-tb-15">
                  <span>Mobile: </span>
                  <span>{{$row->mobile}}</span>
                </div>
              </div>
              <div class="col-md-6 order-summary">
                <h5>Order Summary</h5>
                <table class="table">
                  <tbody>
                    <tr>
                      <td class="text-left">Sub-Total</td>
                      <td class="text-right">
                        {{$row->product_price}}৳
                      </td>
                    </tr>
                    <tr>
                      <td class="text-left">Home Delivery</td>
                      <td class="text-right">60৳</td>
                    </tr>
                    <tr>
                      <td class="text-left">Total</td>
                      <td class="text-right">
                        {{$row->product_price+60}} ৳
                      </td>
                    </tr>
                    <tr class="paid">
                      <td class="text-left">Paid</td>
                      <td class="text-right">0৳</td>
                    </tr>
                    <tr class="due">
                      <td class="text-left">Due</td>
                      <td class="text-right">
                        {{$row->product_price+60 }} ৳
                      </td>
                    </tr>
                  </tbody>
                </table>
              </div>
            </div>
          </div>
          <h5 class="m-t-30">Products</h5>
          <table class="table table-bordered table-hover table-order-products">
            <thead>
              <tr>
                <td class="text-left">Image</td>
                <td class="text-left">Product Name</td>
                <td class="text-right">Quantity</td>
                <td class="text-right">Total</td>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>
                  <img src="{{asset($row->product_image)}}" alt="Asus PN40 Celeron Dual Core Mini PC ">
                </td>
                <td class="text-left">
                  <a href=" {{url('single/'.$row->id)}}">
                    {{$row->product_name}}
                  </a>
                </td>
                <td class="text-right">1</td>
                <td class="text-right">{{$row->product_price+60}}  ৳</td>
              </tr>
            </tbody>
          </table>
          <div class="text-right">
            <a href="{{url('account/order')}}" class="btn st-outline">Continue</a>
          </div>
        </div>
      </div>
      <div class="col-xs-12 col-md-4">
        <div class="ws-box content order-details-history">
          <h3 class="m-b-15">Order History</h3>
          <div class="histories">
            <div class="history">
              <h5>Canceled</h5>
              <p>Dear Customer, We have failed to reach you over the phone several times. Now we have to cancel your order. <br>
              </p>
              <span class="fade">
                <span>28 Dec 2021</span>
              </span>
            </div>
            <div class="history">
              <h5>Didn't Response (4)</h5>
              <p>Dear Customer, We have failed to reach you over the phone. Please call us back for your order confirmation.(No Answer) <br>
              </p>
              <span class="fade">
                <span>27 Dec 2021</span>
              </span>
            </div>
            <div class="history">
              <h5>Didn't Response (3)</h5>
              <p>Dear Customer, We have failed to reach you over the phone. Please call us back for your order confirmation.(No Answer) <br>
              </p>
              <span class="fade">
                <span>26 Dec 2021</span>
              </span>
            </div>
            <div class="history">
              <h5>Didn't Response (2)</h5>
              <p>No Answer</p>
              <span class="fade">
                <span>25 Dec 2021</span>
              </span>
            </div>
            <div class="history">
              <h5>Didn't Response (1)</h5>
              <p>Dear Customer, We have failed to reach you over the phone. Please call us back for your order confirmation.(No Answer) <br>
              </p>
              <span class="fade">
                <span>25 Dec 2021</span>
              </span>
            </div>
            <div class="history">
              <h5>Pending</h5>
              <p></p>
              <span class="fade">
                <span>25 Dec 2021</span>
              </span>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>  
@endforeach 
@endif
@endsection