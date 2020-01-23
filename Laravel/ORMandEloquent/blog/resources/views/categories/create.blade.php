@extends('layouts.app')

@section('head')

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bulma/0.8.0/css/bulma.min.css">

@endsection

@section('content')
<div id="wrapper">
    <div id="page" class="container">
        <h1 class="heading has-text-weight-bold is-size-4">New Category</h1>

        <form action="{{ route('categories.store') }}" method="POST">
            @csrf
            <div class="field">
                <label class="label" for="name">Name</label>

                <div class="control">
                    <input type="text" class="input @error('name') is-danger @enderror" name="name" id="name"
                        value="{{ old('name') }}">
                    @error('name')
                    <p class="help is-danger">{{ $errors->first('name') }}</p>
                    @enderror
                </div>
            </div>

            <div class="field is-grouped">
                <div class="control">
                    <button class="button is-link" type="submit">Submit</button>
                </div>

                <p class="control">
                <a class="button is-light" href="{{ route('category')}}">
                        Cancel
                    </a>
                </p>

            </div>

        </form>
    </div>
</div>
@endsection