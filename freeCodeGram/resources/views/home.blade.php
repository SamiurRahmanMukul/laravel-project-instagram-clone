@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-3 p-5">
            <img src="./svg/free-code-camp.svg" alt="profile-image" class="rounded-circle">
        </div>

        <div class="col-9 p-5">
            <div><h1>freeCodeGram</h1></div>

            <div class="d-flex">
                <div class="pr-5"><strong>153</strong> posts</div>
                <div class="pr-5"><strong>23k</strong> followers</div>
                <div class="pr-5"><strong>212</strong> following</div>
            </div>

            <div class="py-4">
                Lorem, ipsum dolor sit amet consectetur adipisicing elit. Modi molestiae reprehenderit at, doloribus ullam pariatur, iusto exercitationem libero expedita cupiditate quis aut architecto corporis sed! Nulla voluptatum fugiat similique officiis!
            </div>

            <div class="font-weight-bold">Website: <a target="_blank" href="https://www.freeCodeCamp.org">
                www.freeCodeCamp.org
            </a></div>
        </div>
    </div>

    <div class="row">
        <div class="col-4">
            <img src="./jpg/image-1.jpg" alt="post-image" class="w-100" style="height: 350px; margin-bottom: 30px;">
        </div>
        <div class="col-4">
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
        </div>
    </div>
</div>
@endsection
