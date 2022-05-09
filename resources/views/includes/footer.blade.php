<footer>
  <div class="container">
    <div class="main_footer ">
      <div class="support">
        <div class="spt" >Support</div>
        <a href="tel:01852073174">
          <div class="btnf1">
          <i  class="material-icons">phone</i>
            <div class="contact">
              <span>9AM-8PM</span>
              <div> 09678002003 </div>
            </div>
          </div>
        </a>
        <a href="#" target="blank">
          <div class="btnf1">
          <i class="material-icons">place</i>
            <div class="contact">
              <span>Store Location</span>
              <div> Find Our Store </div>
            </div>
          </div>
        </a>
      </div>
      <div class="aboutus">
        <div class="au">About US</div>
        <ul class="aboutus-s">
          <li>
            <a href="range.php">EMI Terms</a>
          </li>
          <li>
            <a href="#">About us</a>
          </li>
          <li>
            <a href="#">Online Delivery</a>
          </li>
          <li>
            <a href="#">Privecy Policy</a>
          </li>
          <li>
            <a href="#">Terms and Conditions </a>
          </li>
          <li>
            <a href="#">Refund & return Policy</a>
          </li>
          <li>
            <a href="#">Career</a>
          </li>
          <br>
          <li>
            <a href="#">Write for us</a>
          </li>
          <li>
            <a href="#">Blog</a>
          </li>
          <li>
            <a href="#">Contact us</a>
          </li>
          <li>
            <a href="#">Brands</a>
          </li>
        </ul>
      </div>
      <div class="stay">
        <div class="sc">STAY CONNECTED</div>
        <div class="ste">Star Tech & Engineering Ltd</div>
        <p> 6th floor, 28 Kazi Nazrul Islam Ave,Navana <br /> Zohura Square, Dhaka 1000
          <br /> Email:
        </p>
        <p>
          <a class="mail" href="mailto:shahrearrahman6008@gmail.com">info.webteam@startechbd.com</a>
        </p>
        <p class="social_icon">
          <a href="http://fb.com/shahrear6008" target="blank">
          <i  class="material-icons">facebook</i>
          </a>
          <a href="http://youtube.com" target="blank">
         
          <span class="material-icons">subscriptions</span>

          </a>
          <a href="http://instagram.com" target="blank">
         
          <span class="material-icons">face</span>
          </a>
        </p>
      </div>
    </div>
    <div class="sub_footer">
      <p>Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved</p>
      <p>Powered By: <a target="blank" href="http://startech.com.bd">Star Soft</a></p>
    </div>
  </div>
</footer>

<!--  compare -->

<div class="drawer pop_up_compare" id="cmpr-panel">
    <div class="title">
        <p>Compare Product</p>
        <span class="btncompare loaded close"><i class="material-icons">close</i></span>
    </div>
    <div class="content">
    <div id="loader"></div>
      @if(session('compare')) 
      @foreach(session('compare') as $id => $row)

            
                  <div class="item">

                  <a class="image" href="{{ url('single/'.$id)}}">
                  <img src="{{asset($row['image'])}}" alt="Image1" class="" width="47" height="47">
                  </a>

           
                  <div class="name">{{$row['name']}}</div>
                

                  <button type="button" data-id="{{ $id }}"   class="remove-from-compare bg-transparent " name="remove">
													<a class="remove" href="">
                          <i class="material-icons" aria-hidden="true">delete</i>
													</a>
					    		</button>
                 
                </div>
                @endforeach
         @else
          <div class="empty-content">
                    <p class="text-center">Your compare list is empty!</p>
                   </div>
         @endif
         @if(session('compare')) 
                  <form action="{{url('clear_compare')}}" method="get" class="footer btn-wrap">
                          <button type="submit"
                           class="clear-all" onclick="compare.clear()">Clear</button>
                          <a class="btn" href="{{url('compare')}}">Compare Now</a>
                 </form>
         @endif        
                
                  <div class="footer btn-wrap"></div>
               
 </div>
</div>


 


  <!-- //popup cart -->

  <div id="preloader" class="pop_up_cart">
    <div class="title">
        <p>YOUR CART</p>
        <span class="top_cart"><i class="material-icons">close</i></span>
    </div>
    <div class="content">
      <div id="loader"></div>
      <?php $total = 0 ?>
<!-- by this code session get all product that user chose -->
        @if(session('cart'))
            @foreach(session('cart') as $id => $details)

                <?php $total += $details['price'] * $details['quantity'] ?>

     <div class="item">

          <a class="image" href="{{ url('single/'.$id)}}">
            <img src="{{asset($details['image'])}}" alt="Image1" class="" width="47" height="47">
          </a>
    
      <div class="info">
        <div class="name">{{$details['name']}}</div>
        <span class="amount">{{$details['price']}}<i class="material-icons">clear</i>{{$details['quantity']}}</span>
        
       
        <span class="eq">=</span>
        <span class="total">{{ $details['price'] * $details['quantity']}}৳</span>
      </div>
      <button type="button" data-id="{{ $id }}"   class="remove-from-cart bg-transparent " name="remove">
        <a class="remove" href="">
          <i class="material-icons">delete</i>
        </a>
      </button>     
    </div>
    @endforeach
    @else
    <div class="empty-content">
      <p class="text-center">Your shopping cart is empty!</p>
    </div>
    @endif          
   </div>
   
   <div class="footer">
  <div class="promotion-code">
    <div class="input-group">
      <input type="text" placeholder="Promo Code" id="input-cart-coupon">
      <span class="input-group-btn">
        <button data-target="#input-cart-coupon" class="btn button-coupon" type="submit">Apply</button>
      </span>
    </div>
  </div>
  <div class="total">
    <div class="title">Sub-Total</div>
    <div class="amount"> {{$total}}৳</div>
  </div>
  <div class="total">
    <div class="title">Total</div>
    <div class="amount"> {{$total}}৳</div>
  </div>
  @if(session('cart'))
  <div class="checkout-btn">
  <a href="{{url('checkout')}}" >
             <button class="btn submit">Checkout</button>
  </a>
  </div>
  @endif 
</div>
   
  </div>

  <div class="overlay"></div>
  <!-- <div class="cart_preloader"> 
    <div class="circle">
      <div class="inner_circle">
      </div>
    </div>
  </div>  -->
  @yield('scripts')
    <script src="{{asset('js/accordion.js')}}"></script>
    <script src="{{asset('js/script.js')}}"></script>   
    <script src="{{asset('script.js')}}"></script>   
    <script src="{{asset('js/slider.js')}}"></script>
    <script src="{{asset('js/range_slider.js')}}"></script>
    <script src="{{asset('js/start.js')}}"></script>
    <script src="{{asset('js/product.js')}}"></script>
            

   <script type="text/javascript">
    $.ajaxSetup({ headers: { 'csrftoken' : '{{ csrf_token() }}' } });


    $(document).ready(function () {
     

        $('#com_search').on('keyup', function(){
            var value = $(this).val();
            $.ajax({
                type: "get",
                url: "/common",
                data: {'com_search':value},
                success: function (data) {                 
                   
                    $('.dropdown-menu').html(data).show();

                }
            });

        });
    });


        $(".remove-from-cart").click(function (e) {
            
            var ele = $(this);
        
            $.ajax({
                url: '{{ url('remove-from-cart') }}',
                method: "DELETE",
                data: {_token: '{{ csrf_token() }}', id: ele.attr("data-id")},
                success:function(result){
                      window.location.reload();
                    
                }
            });
            e.preventDefault();
            
        });

        $(".remove-from-compare").click(function (e) {
            
            var ele = $(this);
        
            $.ajax({
                url: '{{ url('remove-from-compare') }}',
                method: "DELETE",
                data: {_token: '{{ csrf_token() }}', id: ele.attr("data-id")},
                success:function(result){
                      window.location.reload();
                    
                }
            });
            e.preventDefault();
            
        });


          (function (window, document) {
              var loader = function () {
                  var script = document.createElement("script"), tag = document.getElementsByTagName("script")[0];
                  script.src = "https://sandbox.sslcommerz.com/embed.min.js?" + Math.random().toString(36).substring(7);
                  tag.parentNode.insertBefore(script, tag);
              };

              window.addEventListener ? window.addEventListener("load", loader, false) : window.attachEvent("onload", loader);
          })(window, document);
        </script>
  </body>
  </html>