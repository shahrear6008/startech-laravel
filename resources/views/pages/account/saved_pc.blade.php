@extends('pages.account.index') 

@section('profile')


<div class="ac-title">
    <a href="account"><span class="material-icons">arrow_back</span></a>
    <h1>Saved PC</h1></div>
<div class="cards">
    
                
         <div class="card">
            <div class="img-n-title">
                <div class="img-wrap">
                   <span class="material-icons ico-image">important_devices</span>
                </div>
                <div class="title">
                    <h6 class="item-name"></h6>
                    <p></p>
                </div>
            </div>
            <div class="date">
                <p>Date Added</p>
                <p class="fade"></p>
            </div>
            <div class="actions">
          
                <a href="tool_view?id=" title="View" class="btn ac-btn">View</a>
                <a href="delsaved_pc.php?id=" title="Delete" class="ac-icon"><span class="material-icons">delete</span></a>
            </div>
        </div>
      
        </div>
     </div>
   </div>
@endsection