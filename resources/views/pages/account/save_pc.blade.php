@extends('pages.account.index') 

@section('profile')


<div class="ac-title">
    <a href="account"><span class="material-icons">arrow_back</span></a>
    <h1>Save Your PC</h1></div>
       <form action=""  method="post" enctype="multipart/form-data" class="form-horizontal">
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