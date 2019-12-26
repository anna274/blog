    
@extends('layouts.'.$print)

@section('title')
    @parent
    {{$post->title}}
@endsection

@section('content')         
<div class="article-post">
    <div class="intro">
        <div class="cover">
            <img src="{{$post->image}}" alt="Post cover"> <!-- {{url('assets/img/post_img.jpg')}}-->
        </div>
        <div class="meta">
            <div class="category">
                <a href="#">
                    <strong>{{$post->categories->category_name}}</strong>
                    <a href="?print=ok" title="Версия для печати" target="_blank"><img src="{{url('assets/img/print.png')}}" alt="Print version"></a>
                </a>
            </div>
        </div>
        <div class="title">
            <h1>{{$post->title}}</h1>
        </div>
    </div>
    <div class="body">
        <h3>
        {{$post->body}}
        </h3>
    </div>
    <div class="time-note">
    <p class="note">Опубликовано: {{ date('M j, Y',strtotime($post->created_at))}}</p>
    <p class="note">Последнее обновление: {{ date('M j, Y',strtotime($post->updated_at))}}</p>
    <div class="btn-field">
        {!! Html::linkRoute('posts.edit','Редактировать',array($post->id), array('class'=>'btn edit-btn')) !!}

        {!! Form::open(['route'=>['posts.destroy', $post->id], 'method' => 'DELETE']) !!}

            {!! Form::submit('Удалить', ['class'=>'btn delete-btn']) !!}

        {!! Form::close() !!}

    </div>
    </div>
</div>

@include('partials._see-also')
@endsection