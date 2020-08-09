@extends ('layouts.index')
@section('content')
<h1>Это страница категорий новостей</h1>
<x-menu :categories="$categories"></x-menu>
@endsection