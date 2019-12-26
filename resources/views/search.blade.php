@extends('layouts.default')

@section('title', '| Search')

@section('content')         

<div class="search-form">
<form>
  <input type="text" name="findme" placeholder={{$poisk}}>
  <button type="submit">
    <img class="icon" src="{{url('assets/img/search.png')}}" alt="Search">
  </button>
</form>
</div>

<h1 id="search_result">Результаты поиска</h1>

<div class="article-post-preview">

    @foreach ($objs as $obj)
    <div class="intro">
        <a href="/posts/{{$obj->id}}">
        <div class="cover">
            <img src="{{$obj->image}}" alt="Post cover">
        </div>
        </a>
        <div class="meta">
            <div class="category">
                <a href="/posts/{{$obj->id}}">
                    <strong>{{$obj->categories->category_name}}</strong>
                </a>
            </div>
        </div>
        <a href="/posts/{{$obj->id}}">
        <div class="title">
            <h1>{{$obj->title}}</h1>
        </div>
        <a>
    </div>
    @endforeach
    
</div>

@endsection