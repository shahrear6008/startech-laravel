@extends('layouts.default')
@section('content')
@section('title','PC Builder - Build Your Own Computer - Star Tech')


<section class="after-header p-tb-10">
    <div class="container">
        <ul class="breadcrumb">
          <li>
            <a href="/">
              <i class="material-icons">home</i>
            </a>
          </li>
          <li>
            <a href="tool"> Pc Builder </a>
          </li>
        </ul>
  </div>
</section>

<section class="build-your-pc pc-info bg-bt-gray">
  <div class="container">
    <div class="pcb-container">
      <div class="pcb-head">
        <div class="startech-logo">
          <img
            class="logo"
            src="{{asset('img/icon/logo.png')}}"
            alt="Logo"
          />
        </div>
        <div class="actions">
          <div class="all-actions">
            <a
              class="action"
              href="{{url('addtocart')}}"
            >
              <i class="material-icons">shopping_basket</i>
              <span class="action-text">Add to Cart</span>
            </a>
            <a
              class="action"
              href="{{url('addtocart')}}"
            >
              <i class="material-icons">content_copy</i>
              <span class="action-text">Copy</span>
            </a>
            <form
              action="https://www.startech.com.bd/tool/tool/base64_to_image"
              target="_blank"
              method="post"
              id="form-base64-image"
            >
              <input
                type="hidden"
                name="image"
                id="input-base64-image"
                value=""
              />
              <button type="submit" class="action">
                <i class="material-icons">camera</i>
                <span class="action-text">Screenshot</span>
              </button>
            </form>
            <a class="pcb-button btn st-outline" href="pc_builder"
              >Build Your Own PC</a
            >
          </div>
        </div>
      </div>





      <div class="pcb-inner-content">
        <div class="pcb-top-content">
          <div class="left">
            <h5 class="m-hide">
              PC Builder - Build Your Own Computer - Star Tech
            </h5>
            <div class="checkbox-inline">
              <input type="checkbox" name="hide" id="input-hide" />
              <label for="input-hide">Hide Unconfigured Components</label>
            </div>
          </div>

       
          <?php $totalpcbamount = 0 ?>
            <?php $totalpcbwatt = 0 ?>
             
              @foreach($Totalamount as $data)
              <?php  $totalpcbamount  += $data->product_price ?>           
              <?php  $totalpcbwatt  += $data->product_watt ?>           
              
              @endforeach
         
          <div class="right">
            <div class="total-amount estimated-watt">
              <span class="amount">{{$totalpcbwatt }}W</span><br />
              <span class="items">Estimated Wattage</span>
              <span class="betaa">BETA</span>
            </div>
            <div class="total-amount t-price">
           
              <span class="amount">{{$totalpcbamount }} ৳ </span>
            <br />
            @if(count($Totalamount) > 0)
            <span class="items">{{count($Totalamount)}} Items</span>
            @else
            <span class="items">0 Items</span>
            @endif
    
            </div>
          </div>
        </div>
        <div class="pcb-content">
          <div class="content-label">Core Components</div>
        


       <!--   componnent part 1 -->
@if(count($component_id1)>0)

@foreach($component_id1 as  $pcbuilder)
          <div class="c-item selected">
            <div class="img">
              <a
                target="_blank"
                href=""
                >
                <img
                  src="{{asset($pcbuilder->product_image)}}"
                  alt="CPU"
                  title="CPU"
                  width="80"
                  height="80"
                  />
              </a>
            </div>
            <div class="details">
              <div class="component-name"><span>CPU</span></div>
              <div class="product-name">
              {{$pcbuilder->product_name}}
              </div>
              <div class="product-watt">
                <img src="{{asset('./img/icon/watt.svg')}}" alt="Wattage Icon" />
                <span>6W</span> <span> - </span> <span>54W</span>
              </div>
            </div>
            <div class="item-price">
              <div class="price">{{$pcbuilder->product_price}}৳</div>
            </div>
            <div class="actions">
              <span class="stock-status">{{$pcbuilder->product_availability}}</span>
            </div>
          </div>          
@endforeach
@endif
       <!--   componnent part 2 -->
       @if(count($component_id2)>0)

@foreach($component_id2 as  $pcbuilder)
          <div class="c-item selected">
            <div class="img">
              <a
                target="_blank"
                href=""
                ><img
                  src="{{asset($pcbuilder->product_image)}}"
                  alt="CPU Cooler"
                  title="CPU Cooler"
                  width="80"
                  height="80"
              /></a>
            </div>
            <div class="details">
              <div class="component-name"><span>CPU Cooler</span></div>
              <div class="product-name">{{$pcbuilder->product_name}}</div>
              <div class="product-watt">
                <img src="{{asset('./img/icon/watt.svg')}}" alt="Wattage Icon" />
                <span>5W</span> <span> - </span> <span>10W</span>
              </div>
            </div>
            <div class="item-price">
             <div class="price">{{$pcbuilder->product_price}}৳</div>
            </div>
            <div class="actions">
              <span class="stock-status">In Stock</span>
            </div>
          </div>
      
      
          @endforeach
@endif
       <!--   componnent part 3 -->
       @if(count($component_id3)>0)

@foreach($component_id3 as  $pcbuilder)
            
                              
                 
          
          <div class="c-item selected">
            <div class="img">
              <a
                target="_blank"
                href=""
                ><img
                  src="{{asset($pcbuilder->product_image)}}"
                  alt="Mother Board"
                  title="Mother Board"
                  width="80"
                  height="80"
              /></a>
            </div>
            <div class="details">
              <div class="component-name"><span>Mother Board</span></div>
              <div class="product-name">{{$pcbuilder->product_name}}</div>
              <div class="product-watt">
                <img src="{{asset('./img/icon/watt.svg')}}" alt="Wattage Icon" />
                <span>15W</span> <span> - </span> <span>60W</span>
              </div>
            </div>
            <div class="item-price">
             <div class="price">{{$pcbuilder->product_price}}৳</div>
            </div>
            <div class="actions">
              <span class="stock-status">In Stock</span>
            </div>
          </div>
          @endforeach
@endif
       <!--   componnent part 4 -->
       @if(count($component_id4)>0)

@foreach($component_id4 as  $pcbuilder)   
      
          <div class="c-item selected">
            <div class="img">
              <a
                target="_blank"
                href=""
                ><img
                  src="{{asset($pcbuilder->product_image)}}"
                  alt="RAM - 1"
                  title="RAM - 1"
                  width="80"
                  height="80"
              /></a>
            </div>
            <div class="details">
              <div class="component-name"><span>RAM - 1</span></div>
              <div class="product-name">{{$pcbuilder->product_name}}</div>
              <div class="product-watt">
                <img src="{{asset('./img/icon/watt.svg')}}" alt="Wattage Icon" />
                <span>3W</span> <span> - </span> <span>5W</span>
              </div>
            </div>
            <div class="item-price">
             <div class="price">{{$pcbuilder->product_price}}৳</div>
            </div>
            <div class="actions">
              <span class="stock-status">In Stock</span>
            </div>
          </div>



          @endforeach
@endif
       <!--   componnent part 5-->
       @if(count($component_id5)>0)

@foreach($component_id5 as  $pcbuilder)
               <div class="c-item selected">
                  <div class="img">
                    <a target="_blank" href="">
                      <img   src="{{asset($pcbuilder->product_image)}}" alt="RAM - 2" title="RAM - 2" width="80" height="80">
                    </a>
                  </div>
                  <div class="details">
                    <div class="component-name">
                      <span>RAM - 2</span>
                    </div>
                    <div class="product-name"></div>
                    <div class="product-watt">
                      <img src="{{asset('./img/icon/watt.svg')}}" alt="Wattage Icon">
                      <span>3W</span>
                      <span> - </span>
                      <span>5W</span>
                    </div>
                  </div>
                  <div class="item-price">
                    <div class="price">{{$pcbuilder->product_price}}৳ </div>
                  </div>
                  <div class="actions">
                    <span class="stock-status">In Stock</span>
                  </div>
                </div>
         
         
                @endforeach
@endif
       <!--   componnent part 6 -->
       @if(count($component_id6)>0)

@foreach($component_id6 as  $pcbuilder)               
          <div class="c-item selected">
            <div class="img">
              <a
                target="_blank"
                href=""
                ><img
                  src="{{asset($pcbuilder->product_image)}}"
                  alt="Storage - 1"
                  title="Storage - 1"
                  width="80"
                  height="80"
              /></a>
            </div>
            <div class="details">
              <div class="component-name"><span>Storage - 1</span></div>
              <div class="product-name">{{$pcbuilder->product_name}}</div>
              <div class="product-watt">
                <img src="{{asset('./img/icon/watt.svg')}}" alt="Wattage Icon" />
                <span>2W</span> <span> - </span> <span>10W</span>
              </div>
            </div>
            <div class="item-price">
             <div class="price">{{$pcbuilder->product_price}}৳</div>
            </div>
            <div class="actions">
              <span class="stock-status">In Stock</span>
            </div>
          </div>
          @endforeach
@endif
       <!--   componnent part 7 -->
       @if(count($component_id7)>0)

@foreach($component_id7 as  $pcbuilder)      
       
          
        <div class="c-item selected">
          <div class="img">
            <a target="_blank" href="">
              <img src="{{asset($pcbuilder->product_image)}}" alt="Storage  - 2" title="Storage  - 2" width="80" height="80">
            </a>
          </div>
          <div class="details">
            <div class="component-name">
              <span>Storage - 2</span>
            </div>
            <div class="product-name">{{$pcbuilder->product_name}}</div>
            <div class="product-watt">
              <img src="{{asset('./img/icon/watt.svg')}}" alt="Wattage Icon">
              <span>2W</span>
              <span> - </span>
              <span>10W</span>
            </div>
          </div>
          <div class="item-price">
            <div class="price">{{$pcbuilder->product_price}}৳</div>
          </div>
          <div class="actions">
            <span class="stock-status">In Stock</span>
          </div>
        
        </div>


        @endforeach
@endif
       <!--   componnent part 8-->
       @if(count($component_id8)>0)

@foreach($component_id8 as  $pcbuilder)
        
      
        
        <div class="c-item selected">
          <div class="img">
            <a target="_blank" href="">
              <img src="{{asset($pcbuilder->product_image)}}" alt="Graphics Card" title="Graphics Card" width="80" height="80">
            </a>
          </div>
          <div class="details">
            <div class="component-name">
              <span>Graphics Card</span>
            </div>
            <div class="product-name">{{$pcbuilder->product_name}}</div>
            <div class="product-watt">
              <img src="{{asset('./img/icon/watt.svg')}}" alt="Wattage Icon">
              <span>12W</span>
              <span> - </span>
              <span>49W</span>
            </div>
          </div>
          <div class="item-price">
          <div class="price">{{$pcbuilder->product_price}}৳</div>
          </div>
          <div class="actions">
            <span class="stock-status">In Stock</span>
          </div>
        </div>

        @endforeach
@endif
       <!--   componnent part 9 -->
       @if(count($component_id9)>0)

@foreach($component_id9 as  $pcbuilder)    
        


        <div class="c-item selected">
          <div class="img">
            <a target="_blank" href="">
              <img src="{{asset($pcbuilder->product_image)}}" alt="Power Supply" title="Power Supply" width="80" height="80">
            </a>
          </div>
          <div class="details">
            <div class="component-name">
              <span>Power Supply</span>
            </div>
            <div class="product-name">{{$pcbuilder->product_name}}</div>
          </div>
          <div class="item-price">
          <div class="price">{{$pcbuilder->product_price}}৳</div>
          </div>
          <div class="actions">
            <span class="stock-status">In Stock</span>
          </div>
        </div>

        @endforeach
@endif
       <!--   componnent part 10 -->
       @if(count($component_id10)>0)

@foreach($component_id10 as  $pcbuilder)  
        
        <div class="c-item selected">
          <div class="img">
            <a target="_blank" href="">
              <img src="{{asset($pcbuilder->product_image)}}" alt="Casing" title="Casing" width="80" height="80">
            </a>
          </div>
          <div class="details">
            <div class="component-name">
              <span>Casing</span>
            </div>
            <div class="product-name">{{$pcbuilder->product_name}}</div>
          </div>
          <div class="item-price">
          <div class="price">{{$pcbuilder->product_price}}৳</div>
          </div>
          <div class="actions">
            <span class="stock-status">In Stock</span>
          </div>
        </div>
           
         
        @endforeach
@endif
       <!--   componnent part 11 -->
       @if(count($component_id11)>0)

@foreach($component_id11 as  $pcbuilder)       

       
        <div class="c-item selected">
          <div class="img">
            <a target="_blank" href="">
              <img src="{{asset($pcbuilder->product_image)}}" alt="Casing Cooler" title="Casing Cooler" width="80" height="80">
            </a>
          </div>
          <div class="details">
            <div class="component-name">
              <span>Casing Cooler</span>
            </div>
            <div class="product-name">{{$pcbuilder->product_name}}</div>
            <div class="product-watt">
              <img src="{{asset('./img/icon/watt.svg')}}" alt="Wattage Icon">
              <span>1W</span>
              <span> - </span>
              <span>5W</span>
            </div>
          </div>
          <div class="item-price">
          <div class="price">{{$pcbuilder->product_price}}৳</div>
          </div>
          <div class="actions">
            <span class="stock-status">In Stock</span>
          </div>
        </div>
            
        @endforeach
@endif
       <!--   componnent part 12 -->
       @if(count($component_id12)>0)

@foreach($component_id12 as  $pcbuilder)   
        
        <div class="c-item selected">
          <div class="img">
            <a target="_blank" href="">
              <img src="{{asset($pcbuilder->product_image)}}" alt="Monitor" title="Monitor" width="80" height="80">
            </a>
          </div>
          <div class="details">
            <div class="component-name">
              <span>Monitor</span>
            </div>
            <div class="product-name">{{$pcbuilder->product_name}}</div>
          </div>
          <div class="item-price">
          <div class="price">{{$pcbuilder->product_price}}৳</div>
          </div>
          <div class="actions">
            <span class="stock-status">In Stock</span>
          </div>
        </div>
     
@endforeach
@endif
       <!--   componnent part 13 -->
 @if(count($component_id13)>0)

@foreach($component_id13 as  $pcbuilder)    
        <div class="c-item selected">
          <div class="img">
            <a target="_blank" href="">
              <img src="{{asset($pcbuilder->product_image)}}" alt="Keyboard" title="Keyboard" width="80" height="80">
            </a>
          </div>
          <div class="details">
            <div class="component-name">
              <span>Keyboard</span>
            </div>
            <div class="product-name">{{$pcbuilder->product_name}}</div>
          </div>
          <div class="item-price">
          <div class="price">{{$pcbuilder->product_price}}৳</div>
          </div>
          <div class="actions">
            <span class="stock-status">In Stock</span>
          </div>
        </div>
        @endforeach
@endif
       <!--   componnent part 14 -->
       @if(count($component_id14)>0)

@foreach($component_id14 as  $pcbuilder)       
        
        <div class="c-item selected">
          <div class="img">
            <a target="_blank" href="">
              <img src="{{asset($pcbuilder->product_image)}}" alt="Mouse" title="Mouse" width="80" height="80">
            </a>
          </div>
          <div class="details">
            <div class="component-name">
              <span>Mouse</span>
            </div>
            <div class="product-name">{{$pcbuilder->product_name}}</div>
          </div>
          <div class="item-price">
          <div class="price">{{$pcbuilder->product_price}}৳</div>
          </div>
          <div class="actions">
            <span class="stock-status">In Stock</span>
          </div>
        </div>
                
            
        @endforeach
@endif
       <!--   componnent part 15 -->
       @if(count($component_id15)>0)

@foreach($component_id15 as  $pcbuilder)     
    
        
        <div class="c-item selected">
          <div class="img">
            <a target="_blank" href="">
            <img src="{{asset($pcbuilder->product_image)}}" alt="Anti Virus" title="Anti Virus" width="80" height="80">
            </a>
          </div>
          <div class="details">
            <div class="component-name">
              <span>Headphone</span>
            </div>
            <div class="product-name">{{$pcbuilder->product_name}}</div>
          </div>
          <div class="item-price">
          <div class="price">{{$pcbuilder->product_price}}৳</div>
          </div>
          <div class="actions">
            <span class="stock-status">In Stock</span>
          </div>
        </div>
               
        @endforeach
@endif
       <!--   componnent part 16 -->
       @if(count($component_id16)>0)

@foreach($component_id16 as  $pcbuilder)             
        
        <div class="c-item selected">
          <div class="img">
            <a target="_blank" href="">
              <img src="{{asset($pcbuilder->product_image)}}" alt="Anti Virus" title="Anti Virus" width="80" height="80">
            </a>
          </div>
          <div class="details">
            <div class="component-name">
              <span>Anti Virus</span>
            </div>
            <div class="product-name">{{$pcbuilder->product_name}}</div>
          </div>
          <div class="item-price">
          <div class="price">{{$pcbuilder->product_price}}৳</div>
          </div>
          <div class="actions">
            <span class="stock-status">In Stock</span>
          </div>
        </div>
              
               
    
@endforeach
@endif
<!--   componnent part 17 -->
 @if(count($component_id17)>0)

@foreach($component_id17 as  $pcbuilder)                    
         
        
        <div class="c-item selected">
          <div class="img">
            <a target="_blank" href="">
              <img src="{{asset($pcbuilder->product_image)}}" alt="UPS" title="UPS" width="80" height="80">
            </a>
          </div>
          <div class="details">
            <div class="component-name">
              <span>UPS</span>
            </div>
            <div class="product-name">{{$pcbuilder->product_name}}</div>
          </div>
          <div class="item-price">
          <div class="price">{{$pcbuilder->product_price}}৳</div>
          </div>
          <div class="actions">
            <span class="stock-status">In Stock</span>
          </div>
        </div>
@endforeach
@endif

        </div>
      </div>
    </div>
  </div>
</section>





@section('scripts')


<script type="text/javascript">
    var image = document.getElementById("input-base64-image");
    function takeShot() {
        var region = document.querySelector(".pcb-container"), scrollTop = document.documentElement.scrollTop, config = {
            async: true,
        };
        if(scrollTop) {
            config.scrollY = -scrollTop
        }

        html2canvas(region, config).then(function(canvas) {
            var pngUrl = canvas.toDataURL();
            window.ca = canvas
            image.value = canvas.toDataURL("image/jpeg");
        }).catch(function (reason) {
            console.log(reason)
        });
    }
    app.onReady(window, ["html2canvas"], function () {
       takeShot();
       $("#input-hide").on("change", function () {
           if(this.checked) {
               $(".c-item.blank").addClass("hide")
           } else {
               $(".c-item.blank").removeClass("hide")
           }
           image.value = "";
           setTimeout(takeShot, 500)
       })
    }, 30, 100);

    var form = document.getElementById("form-base64-image");
    form.onsubmit = function (ev) {
        var input = document.getElementById("input-base64-image");
        if(!input.value) {
            alert("Screenshot isn't prepared yet. Please clink again")
        }
        if(!input.value) {
            ev.preventDefault()
        }
    }
</script>

@endsection
@endsection