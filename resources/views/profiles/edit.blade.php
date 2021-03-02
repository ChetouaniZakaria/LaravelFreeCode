@extends('layouts.app')

@section('content')
<div class="container">

    <div class="row">
        <h2>Edit Profile</h2>
    </div>

    <form action="{{route('profile.update', ['user'=>$user->id])}}" enctype="multipart/form-data" method="POST">
        @method('PUT')
        @csrf 

        <div class="form-group row">
            <label for="title" class="col-md-4 col-form-label font-weight-bold"> Profile Title </label>
    
           
                <input id="title" 
                    type="text" 
                    class="form-control 
                    @error('title') is-invalid 
                    @enderror" 
                    name="title" 
                    value="{{ old('title') ?? $user->profile->title }}" 
                    autocomplete="title" autofocus>
    
                @error('title')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
          
        </div>

        <div class="form-group row">
            <label for="description" class="col-md-4 col-form-label font-weight-bold"> Post Description </label>
    
           
                <input id="description" 
                    type="text" 
                    class="form-control 
                    @error('description') is-invalid 
                    @enderror" 
                    name="description" 
                    value="{{ old('description') ?? $user->profile->description }}" 
                    autocomplete="description" autofocus>
    
                @error('description')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
          
        </div>
    
        <div class="form-group row">
            <label for="url" class="col-md-4 col-form-label font-weight-bold"> Post Url </label>
    
           
                <input id="url" 
                    type="text" 
                    class="form-control 
                    @error('url') is-invalid 
                    @enderror" 
                    name="url" 
                    value="{{ old('url') ?? $user->profile->url}}" 
                    autocomplete="url" autofocus>
    
                @error('url')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
          
        </div>

        <div class="row ">
            <label for="image" class="col-md-4 col-form-label font-weight-bold"> Post Image </label>
           
            <input type="file" name="image" class="form-control-file" id="image">
          
    
            @error('image')
            <span class="alert-danger" role="alert">
                <strong>{{ $message }}</strong>
            </span>
            @enderror
    
        </div>
       
        <div class="row pt-4">
            
            <button class="btn btn-primary">Update Profile</button>
        </div>
        </form>
</div>
@endsection
