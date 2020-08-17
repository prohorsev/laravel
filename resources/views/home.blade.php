@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    <h1>Приветствие пользователя</h1>
                    Тут какой-то текст<br>
                    <a href="/admin">Переход на admin страницу</a><br>
                    <a href="/news">Новости</a><br>
                    <a href="/feedback">Обратная связь</a><br>
                    @if (session('status'))
                    <div class="alert alert-success" role="alert">
                        {{ session('status') }}
                    </div>
                    @endif

                    {{ __('You are logged in!') }}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection