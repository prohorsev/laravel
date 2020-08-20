@extends('layouts.app')
@section('content')
    <div class="col-md-4  offset-2">
        <h1>Добавить категорию</h1><br>
        <form method="post" action="{{ route('category.store') }}">
            @csrf
            <div><input type="text" class="form-control" name="title" placeholder="Заголовок" value="{{ old('title') }}">
                @error('title')
                <div class="alert alert-danger">
                @foreach($errors->get('title') as $error)
                <p>{{ $error }} </p>
                @endforeach
                </div>
                @enderror
            </div>
            <div><input type="text" class="form-control" name="slug" placeholder="Слаг" value="{{ old('slug')  }}">
                @error('slug')
                <div class="alert alert-danger">
                @foreach($errors->get('slug') as $error)
                <p>{{ $error }} </p>
                @endforeach
                </div>
                @enderror
            </div>
            <div><textarea class="form-control" name="description" placeholder="Текст">{!! old('description') !!}</textarea>
                @error('description')
                   <div class="alert alert-danger">
                      @foreach($errors->get('description') as $error)
                           <p>{{ $error }} </p>
                      @endforeach
                   </div>
                @enderror
            </div>
            <button type="submit" class="btn btn-success">Добавить</button>
        </form>
    </div>
@stop