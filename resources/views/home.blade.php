@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-3 pd-5">
            <img src="https://instagram.fabv2-1.fna.fbcdn.net/v/t51.2885-19/s150x150/68673399_2486038491465644_2572369012948205568_n.jpg?tp=1&_nc_ht=instagram.fabv2-1.fna.fbcdn.net&_nc_ohc=AlcncUvx4LUAX8zrBY4&oh=4fbee30d6c1865111e492ac209c13911&oe=6071F8FC" alt="" class="rounded-circle">
        </div>
        <div class="col-md-9">
            <div class="d-flex justify-content-between align-items-baseline">
                <div><h1>{{ $user->username }}</h1></div>
                <a href="#">Add New Post</a>
            </div>
            <div class="d-flex">
                <div class="pr-3">123 posts</div>
                <div class="pr-3">34 followers</div>
                <div class="pr-3">342 following</div>
            </div>
            <div class="pt-4 font-weight-bold">{{ $user->profile->title }}</div>
            <div>{{ $user->profile->description}}</div>
            <div>{{ $user->profile->url }}</div>
        </div>
    </div>
    <div class="row pt-4">
        <div class="col-md-4"> 
            <img src="/images/ded.png" alt="" class="w-100">
        </div>
        <div class="col-md-4">
            <img src="/images/ded.png" alt=""class="w-100">
        </div>
        <div class="col-md-4">
            <img src="/images/ded.png" alt=""class="w-100">
        </div>
    </div>
</div>
@endsection
