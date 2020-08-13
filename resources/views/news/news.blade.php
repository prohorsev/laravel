@extends ('layouts.index')
@section('content')
<h1>Это страница новостей категории {{ $id }}</h1>
@foreach($news as $item)
<a class="p-2 text-muted" href="{{ route('newscategories.showitem', ['id' => $item->id]) }}">{{ $item->title }}</a>
@endforeach
@endsection