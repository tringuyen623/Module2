@extends('layouts.app')

@section('title', 'Create new customer')
@section('content')

<div class="row">
    <div class="mt-3 col-12">
        <h3 class="float-left"><strong>Add new customer</strong></h3>
    </div>
    <div class="col-12 mt-3">
    <form method="POST" action="{{ route('customers.store')}}">
        @csrf
            <div class="form-group">
                <label for="inputEmail1">Họ và tên</label>
                <input type="text" name="name" class="form-control" id="inputName" placeholder="Nhập Họ và tên">
            </div>
            <div class="form-group">
                <label for="inputPhone">Số điện thoại</label>
                <input type="text" name="phone" class="form-control" id="inputPhone" placeholder="Nhập số điện thoại">
            </div>
            <div class="form-group">
                <label for="inputEmail1">Email address</label>
                <input type="email" name="email" class="form-control" id="inputEmail1" placeholder="Nhập email">
            </div>
            
            <button type="submit" class="btn btn-primary">Tạo mới</button>
            <a href="{{ route('customers.index') }}" role="button" class="btn btn-secondary">Hũy</a>
        </form>
    </div>
</div>
@endsection