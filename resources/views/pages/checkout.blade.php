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
            <li>
                <a href="{{url('tool')}}">
                check out
                </a>
            </li>           
       </ul>
    </div>
</section>

<section class="checkout bg-bt-gray p-tb-15">
  <div class="container">
    <div class="alert">
      <i class="material-icons">info</i>
      <p>নির্দিষ্ট মডেল এর প্রসেসর, মাদারবোর্ড, গ্রাফিক্স কার্ড, র‍্যাম ও মনিটর স্টক সীমিত থাকায় সিঙ্গেল প্রোডাক্ট অনলাইন ডেলিভারি দেয়া সম্ভব নাও হতে পারে।</p>
      <button type="button" class="close material-icons" data-dismiss="alert">close</button>
    </div>
    <h1 class="page-title">Checkout</h1>
    <form class="checkout-content" id="checkout-form" action="checkout_process" method="post">
    @csrf
      <div class="row">
        <div class="col-md-12">
          <div class="page-section ws-box section-reward">
            <div class="info">
              <h2>Star Point</h2>
              <p class="blurb">Earn Star Points and use on your next order</p>
            </div>
            <div class="reward">
              <span class="material-icons">stars</span>
              <span class="points">4000</span>
              <span class="text">Star Points</span>
            </div>
            <a href="login" class="btn">Login to Avail</a>
          </div>
        </div>
        <div class="col-md-4 col-sm-12">
          <div class="page-section ws-box">
            <div class="section-head">
              <h2>
                <span>1</span>Customer Information
              </h2> 
            </div>
            <div class="address">
              <div class="multiple-form-group">
                <div class="form-group">
                  <label class="control-label" for="input-firstname">First Name</label>
                  <input class="form-control" name="firstname" type="text" id="input-firstname" value="" placeholder="First Name*" required />
                </div>
                <div class="form-group">
                  <label class="control-label" for="input-lastname">Last Name</label>
                  <input type="text" id="input-lastname" name="lastname" value="" class="form-control" placeholder="Last Name*" required />
                </div>
              </div>
              <div class="form-group">
                <label class="control-label" for="input-address">Address</label>
                <input type="text" id="input-address" name="address" value="" class="form-control" placeholder="Address*" required />
              </div>
              <div class="form-group">
                <label class="control-label" for="input-telephone">Mobile</label>
                <input type="tel" id="input-telephone" name="telephone" value="" class="form-control" placeholder="Telephone*" required />
              </div>
              <div class="form-group" for="input-email">
                <label class="control-label">Email</label>
                <input type="email" id="input-email" name="email" value="" class="form-control" placeholder="E-Mail*" required />
              </div>
              <div class="multiple-form-group">
                <div class="form-group" for="input-city">
                  <label class="control-label">City</label>
                  <input type="text" id="input-city" name="city" value="" class="form-control" placeholder="City*" required />
                </div>
                <div class="form-group" for="input-zone">
                  <label class="control-label">Zone</label>
                  <select name="zone_id" id="input-zone" class="form-control">
                    <option value="Chittagong City">Chittagong City</option>
                    <option value="Dhaka City" selected="">Dhaka City</option>
                    <option value="Khulna City">Khulna City</option>
                    <option value="Others">Others</option>
                  </select>
                </div>
              </div>
              <div class="form-group">
                <label class="control-label">Comment</label>
                <textarea class="form-control" name="comment" value="" placeholder="Comment" rows="6"></textarea>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-8 col-sm-12">
          <div class="row row-payment-delivery-order">
            <div class="col-md-6 col-sm-12 payment-methods">
              <div class="page-section ws-box">
                <div class="section-head">
                  <h2>
                    <span>2</span>Payment Method
                  </h2>
                </div>
                <p>Select a payment method</p>
                <label class="radio-inline">
                  <input type="radio" name="payment_method" value="cod" checked="checked" /> Cash on Delivery </label>
                <label class="radio-inline">
                  <input type="radio" name="payment_method" value="online" /> Online Payment </label>
                <div class="accepted-logo">
                  <h5>We Accepted :</h5>
                  <a href="#">
                    <img class="logo logo-visa" src="{{url('./img/icon/Atm-card-logo.png')}}" />
                  </a>
                  <div class="clear"></div>
                </div>
              </div>
            </div>
            <div class="col-md-6 col-sm-12 delivery-methods">
              <div class="page-section ws-box">
                <div class="section-head">
                  <h2>
                    <span>3</span>Delivery Method
                  </h2>
                </div>
                <p>Select a delivery method</p>
                <label class="radio-inline">
                  <input type="radio" name="shipping_method" value="flat.flat" checked="checked" /> Home Delivery - 60৳ </label>
                <br />
                <br />
                <input type="hidden" name="flat.flat.title" value="Home Delivery" />
                <label class="radio-inline">
                  <input type="radio" name="shipping_method" value="pickup.pickup" /> Store Pickup - 0৳ </label>
                <br />
                <br />
                <input type="hidden" name="pickup.pickup.title" value="Store Pickup" />
              </div>
            </div>
            <div class="col-md-12 col-sm-12">
              <div class="page-section ws-box voucher-coupon">
                <div class="row">
                  <div class="col-md-6 col-sm-12" id="gift-voucher">
                    <div class="input-group">
                      <input type="text" name="voucher" placeholder="Gift Voucher" id="input-voucher" class="form-control" />
                      <span class="input-group-btn">
                        <button type="button" id="button-coupon" data-loading-text="Loading..." class="btn st-outline" data-old_text="Apply Coupon">Apply Coupon</button>
                      </span>
                    </div>
                  </div>
                  <div class="col-md-6 col-sm-12" id="discount-coupon">
                    <div class="input-group">
                      <input type="text" name="coupon" placeholder="Promo / Coupon Code" id="input-coupon" class="form-control" />
                      <span class="input-group-btn">
                        <button type="button" id="button-1coupon" class="btn st-outline">Apply Coupon</button>
                      </span>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-12 col-sm-12 details-section-wrap">
              <div class="page-section ws-box">
                <div class="section-head">
                  <h2>
                    <span>4</span>Order Overview
                  </h2>
                </div>
                <table class="table-bordered bg-white checkout-data">
                  <thead>
                    <tr>
                      <td>Product Name</td>
                      <td class="rs-none">Unit Price</td>
                      <td class="rs-none">Quantity</td>
                      <td class="text-right">Total</td>
                    </tr>
                  </thead>
                  <tbody> 
                     <tr>
                     <?php $total = 0 ?>
<!-- by this code session get all product that user chose -->
        @if(session('cart'))
            @foreach(session('cart') as $id => $details)

                <?php $total += $details['price'] * $details['quantity'] ?>
                      <td class="name">
                        <a href="">{{$details['name']}} </a>
                        <div class="options"></div>
                      </td>
                      <td class="rs-none">{{$details['price']}}  </td>
                      <td class="rs-none">{{$details['quantity']}} </td>
                      <td class="price text-right">{{$details['price'] * $details['quantity']}} </td>
                    </tr>
                    
                   
  @endforeach
  @endif
                     <tr class="total">
                      <td colspan="3" class="text-right">
                        <strong>Sub-Total:</strong>
                      </td>
                      <td class="text-right">
                        <span class="amount"> ৳ {{$total}}</span>
                      </td>
                    </tr>
                    <tr class="total">
                      <td colspan="3" class="text-right">
                        <strong>Home Delivery:</strong>
                      </td>
                      <td class="text-right">
                        <span class="amount"> ৳ 60 </span>
                      </td>
                    </tr>
                    <tr class="total">
                      <td colspan="3" class="text-right">
                        <strong>Total:</strong>
                      </td>
                      <td class="text-right">
                        <span class="amount"> ৳{{$total+60}} </span>
                      </td>
                    </tr>
                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="checkout-final-action">
        <div class="agree-text" style="margin-bottom: 10px;"> I have read and agree to the <a href="#" target="_blank">
            <b>Terms and Conditions</b>
          </a>, <a href="#" target="_blank">
            <b>Privacy Policy</b>
          </a> and <a href="#" target="_blank">
            <b>Refund and Return Policy</b>
          </a>
          <input type="checkbox" name="agree" value="1" checked="checked" />
        </div>
        <button id="button-confirm" class="btn submit-btn pull-right" type="submit" name="confirm_order" value=""> Confirm Order </button>

        <button class="your-button-class" id="sslczPayBtn"
        token="if you have any token validation"
        postdata="your javascript arrays or objects which requires in backend"
        order="If you already have the transaction generated for current order"
        endpoint="/pay-via-ajax"> Pay Now
</button>

      </div>
    </form>
  </div>
</section>

@endsection

@section('scripts')
<script>
    (function (window, document) {
        var loader = function () {
            var script = document.createElement("script"), tag = document.getElementsByTagName("script")[0];
            script.src = "https://sandbox.sslcommerz.com/embed.min.js?" + Math.random().toString(36).substring(7);
            tag.parentNode.insertBefore(script, tag);
        };

        window.addEventListener ? window.addEventListener("load", loader, false) : window.attachEvent("onload", loader);
    })(window, document);
</script>

@endsection