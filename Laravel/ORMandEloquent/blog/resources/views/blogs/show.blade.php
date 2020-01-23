@extends('layouts.app')

@section('content')
<div id="wrapper">
    <div id="page" class="container">
        <div class="title">
            <h2>{{ $blog->title }}</h2>
            <span class="byline">{{ $blog->excerpt }}</span>
        </div>
        {{ $blog->body }}
</div>


@endsection