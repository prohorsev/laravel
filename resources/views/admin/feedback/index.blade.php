@extends('layouts.app')
@section('content')
<div>
    <a href="{{ route('feedback.create') }}">Добавить категорию</a>
    <br>
    <a href="{{ route('admin') }}">В админку</a>
</div>
<br>
@if(session()->has('success'))
     <strong>{{ session()->get('success') }}</strong>
@endif
<div class="col-md-4 offset-2">
    @forelse($feedbackList as $feedback)
        <div>
             <p><a href=" {{ route('feedback.edit', ['feedback' => $feedback]) }}">{{ $feedback->name }}</a><a href="feedback/destroy/{{ $feedback->id }}}}">Удалить</a></p>
              <br>
        </div>
     @empty
        <h2>Новостей нет</h2>
     @endforelse

</div>
@stop