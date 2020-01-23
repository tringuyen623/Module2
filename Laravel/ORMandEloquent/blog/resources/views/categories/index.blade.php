@extends('layouts.app')

@section('head')
{{-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bulma/0.8.0/css/bulma.min.css"> --}}
@endsection

@section('content')
<div id="wrapper">
    <div id="page" class="container">
        @auth
        <a href="{{ route('categories.create') }}" class="btn btn-primary">Add new category</a>
        @endauth
        @foreach ($categories as $category)
        <div class="title">
            <h2><a href="{{ route('categories.show', $category->id) }}">{{ $category->name }}</a>
                @auth
                <a class="float-right" href="{{ route('categories.edit', $category->id) }}"><i
                        class="fa fa-edit"></i></a>
                @endauth
            </h2>
            @endforeach
        </div>
        <div class="pagination justify-content-center mt-5">
            {{ $categories->links() }}
        </div>
    </div>


    @endsection