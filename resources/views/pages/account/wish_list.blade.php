@extends('layouts.default') 

@section('content')
@include('pages.account.header')
@include('pages.account.nav')
                
<section id="content">
      <div class="content-blog content-account">
        <div class="container">
          <div class="row">
            <div class="page_header text-center">
              <div class="ac-title">
                <a href="{{url('account/profile')}}">
                  <span class="material-icons">keyboard_backspace</span>
                </a>
                <h1>My Wish List</h1>
              </div>
            </div>

            @foreach($wishlist as $row)
             <div class="cards">
              <div class="card o-card">
                <div class="c-head">
                  <div class="left">
                    <span class="o-id">
                      <span>wish list#  {{$row->id}}</span>
                    </span>
                    <span class="o-date">Date Added: </span>
                  </div>
                  <div class="right">
                    <span class="status delivered">
                      <span class="material-icons">check_circle</span>
                      <!-- <span class="status">
								</span> -->
                    </span>
                  </div>
                </div>
                <div class="c-body">
                  <div class="img-n-title">
                    <div class="img-wrap">
                      <a href="single.php?id=">
                        <img src="{{asset($row->product_image)}}" alt="" style="max-width:100%!important; margin:auto;" srcset="">
                      </a>
                    </div>
                    <div class="title">
                      <h6 class="item-name">
                        <a href="single.php?id="> 
                        {{$row->product_name}}
                        </a>
                      </h6>
                    </div>
                  </div>
                  <div class="amount"> {{$row->product_price}}  ৳ </div>
                  <div class="actions">
                   <a href="{{url('del_wish_list/'.$row->id)}}">
                      <i style="color:red"   class="material-icons">delete</i> 
                   </a>
                  </div>
                </div>
              </div>
            </div>
             @endforeach
          </div>
        </div>
      </div>
      </div>
    </section>


@endsection