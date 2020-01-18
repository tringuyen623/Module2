@extends('layouts.app')

@section('title', 'Edit Customer')

@section('content')
<div class="col-12 col-md-12">
    <div class="row">
        <div class="col-12">
            <h1>Cập nhật tỉnh thành</h1>
        </div>
        <div class="col-12">
        <form method="post" action="{{ route('cities.update', $city->id) }}">
                @csrf
                @method('PATCH')
                <div class="form-group">
                    <label>Tên tỉnh</label>
                    <input type="text" class="form-control" name="name" value="{{ $city->name }}" required>
                </div>
                <button type="submit" class="btn btn-primary">Cập nhật</button>
                <a href="{{ route('cities.index') }}" role="button" class="btn btn-secondary">Hũy</a>
            </form>
        </div>
    </div>
</div>
@endsection