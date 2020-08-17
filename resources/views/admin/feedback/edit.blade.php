@extends('layouts.app')
@section('content')
    <div class="col-md-4  offset-2">
        <h1>Редактировать отзыв</h1><br>
        <form method="post" action="{{ route('feedback.update', ['feedback' => $feedback]) }}">
            @csrf
            @method('PUT')
            <p><input type="text" class="form-control" name="name" placeholder="Заголовок" value="{{$feedback->name }}">
                @error('title') Заполните это поле @enderror</p>
            <p><textarea class="form-control" name="text" placeholder="Текст">{!! $feedback->text !!}</textarea></p>
            <button type="submit" class="btn btn-success">Сохранить</button>
        </form>
    </div>
@stop