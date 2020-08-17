@extends('layouts.app')
@section('content')
<h1>Привет, админ</h1>
<br>
<a href="{{ route('admin.news') }}">Список новостей</a>
<a href="{{ route('admin.categories') }}">Список категорий</a>
<a href="{{ route('admin.feedback') }}">Список отзывов</a>
@stop