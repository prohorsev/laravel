@extends ('layouts.index')
@section('content')
<h1>{{ $item->title }}</h1>
<p>{{ $item->text }}</p>
@endsection