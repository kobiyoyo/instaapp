@extends('layouts.app')

@section('content')
<div class="container">
    @foreach($posts as $post)
    <div class="row">
        <div class="col-md-8 offset-2">
            <a href="/post/{{ $post->id }}">
              <img src="/storage/{{$post->image}}" alt="" class="w-100">
           </a>
        </div>
    </div>
    <div class="row pt-2 pb-4">
        <div class="col-md-8 offset-2">
            <div>  
               <span class="font-weight-bold">
                   <a href="/profile/{{ $post->user->id }}">
                    <span >{{ $post->user->username}}</span></a>
               </span>
            <p> {{ $post-> description }}</p>
        </div>
    </div>
  </div>
    @endforeach
</div>
@endsection
