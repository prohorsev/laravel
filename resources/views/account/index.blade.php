@extends('layouts.app')
@section('content')
<h1>Привет, {{ $user->name }}</h1>
<br>
<a href="{{ route('admin.news') }}">Список новостей</a>
<a href="{{ route('admin.categories') }}">Список категорий</a>
<a href="{{ route('admin.feedback') }}">Список отзывов</a>
@if(session()->has('error'))
<h1 style="color: red;">{{ session()->get('error') }}</h1>
@endif
<img src="{{ $user->avatar }}">
@stop