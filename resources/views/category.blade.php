@extends('layouts.default')

@section('title', '| Homepage')

@section('content')   

<div>{{$category->category_name}}</div>

<div class="article-post-preview">
    <div class="intro">
        <a href="#">
        <div class="cover">
            <img src="{{url('assets/img/post_img.jpg')}}" alt="Post cover">
        </div>
        </a>
        <div class="meta">
            <div class="category">
                <a href="#">
                    <strong>Категория</strong>
                </a>
            </div>
        </div>
        <a href="#">
        <div class="title">
            <h1>Оглавление</h1>
        </div>
        <a>
    </div>
    <div class="intro">
    <a href="#">
        <div class="cover">
            <img src="{{url('assets/img/post_img.jpg')}}" alt="Post cover">
        </div>
        </a>
        <div class="meta">
            <div class="category">
                <a href="#">
                    <strong>Категория</strong>
                </a>
            </div>
        </div>
        <a href="#">
        <div class="title">
            <h1>Оглавление</h1>
        </div>
        <a>
    </div>
    <div class="intro">
    <a href="#">
        <div class="cover">
            <img src="{{url('assets/img/post_img.jpg')}}" alt="Post cover">
        </div>
        </a>
        <div class="meta">
            <div class="category">
                <a href="#">
                    <strong>Категория</strong>
                </a>
            </div>
        </div>
        <a href="#">
        <div class="title">
            <h1>Оглавление</h1>
        </div>
        <a>
    </div>
</div>

@endsection
