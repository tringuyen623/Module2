@extends('layouts.app')

@section('head')
@endsection

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Dashboard
                </div>

                <div class="card-body">
                    <div class="links">

                        <a href="{{ route('blog') }}">Blog</a>
                        <a href="{{ route('category') }}">Category</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection