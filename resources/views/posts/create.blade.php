@extends('layouts.default')

@section('title', '| Новая статья')

@section('content') 


{!! Form::open(array('route' => 'posts.store', 'class' => 'form-create')) !!}

    <h1 class="form-create-text">Содание новой статьи</h1>

    {{ Form::label('title','Название:')}} 
    {{Form::text('title', null, array('class' => 'form-control-text'))}}

    {{ Form::label('category','Категория:')}}
    {{Form::text('category', null, array('class' => 'form-control-text'))}}

    {{Form::label('body',"Текст: ")}}
    {{Form::textarea('body',null, array('class' => 'form-control-text'))}}

    {{Form::submit('Создать статью', array('class'=>'form-control-button'))}}
{!! Form::close() !!}


@endsection