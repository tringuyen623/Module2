@extends('layouts.app')

@section('content')
<div id="wrapper">
    <div id="page" class="container">
        @foreach ($blogs as $blog)
        <div class="title">
            <h2><a href="{{ route('blogs.show', $blog->id) }}">{{ $blog->title }}</a></h2>
            <span class="byline">{{ $blog->excerpt }}</span>
        </div>
        {{ $blog->body }}
        @endforeach
    </div>
    <div class="pagination justify-content-center mt-5">
        {{ $blogs->links() }}
    </div>
</div>


@endsection