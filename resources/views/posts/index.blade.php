@extends('layouts.app')

@section('content')
    <h1>Posts</h1>
    @if(count($posts) > 0)
        @foreach($posts as $post)
            <div class="card card-body bg-light mb-2">
                <div class="row">
                    <div class="col-md-4 col-sm-4">
                        <img src="/storage/cover_images/{{$post->cover_image}}" style="width:100%">
                    </div>
                    <div class="col-md-4 col-sm-4">
                        <h3> <a href="/posts/{{$post->id}}"> {{$post->title}} </a> </h3>
                        <small> Written on {{$post->created_at}} by {{$post->user->name}}</small>
                    </div>
                </div>
            </div>
        @endforeach
        {{$posts->links()}}
        {{-- pagination i guess --}}
    @else
        <p>No posts found</p>
    @endif
@endsection
