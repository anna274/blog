@extends('layouts.default')

@section('title', '| Новая статья')

@section('content') 
<div class="form-control">
<h1 class="form-create-text">Содание новой статьи</h1></div>
{!! Form::open(array('route' => 'posts.store', 'class' => 'form-control')) !!}

    {{ Form::label('title','Название:')}} 
    {{Form::text('title', null, array('class' => 'form-control-text form-spacing-buttom'))}}

    {{ Form::label('category','Категория:')}}
    <select class="form-control-text" name="category_id">
    @foreach ($objs as $obj)
    <option value='{{$obj->id}}'>
        {{$obj->category_name}}
    </option>
        @foreach($obj->categories()->get() as $two)
            <option value='{{$two->id}}'>
                &diams;	 {{$two->category_name}}
            </option>
        @endforeach
    @endforeach
    </select>

    {{ Form::label('image','URL картинки:')}}
    {{Form::text('image', null, ['class' => 'form-control-text'])}}

    {{ Form::label('body','Текст:')}}
    {{ Form::textarea('body',null, array('class' => 'form-control-text form-spacing-buttom'))}}

    {{ Form::submit('create', array('class'=>'form-control-button'))}}
{!! Form::close() !!}


@endsection