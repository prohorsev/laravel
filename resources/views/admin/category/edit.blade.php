@extends('layouts.app')
@section('content')
    <div class="col-md-4  offset-2">
        <h1>Редактировать категорию</h1><br>
        <form method="post" action="{{ route('category.update', ['category' => $category]) }}">
            @csrf
            @method('PUT')
            <p><input type="text" class="form-control" name="title" placeholder="Заголовок" value="{{$category->title }}">
                @error('title') Заполните это поле @enderror</p>
            <p><input type="text" class="form-control" name="slug" placeholder="Слаг" value="{{$category->slug }}">
                @error('slug') Заполните это поле @enderror</p>
            <p><textarea class="form-control" name="description" placeholder="Текст">{!! $category->description !!}</textarea></p>
            <button type="submit" class="btn btn-success">Сохранить</button>
        </form>
    </div>
@stop