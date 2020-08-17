@extends('layouts.app')
@section('content')
    <div class="col-md-4  offset-2">
        <h1>Добавить категорию</h1><br>
        <form method="post" action="{{ route('category.store') }}">
            @csrf
            <p><input type="text" class="form-control" name="title" placeholder="Заголовок" value="{{ old('title') }}">
                @error('title') Заполните это поле @enderror</p>
            <p><input type="text" class="form-control" name="slug" placeholder="Слаг" value="{{ old('slug')  }}">
                @error('slug') Заполните это поле @enderror</p>
            <p><textarea class="form-control" name="description" placeholder="Текст">{!! old('description') !!}</textarea></p>
            <button type="submit" class="btn btn-success">Добавить</button>
        </form>
    </div>
@stop