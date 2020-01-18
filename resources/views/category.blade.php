@extends('layouts.default')

@section('title', '| {{Lang::get('en_categories.$category->categoty_name')}}')

@section('content') 

<div class="search-form">
        <form action="/search">
          <input  type="text" name="findme" placeholder="Искать здесь...">
          <button type="submit">
          <img class="icon" src="{{url('assets/img/search.png')}}" alt="Search">
          </button>
        </form>
</div>

<div class="article-post-preview">

    @foreach ($category->posts()->get() as $post)
    <div class="intro">
        <a href="/posts/{{$post->id}}">
        <div class="cover">
            <img src="{{$post->image}}" alt="Post cover">
        </div>
        </a>
        <div class="meta">
            <div class="category">
                <a href="/posts/{{$post->id}}">
                    <strong>{{$category->category_name}}</strong>
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
