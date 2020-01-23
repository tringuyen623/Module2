@extends('layouts.app')

@section('head')

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bulma/0.8.0/css/bulma.min.css">

@endsection

@section('content')
<div id="wrapper">
    <div id="page" class="container">
        <h1 class="heading has-text-weight-bold is-size-4">New Blog</h1>

        <form action="{{ route('blogs.store') }}" method="POST">
            @csrf
            <div class="field">
                <label class="label" for="title">Title</label>

                <div class="control">
                    <input type="text" class="input @error('title') is-danger @enderror" name="title" id="title"
                        value="{{ old('title') }}">
                    @error('title')
                    <p class="help is-danger">{{ $errors->first('title') }}</p>
                    @enderror
                </div>
            </div>

            <div class="field">
                <label class="label" for="excerpt">Excerpt</label>

                <div class="control">
                    <textarea name="excerpt" id="excerpt"
                        class="textarea @error('excerpt') is-danger @enderror">{{ old('excerpt') }}</textarea>
                    @error('excerpt')
                    <p class="help is-danger">{{ $errors->first('excerpt') }}</p>
                    @enderror
                </div>
            </div>

            <div class="field">
                <label class="label" for="body">Body</label>

                <div class="control">
                    <textarea name="body" id="body"
                        class="textarea @error('body') is-danger @enderror">{{ old('body') }}</textarea>
                    @error('body')
                    <p class="help is-danger">{{ $errors->first('body') }}</p>
                    @enderror
                </div>
            </div>

            <div class="field">
                <label class="label" for="category">Category</label>

                <div class="control">
                    <select name="category_id">
                        @foreach ($categories as $category)
                        <option value="{{ $category->id }}">{{ $category->name }}</option>
                        @endforeach
                    </select>
                    @error('category')
                    <p class="help is-danger">{{ $message }}</p>
                    @enderror
                </div>
            </div>

            <div class="field is-grouped">
                <div class="control">
                    <button class="button is-link" type="submit">Submit</button>
                </div>

                <p class="control">
                    <a class="button is-light" href="{{ route('blog')}}">
                        Cancel
                    </a>
                </p>

            </div>

        </form>
    </div>
</div>
@endsection