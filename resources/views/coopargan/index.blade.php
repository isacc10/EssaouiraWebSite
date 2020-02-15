@extends('master')

@section('slider')

@endsection

@section('content')

    <div class="row">
        <div class="col-md-12">
        <h1>Welcome</h1>
        </div>
    </div>

    <div class="row">

        @foreach($myPosts as $post)
        <div class="col-md-4 my-2">
            <div class="card">
                <img class="card-img-top" src="{{ asset('/storage/'.$post->image) }}" alt="">
                <div class="card-body">
                    <h4 class="card-title">{{ $post->title }}</h4>
                    <p class="card-text">{{ str_limit($post->excerpt,100) }}</p>
                </div>
            </div>
        </div>
        @endforeach
    </div>
    

@endsection