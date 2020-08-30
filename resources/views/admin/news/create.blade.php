@extends('layouts.app')
@section('content')
    <div class="col-md-4  offset-2">
        <h1>Добавить новость</h1><br>
        <form method="post" action="{{ route('news.store') }}" enctype="multipart/form-data">
            @csrf
            <div><input type="file" class="form-control"
                        name="img" placeholder="Изображение" value="{{ old('img') }}">
                @error('img')
                <div class="alert alert-danger">
                @foreach($errors->get('img') as $error)
                <p>{{ $error }} </p>
                @endforeach
                </div>
                @enderror
            </div>
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
            <div><textarea class="form-control" name="description" id="description"
                           placeholder="Текст">{!! old('description') !!}</textarea>
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
@push('js')
    <script src="//cdn.ckeditor.com/4.14.1/standard/ckeditor.js"></script>
    <script>
         CKEDITOR.replace('description');
    </script>
@endpush