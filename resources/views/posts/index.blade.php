@extends('layouts.app')
@section('content')
    <h3>Posts</h3>
    @if(count($posts)>0)
        @foreach ($posts as $post)
            <div class="well">
                <h6>
                    <a href="/lsapp/public/posts/{{$post->id}}">
                        {{$post->title}}
                    </a>
                </h6>
                <small>Wriiten on {{$post->created_at}} by {{$post->user->name}}</small>
            </div>
        @endforeach
        {{$posts->links()}}
    @else
        <p> No posts found</p>
    @endif
@endsection