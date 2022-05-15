
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


<section class="build-your-pc bg-bt-gray">
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
          <a class="action" href="addtocart.php">
              <i class="material-icons">shopping_basket</i>
              <span class="action-text">Add to Cart</span>
            </a>
            <a
              class="action"
              href="{{url('account/save_pc')}}"
            >
              <i class="material-icons">save</i>
              <span class="action-text">Save PC</span>
            </a>
            <a
              class="action m-hide"
              href="{{url('print_pc')}}"
            >
              <i class="material-icons">print</i>
              <span class="action-text">Print</span>
            </a>
            <form
              action="https://www.startech.com.bd/tool/tool/base64_to_image"
              target="_blank"
              method="post"
              id="form-base64-image"
            >
            
              <button type="submit" class="action">
                <i class="material-icons">camera</i>
                <span class="action-text">Screenshot</span>
              </button>
            </form>
            <a id="pchide"
              class="pcb-button btn st-outline"
              href="#"
              >Get a Quote</a
            >
          </div>
        </div>
      </div>

      <div class="pcb-inner-content">
        <div class="pcb-top-content">
          <div class="left">
            <h1 class="m-hide">
              PC Builder - Build Your Own Computer - Star Tech
            </h1>
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
    
       
          
@if(count($component_id1)>0)

@foreach($component_id1 as  $pcbuilder)
                         
<div class="c-item selected">
  <div class="img">
    <a
      target="_blank"
      href="#"
      ><img
        src="{{asset($pcbuilder->product_image)}}"
        alt="CPU"
        title="CPU"
        width="80"
        height="80"
    /></a>
  </div>
  <div class="details">
    <div class="component-name">
      <span>CPU</span><span class="mark">Required</span>
    </div>
    <div class="product-name">{{$pcbuilder->product_name}}</div>
    <div class="product-watt">
      <img src="img/icon/watt.svg" alt="Wattage Icon" />
      <span>6W</span> <span> - </span> <span>54W</span>
    </div>
  </div>
  <div class="item-price">
    <div class="price">{{$pcbuilder->product_price}}৳</div>
  </div>
  <div class="actions">
    <div class="action-items">
      <a
        class="action"
        href="deltopcb/{{$pcbuilder->id}}"
        title="Remove"
        ><i class="material-icons">clear</i></a>
      <a
        class="action"
        href="tool/choose/1"
        title="Choose"
        ><i class="material-icons">autorenew</i></a>
    </div>
  </div>
</div>
                   
@endforeach
@else
<div class="c-item blank">
                        <div class="img">
                          <span class="img-ico cpu"></span>
                        </div>
                        <div class="details">
                          <div class="component-name">
                            <span>CPU</span><span class="mark">Required</span>
                          </div>
                          <div class="product-name"></div>
                        </div>
                        <div class="item-price"></div>
                        <div class="actions">
                          <a
                            class="btn st-outline"
                            href="{{url('tool/choose/1')}}"
                            title=""
                            >Choose</a
                          >
                        </div>
          </div>
@endif
        
@if(count($component_id2)>0)                            
     
@foreach( $component_id2 as  $pcbuilder)                 
<div class="c-item selected">
  <div class="img">
    <a
      target="_blank"
      href=""
      ><img
        src="{{asset($pcbuilder->product_image)}}"
        alt="CPU"
        title="CPU"
        width="80"
        height="80"
    /></a>
  </div>
  <div class="details">
    <div class="component-name">
      <span>CPU</span><span class="mark">Required</span>
    </div>
    <div class="product-name">{{$pcbuilder->product_name}}</div>
    <div class="product-watt">
      <img src="img/icon/watt.svg" alt="Wattage Icon" />
      <span>6W</span> <span> - </span> <span>54W</span>
    </div>
  </div>
  <div class="item-price">
    <div class="price">{{$pcbuilder->product_price}}৳</div>
  </div>
  <div class="actions">
    <div class="action-items">
      <a
        class="action"
        href="deltopcb/{{$pcbuilder->id}}"
        title="Remove"
        ><i class="material-icons">clear</i></a
      >
      <a
        class="action"
        href="tool/choose/2"
        title="Choose"
        ><i class="material-icons">autorenew</i></a
      >
    </div>
  </div>
</div>

@endforeach
@else
<div class="c-item blank">
          <div class="img">
            <span class="img-ico cpu-cooler"></span>
          </div>
          <div class="details">
            <div class="component-name"><span>CPU Cooler</span></div>
            <div class="product-name"></div>
          </div>
          <div class="item-price"></div>
          <div class="actions">
            <a
              class="btn st-outline"
              href="tool/choose/2"
              title=""
              >Choose</a
            >
          </div>
        </div>

@endif


@if(count($component_id3) > 0)
       

@foreach( $component_id3 as  $pcbuilder)           
<div class="c-item selected">
<div class="img">
<a
target="_blank"
href=""
><img
src="{{$pcbuilder->product_image}}"
alt="CPU"
title="CPU"
width="80"
height="80"
/></a>
</div>
<div class="details">
<div class="component-name">
<span>CPU</span><span class="mark">Required</span>
</div>
<div class="product-name">{{$pcbuilder->product_name}}</div>
<div class="product-watt">
<img src="img/icon/watt.svg" alt="Wattage Icon" />
<span>6W</span> <span> - </span> <span>54W</span>
</div>
</div>
<div class="item-price">
<div class="price">{{$pcbuilder->product_price}}৳</div>
</div>
<div class="actions">
<div class="action-items">
<a
class="action"
href="deltopcb/{{$pcbuilder->id}}"
title="Remove"
><i class="material-icons">clear</i></a
>
<a
class="action"
href="tool/choose/3"
title="Choose"
><i class="material-icons">autorenew</i></a
>
</div>
</div>
</div>

@endforeach

@else
<div class="c-item blank">
            <div class="img">
              <span class="img-ico mother-board"></span>
            </div>
            <div class="details">
              <div class="component-name">
                <span>Mother Board</span><span class="mark">Required</span>
              </div>
              <div class="product-name"></div>
            </div>
            <div class="item-price"></div>
            <div class="actions">
              <a
                class="btn st-outline"
                href="tool/choose/3"
                title=""
                >Choose</a
              >
            </div>
          </div>
 
@endif
  












@if(count($component_id4) > 0) 

       

@foreach( $component_id4 as  $pcbuilder)         
<div class="c-item selected">
<div class="img">
<a
target="_blank"
href="https://www.startech.com.bd/intel-pentium-gold-g5420-processor"
><img
src="{{asset($pcbuilder->product_image)}}"
alt="CPU"
title="CPU"
width="80"
height="80"
/></a>
</div>
<div class="details">
<div class="component-name">
<span>CPU</span><span class="mark">Required</span>
</div>
<div class="product-name">{{$pcbuilder->product_name}}</div>
<div class="product-watt">
<img src="img/icon/watt.svg" alt="Wattage Icon" />
<span>6W</span> <span> - </span> <span>54W</span>
</div>
</div>
<div class="item-price">
<div class="price">{{$pcbuilder->product_price}}৳</div>
</div>
<div class="actions">
<div class="action-items">
<a
class="action"
href="deltopcb/{{$pcbuilder->id}}"
title="Remove"
><i class="material-icons">clear</i></a
>
<a
class="action"
href="tool/choose/4"
title="Choose"
><i class="material-icons">autorenew</i></a
>
</div>
</div>
</div>
@endforeach  
@else




<div class="c-item blank">
            <div class="img">
              <span class="img-ico ram---1"></span>
            </div>
            <div class="details">
              <div class="component-name">
                <span>RAM - 1</span><span class="mark">Required</span>
              </div>
              <div class="product-name"></div>
            </div>
            <div class="item-price"></div>
            <div class="actions">
              <a
                class="btn st-outline"
                href="tool/choose/4"
                title=""
                >Choose</a
              >
            </div>
          </div>
@endif

         
          
@if(count($component_id5) > 0) 

       

@foreach( $component_id5 as  $pcbuilder)                                 
            
    
<div class="c-item selected">
<div class="img">
<a
target="_blank"
href="https://www.startech.com.bd/intel-pentium-gold-g5420-processor"
><img
src="{{asset($pcbuilder->product_image)}}"
alt="CPU"
title="CPU"
width="80"
height="80"
/></a>
</div>
<div class="details">
<div class="component-name">
<span>CPU</span><span class="mark">Required</span>
</div>
<div class="product-name">{{$pcbuilder->product_name}}</div>
<div class="product-watt">
<img src="img/icon/watt.svg" alt="Wattage Icon" />
<span>6W</span> <span> - </span> <span>54W</span>
</div>
</div>
<div class="item-price">
<div class="price">{{$pcbuilder->product_price}}৳</div>
</div>
<div class="actions">
<div class="action-items">
<a
class="action"
href="deltopcb/{{$pcbuilder->id}}"
title="Remove"
><i class="material-icons">clear</i></a
>
<a
class="action"
href="tool/choose/5"
title="Choose"
><i class="material-icons">autorenew</i></a
>
</div>
</div>
</div>
@endforeach  
@else       
         <div class="c-item blank">
            <div class="img">
              <span class="img-ico ram---2"></span>
            </div>
            <div class="details">
              <div class="component-name"><span>RAM - 2</span></div>
              <div class="product-name"></div>
            </div>
            <div class="item-price"></div>
            <div class="actions">
              <a
                class="btn st-outline"
                href="tool/choose/5"
                title=""
                >Choose</a
              >
            </div>
          </div>


 
                              
            
@endif

         
          
@if(count($component_id6) > 0) 

       

@foreach( $component_id6 as  $pcbuilder)         
                  
    
<div class="c-item selected">
<div class="img">
<a
target="_blank"
href="https://www.startech.com.bd/intel-pentium-gold-g5420-processor"
><img
src="{{asset($pcbuilder->product_image)}}"
alt="CPU"
title="CPU"
width="80"
height="80"
/></a>
</div>
<div class="details">
<div class="component-name">
<span>CPU</span><span class="mark">Required</span>
</div>
<div class="product-name">{{$pcbuilder->product_name}}</div>
<div class="product-watt">
<img src="img/icon/watt.svg" alt="Wattage Icon" />
<span>6W</span> <span> - </span> <span>54W</span>
</div>
</div>
<div class="item-price">
<div class="price">{{$pcbuilder->product_price}}৳</div>
</div>
<div class="actions">
<div class="action-items">
<a
class="action"
href="deltopcb/{{$pcbuilder->id}}"
title="Remove"
><i class="material-icons">clear</i></a
>
<a
class="action"
href="tool/choose/6"
title="Choose"
><i class="material-icons">autorenew</i></a
>
</div>
</div>
</div>

@endforeach  
@else
<div class="c-item blank">
            <div class="img">
              <span class="img-ico storage---1"></span>
            </div>
            <div class="details">
              <div class="component-name">
                <span>Storage - 1</span><span class="mark">Required</span>
              </div>
              <div class="product-name"></div>
            </div>
            <div class="item-price"></div>
            <div class="actions">
              <a
                class="btn st-outline"
                href="tool/choose/6"
                title=""
                >Choose</a
              >
            </div>
           </div>
                  

         
           @endif

         
          
@if(count($component_id7) > 0) 

       

@foreach( $component_id7 as  $pcbuilder)        
          
<div class="c-item selected">
<div class="img">
<a
target="_blank"
href="https://www.startech.com.bd/intel-pentium-gold-g5420-processor"
><img
src="{{asset($pcbuilder->product_image)}}"
alt="CPU"
title="CPU"
width="80"
height="80"
/></a>
</div>
<div class="details">
<div class="component-name">
<span>CPU</span><span class="mark">Required</span>
</div>
<div class="product-name">{{$pcbuilder->product_name}}</div>
<div class="product-watt">
<img src="img/icon/watt.svg" alt="Wattage Icon" />
<span>6W</span> <span> - </span> <span>54W</span>
</div>
</div>
<div class="item-price">
<div class="price">{{$pcbuilder->product_price}}৳</div>
</div>
<div class="actions">
<div class="action-items">
<a
class="action"
href="deltopcb/{{$pcbuilder->id}}"
title="Remove"
><i class="material-icons">clear</i></a
>
<a
class="action"
href="tool/choose/7"
title="Choose"
><i class="material-icons">autorenew</i></a
>
</div>
</div>
</div>
@endforeach  
@else
<div class="c-item blank">
            <div class="img">
              <span class="img-ico storage----2"></span>
            </div>
            <div class="details">
              <div class="component-name"><span>Storage - 2</span></div>
              <div class="product-name"></div>
            </div>
            <div class="item-price"></div>
            <div class="actions">
              <a
                class="btn st-outline"
                href="tool/choose/7"
                title=""
                >Choose</a
              >
            </div>
          </div>

         
          @endif

         
          
@if(count($component_id8) > 0) 

       

@foreach( $component_id8 as  $pcbuilder)                
      
<div class="c-item selected">
<div class="img">
<a
target="_blank"
href="https://www.startech.com.bd/intel-pentium-gold-g5420-processor"
><img
src="{{asset($pcbuilder->product_image)}}"
alt="CPU"
title="CPU"
width="80"
height="80"
/></a>
</div>
<div class="details">
<div class="component-name">
<span>CPU</span><span class="mark">Required</span>
</div>
<div class="product-name">{{$pcbuilder->product_name}}</div>
<div class="product-watt">
<img src="img/icon/watt.svg" alt="Wattage Icon" />
<span>6W</span> <span> - </span> <span>54W</span>
</div>
</div>
<div class="item-price">
<div class="price">{{$pcbuilder->product_price}}৳</div>
</div>
<div class="actions">
<div class="action-items">
<a
class="action"
href="deltopcb/{{$pcbuilder->id}}"
title="Remove"
><i class="material-icons">clear</i></a
>
<a
class="action"
href="tool/choose/8"
title="Choose"
><i class="material-icons">autorenew</i></a
>
</div>
</div>
</div>

@endforeach  
@else
<div class="c-item blank">
            <div class="img">
              <span class="img-ico graphics-card"></span>
            </div>
            <div class="details">
              <div class="component-name"><span>Graphics Card</span></div>
              <div class="product-name"></div>
            </div>
            <div class="item-price"></div>
            <div class="actions">
              <a
                class="btn st-outline"
                href="tool/choose/8"
                title=""
                >Choose</a
              >
            </div>
          </div>
                            
            

        
 @endif

         
          
@if(count($component_id9) > 0) 

       

@foreach( $component_id9 as  $pcbuilder)            
                  
  
<div class="c-item selected">
<div class="img">
<a
target="_blank"
href="https://www.startech.com.bd/intel-pentium-gold-g5420-processor"
><img
src="{{asset($pcbuilder->product_image)}}"
alt="CPU"
title="CPU"
width="80"
height="80"
/></a>
</div>
<div class="details">
<div class="component-name">
<span>CPU</span><span class="mark">Required</span>
</div>
<div class="product-name">{{$pcbuilder->product_name}}</div>
<div class="product-watt">
<img src="img/icon/watt.svg" alt="Wattage Icon" />
<span>6W</span> <span> - </span> <span>54W</span>
</div>
</div>
<div class="item-price">
<div class="price">{{$pcbuilder->product_price}}৳</div>
</div>
<div class="actions">
<div class="action-items">
<a
class="action"
href="deltopcb/{{$pcbuilder->id}}"
title="Remove"
><i class="material-icons">clear</i></a
>
<a
class="action"
href="tool/choose/9"
title="Choose"
><i class="material-icons">autorenew</i></a
>
</div>
</div>
</div>
@endforeach  
@else      
<div class="c-item blank">
            <div class="img">
              <span class="img-ico power-supply"></span>
            </div>
            <div class="details">
              <div class="component-name"><span>Power Supply</span></div>
              <div class="product-name"></div>
            </div>
            <div class="item-price"></div>
            <div class="actions">
              <a
                class="btn st-outline"
                href="tool/choose/9"
                title=""
                >Choose</a
              >
            </div>
          </div>

 @endif

         
          
@if(count($component_id10) > 0) 

       

@foreach( $component_id10 as  $pcbuilder) 
        
<div class="c-item selected">
<div class="img">
<a
target="_blank"
href="https://www.startech.com.bd/intel-pentium-gold-g5420-processor"
><img
src="{{asset($pcbuilder->product_image)}}"
alt="CPU"
title="CPU"
width="80"
height="80"
/></a>
</div>
<div class="details">
<div class="component-name">
<span>CPU</span><span class="mark">Required</span>
</div>
<div class="product-name">{{$pcbuilder->product_name}}</div>
<div class="product-watt">
<img src="img/icon/watt.svg" alt="Wattage Icon" />
<span>6W</span> <span> - </span> <span>54W</span>
</div>
</div>
<div class="item-price">
<div class="price">{{$pcbuilder->product_price}}৳</div>
</div>
<div class="actions">
<div class="action-items">
<a
class="action"
href="deltopcb/{{$pcbuilder->id}}"
title="Remove"
><i class="material-icons">clear</i></a
>
<a
class="action"
href="tool/choose/10"
title="Choose"
><i class="material-icons">autorenew</i></a
>
</div>
</div>
</div>
@endforeach  
@else

<div class="c-item blank">
            <div class="img">
              <span class="img-ico casing"></span>
            </div>
            <div class="details">
              <div class="component-name"><span>Casing</span></div>
              <div class="product-name"></div>
            </div>
            <div class="item-price"></div>
            <div class="actions">
              <a
                class="btn st-outline"
                href="tool/choose/10"
                title=""
                >Choose</a
              >
            </div>
          </div>

@endif





<!-- 10 -->
          <div class="content-label">Peripherals &amp; Others</div>


        
       
    
     

         
          
@if(count($component_id11) > 0) 

       

@foreach( $component_id11 as  $pcbuilder)        
<div class="c-item selected">
<div class="img">
<a
target="_blank"
href="https://www.startech.com.bd/intel-pentium-gold-g5420-processor"
><img
src="{{asset($pcbuilder->product_image)}}"
alt="CPU"
title="CPU"
width="80"
height="80"
/></a>
</div>
<div class="details">
<div class="component-name">
<span>CPU</span><span class="mark">Required</span>
</div>
<div class="product-name">{{$pcbuilder->product_name}}</div>
<div class="product-watt">
<img src="img/icon/watt.svg" alt="Wattage Icon" />
<span>6W</span> <span> - </span> <span>54W</span>
</div>
</div>
<div class="item-price">
<div class="price">{{$pcbuilder->product_price}}৳</div>
</div>
<div class="actions">
<div class="action-items">
<a
class="action"
href="deltopcb/{{$pcbuilder->id}}"
title="Remove"
><i class="material-icons">clear</i></a
>
<a
class="action"
href="tool/choose/11"
title="Choose"
><i class="material-icons">autorenew</i></a
>
</div>
</div>
</div>
         
@endforeach
@else  


<div class="c-item blank">
            <div class="img">
              <span class="img-ico casing-cooler"></span>
            </div>
            <div class="details">
              <div class="component-name"><span>Casing Cooler</span></div>
              <div class="product-name"></div>
            </div>
            <div class="item-price"></div>
            <div class="actions">
              <a
                class="btn st-outline"
                href="tool/choose/11"
                title=""
                >Choose</a
              >
            </div>
          </div>
@endif
      

         
          
@if(count($component_id12) > 0) 

       

@foreach( $component_id12 as  $pcbuilder)                              
            
  
<div class="c-item selected">
<div class="img">
<a
target="_blank"
href="https://www.startech.com.bd/intel-pentium-gold-g5420-processor"
><img
src="{{asset($pcbuilder->product_image)}}"
alt="CPU"
title="CPU"
width="80"
height="80"
/></a>
</div>
<div class="details">
<div class="component-name">
<span>CPU</span><span class="mark">Required</span>
</div>
<div class="product-name">{{$pcbuilder->product_name}}</div>
<div class="product-watt">
<img src="img/icon/watt.svg" alt="Wattage Icon" />
<span>6W</span> <span> - </span> <span>54W</span>
</div>
</div>
<div class="item-price">
<div class="price">{{$pcbuilder->product_price}}৳</div>
</div>
<div class="actions">
<div class="action-items">
<a
class="action"
href="deltopcb/{{$pcbuilder->id}}"
title="Remove"
><i class="material-icons">clear</i></a
>
<a
class="action"
href="tool/choose/12"
title="Choose"
><i class="material-icons">autorenew</i></a
>
</div>
</div>
</div>
         
@endforeach
@else  
<div class="c-item blank">
            <div class="img">
              <span class="img-ico monitor"></span>
            </div>
            <div class="details">
              <div class="component-name"><span>Monitor</span></div>
              <div class="product-name"></div>
            </div>
            <div class="item-price"></div>
            <div class="actions">
              <a
                class="btn st-outline"
                href="tool/choose/12"
                title=""
                >Choose</a
              >
            </div>
          </div>
        
         
          @endif

         
          
@if(count($component_id13) > 0) 

       

@foreach( $component_id13 as  $pcbuilder)         
<div class="c-item selected">
<div class="img">
<a
target="_blank"
href="https://www.startech.com.bd/intel-pentium-gold-g5420-processor"
><img
src="{{asset($pcbuilder->product_image)}}"
alt="CPU"
title="CPU"
width="80"
height="80"
/></a>
</div>
<div class="details">
<div class="component-name">
<span>CPU</span><span class="mark">Required</span>
</div>
<div class="product-name">{{$pcbuilder->product_name}}</div>
<div class="product-watt">
<img src="img/icon/watt.svg" alt="Wattage Icon" />
<span>6W</span> <span> - </span> <span>54W</span>
</div>
</div>
<div class="item-price">
<div class="price">{{$pcbuilder->product_price}}৳</div>
</div>
<div class="actions">
<div class="action-items">
<a
class="action"
href="deltopcb/{{$pcbuilder->id}}"
title="Remove"
><i class="material-icons">clear</i></a
>
<a
class="action"
href="tool/choose/13"
title="Choose"
><i class="material-icons">autorenew</i></a
>
</div>
</div>
</div>
         
@endforeach
@else       
    
<div class="c-item blank">
            <div class="img">
              <span class="img-ico keyboard"></span>
            </div>
            <div class="details">
              <div class="component-name"><span>Keyboard</span></div>
              <div class="product-name"></div>
            </div>
            <div class="item-price"></div>
            <div class="actions">
              <a
                class="btn st-outline"
                href="tool/choose/13"
                title=""
                >Choose</a
              >
            </div>
          </div>
          @endif        
            
          @if(count($component_id14) > 0) 

       

@foreach( $component_id14 as  $pcbuilder)                   
   
<div class="c-item selected">
<div class="img">
<a
target="_blank"
href="https://www.startech.com.bd/intel-pentium-gold-g5420-processor"
><img
src="{{asset($pcbuilder->product_image)}}"
alt="CPU"
title="CPU"
width="80"
height="80"
/></a>
</div>
<div class="details">
<div class="component-name">
<span>CPU</span><span class="mark">Required</span>
</div>
<div class="product-name">{{$pcbuilder->product_name}}</div>
<div class="product-watt">
<img src="img/icon/watt.svg" alt="Wattage Icon" />
<span>6W</span> <span> - </span> <span>54W</span>
</div>
</div>
<div class="item-price">
<div class="price">{{$pcbuilder->product_price}}৳</div>
</div>
<div class="actions">
<div class="action-items">
<a
class="action"
href="deltopcb/{{$pcbuilder->id}}"
title="Remove"
><i class="material-icons">clear</i></a
>
<a
class="action"
href="tool/choose/14"
title="Choose"
><i class="material-icons">autorenew</i></a
>
</div>
</div>
</div>
@endforeach
@else         


<div class="c-item blank">
            <div class="img">
              <span class="img-ico mouse"></span>
            </div>
            <div class="details">
              <div class="component-name"><span>Mouse</span></div>
              <div class="product-name"></div>
            </div>
            <div class="item-price"></div>
            <div class="actions">
              <a
                class="btn st-outline"
                href="tool/choose/14"
                title=""
                >Choose</a
              >
            </div>
          </div>
          @endif 

      

          @if(count($component_id15) > 0) 

       

@foreach( $component_id15 as  $pcbuilder)    
            
     
<div class="c-item selected">
<div class="img">
<a
target="_blank"
href="https://www.startech.com.bd/intel-pentium-gold-g5420-processor"
><img
src="{{asset($pcbuilder->product_image)}}"
alt="CPU"
title="CPU"
width="80"
height="80"
/></a>
</div>
<div class="details">
<div class="component-name">
<span>CPU</span><span class="mark">Required</span>
</div>
<div class="product-name">{{$pcbuilder->product_name}}</div>
<div class="product-watt">
<img src="img/icon/watt.svg" alt="Wattage Icon" />
<span>6W</span> <span> - </span> <span>54W</span>
</div>
</div>
<div class="item-price">
<div class="price">{{$pcbuilder->product_price}}৳</div>
</div>
<div class="actions">
<div class="action-items">
<a
class="action"
href="deltopcb/{{$pcbuilder->id}}"
title="Remove"
><i class="material-icons">clear</i></a
>
<a
class="action"
href="tool/choose/15"
title="Choose"
><i class="material-icons">autorenew</i></a
>
</div>
</div>
</div>
         
@endforeach
@else  
    
<div class="c-item blank">
            <div class="img">
              <span class="img-ico headphone"></span>
            </div>
            <div class="details">
              <div class="component-name"><span>Headphone</span></div>
              <div class="product-name"></div>
            </div>
            <div class="item-price"></div>
            <div class="actions">
              <a
                class="btn st-outline"
                href="tool/choose/15"
                title=""
                >Choose</a
              >
            </div>
          </div>
          @endif       

 @if(count($component_id16) > 0) 

       

@foreach( $component_id16 as  $pcbuilder)             
<div class="c-item selected">
<div class="img">
<a
target="_blank"
href="https://www.startech.com.bd/intel-pentium-gold-g5420-processor"
><img
src="{{asset($pcbuilder->product_image)}}"
alt="CPU"
title="CPU"
width="80"
height="80"
/></a>
</div>
<div class="details">
<div class="component-name">
<span>CPU</span><span class="mark">Required</span>
</div>
<div class="product-name">{{$pcbuilder->product_name}}</div>
<div class="product-watt">
<img src="img/icon/watt.svg" alt="Wattage Icon" />
<span>6W</span> <span> - </span> <span>54W</span>
</div>
</div>
<div class="item-price">
<div class="price">{{$pcbuilder->product_price}}৳</div>
</div>
<div class="actions">
<div class="action-items">
<a
class="action"
href="deltopcb/{{$pcbuilder->id}}"
title="Remove"
><i class="material-icons">clear</i></a
>
<a
class="action"
href="tool/choose/16"
title="Choose"
><i class="material-icons">autorenew</i></a
>
</div>
</div>
</div>
@endforeach
@else  
<div class="c-item blank">
            <div class="img">
              <span class="img-ico anti-virus"></span>
            </div>
            <div class="details">
              <div class="component-name"><span>Anti Virus</span></div>
              <div class="product-name"></div>
            </div>
            <div class="item-price"></div>
            <div class="actions">
              <a
                class="btn st-outline"
                href="tool/choose/16"
                title=""
                >Choose</a
              >
            </div>
          </div>
          @endif
@if(count($component_id17) > 0) 

       

@foreach( $component_id17 as  $pcbuilder)    

<div class="c-item selected">
<div class="img">
<a
target="_blank"
href="https://www.startech.com.bd/intel-pentium-gold-g5420-processor"
><img
src="{{asset($pcbuilder->product_image)}}"
alt="CPU"
title="CPU"
width="80"
height="80"
/></a>
</div>
<div class="details">
<div class="component-name">
<span>CPU</span><span class="mark">Required</span>
</div>
<div class="product-name">{{$pcbuilder->product_name}}</div>
<div class="product-watt">
<img src="img/icon/watt.svg" alt="Wattage Icon" />
<span>6W</span> <span> - </span> <span>54W</span>
</div>
</div>
<div class="item-price">
<div class="price">{{$pcbuilder->product_price}}৳</div>
</div>
<div class="actions">
<div class="action-items">
<a
class="action"
href="deltopcb/{{$pcbuilder->id}}"
title="Remove"
><i class="material-icons">clear</i></a
>
<a
class="action"
href="tool/choose/17"
title="Choose"
><i class="material-icons">autorenew</i></a
>
</div>
</div>
</div>
@endforeach
@else     

       
<div class="c-item blank">
            <div class="img">
              <span class="img-ico ups"></span>
            </div>
            <div class="details">
              <div class="component-name"><span>UPS</span></div>
              <div class="product-name"></div>
            </div>
            <div class="item-price"></div>
            <div class="actions">
              <a
                class="btn st-outline"
                href="tool/choose/17"
                title=""
                >Choose</a
              >
            </div>
          </div>

       @endif
        </div>
      </div>
    </div>
  </div>
</section>


@endsection
@section('scripts')
<script src="js/html2canvas.min.js"></script>
<script type="text/javascript">
    var image = document.getElementById("input-base64-image");
    function takeShot() {
        var region = document.querySelector(".pcb_container"), scrollTop = document.documentElement.scrollTop, config = {
            async: true,
        };
        if(scrollTop) {
            config.scrollY = -scrollTop
        }

        html2canvas(region, config).then(function(canvas) {
            var pngUrl = canvas.toDataURL();
            window.ca = canvas
            image.value = canvas.toDataURL("img/jpeg");
        }).catch(function (reason) {
            console.log(reason)
        });
    }
    app.onReady(window, ["html2canvas"], function () {
       takeShot();
       $("#input-hide").on("change", function () {
           if(this.checked) {
               $(".c_items.blank").addClass("hide")
           } else {
               $(".c_items.blank").removeClass("hide")
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