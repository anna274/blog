@extends('layouts.default')

@section('title', '| Homepage')

@section('content')         
<!--<div class = "middle marg-of-middle">
    <div class="row">
        <div class="column">
            <div class="article">
                <div class="article-pic">
                    <img class="img-responsive" src="{{url('assets/img/picture3.jpg')}}"width="400px" height="400px">
                </div>
                <div class="article-content">
                    <div class="change-col"><a href="#"><p>A recipe of the happiness</p></a></div>
                    <p>Life is gorgeous, adventurous and full of miracles. Just learn how to notice it...</p>
                </div>
            </div>
        </div>
        <div class="column">
            <div class="article">
                <div class="article-pic">
                    <img class="img-responsive" src="{{url('assets/img/picture4.jpg')}}" width="400px" height="400px">
                </div>
                <div class="article-content">
                    <div class="change-col"><a href="#"><p>A recipe of the love</p></a></div>
                    <p>The recipe of the love is to love yourself. You are so beautiful, aren't you?</p>
                </div>
            </div>
        </div>
       
    </div>
</div>-->
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
