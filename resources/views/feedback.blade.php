@extends ('layouts.index')
@section('content')
<h1>Форма обратной связи</h1>
<form method="post" action="{{ route('feedback.store') }}">
    @csrf
    <p><input type="text" class="form-control" name="name" placeholder="Имя" value="{{ old('name') }}">
        @error('title') Заполните это поле @enderror</p>
    <p><textarea class="form-control" name="text" placeholder="Текст">{!! old('text') !!}</textarea></p>
    <button type="submit" class="btn btn-success">Добавить</button>
</form>
@if(session()->has('success'))
<strong>{{ session()->get('success') }}</strong>
@endif
@endsection