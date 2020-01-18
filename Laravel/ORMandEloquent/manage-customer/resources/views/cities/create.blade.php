@extends('layouts.app')

@section('title', 'Create new customer')
@section('content')

<div class="col-12 col-md-12">
    <div class="row">
        <div class="col-12">
            <h1>Thêm mới tỉnh thành</h1>
        </div>
        <div class="col-12">
            <form method="post" action="{{ route('cities.store') }}">
                @csrf
                <div class="form-group">
                    <label>Tên tỉnh</label>
                    <input type="text" class="form-control" name="name"  placeholder="Enter name" required>
                </div>
                <button type="submit" class="btn btn-primary">Thêm mới</button>
                <a href="{{ route('cities.index') }}" role="button" class="btn btn-secondary">Hũy</a>
            </form>
        </div>
    </div>
</div>

@endsection