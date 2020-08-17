@extends('layouts.app')
@section('content')
<div>
    <a href="{{ route('category.create') }}">Добавить категорию</a>
    <br>
    <a href="{{ route('admin') }}">В админку</a>
</div>
<br>
@if(session()->has('success'))
     <strong>{{ session()->get('success') }}</strong>
@endif
<div class="col-md-4 offset-2">
    @forelse($categoriesList as $category)
        <div>
             <p><a href=" {{ route('category.edit', ['category' => $category]) }}">{{ $category->title }}</a><a href="category/destroy/{{ $category->id }}}}">Удалить</a></p>
              <br>
        </div>
     @empty
        <h2>Новостей нет</h2>
     @endforelse

</div>
@stop