@extends('pages.account.index') 

@section('profile')


<div class="ac-title">
    <a href="account"><span class="material-icons">arrow_back</span></a>
    <h1>Saved PC</h1>
</div>

 
<div class="cards">

   @foreach($saved_pc as $row)
                
         <div class="card">
            <div class="img-n-title">
                <div class="img-wrap">
                   <span class="material-icons ico-image">important_devices</span>
                </div>
                <div class="title">
                    <h6 class="item-name">{{$row->name}}</h6>
                    <p></p>
                </div>
            </div>
            <div class="date">
                <p>Date Added</p>
                <p class="fade">{{$row->description}}</p>
            </div>
            <div class="actions">
          
                <a href="{{url('pc_builder_view/'.$row->id)}}" title="View" class="btn ac-btn">View</a>
                <a href="{{url('delsavedpc/'.$row->id)}}" title="Delete" class="ac-icon"><span class="material-icons">delete</span></a>
            </div>
        </div>
        
        @endforeach
        </div>
     </div>
   </div>
@endsection