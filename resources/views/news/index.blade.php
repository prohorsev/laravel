@extends('layouts.app')
@section('content')
    <h3 class="pb-4 mb-4 font-italic border-bottom">
        Новости
    </h3>

   @forelse($newsList as $news)
    <div class="blog-post">
        <h2 class="blog-post-title"><a href="{{ route('news', ['id' => $news->id]) }}">{{ $news->title }}</a></h2>
        <p class="blog-post-meta">December 23, 2013 by <a href="#">Jacob</a></p>
        <p>{!! mb_substr($news->description, 0, 200) !!}</p>
    </div>
   @empty
       <h2>Новостей нет</h2>
   @endforelse


    <nav class="blog-pagination">
        {{ $newsList->links() }}
    </nav>

@stop