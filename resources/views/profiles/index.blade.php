@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-3 pd-5">
            <img src="{{ $user->profile->profileImage() }}" alt="" class="rounded-circle w-100">
        </div>
        <div class="col-md-9">
            <div class="d-flex justify-content-between align-items-baseline">
              <div class="d-flex align-items-center pb-4">
                <div><h1>{{ $user->username }}</h1></div>
               <follow-button user-id="{{$user->id}}" follows={{ $follows }}></follow-button>
              </div>
                @can('update', $user->profile)
                    <a href="/profile/{{$user->id}}/edit">Edit Profile</a>
                @endcan
                @can('update', $user->profile)
                    <a href="/post/create">Add New Post</a>
                @endcan
                
            </div>


            <div class="d-flex">
                <div class="pr-3">{{ $user->posts->count()}} posts</div>
                <div class="pr-3">34 followers</div>
                <div class="pr-3">342 following</div>
            </div>
            <div class="pt-4 font-weight-bold">{{ $user->profile->title }}</div>
            <div>{{ $user->profile->description}}</div>
            <div>{{ $user->profile->url }}</div>
        </div>
    </div>
    <div class="row pt-4">
        @foreach($user->posts as $post)
        <div class="col-md-4 pb-4"> 
            <a href="/post/{{ $post->id }}">
                <img src="/storage/{{ $post->image }}" alt="" class="w-100">
            </a>
        </div>
        @endforeach

    </div>
</div>
@endsection
