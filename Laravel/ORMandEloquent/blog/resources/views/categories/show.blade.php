@extends('layouts.app')

@section('content')
<div id="wrapper">
    <div id="page" class="container">
    <a href="/">Home></a><a href="{{ route('categories.index')}}">Category</a>>{{$category->name}}
        @forelse ($blogs as $blog)
        <div class="title">
            <h2><a href="{{ route('blogs.show', $blog->id) }}">{{ $blog->title }}</a></h2>
            <span class="byline">{{ $blog->excerpt }}</span>
        </div>
        {{ $blog->body }}
        @empty
        <p>No relevant category yet</p>
        @endforelse
    </div>
    <div class="pagination justify-content-center mt-5">
        {{ $blogs->links() }}
    </div>
</div>


@endsection