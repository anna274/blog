@extends('layouts.default')

@section('title', '| {{Lang::get('en_categories.$category->categoty_name')}}')

@section('content')         

<div class="article-post-preview">

    @foreach ($posts as $post)
    <div class="intro">
        <a href="/posts/{{$post->id}}">
        <div class="cover">
            <img src="{{$post->image}}" alt="Post cover">
        </div>
        </a>
        <div class="meta">
            <div class="category">
                <a href="/posts/{{$post->id}}">
                    <strong>{{$post->category_id}}</strong>
                </a>
            </div>
        </div>
        <a href="/posts/{{$post->id}}">
        <div class="title">
            <h1>{{$post->title}}</h1>
        </div>
        <a>
    </div>
    @endforeach
    
</div>

@endsection
