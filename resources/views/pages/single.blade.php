@extends('layouts.default')

@section('content')


<section class="after-header">
  <div class="container"> 
    <ul class="breadcrumb" itemscope="" itemtype="http://schema.org/BreadcrumbList">
                        <li>
                          <a href="/">
                          <i class="material-icons" title="Home">home</i>
                           </a>
                        </li>

                        <li itemprop="itemListElement" itemscope="" itemtype="http://schema.org/ListItem"><a itemtype="http://schema.org/Thing" itemprop="item" href="#"><span itemprop="name">Component</span></a><meta itemprop="position" content="1"></li>


                        <li itemprop="itemListElement" itemscope="" itemtype="http://schema.org/ListItem">
                        
                        <a itemtype="http://schema.org/Thing" itemprop="item" href="#"><span itemprop="name">SSD</span></a>
                        
                        <meta itemprop="position" content="2"></li>


                        <li itemprop="itemListElement" itemscope="" itemtype="#"><a itemtype="http://schema.org/Thing" itemprop="item" href="#"><span itemprop="name">Team</span></a><meta itemprop="position" content="3"></li>


                        <li itemprop="itemListElement" itemscope="" itemtype="http://schema.org/ListItem"><a itemtype="http://schema.org/Thing" itemprop="item" href="#"><span itemprop="name">TEAM CX2 2.5" SATA 256GB SSD</span></a><meta itemprop="position" content="4">
                        </li>
    </ul>
  </div>
</section>
<section>
  <div class="container">
    <div class="s_product_details"> 
     <div class="container">
   
      <div class="qq_action">
        <div class="rqs">
          <div class="review"> 0 Review(s) </div>
          <div class="que"> 0 Answered Question(s) </div>
          <div class="share_on">
            <span> Share:</span>
            <i class="material-icons">facebook</i>
           
          </div>
        </div>
        <div class="option">
          <a href="{{url('add_wish_list/'.$details['id'])}}" style="color:unset" class="op_1">
            <span> Save </span>
            <i class="material-icons">bookmark_border</i>
          </a>


          <a href="{{ url('add-to-compare/'.$details['id'])}}" class="btn-cart crt_popup op_2" style="color:unset">
             <i class="material-icons">library_add</i> 
             <span> Add to Compare </span>                
          </a>
        
        
        </div>
      </div>
      <div class="single_product_view">
        <div class="p_img">
          <div class="full_img">
            <img id="pro_c" src="{{asset($details->product_image)}}" alt="" />
          </div>
          <div class="btnv">
            <div onclick="document.getElementById('pro_c').src= '{{asset($details->product_thumb1)}}'" alt="  " class="btn_1">
              <img src="{{asset($details->product_thumb1)}}" alt="">
            </div>
            <div onclick="document.getElementById('pro_c').src= '{{asset($details->product_thumb2)}}'" class="btn_2">
              <img src="{{asset($details->product_thumb2)}}" alt="">
            </div>
          </div>
        </div>
        <div class="p_details">
          <h2>{{$details->product_name}}</h2>
          <div class="price">
            <span>Price {{$details->product_price}}৳ </span>
            <span> Status  {{$details->product_price}} </span>
            <span>Product Code 16396 </span>
            <span>Brand  {{$details->product_price}}</span>
          </div>
          <h4> Key Features</h4>
          <ul>
            <li> MPN: RZ38-02770100-R3U1</li>
            <li>Model: Iskur </li>
            <li>5-Built-in Lumbar Support</li>
            <li>Star Metal Powder Coated Base</li>
            <li> 4D Adjustable Armrests</li>
            <li> Class 4 Gas Lift, Max Load 130 Kg </li>
            <li>
              <a href="#specification">View More Info</a>
            </li>
          </ul>
          <div class="reward_countdown">
              <div class="reward">
                  <span class="material-icons">stars</span>
                  <span class="points">700</span>
                  <span class="text">Star Points</span>
              </div>
          </div>

          <h4>Payment Options</h4>
          <div class="pbox">
            <label class="price_wrap">
              <input type="radio" name="same" id="check" checked />
              <span id="cash_price">{{$details->product_price}}৳</span>
              <span id="price-old">{{$details->product_price}}৳</span>
              <div class="p_tag">Cash Discount Price:</div>
              <div class="p_tag fade">Online /Cash Payment</div>
            </label>
            <label class="price_wrap">
              <input type="radio" name="same" id="check" />
              <span>{{$details['product_price']/6}}</span>
              <div class="p_tag">Regular Price: </div>
              <div class="p_tag fade">0% EMI for 6 Months(12 Months on Store)</div>
            </label>
          </div>
        <form action="{{ url('add-to-cart')}}" method="POST" id="productcart">
          @csrf
          <div class="cart-option">
            <div class="counter">
              <div class="ctr1" onclick="productcount(false)"> -</div>
              <div class="ctr2">
                <input type="number"  name="quantity" id="input" value="1">
              </div>
              <div class="ctr3" onclick="productcount(true)">+</div>
            </div>


            <input type="hidden" name="id" value="{{$details['id']}}" />
            <a id="submit" class="btnbounce btn buttonB buy_popup" href="{{ url('add-to-cart/'.$details['id']) }}">Buy Now</a>
            
            <!-- <input type="submit" id="submit" class="btnbounce btn buttonB buy_popup" value="Buy Now" /> -->
                     
          </div>
          </form>
        </div>       
      </div>
     


      <div>    
        <ul class="nav_b">
          <li date_area="specification">
            Specification 
          </li>
          <li date_area="discription">
            Discription
          </li>
          <li date_area="questions">
            Questions 
          </li>
          <li data-area="reviews">
            Reviews(0)
          </li>
        </ul>
      </div>
    </div>
  </div>
  </div>
</section><!-- part-3 -->

<section>
  <div class="container">
   <div class="discription ">
      <div class="sidebar_left">
        <div id="specification" class="specification_text_area">
          <h2>Specification</h2> 
          <h3>             
              Main Features                   
          </h3>     
           <table  class="data-table flex-table" >
           


            <tbody>
              <tr>              
                <td> Materials</td>
                <td>Chair Cover: PVC Leather <br>
              
                 Base: 5-star metal powder coated <br>
            
               Frame: Metal & Plywood </td>
              </tr>
              <tr>
                <td> Adjustable </td>
                <td>Armrests 4D Adjustable Armrests</td>
              </tr>
              <tr>
                <td>  Chair Type </td>
                <td> Gaming chair</td>
              </tr>
              <tr>
                <td> Adjustable Backrest Angle/<br> Recline</td>
                <td>139 Degrees</td>
              </tr>
              <tr>
                <td> Max Load </td>
                <td> < 130 kg</td>
              </tr>
              <tr>
                <td> Head Rest  </td>
                <td>Adjustable Headrest</td>
              </tr>
             
              </tbody>
          </table>
         
        </div>
        <div  id="discription" class="single_img">
          <h2>Description</h2>
          <h3>Razer Iskur Gaming Chair</h3>
          <p> Razer Iskur Gaming Chair is an ergonomic gaming chair that is wrapped in Multi-Layered Synthetic Leather. It is tougher and more durable than standard PU leather. Razer Iskur has plush, dense cushions which provide better contouring. It comes with 4D Adjustable Armrests and so it can be adjusted up and down, forwards and backwards, left and right, and rotated inwards or outwards. It can support a weight of up to 299lbs/136kg with the steel-reinforced body, armrests and wheelbase. It has a 5-Star Metal Powder Coated Base and Frame made of Metal & Plywood. It features a Class 4 Gas Lift which is very essential for a modern gaming chair. Supports 139 Degrees Adjustable Back Angle and has a fully Sculpted Lumbar Support which provides total lower back support with a built-in, fully adjustable lumbar curve that closely aligns to your spine. It has 6 cm Caster Wheels. It also has an adjustable headrest. </p> <img src="./img/razer-star-tech.jpg" alt="">
          <h3>Razer Iskur Gaming Chair</h3>
          <p> Razer Iskur Gaming Chair is an ergonomic gaming chair that is wrapped in Multi-Layered Synthetic Leather. It is tougher and more durable than standard PU leather. Razer Iskur has plush, dense cushions which provide better contouring. It comes with 4D Adjustable Armrests and so it can be adjusted up and down, forwards and backwards, left and right, and rotated inwards or outwards. It can support a weight of up to 299lbs/136kg with the steel-reinforced body, armrests and wheelbase. It has a 5-Star Metal Powder Coated Base and Frame made of Metal & Plywood. It features a Class 4 Gas Lift which is very essential for a modern gaming chair. Supports 139 Degrees Adjustable Back Angle and has a fully Sculpted Lumbar Support which provides total lower back support with a built-in, fully adjustable lumbar curve that closely aligns to your spine. It has 6 cm Caster Wheels. It also has an adjustable headrest. </p> <img src="./img/razer-star-tech2.jpg" alt="">
          <h4>Razer Iskur—An Ergonomic Gaming Chair</h4>
          <p> Razer has manufactured an ergonomic gaming chair focusing on the gaming comfort of real gamers. So that the gamers can enjoy the comfort and focus on their kill. It is an ergonomic gaming chair designed for posture-perfect hardcore gaming. When it comes to maintaining top form, we’ve always got your back. Ergonomic Lumbar Support System </p>
          </b>
          <p> When it comes to quality, one can always count on Razer. The Razer Iskur provides total lower back support with a built-in, fully adjustable lumbar curve that closely aligns to your spine. It ensures ideal gaming posture for maximum comfort in gaming marathons. Multi-Layered Synthetic Leather The Razer gaming chair is wrapped in a material that not only feels great but is tougher and more durable than standard PU leather, making it better suited to withstand the peeling that comes from long hours of daily use. 4D Armrests 4D Armrests are adjustable in 4 dimensions. So you can always adjust to a position, you prefer at the moment. Razer lets you enjoy the fully customizable positioning with armrests that can be adjusted up and down, forwards and backwards, left and right, and rotated inwards or outwards. Built to Last Razer never compromises with the quality of its product. The Razer Iskur’s superior build quality is reflected by its collection of internationally recognized certifications and standards. It is very strong and durable. You won't have to worry about the chair, just focus on your game. </p>
                  
         
          <iframe width="100%" height="550" src="https://www.youtube.com/embed/JWt5_NJuhME" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen>

          </iframe>
        
         
          </div>
        <div class="single_img">
          <h2> What is the price of Razer Iskur Gaming Chair in Bangladesh?</h2>
          <h3> The latest price of Razer Iskur Gaming Chair in Bangladesh is 61,500৳. You can buy the Razer Iskur Gaming Chair at best price from our website or visit any of our showrooms.</h3> </div>
        <div id="questions" class="Question">
          <div   class="Questions">
            <h3 >Questions <br> <small>Have question about this product? Get specific details about this product from expert.</small></h3>
            <div class="btn st-outline"> Ask Question </div>
          </div>
          <div  class="message">
            <div class="m_icon"> <i class="material-icons">comment</i> </div>
            <h5>There are no questions asked yet. Be the first one to ask a question. </h5> </div>
        </div>
        <div id="reviews" class="Question">
          <div class="Questions">
            <h3> Reviews (0)
              <br> <small> Get specific details about this product from customers who own it.</small>
            </h3>
            <a href="{{url('review/'.$details->id)}}" class=" btn st-outline"> Write a Review </a>
          </div>
          <div id="review">
            <div class="review-wrap">
              <div class="review-author">
                <span class="rating">
                  <span class="material-icons">star</span>
                  <span class="material-icons">star</span>
                  <span class="material-icons">star</span>
                  <span class="material-icons">star</span>
                  <span class="material-icons">star</span>
                </span>
              </div>
              <p class="review">One of the best Motherboard Processor Combo of AMD ever. Thank you Star tech.</p>
              <p class="author">By <span class="name">Shuvo Choudhury</span> on 16 May 2022 </p>
            </div>
            <div class="text-center"></div>
          </div>


          <div class="message">
            <div class="m_icon"> <i class="material-icons">assignment</i> </div>
            <h5>
              This product has no reviews yet. Be the first one to write a review.
            </h5> </div>
        </div>
        

        
      </div>




     <!-- side_bar -->

      <div class="sidebar_right">
        <div class="sb1">
          <h3> Related Product </h3>
          <div class="mini_img">
          <div class="p_img_s"><img src="./img/chair_mini.jpg" alt=""></div> 
            <div class="img_text">
              <div class="p_tag"> Thermaltake X-Fit Real
                Leather Burgundy-Red
                 Gaming Chair </div>
              <h4>60,800৳</h4>
              <a href="#"> <i class="fas fa-plus-square">

                </i> Add to compare </a>
            </div>
          </div>
          <div class="mini_img">
            <div class="p_img_s"><img src="./img/chair_mini2.jpg" alt=""></div> 
            <div class="img_text">
              <p> Razer Iskur Gaming Chair </p>
              <h4>61,500৳</h4>
              <a href="#"> <i class="fas fa-plus-square">
                </i> Add to compare </a>
            </div>
          </div>
        </div>
        <div class="sb2">
          <h3>Recently Viewed</h3> 
        </div>
      </div>
    </div>
  </div>
</section>
 
<div onload="myfunc()" class="popup mgs-popup success f-in"> 
    <div class="popup-inner">
        <div class="msg-wrap">        
              <div class="message-details">
              <i class="material-icons" aria-hidden="true">check_circle_outline</i>
                  <div class="success-message">You have added <a href="">
                  {{$details->product_name}}</a> to your shopping cart! </div>  
                  
                  <div class="cart-info">
          
             <span class="cart-quantity">Cart quantity: <span class="value"> <h6> {{ $details['quantity']}}  </h6></span>
             </span>
             <span class="cart-total">
               Cart Total: <span class="value">
             <h6> {{$details['price'] * $details['quantity']}}</h6> </span>
             </span>
                </div>
              </div>
              <div class="btn-wrap">
                  <a href="{{url('shopping_cart')}}">
                    <button class="btn">View Cart</button>
                  </a>
                  <a href="{{url('checkout')}}">
                    <button class="btn st-outline">Confirm Order</button>
                  </a>
              </div>
        </div>
        <span  class="popup-close buy_popup">
          <i  class="material-icons">close</i>
        </span>
    </div>
</div>

<div class="popup_product undefined f-in">
  <span class="prev button"></span>
  <div class="popup-inner">
    <div class="lb" alt="" src="">
    </div>
    <div class="lb-footer">
      <div class="title"></div>
      <div class="counter"></div>
    </div>
    <span class="popup-close"></span>
  </div>
  <span class="next button"></span>
</div>


@endsection
@section('scripts')
<script>

// jQuery('#productcart').on('submit',function(e){
	
// 		jQuery('#submit').html('loading...');
// 		jQuery('#submit').attr('disabled',true);
// 		jQuery.ajax({
// 			url:'add-to-cart',
// 			type:'get',
// 			data:jQuery('#productcart').serialize(),
// 			success:function(result){			
// 				jQuery('#submit').html('Submit');
// 				jQuery('#submit').attr('disabled',false);
// 				jQuery('#productcart')[0].reset();
// 			}
// 		});
// 		e.preventDefault();
// 	  });




  function productcount(product){
    
        const inputbtn = document.getElementById('input').value;
        const newinputbtn = parseInt(inputbtn);
        let totalunit =  newinputbtn;
          if( product == true ){
            totalunit =  newinputbtn +1;
          }
        
          if( product == false && newinputbtn > 1){
            totalunit =  newinputbtn -1;
          }  

        document.getElementById('input').value = totalunit;
  }

</script>

@endsection
