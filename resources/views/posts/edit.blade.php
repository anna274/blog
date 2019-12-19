@extends('layouts.default')

@section('title', '| Редактирование статьи')

@section('content') 

{!! Form::model($post, ['route' => ['posts.update', $post->id], 'class'=>'form-control', 'method'=>'PUT']) !!}

<h1>Редактирование статьи</h1>

{{ Form::label('title','Название:')}} 
{{Form::text('title', null, ['class' => 'form-control-text'])}}

{{ Form::label('category','Категория:')}}
{{Form::text('category', null, ['class' => 'form-control-text'])}}

{{Form::label('body',"Текст: ")}}     
{{Form::textarea('body', null, ['class' => 'form-control-text'])}}
<div class="time-note">
    <p class="note">Опубликовано: {{ date('M j, Y',strtotime($post->created_at))}}</p>
    <p class="note">Последнее обновление: {{ date('M j, Y',strtotime($post->updated_at))}}</p>
    <div class="btn-field">
        {{Form::submit('Сохранить изменения', array('class'=>'btn edit-btn'))}}
        {!! Html::linkRoute('posts.show','Отмена',array($post->id), array('class'=>'btn delete-btn')) !!}
    </div>
</div>

{!! Form::close() !!}
@endsection