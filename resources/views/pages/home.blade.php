@extends('layouts.default')
@section('content')
<div class="af_header" >
  <div class="container">
    <div class="content-area">
      <div class="slider">
        <!-- fade css -->
     @foreach ($sliders as $row)
                <div class="myslide">
                  <img src="{{asset($row->slider_img)}}" style="width:100%;" />
                </div>               
     @endforeach       
 
        <!-- /fade css--->
        <div class="dotsbox" >
          <span class="dot" onclick="currentSlide(1)"></span>
          <span class="dot" onclick="currentSlide(2)"></span>
          <span class="dot" onclick="currentSlide(3)"></span>
          <span class="dot" onclick="currentSlide(4)"></span>
          <span class="dot" onclick="currentSlide(5)"></span>
          <span class="dot" onclick="currentSlide(6)"></span>
         
        </div>
        <!-- /onclick js -->
      </div>
      <div class="sidebar">
          <div class="sidebar_input">
                    <h4>Compare Products</h4>
                    <p>Choose Two Products to Compare</p>
                    <form method="get" action="{{url('compare')}}" class="form-cmpr">
                        <input type="hidden" name="product_id">
                        <div class="comp_product">
                        <span><i class="material-icons">search</i></span> 
                            <input id="com_search" class="cmpr-product" type="com_search"  name="com_search" placeholder="Search and Select Product" autocomplete="off">
                            <ul class="dropdown-menu"></ul>
                            <input type="hidden" class="prod-id">
                        </div>
                        <div class="comp_product">
                        <span><i class="material-icons">search</i></span>
                            <input class="cmpr-product" type="text" placeholder="Search and Select Product" autocomplete="off">
                            <ul class="dropdown-menu"></ul>
                            <input type="hidden" class="prod-id">
                        </div>
                        <button style="width:100%" class="btn st-outline">View Comparison</button>
                    </form>
                </div>
         
         
        <div class="sidebar_ads">
          <img src="./img/ad_banner.jpg" alt="banner"/>
        </div>
      </div>
    </div>
    <div class="sliding_text_wrap">
    <marquee direction="left">
    ৬ ডিসেম্বর রোজ সোমবার, স্টার টেক-এর সকল শাখা যথারীতি খোলা রয়েছে। এছাড়া আমাদের অনলাইন কার্যক্রম চালু আছে।

    </marquee>
</div>
<div class="feature">
  <h3> Featured Products <br />
    <small> Check & Get Your Desired Product ! </small>
  </h3>
  <br />
</div>
    <!-- part 4 -->
<div  class="product_list">
@foreach ($displays as $row)
    <a href="single/{{$row->id}}" class="p_item">
      <div class="p_item_inner">                                   
        <img src="{{asset($row->product_image)}}" alt="" />
          <h4> {{$row->product_name}} </h4>
          <h2> {{$row-> product_price}} ৳</h2>
      </div>
    </a>
    
@endforeach 
</div>
  
    <div class="feature">
      <h3> Featured Products <br />
        <small> Check & Get Your Desired Product ! </small>
      </h3>
    </div>
    <!-- <product-icon></product-icon> -->
    <div class="cat_item_wrap">
      <div  class="cat_item">
        <a hraf="#" class="cat_item_inner">
          <img src="./img/icon/cooler.svg" alt="icon" />
          <h5>All Laptop</h5>
        </a>
      </div>
      <div class="cat_item">
        <a hraf="#" class="cat_item_inner">
          <img src="./img/icon/cpu.svg" alt="icon" />
          <h5>All Laptop</h5>
        </a>
      </div>
      <div class="cat_item">
        <a hraf="#" class="cat_item_inner">
          <img src="./img/icon/hdd.svg" alt="icon" />
          <h5>All Laptop</h5>
        </a>
      </div>
      <div class="cat_item">
        <a hraf="#" class="cat_item_inner">
          <img src="./img/icon/ram.svg" alt="icon" />
          <h5>All Laptop</h5>
        </a>
      </div>
      <div class="cat_item">
        <a hraf="#" class="cat_item_inner">
          <img src="./img/icon/psupply.svg" alt="icon" />
          <h5>All Laptop</h5>
        </a>
      </div>
      <div class="cat_item">
        <a hraf="#" class="cat_item_inner">
          <img src="./img/icon/ram.svg" alt="icon" />
          <h5>All Laptop</h5>
        </a>
      </div>
      <div class="cat_item">
        <a hraf="#" class="cat_item_inner">
          <img src="./img/icon/monitor.svg" alt="icon" />
          <h5>All Laptop</h5>
        </a>
      </div>
      <div class="cat_item">
        <a hraf="#" class="cat_item_inner">
          <img src="./img/icon/hdd.svg" alt="icon" />
          <h5>All Laptop</h5>
        </a>
      </div>
      <div class="cat_item">
        <a hraf="#" class="cat_item_inner">
          <img src="./img/icon/psupply.svg" alt="icon" />
          <h5>All Laptop</h5>
        </a>
      </div>
      <div class="cat_item">
        <a hraf="#" class="cat_item_inner">
          <img src="./img/icon/hdd.svg" alt="icon" />
          <h5>All Laptop</h5>
        </a>
      </div>
      <div class="cat_item">
        <a hraf="#" class="cat_item_inner">
          <img src="./img/icon/cpu.svg" alt="icon" />
          <h5>All Laptop</h5>
        </a>
      </div>
      <div class="cat_item">
        <a hraf="#" class="cat_item_inner">
          <img src="./img/icon/gcard.svg" alt="icon" />
          <h5>All Laptop</h5>
        </a>
      </div>
      <div class="cat_item">
        <a hraf="#" class="cat_item_inner">
          <img src="./img/icon/casing.svg" alt="icon" />
          <h5>All Laptop</h5>
        </a>
      </div>
      <div class="cat_item">
        <a hraf="#" class="cat_item_inner">
          <img src="./img/icon/cooler.svg" alt="icon" />
          <h5>All Laptop</h5>
        </a>
      </div>
      <div class="cat_item">
        <a hraf="#" class="cat_item_inner">
          <img src="./img/icon/hdd.svg" alt="icon" />
          <h5>All Laptop</h5>
        </a>
      </div>
      <div class="cat_item">
        <a hraf="#" class="cat_item_inner">
          <img src="./img/icon/mobo.svg" alt="icon" />
          <h5>All Laptop</h5>
        </a>
      </div>
    </div>
    <div class="text-content">
      <h3>Leading Retail Computer Shop in Bangladesh</h3>
      <p> Technology has touched each part of our lives and made living serene than ever before. We provide one-stop solutions for all IT items; your bliss is just a click away. Star Tech trusts in quality client services over the number of clients. We believe the promotion of a brand is done successfully by the words of our clients, not through banners or posters. For that, we ensure the best possible services & facilities at our disposal to make sure our customers are satisfied & have a remarkable experience with us. <br />
        <br /> Our expert team of researchers investigates the current economic situation & provide the best reasonable prices for
       <a href="http://" target="_blank" rel="noopener noreferrer">Laptops</a> ,
       <a href="http://" target="_blank" rel="noopener noreferrer">Desktop PC</a>,
       <a href="http://" target="_blank" rel="noopener noreferrer">  Graphics Card</a>,
       <a href="http://" target="_blank" rel="noopener noreferrer"> Processor</a>,
       <a href="http://" target="_blank" rel="noopener noreferrer">Monitor</a> ,
       <a href="http://" target="_blank" rel="noopener noreferrer">Headphone</a>,
       <a href="http://" target="_blank" rel="noopener noreferrer">Cameras</a>, CC TV, Speaker,   
      <a href="http://" target="_blank" rel="noopener noreferrer"> office equipment</a>,
       <a href="http://" target="_blank" rel="noopener noreferrer">software</a>,
       <a href="http://" target="_blank" rel="noopener noreferrer">Gaming Chair </a>& all other
       <a href="http://" target="_blank" rel="noopener noreferrer"> gaming</a> components.

         
      To ensure nothing is beyond a customer's reach.Even if a client is not ready to purchase, they can still visit Star tech's official website for the latest news on IT information to do their due research on updated products. Selecting which components will be best suited for their needs & estimated price. Star Tech is the leading IT shop in Bangladesh both in the retail & e-commerce sectors therefore we always try to provide our customers with not only products & services but also knowledge & information via our website. <br /> With a mission to assemble an advanced tomorrow, we acknowledge ever-changing demands & customer preferences & try to move forward with the fast-growing technology to meet present-day life needs.
      </p>
      <br />
      <h3> Get Your Desired Computer, Laptop, Gaming Components, and Accessories or Tech-related product from Star Tech Shop </h3>
      <br />
      <p> Star Tech's official branches are located in Dhaka, Chattagram, Rangpur, Gazipur & Khulna. You will have the option to purchase the entirety of our items from these spots effortlessly. Being also an e-Commerce site we provide fast-paced deliveries to maximum locations inside Bangladesh, including our own reliable delivery service inside Dhaka, operating 7 days a week. </p>
    </div>
  </div>
  </div>
@endsection