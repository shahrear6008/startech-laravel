@extends('pages.account.index') 

@section('profile')

    <div class="ac-menus">
        <div class="ac-menu-item">
            <a href="{{url('account/order')}}" class="ico-btn"><span class="material-icons">chrome_reader_mode</span><span>Orders</span></a>
        </div>
        <div class="ac-menu-item">
            <a href="{{url('account/edit_profile')}}" class="ico-btn"><span class="material-icons">person</span><span>Edit Profile</span></a>
        </div>
        <div class="ac-menu-item">
            <a href="{{url('account/change_pw')}}" class="ico-btn"><span class="material-icons">lock</span><span>Change Password</span></a>
        </div>
        <div class="ac-menu-item">
            <a href="{{url('account/address')}}" class="ico-btn"><span class="material-icons">book</span><span>Addresses</span></a>
        </div>
        <div class="ac-menu-item">
            <a href="{{url('account/wish_list')}}" class="ico-btn"><span class="material-icons">favorite_border</span><span>Wish List</span></a>
        </div>
        <div class="ac-menu-item">
            <a href="{{url('account/saved_pc')}}" class="ico-btn"><span class="material-icons">important_devices</span><span>Saved PC</span></a>
        </div>
        <div class="ac-menu-item">
            <a href="{{url('account/star_point')}}" class="ico-btn"><span class="material-icons">stars</span><span>Star Points</span></a>
        </div>
        <div class="ac-menu-item">
            <a href="{{url('account/your_trans')}}" class="ico-btn"><span class="material-icons">account_balance_wallet</span><span>Your Transactions</span></a>
        </div>
        <div class="ac-menu-item h-desk">
            <a href="{{url('logout')}}" class="ico-btn"><span class="material-icons">input</span><span>Logout</span></a>
        </div>
    </div>
   

 </div>
 </section>  
  @endsection

