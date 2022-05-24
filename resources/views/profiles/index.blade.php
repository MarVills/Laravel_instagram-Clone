@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-3 p-5">
            <img src="https://scitechinstitute.org/wp-content/uploads/2020/05/freecodecamp.jpg" class="rounded-circle" style="height: 150px;">
        </div>
        <div class="col-9 pt-5">
            <div class="d-flex justify-content-between align-items-baseline">
            
                <h1>{{ $user->username}}</h1>
                <a href="#">Add New Post</a>

            </div>
            <div class="d-flex">
                <div class="pe-5"><strong>153</strong> posts</div>
                <div class="pe-5"><strong>23k</strong> followers</div>
                <div class="pe-5"><strong>212</strong> following</div>
            </div>
            <div class="pt-4 fw-bold">{{$user->profile->title}}</div>
            <div>{{$user->profile->description}}</div>
            <div class="fw-bold"><a href="#">{{$user->profile->url}}</a></div>
        </div>
    </div>
    <div class="row pt-5">
        <div class="col-4">
            <img srcset="https://upload.wikimedia.org/wikipedia/commons/e/eb/Ash_Tree_-_geograph.org.uk_-_590710.jpg" alt="image here" style="height: 400px; width: 390px;">
        </div>
        <div class="col-4">
            <img src="https://i.pinimg.com/originals/85/b7/dc/85b7dce856edeff1f07c060cbde5c369.jpg" alt="image here" style="height: 400px; width: 390px;">
        </div>
        <div class="col-4">
            <img src="https://cdn.britannica.com/99/187399-050-8C81D8D4/cedar-tree-regions-Lebanon-Mediterranean-Sea.jpg" alt="image here" style="height: 400px; width: 390px;">
        </div>
    </div>
</div>
@endsection
