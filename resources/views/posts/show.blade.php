@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8">
             <img src="/storage/{{$post->image}}" alt="" class="w-100">
        </div>
        <div class="col-md-4">
            <h3>{{ $post->user->username }}</h3>
            <p> {{ $post-> description }}</p>
        </div>
    </div>
</div>
@endsection
