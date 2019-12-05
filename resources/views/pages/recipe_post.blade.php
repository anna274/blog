@extends('layouts.default')

@section('title', '| Post name')

@section('content')         
<div class="article-post">
    <div class="intro">
        <div class="cover">
            <img src="{{url('assets/img/boul.jpg')}}" alt="Post cover"> <!-- {{url('assets/img/post_img.jpg')}}-->
        </div>
        <div class="meta">
            <div class="category">
                <a href="#">
                    <strong>Категория</strong>
                </a>
            </div>
        </div>
        <div class="title">
            <h1>Оглавление</h1>
        </div>
    </div>
    <h3>
    Мы в How to Green обожаем смузи-боулы, ведь каждый раз их можно готовить по-разному, получая абсолютно новые блюда. Можно взбить в блендере банан с растительным молоком и ягодами. Или по желанию придумать свой собственный микс. Кстати, даже если следовать этому рецепту, но использовать разное молоко – соевое, миндальное, кокосовое, овсяное или фундучное, – вкус смузи-боула будет разным.
    </h3>
    <div class="recipe">
        <div class="ingredients">
            <h2>
                <strong>Ингридиенты:</strong>
            </h2>
            <ul>
                <li>банан</li>
                <li>клубника</li>
                <li>клюква</li>
                <li>черника</li>
            </ul>
        </div>
        <div class="steps">
            <h2>
                <strong>Рецепт:</strong>
            </h2>
            <ol>
                <li>Банан вместе с ягодами и молоком взбить в блендере до получения однородной массы, вылить в красивую тарелку.</li>
                <li>Украсить сверху смузи-боул полосками: слайсами клубники, миндальными лепестками, семенами чиа, кокосовой стружкой.</li>
            </ol>
        </div>
    </div>
</div>
@include('partials._see-also')
@endsection