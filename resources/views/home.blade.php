@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-3 p-5">
            <img src="/storage/{{$main_account->avatar}}" alt="profile-image" class="rounded-circle" width="100" height="100">
        </div>

        <div class="col-9 p-5">
            <div>
            <h1> @if(auth()->user()->id == $main_account->id)
                <a href="/user/profile/{{$main_account->id}}" style="text-decoration:none;color:black">@endif
                {{$main_account->name}}
                @if(auth()->user()->id == $main_account->id)</a>@endif
            </h1></div>

            <div class="d-flex">
                <div class="pr-5"><strong>{{count($main_account->posts)}}</strong> posts</div>
                <div class="pr-5"><strong>{{ count($main_account->followers) }}</strong> followers</div>
                <div class="pr-5"><strong>{{ count($main_account->followings) }}</strong> following</div>
            </div>

            <div class="py-4">
                {{$main_account->bio}}
            </div>

            <div class="font-weight-bold">Website: <a target="_blank" href="https://{{$main_account->website}}">
               {{$main_account->website}}
            </a></div>
            @if(auth()->user()->id !== $main_account->id)
                @if(auth()->user()->followings->contains($main_account->id))
                <a href="{{route('unfollow',['follower_id' => auth()->user()->id, 'following_id' => $main_account->id])}}" class="btn btn-sm btn-danger">unfollow</a>
                @else
                <a href="{{route('follow',['follower_id' => auth()->user()->id, 'following_id' => $main_account->id])}}" class="btn btn-sm btn-primary">follow</a>
                @endif
            @endif
        </div>
    </div>
    <div class="row">
    
    </div>
    <div class="row">
    @if(count($main_account->posts) > 0)
                    @foreach($main_account->posts->chunk(6) as $chunk)
                        @foreach ($chunk as $post)
                        <div class="col-4">
            <img src="./jpg/image-1.jpg" alt="post-image" class="w-100" style="height: 350px; margin-bottom: 30px;">
        </div>
                        @endforeach
                    @endforeach
                    @else
                    <p>No posts found.</p>
                    @endif
       
        <!-- <div class="col-4">
            <img src="./jpg/image-2.jpg" alt="post-image" class="w-100" style="height: 350px; margin-bottom: 30px;">
        </div>
        <div class="col-4">
            <img src="./jpg/image-3.jpg" alt="post-image" class="w-100" style="height: 350px; margin-bottom: 30px;">
        </div>
        <div class="col-4">
            <img src="./jpg/image-4.jpg" alt="post-image" class="w-100" style="height: 350px; margin-bottom: 30px;">
        </div>
        <div class="col-4">
            <img src="./jpg/image-5.jpg" alt="post-image" class="w-100" style="height: 350px; margin-bottom: 30px;">
        </div> -->
    </div>
</div>
@endsection
