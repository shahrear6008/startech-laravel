@extends('pages.account.index') 

@section('profile')


<div class="ac-title">
    <a href="{{url('account/profile')}}"><span class="material-icons">arrow_back</span></a>
    <h1>Save Your PC</h1></div>
       <form action="{{url('savepc_submit')}}"  method="post" enctype="multipart/form-data" class="form-horizontal">

       @csrf
        <div class="form-group required">
            <label for="input-name">Name</label>
            <input type="text" name="name" value="" placeholder="Name" id="input-name" class="form-control">
        </div>
        <div class="form-group">
            <label for="input-description">Description</label>
            <textarea name="description" id="input-description" class="form-control" placeholder="Description" style="max-width: 450px"></textarea>
        </div>
        <button type="submit" class="btn btn-primary">Save</button>
       </form>
</div>
@endsection