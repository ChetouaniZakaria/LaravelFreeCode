@extends('layouts.app')

@section('content')
<div class="container">
    



    <div class="col-8 offset-2">

        <div class="row">
            <h2>Add New Post</h2>
        </div>
        <form action="{{route('posts.store')}}" enctype="multipart/form-data" method="POST">

            @csrf 

            <div class="form-group row">
                <label for="caption" class="col-md-4 col-form-label font-weight-bold"> Post Caption </label>
        
               
                    <input id="caption" 
                        type="text" 
                        class="form-control 
                        @error('caption') is-invalid 
                        @enderror" 
                        name="caption" 
                        value="{{ old('caption') }}" 
                        autocomplete="caption" autofocus>
        
                    @error('caption')
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
                
                <button class="btn btn-primary">Add New Post</button>
            </div>
            </form>
    </div>
   
   
</div>
@endsection
