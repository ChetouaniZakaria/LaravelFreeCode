@extends('layouts.app')

@section('content')
<div class="container">
    {{-- <div class="row justify-content-center"> --}}
        
        <div class="row">
            <div class="col-3 p-7">
                <img src="https://s3.amazonaws.com/freecodecamp/curriculum-diagram-full.jpg " class="rounded-circle" style="max-height: 250px" alt="">
            </div>
            <div class="col-9 ">
                <div class="d-flex justify-content-between align-items-baseline"> 
                    <h1> {{ $user->username }}</h1>
                    <a href="{{ route('posts.create')}}">Add new Post</a>
                </div>

                <a href="{{ route('profile.edit', ['user'=>$user->id]) }}"> Edit profile</a>

                <div class="d-flex" >
                    <div class="pr-5"><strong>{{ $user->posts->count() }}</strong> posts</div>
                    <div class="pr-5"><strong>23k</strong> followers</div>
                    <div class="pr-5"><strong>202</strong> following</div>
                </div>
                <div class="pt-3 font-weight-bold"> {{ $user->profile->title }}</div>
                <div>
                    {{ $user->profile->description }}
                </div>
                <div> <a href="">{{ $user->profile->url ?? 'Not Available ' }}</a></div>
            </div>
        </div>

        <div class="row pt-5">
            @foreach ($user->posts as $post)
                <div class="col-4 pb-4">
                    <a href="{{ route('posts.show', ['post'=>$post->id]) }}">
                        <img src="{{ asset('storage/'.$post->image) }}" class="w-100" alt="image">
                    </a>
                    
                </div>
            @endforeach
        </div>
        {{-- <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('You are logged in!') }}
                </div>
            </div>
        </div> --}}
    {{-- </div> --}}
</div>
@endsection
