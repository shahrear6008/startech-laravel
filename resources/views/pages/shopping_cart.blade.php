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
        <a href="tool"> shopping cart </a>
      </li>
    </ul>
  </div>
</section>

<section class="bg-bt-gray p-tb-15">
  <div class="container">
    <div class="content ws-box p-15">
      <div class="alert alert-info m-b-30">
        <i class="material-icons">info</i>
        <p>নির্দিষ্ট মডেল এর প্রসেসর, মাদারবোর্ড, গ্রাফিক্স কার্ড, র&zwj;্যাম ও মনিটর স্টক সীমিত থাকায় সিঙ্গেল প্রোডাক্ট অনলাইন ডেলিভারি দেয়া সম্ভব নাও হতে পারে।</p>
        <button type="button" class="close material-icons" data-dismiss="alert">close</button>
      </div>
      <h1 class="title"> Shopping Cart </h1>
@if(count(session('cart'))>0)
    
					<div class="table-responsive">
						<table class="table table-bordered cart-table bg-white">
							<thead>
								<tr>
									<td class="text-left pro_img">Product Image</td>
									<td class="text-left">Product Name</td>
									<td class="text-left pro_model">Model</td>
									<td class="text-left">Quantity</td>
									<td class="text-left pro_unitprice">Unit Price</td>
									<td class="text-left">Total</td>
								</tr>
							</thead>  
	<tbody class="tbody">
  <?php $total = 0 ?>
<!-- by this code session get all product that user chose -->

            @foreach(session('cart') as $id => $details)

                <?php $total += $details['price'] * $details['quantity'] ?>

					<tr>
							<td class="cart_item_img_s pro_img">
								<a href="">
									<img src="{{$details['image']}}" alt="Image1" class="">
									</a>
								</td>
								<td class="cart_item_pname">
									<h4 class="py-1"> {{$details['name']}}  </h4>
								</td>
								<td class="cart_item_pname pro_model">
									<h5 class="pt-1">{{$details['model']}}   </h5>
								</td>
                <td class="cart_item_remove">
									<div class="input-group btn-block" style="max-width: 200px; min-width:120px;">
                  <input type="number" value="{{ $details['quantity'] }}" class="form-control quantity" />
											<span class="input-group-btn">
												<button type="submit" data-id="{{ $id }}" data-toggle="tooltip"   title="Update" class="btn update-cart btn-primary">
													<i class="material-icons">cached</i>
												</button>
											</span>
											<span class="input-group-btn">
												<button type="button" data-id="{{ $id }}" class="remove-from-cart bg-transparent " name="remove">
													<a class="remove" href="">
														<i class="material-icons">clear</i>
													</a>
												</button>
											</span>
										</div>
									</td>
               


									<td class="cart_item_pname total_price pro_unitprice">
										<h5 class="">৳ {{$details['price'] }}</h5>
									</td>
									<td class="cart_item_pname">
										<h5 class="total_price">৳ {{$details['price'] * $details['quantity']}}</h5>
									</td>
            </tr>
   @endforeach

   </tbody>
  </table>
 </div>
    <div class="row">
      <div class="col-md-6">
        <table class="table table-bordered bg-white cart-total">
          <tbody>
            <tr class="text-right">
              <td class="text-right">
                <strong>Sub-Total:</strong>
              </td>
              <td class="text-right amount">
              ৳ {{$total}}
              </td>
            </tr>
            <tr class="text-right">
              <td class="text-right">
                <strong>Total: </strong>
              </td>
              <td class="text-right amount">৳ {{$total}}</td>
            </tr>
          </tbody>
        </table>
      </div>
    </div>
    <h2 id="tittle" class="title">What would you like to do next?</h2>
    <p>Choose if you have a discount code or reward points you want to use or would like to estimate your delivery cost.</p>
    <div class="page-section ws-box coupon-voucher-cart">
      <div class="row">
        <div class="col-md-6 coupon">
          <div class="input-group">
            <input type="text" name="coupon" value="" placeholder="Promo / Coupon Code" id="input-coupon" class="form-control" />
            <span class="input-group-btn">
              <button type="submit" name="submit" value="" id="button-coupon" data-loading-text="Loading..." class="btn st-outline buttonB buy_popup"> Apply Coupon</button>
            </span>
          </div>
        </div>
        <div class="col-md-6 voucher">
          <div class="input-group">
            <input type="text" name="voucher" value="" placeholder="Enter your gift voucher code here" id="input-voucher" class="form-control" />
            <span class="input-group-btn">
              <button type="submit" name="submit" value="" id="button-voucher" data-loading-text="Loading..." class="btn st-outline buttonB buy_popup">Apply Voucher</button>
            </span>
          </div>
        </div>
      </div>
    </div>
    <div class="buttons">
      <div id="pull-right" class="pull-right">
        <a href="checkout" class="btn btn-primary checkout-btn">Confirm Order</a>
      </div>
      <div class="pull-right">
        <a href="/" class="btn btn-primary">Continue Shopping</a>
      </div>
    </div>
   </tbody>
 </table>
@else
<p>Your shopping cart is empty!</p>
<div class="buttons">
        <a href="{{'/'}}" class="btn btn-primary">Continue</a>
      </div>
@endif
   </div>
  
 
 </div>
</section> 
@endsection


@section('scripts')


    <script type="text/javascript">
// this function is for update card
        $(".update-cart").click(function (e) {
        

           var ele = $(this);

            $.ajax({
               url: '{{ url('update-cart') }}',
               method: "patch",
               data: {_token: '{{ csrf_token() }}', id: ele.attr("data-id"), quantity: ele.parents("tr").find(".quantity").val()},
               success: function (result) {
                $('.tbody').html(result);
                
               }
            });
            e.preventDefault();
        });

        $(".remove-from-cart").click(function (e) {
     
            var ele = $(this);
        
            $.ajax({
                url: '{{ url('remove-from-cart') }}',
                method: "DELETE",
                data: {_token: '{{ csrf_token() }}', id: ele.attr("data-id")},
                success: function (result) {
                  $('.tbody').html(result);
                    
                }
            });
            e.preventDefault();
            
        });

    </script>

@endsection


