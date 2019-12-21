@extends('layouts.default')

@section('title', '| Search')

@section('content')         

<div class="search-form">
<form>
  <input type="text" placeholder="Искать здесь...">
  <button type="submit">
    <img class="icon" src="{{url('assets/img/search.png')}}" alt="Search">
  </button>
</form>
</div>

@endsection