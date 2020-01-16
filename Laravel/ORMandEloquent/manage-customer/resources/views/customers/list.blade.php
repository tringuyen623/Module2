@extends('layouts.app')

@section('title', 'Customers')

@section('content')
<div class="container">
    <table class="table table-bordered table-hover">
        <div class="mt-3">
            <h3 class="float-left"><strong>Customers List</strong></h3>
        <a href="{{ route('customers.create') }}" role="button" class="btn btn-primary float-right">Add new customer</a>
        </div>
        <thead class="thead-dark text-center">
            <tr>
                <th scope="col">STT</th>
                <th scope="col">Họ và tên</th>
                <th scope="col">Số điện thoại</th>
                <th scope="col">Email</th>
                <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody class="text-center">
            @foreach ($customers as $key=>$customer)

            <tr>
                <th scope="row">{{++$key}}</th>
                <td>{{ $customer->name }}</td>
                <td>{{ $customer->phone }}</td>
                <td>{{ $customer->email }}</td>
                <td>
                <a href="{{ route('customers.show', $customer->id) }}" role="button" class="btn btn-info">Detail</a>
                    <a href="{{ route('customers.edit', $customer->id) }}" role="button" class="btn btn-warning">Edit</a>
                <form onclick="return confirm('Are you sure?')" action="{{route('customers.destroy', $customer->id) }}" style="display:inline" method="POST">
                    @csrf
                    @method('DELETE')
                        <button type="submit" class="btn btn-danger">Delete</button>
                    </form>
                </td>
            </tr>

            @endforeach
        </tbody>
    </table>
</div>
@endsection