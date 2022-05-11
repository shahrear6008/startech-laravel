
<section class="after-header p-tb-10">
    <div class="container">
        <ul class="breadcrumb">
        <li>
          <a href="/">
          <i class="material-icons">home</i>
          </a>
        </li>
        <li><a href="{{url('account/profile')}}">
          Account
        </a></li>
    </ul>
  </div>
</section>

<section>
<div class="container ac-layout">
@foreach($customer_info as $row)
 <div class="ac-header">
    <div class="left">
      <span class="avatar"><img src="{{asset($row->profile_picture)}}" width="80" height="80" alt="SR"></span>
      <div class="name"><p>hello,</p><p class="user">{{$row->fname}} {{$row->lname}}</p></div>
    </div>
    <div class="right">
      <div class="balance">
        <span class="blurb">Star Points</span>
        <span class="amount">{{$row->Reward_Points}}</span>
      </div>
      <div class="balance">
        <span class="blurb">Store Credit</span>
        <span class="amount">{{$row->Store_Credit}}</span>
      </div>
    </div>
</div>

@endforeach

