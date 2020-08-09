@extends ('layouts.index')
@section('content')
@foreach($news as $item)
@if ($item['id'] == $id)
<h1>{{ $item['title'] }}</h1>
<p>{{ $item['text'] }}</p>
@endif
@endforeach
@endsection