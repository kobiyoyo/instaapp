@extends('layouts.app')

@section('content')
<div class="container">
  <form action="/post" enctype="multipart/form-data" method="post">
    @csrf
    <div class="row">
        <div class="col-8 offset-2">
            <div class="row">
                <h1>Add New Post</h1>
            </div>
            <div class="form-group row">
                <label for="description" class="col-md-4 col-form-label">Description</label>
                <input id="description" type="description" class="form-control @error('description') is-invalid @enderror" name="description" value="{{ old('description') }}" required autocomplete="description">
                @error('description')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
            <div>
                <label for="image" class="col-md-4 col-form-label">Post Image</label>

                <input type="file" class="form-control-file" id="image" name="image">
                @error('image')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
            <div class="row pt-4">
                <button class="btn btn-primary">Add New Post</button>
            </div>
        </div>
    </div>
  </form>
</div>
@endsection
