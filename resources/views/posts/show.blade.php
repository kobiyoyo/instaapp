@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8">
             <img src="/storage/{{$post->image}}" alt="" class="w-100">
        </div>
        <div class="col-md-4">
            <div>
                <div class="d-flex align-items-center">
                   <div class="pr-3">
                        <img src="{{$post->user->profile->profileImage()}}" alt="" class="rounded-circle w-100" style="max-width: 40px;">
                   </div> 
                   <div>
                       <div class="font-weight-bold">
                           <a href="/profile/{{ $post->user->id }}"><span class="text-dark">{{ $post->user->username}}</span></a>
                           <a href="#" class="pl-3">Follow</a>
                       </div>
                   </div>
                </div>
            </div>
            <hr>
            <p> {{ $post-> description }}</p>
        </div>
    </div>
</div>
@endsection
