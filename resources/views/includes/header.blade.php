
 <!-- header-top-start -->
    <header>
      <div class="header_top">
        <div class="container">
          <div class="header_top_left">
            <div class="nav_toggler">
              <label style="color:white" class="toggle_icon">
                <span></span>
                <span></span>
                <span></span>
              </label>
            </div>
            <div class="logo">
              <a href="{{'/'}}">
                <img src="{{url('img/icon/logo.png')}}" alt="logo" />
              </a>
            </div>


            <label class="right_icon">
              <span class="search_icon">
              <i class="material-icons">search</i>
              </span>
              <div class="btncart top_cart cart">
              <i class="material-icons">shopping_basket</i>
             
                <div class="h6">CART</div> 
                @if(session('cart'))
                    <span id="cart_count" class="cart_counter">
                    {{ count(session('cart')) }}
                    </span>
                @else
                    <span id="cart_count" class="cart_counter">
                     0
                    </span>
                @endif
              </div>
            
            </label>
          </div>

          <!-- header_top_center -->


       
            <div class="header_item_search">
              <form action="" class="form" method="post">
                  <input class="search_box search_str" type="text" name="product" placeholder="Search" required />
                  <button type="button" onclick="funSearch()" name="search" class="btns">
                  <i  class="material-icons">search</i>
                  </button>
              </form>
            </div>

          <!-- header_top_right -->

          <div class="header_top_right">
            <div class="offers">
              <a class="offer_icon" href="{{url('offer')}}">
              <i class="material-icons">card_giftcard</i>
              </a>
              <a href="{{url('offer')}}">
                <div class="h5">flash sale</div>
                <p>10.10 special</p>
              </a>
            </div>


            <div class="thunder">
              <a href="{{url('thunder')}}">
              <i class="material-icons">local_offer</i>
              </a>
              <a href="{{url('thunder')}}">
                <div class="h5">10-10</div>
                <p>Mega Festival</p>
              </a>
            </div>

            <div id="btncompare" class="btncompare">
               <i class="material-icons">library_add</i>
          
              <div class="h5">Compare</div>
            @if(session('compare'))             
                <span id="compare_count" class="compare_counter">
                  {{count(session('compare')) }}</span>
            @else
               <span id="compare_count" class="compare_counter">0</span>
            @endif
             
             </div>


            <div class="account">
              <a href="{{url('account/profile')}}">
              <i class="material-icons">person</i>
              </a>
              <div class="ac_title">
                <a href="{{url('/account/profile')}}"> <div class="h5">Account</div>  </a>
               <p>
               @if(session('loggedin'))  
               <a href="{{url('/account/profile')}}"> profile </a>
              
               @else
               <a href="{{url('/register')}}"> Register </a>
               @endif 
                  
                  
              or 
              @if(session('loggedin'))  
              <a href="{{url('/logout')}}"> Logout </a>
            
              @else
              <a href="{{url('/login')}}"> Login </a>
              @endif 
                </p>
              </div>
            </div>

            <!-- tool button -->

            <button class="pcb_btn">
              <a  href="{{url('pc_builder')}}">
              <i class="material-icons">important_devices</i>
              <div class="h5">PC Builder</div>
              </a>
            </button>
          </div>


        </div>
      </div>
      <!-- header-top-end -->
    </header>
    
<!-- navbar-start -->

    <nav>
        <div class="container">
        <ul class="nav">
          <li class="drop_down">
            <a class="btnli" href="{{url('/desktop')}}"> Desktop  <span id="pan"></span> </a>
            <ul class="sub_nav">
              <li>
                <a href="#">Special PC
                </a>
              </li>
              <li>
                <a href="#">
                  Star PC</a>
              </li>
              <li>
                <a href="#">Gaming PC</a>
              </li>
              <li>
                <a href="#">
                  Brand PC
                </a>
              </li>
              <li>
                <a href="#">All in one PC
                </a>
              </li>
              <li>
                <a href="#">
                  Portable Mini PC
                </a>
              </li>
              <li>
                <a href="#">
                  Apple Mac Mini
                </a>
              </li>
              <li>
                <a href="#">
                  Apple iMac
                </a>
              </li>
              <li>
                <a href="#">G Budget PC
                </a>
              </li>
              <li>
                <a href="#">
                  Show All Desktop</a>
              </li>
            </ul>
          </li>
          <li class="drop_down">
            <a class="btnli" href="{{url('/laptop')}}">Laptop  <span id="pan"></span> </a>
            <ul class="sub_nav">
              <li><a href="">All Laptop</a></li>
              <li><a href=""> Gaming Laptop</a></li>
              <li><a href=""> Premium
                  Ultrabook</a></li>
              <li><a href=""> Laptop Bag </a></li>
              <li><a href=""> Laptop
                  Accessories </a></li>
              <li><a href=""> External Graphics Enclosure </a></li>
              <li><a href=""> Show All Laptop </a></li>
            </ul>
          </li>
          <li class="drop_down"><a class="btnli" href="{{url('/component')}}">Component <span id="pan"></span> </a>
            <ul class="sub_nav">
              <li><a href="">Processor </a></li>
              <li><a href="">CPU Cooler </a></li>
              <li><a href=""> Water / Liquid Cooling
                </a></li>
              <li><a href=""> Team </a></li>
              <li><a href=""> Motherboard </a></li>
              <li><a href=""> Graphics Card </a></li>
              <li><a href=""> RAM (Laptop) </a></li>
            </ul>
          </li>
          <li class="drop_down"><a class="btnli" href="{{url('/monitor')}}">Monitor <span id="pan"></span></a>
            <ul class="sub_nav">

              <li><a href="">Benq</a></li>
              <li><a href="">asus</a></li>
              <li><a href="">LG</a></li>
              <li><a href="">hp</a></li>
              <li><a href=""> PHILIPS</a></li>
              <li><a href=""> Walton</a></li>
              <li><a href=""> Acer</a></li>
              <li><a href=""> AOC </a></li>
              <li><a href=""> Hikvision </a></li>
              <li><a href=""> Fantech </a></li>
              <li><a href=""></a></li>
              <li><a href=""> Huawei</a></li>
              <li><a href="">Curved Monitor </a></li>
              <li><a href=""> Touch Monitor </a></li>
              <li><a href="">4K Monitor </a></li>
              <li><a href=""> Gaming Monitor </a></li>
              <li><a href=""> Monitor Arm </a></li>
              <li><a href=""> Show All Monitor </a></li>
            </ul>
          </li>
      
          <li class="drop_down"><a class="btnli" href="{{url('/ups')}}">ups  <span id="pan"></span></a>
            <ul class="sub_nav">
              <li><a href="">DEll</a></li>
              <li><a href="">asus</a></li>
              <li><a href="">hp</a></li>
              <li><a href="">Dell</a></li>
              <li><a href=""> GIGABYTE</a></li>
              <li><a href="">Samgsung</a></li>
              <li><a href="">MSI</a></li>
              <li><a href=""> XIAOMI</a></li>
              <li><a href="">MSI</a></li>
              <li><a href="">MSI</a></li>
              <li><a href="">MSI</a></li>
              <li><a href="">MSI</a></li>
              <li><a href="">MSI</a></li>
              <li><a href="">MSI</a></li>
              <li><a href="">MSI</a></li>
              <li><a href="">MSI</a></li>
            </ul>
          </li>
      
          <li class="drop_down"><a class="btnli" href="#">tablet   <span id="pan"></span></a>
            <ul class="sub_nav">
              <li><a href="">DEll</a></li>
              <li><a href="">asus</a></li>
              <li><a href="">hp</a></li>
              <li><a href="">hp</a></li>
              <li><a href="">hp</a></li>
              <li><a href="">hp</a></li>
              <li><a href="">hp</a></li>
            </ul>
          </li>
        
        
          <li class="drop_down"><a class="btnli" href="#">office equipment  <span id="pan"></span> </a>
            <ul class="sub_nav">
              <li><a href="">DEll</a></li>
              <li><a href="">asus</a></li>
              <li><a href="">hp</a></li>
              <li><a href="">hp</a></li>
              <li><a href="">hp</a></li>
              <li><a href="">hp</a></li>
              <li><a href="">hp</a></li>
            </ul>
          </li>
        
          <li class="drop_down"><a class="btnli" href="#">camera   <span id="pan"></span></a>
            <ul class="sub_nav">
              <li><a href="">DEll</a></li>
              <li><a href="">asus</a></li>
              <li><a href="">hp</a></li>
              <li><a href="">hp</a></li>
              <li><a href="">hp</a></li>
              <li><a href="">hp</a></li>
              <li><a href="">hp</a></li>
            </ul>
          </li>
        
          <li class="drop_down"><a class="btnli" href="#">security   <span id="pan"></span></a>
            <ul class="sub_nav">
              <li><a href="">DEll</a></li>
              <li><a href="">asus</a></li>
              <li><a href="">hp</a></li>
              <li><a href="">hp</a></li>
              <li><a href="">hp</a></li>
              <li><a href="">hp</a></li>
              <li><a href="">hp</a></li>
            </ul>
          </li>
      
          <li class="drop_down"><a class="btnli" href="#">software  <span id="pan"></span> </a>
            <ul class="sub_nav">
              <li><a href="">DEll</a></li>
              <li><a href="">asus</a></li>
              <li><a href="">hp</a></li>
              <li><a href="">hp</a></li>
              <li><a href="">hp</a></li>
              <li><a href="">hp</a></li>
              <li><a href="">hp</a></li>
            </ul>
          </li>
        
          <li class="drop_down"><a class="btnli" class="btnli" href="#">service & storage  <span id="pan"></span> </a>
            <ul class="sub_nav">
              <li><a href="">DEll</a></li>
              <li><a href="">asus</a></li>
              <li><a href="">hp</a></li>
              <li><a href="">hp</a></li>
              <li><a href="">hp</a></li>
              <li><a href="">hp</a></li>
              <li><a href="">hp</a></li>
            </ul>
          </li>
        
          <li class="drop_down"><a class="btnli" href="#">tv   <span id="pan"></span></a>
            <ul class="sub_nav">
              <li><a href="">DEll</a></li>
              <li><a href="">asus</a></li>
              <li><a href="">hp</a></li>
              <li><a href="">hp</a></li>
              <li><a href="">hp</a></li>
              <li><a href="">hp</a></li>
              <li><a href="">hp</a></li>
            </ul>
          </li>
        
          <li class="drop_down"><a class="btnli" href="#">Gadget  <span id="pan"></span> </a>
            <ul class="sub_nav">
              <li><a href="">DEll</a></li>
              <li><a href="">asus</a></li>
              <li><a href="">hp</a></li>
              <li><a href="">hp</a></li>
              <li><a href="">hp</a></li>
              <li><a href="">hp</a></li>
              <li><a href="">hp</a></li>
            </ul>
          </li>
        
          <li class="drop_down"><a class="btnli" href="#">gaming <span id="pan"></span> </a>
            <ul class="sub_nav">
              <li><a href="">DEll</a></li>
              <li><a href="">asus</a></li>
              <li><a href="">hp
                  laptop</a></li>
              <li><a href="">hp </a></li>
              <li><a href="">hp</a></li>
              <li><a href="">hp</a></li>
              <li><a href="">hp</a></li>
            </ul>
          </li>
        
          <li class="drop_down"><a class="btnli" href="#">printer  <span id="pan"></span> </a>
            <ul class="sub_nav">
              <li><a href="">DEll</a></li>
              <li><a href="">asus</a></li>
              <li><a href="">hp
                  laptop</a></li>
              <li><a href="">hp </a></li>
              <li><a href="">hp</a></li>
              <li><a href="">hp</a></li>
              <li><a href="">hp</a></li>
            </ul>
          </li>
        
          <li class="drop_down"><a class="btnli" href="#">laptop <span id="pan"></span> </a>
            <ul class="sub_nav">
              <li><a href="">DEll</a></li>
              <li><a href="">asus</a></li>
              <li><a href="">hp
                  laptop</a></li>
              <li><a href="">hp </a></li>
              <li><a href="">hp</a></li>
              <li><a href="">hp</a></li>
              <li><a href="">hp</a></li>
            </ul>
          </li>
        </ul>    
        </div>
    </nav>
<!-- navbar-end -->
