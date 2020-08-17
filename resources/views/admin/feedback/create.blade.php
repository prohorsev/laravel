@extends('layouts.app')
@section('content')
    <div class="col-md-4  offset-2">
        <h1>Добавить отзыв</h1><br>
        <form method="post" action="{{ route('feedback.store') }}">
            @csrf
            <p><input type="text" class="form-control" name="name" placeholder="Имя" value="{{ old('name') }}">
                @error('title') Заполните это поле @enderror</p>
            <p><textarea class="form-control" name="text" placeholder="Текст">{!! old('text') !!}</textarea></p>
            <button type="submit" class="btn btn-success">Добавить</button>
        </form>
    </div>
@stop