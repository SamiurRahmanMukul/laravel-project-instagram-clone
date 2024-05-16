@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
       <div class="col-12">
         <h2>{{$current_user->name}}'s Profile</h2>
        </div>
        <div class="col-3 p-5">
            <img src="/storage/{{$current_user->avatar}}" alt="profile-image" class="rounded-circle" width="100" height="100">
        </div>

        <div class="col-9 p-5">
            <form action="/add-bio/{{$current_user->id}}" method="POST" enctype="multipart/form-data">
              @csrf
              @method("PUT")
              <textarea name="bio" class="form-control" >@if($current_user->bio!=null) {{$current_user->bio}} @else Add bio @endif</textarea><br>
              <input type="text" name="website" class="form-control" placeholder="Add website" @if($current_user->website!=null) value="{{$current_user->website}}" @endif/><br>
              <input type="file" name="avatar" /><br><br>
              <input type="submit" value="ADD" class="button"/>
            </form>
        </div>
</div>
</div>
@endsection