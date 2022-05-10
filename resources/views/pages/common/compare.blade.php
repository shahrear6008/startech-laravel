@extends('layouts.default')
@section('content')


@if(session('compare'))      
<div id="content" class="container">
  <div class="table-responsive">
 
    <form method="post" action="common/compare/add" class="form-cmpr">
      <input type="hidden" name="id">
    </form>
  
    <table class="table table-bordered cmpr-table count-3">
      <thead></thead>


      <tbody>
        <tr class="cmpr-header">
        
          <td class="compare-blurb name">
            <h4 class="page-heading">Product Comparison</h4>
            <p>Find and select products to see the differences and similarities between them</p>
          </td>
        
  
                       
       @foreach(session('compare') as $id => $row)   
          <td class="value">
            <div class="compare-item-wrapper">
              <div class="cmpr-field">
          
                <i class="material-icons">search</i>
                <input id="com_search" class="cmpr-product" type="com_search" name="com_search" placeholder="Search and Select Product" autocomplete="off">
                <ul class="dropdown-menu"></ul>
                <input type="hidden" class="prod-id" value="15213">
              </div>


 
              <div class="p-item-img">
                <img src="{{$row['image']}} " alt="Gudsen MOZA Mini MX 3-Axis Gimbal Handheld Stabilizer for Smartphone" title="Gudsen MOZA Mini MX 3-Axis Gimbal Handheld Stabilizer for Smartphone" class="img-thumbnail" width="228" height="228">
              </div>
              <a class="p-item-name" href="">
                <strong>{{$row['name']}}</strong>
              </a>
              <div class="p-item-price">
                <span>{{$row['price']}}৳</span>
              </div>
              <button type="button" data-id="{{ $id }}" class="remove-from-compare bg-transparent " name="remove">
													<a class="remove" href="">
											   		Remove
													</a>
							</button>
              
            </div>
          </td>
             @endforeach   
        </tr>
       
        <tr>
          <td class="name">Model</td>
         @foreach(session('compare') as $id => $row) 
          <td class="value"> {{$row['model']}} </td>
         @endforeach  
        </tr>
        <tr>
          <td class="name">Brand</td>
                  
          @foreach(session('compare') as $id => $row) 
          <td class="value"> {{$row['brand']}} </td>
         @endforeach 
         
        </tr>
        <tr>
          <td class="name">Availability</td>
           
          @foreach(session('compare') as $id => $row) 
          <td class="value"> {{$row['Availability']}} </td>
         @endforeach 
      
         
        </tr>
        <tr>
          <td class="name">Rating</td>
         
          <td class="value rating">
            <div class="rating-star">
              <i class="material-icons rating-icon">star_border</i>
              <i class="material-icons rating-icon">star_border</i>
              <i class="material-icons rating-icon">star_border</i>
              <i class="material-icons rating-icon">star_border</i>
              <i class="material-icons rating-icon">star_border</i>
            </div>
            <div class="rating-text">Based on 0 reviews.</div>
          </td>
       
        </tr>
        <tr>
          <td class="name">Summary</td>
          @foreach(session('compare') as $id => $row) 
          <td class="value short-desc">
            <ul>
              <li>All-locked, Tilt follow, Yaw follow, FPV mode </li>
              <li>Object Tracking: Support </li>
              <li>Inception Mode: Support </li>
              <li>Smart Gesture Control: Support</li>
            </ul>
          </td>
          @endforeach 
        </tr>
      </tbody>




      <tbody>
        <tr>
          <td class="name">Dimension</td>
         
          <td style="font-size:12px" class="value">Expanded Dimensions:120*120*265(L*W*H) <br> Folded Dimensions:145*50*180mm</td>
        
        </tr>
        <tr>
          <td class="name">Weight</td>
          @foreach(session('compare') as $id => $row) 
          <td class="value"> {{$row['weight']}}kG </td>
         @endforeach 
         
        
        </tr>
        <tr>
          <td class="name">Model</td>
          @foreach(session('compare') as $id => $row) 
          <td class="value"> {{$row['model']}}kG </td>
         @endforeach
        
        </tr>
      </tbody>



      <thead>
        <tr>
          <td colspan="3">
            <i class="material-icons">expand_more</i>
            <strong>Battery</strong>
          </td>
        </tr>
      </thead>





      <tbody>
        <tr>
          <td class="name">Capacity</td>
          
          @foreach(session('compare') as $id => $row) 
          <td class="value"> {{2000}}mAh </td>
         @endforeach
       
        </tr>
        <tr>
          <td class="name">Energy</td>
        @foreach(session('compare') as $id => $row) 
          <td class="value">20hrs (under balanced status)</td>
         @endforeach
         
         
        </tr>
        <tr>
          <td class="name">Voltage</td>
          @foreach(session('compare') as $id => $row) 
          <td class="value">7.4V</td>
      @endforeach
        </tr>
        <tr>
          <td class="name">Charging Time</td>
          @foreach(session('compare') as $id => $row) 
          <td class="value">2.5hrs</td>
           @endforeach
        </tr>
      </tbody>





      <thead>
        <tr>
          <td colspan="3">
            <i class="material-icons">expand_more</i>
            <strong>Gimbal</strong>
          </td>
        </tr>
      </thead>






      <tbody>
        <tr>
          <td class="name">Mechanical Range</td>
          @foreach(session('compare') as $id => $row) 
          <td class="value">Pan：340° <br> Roll：300° <br> Tilt：140° </td>
        @endforeach
        </tr>
        <tr>
          <td class="name">Width of Compatible</td>
          @foreach(session('compare') as $id => $row) 
          <td class="value">60~88 mm</td>
          @endforeach 
        </tr>
        <tr>
          <td class="name">Maximum Load</td>
          @foreach(session('compare') as $id => $row) 
          <td class="value">280g</td>
          @endforeach
        </tr>
        <tr>
          <td class="name">Wireless</td>
          @foreach(session('compare') as $id => $row) 
          <td class="value">Bluetooth: version 5.1 <br> Bluetooth Control Range: 5m </td>
          @endforeach
        </tr>
      </tbody>





      <thead>
        <tr>
          <td colspan="3">
            <i class="material-icons">expand_more</i>
            <strong>Warranty</strong>
          </td>
        </tr>
      </thead>

      
      <tbody>
        <tr>
          <td class="name">Warranty</td>
          @foreach(session('compare') as $id => $row) 
          <td class="value"></td>
          @endforeach
        </tr>
      </tbody>




      <tbody>
        <tr>
          <td class="name"></td>
          @foreach(session('compare') as $id => $row) 
          <td class="value">
          <a id="btnbounce" style="color:white" class="btn btn-primary btn-block" href="add-to-cart/{{$id}}" >Buy Now </a>          
          </td>
          @endforeach
        </tr>
      </tbody>


    </table>
  </div>
</div>  
  
@else
<div id="content" class="container">
  <div class="empty-content ">
    <div class="mdl-compare m-auto">
      <h4>Product Comparison</h4>
      <p>You have not chosen any products to compare.</p>
      <form method="post" action="common/compare/add" class="form-cmpr">
        <input type="hidden" name="product_id">
        <div class="cmpr-field">
          <i class="material-icons">search</i>
          <input class="cmpr-product" type="text" placeholder="Search and Select Product" autocomplete="off">
          <ul class="dropdown-menu"></ul>
          <input type="hidden" class="prod-id">
        </div>
        <div class="cmpr-field">
          <i class="material-icons">search</i>
          <input class="cmpr-product" type="text" placeholder="Search and Select Product" autocomplete="off">
          <ul class="dropdown-menu"></ul>
          <input type="hidden" class="prod-id">
        </div>
        <button class="btn st-outline">View Comparison</button>
      </form>
    </div>
  </div>
</div>
        

@endif
    

        
<style>.empty-content .mdl-compare {
        width: 350px;
    }</style>  
<link rel="stylesheet" href="css/startech.css">     

@endsection
@section('scripts')
<script type="text/javascript">
          $(".remove-from-compare").click(function (e) {
     
     var ele = $(this);
 
     $.ajax({
         url: '{{ url('remove-from-compare') }}',
         method: "DELETE",
         data: {_token: '{{ csrf_token() }}', id: ele.attr("data-id")},
         success: function (result) {
               window.location.reload();
             
         }
     });
     e.preventDefault();
     
 });

</script>

@endsection