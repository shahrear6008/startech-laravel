@extends('layouts.default')
@section('content')
@section('tittle','product')
<section class="after-header p-tb-10">
    <div class="container">
        <ul class="breadcrumb">
        <li>
          <a href="/">
            <i class="material-icons">home</i>
          </a>
        </li>
        <li><a href="#">
        desktop
        </a></li>  
    </ul>
  </div>
</section>
 <div class="container">
    <div class="p_items_choose">
    @include('pages.range')
      <div class="container">
          <div class="p_cart">
              <div class="product_list">
 @foreach ($products as $row)
              <div class="product_item">            
                  <div class="product_item_inner">
                  <div class="p_item_img">
                      <a class="img" 
                      href="single/{{$row->id}}">                    
                        <img src="{{$row->product_image}}" alt="Image1" class="">                
                      </a>
                      </div>
                      <div class="product_card_body">
                      <h4 class="cart_title">
                      <a href="#">{{$row->product_name}}</a> </h4>
                      <h6>
                          <i class="material-icons h3">star</i>
                          <i class="material-icons h3">star</i>
                          <i class="material-icons h3">star</i>
                          <i class="material-icons h3">star_border</i>
                      </h6>
                      <div class="short-description">
                        <ul>
                          <li>Intel Atom x5-Z8350 Processor (1.44 GHz To 1.92 GHz, Cache 2MB )   </li>
                       
                          <li>Windows 10 Home </li>
                         
                          <li>Cool and reliable performance  </li>
                        
                          <li>Convert your TV into a smart TV</li>
                        </ul>
                    </div>
                      <h5>
                         
                          <span class="price">{{$row->product_price}} ৳</span>
                          <br>
                        
                      </h5>
                      <div class="flexbtn">
                     
                               
                            <a  class="btnbounce btn-cart crt_popup" href="{{ url('add-to-cart/'.$row->id) }}" >Add to cart <i class="material-icons">shopping_basket</i></a>
                           
                              
                            <a href="{{ url('add-to-compare/'.$row->id) }}" class="btn-compare comp_popup ">  <i class="material-icons">library_add</i>Add to Compare
                              </a>
                             
                         
                      </div>
                    </div>
                   </div>
                            
                   </div>
                   @endforeach                      
      
  
               <div onload="myfunc()" id="popup_cart" class=" mgs-popup success f-in">
                                  <div class="popup-inner">
                                  <div class="msg-wrap">
                                  <div class="message-details">
                                      <i class="material-icons" aria-hidden="true">check_circle</i>

                                      <div class="success-message">You have added <a href="">{{$row->product_name}}</a> to your shopping cart!</div>

                                      <div class="cart-info">
                                      <span class="cart-quantity">Cart quantity: <span class="value"></span>
                                      </span>
                                      <span class="cart-total">Cart Total: <span class="value"></span>
                                      </span>
                                      </div>
                                  </div>
                                  <div class="btn-wrap">
                                      <a href="shopping_cart">
                                      <button class="btn " >View Cart</button>
                                  
                                      </a>
                                      <a href="checkout">
                                      <button class="btn st-outline">Confirm Order </button>
                                  
                                      </a>
                                  </div>
                                  </div>
                                  <span class="popup-close crt_popup">
                                  <i class="material-icons">close</i>
                                  </span>
                                 </div>

                          </div>



                          <div onload="myfunc()"  id="popup_com" class=" mgs-popup success f-in">
                              <div class="popup-inner">
                              <div class="msg-wrap">
                                  <div class="message-details">
                                  <i class="material-icons" aria-hidden="true">check_circle</i>
                                  <div class="success-message">Success: You have added <a href="">{{$row->product_name}}</a> to your product comparison!</div>
                                  
                                  </div>
                                  <div class="btn-wrap">
                                  <a href="compare">
                                      <button  class="btn">Compare Now </button>
                                    
                                  </a>
                                  <a href="cart.php">
                                      <button  class="btn st-outline"> Continue </button>
                                     
                                  </a>
                                  </div>
                                  </div>
                              <span class="popup-close comp_popup">
                                  <i class="material-icons">close</i>
                              </span>
                              </div>
                          </div>                              
                             
                                 
               </div>

          </div>
      </div>

   </div>

 </div>
</div>
@endsection
