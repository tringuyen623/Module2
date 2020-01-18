@extends('layouts.app')

@section('title', 'Edit Customer')

@section('content')
<div class="row">

    <div class="col-md-12">

        <h2>Edit customer</h2>

    </div>

    <div class="col-md-12">

        <form method="post" action="{{ route('customers.update', $customer->id) }}" enctype="multipart/form-data">

            @csrf
            @method('PATCH')
            <div class="form-group">

                <label>Họ và tên</label>

                <input type="text" class="form-control" name="name" value="{{ $customer->name }}" required>

            </div>

            <div class="form-group">

                <label>Số điện thoại</label>

                <input type="text" class="form-control" name="phone" value="{{ $customer->phone }}" required>

            </div>

            <div class="form-group">

                <label>Email</label>

                <input type="email" name="email" class="form-control" value="{{ $customer->email }}">

            </div>

            <div class="form-group">
                <label for="cities">Thành phố</label>
                <div class="control">
                    <select name="city_id" id="">
                        @foreach ($cities as $city)
                        <option @if ($customer->id === $city->id) {{"selected"}}
                            @endif
                            value="{{ $city->id }}">{{ $city->name }}</option>
                        @endforeach
                    </select>
                </div>
            </div>

            <button type="submit" class="btn btn-primary">Chỉnh sửa</button>

            <a href="{{ route('customers.index') }}" role="button" class="btn btn-secondary">Hũy</a>

        </form>

    </div>

</div>
@endsection