@extends('layouts.app')

@section('title', 'Customers')

@section('content')
<div class="container">
    <table class="table table-bordered table-hover">
        <div class="mt-3">
            <h3 class="float-left"><strong>Customers List</strong></h3>
            <a href="{{ route('customers.index') }}" role="button" class="btn btn-primary float-right">Back</a>
        </div>
        <thead class="thead-dark text-center">
            <tr>
                <th scope="col">Họ và tên</th>
                <th scope="col">Số điện thoại</th>
                <th scope="col">Email</th>
                <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody class="text-center">
            <tr>
                <td>{{ $customer->name }}</td>
                <td>{{ $customer->phone }}</td>
                <td>{{ $customer->email }}</td>
                <td>
                    <a href="{{ route('customers.edit', $customer->id) }}" role="button"
                        class="btn btn-warning">Edit</a>
                    <form action="{{route('customers.destroy', $customer->id) }}" style="display:inline" method="POST">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger">Delete</button>
                    </form>
                </td>
            </tr>

        </tbody>
    </table>
</div>
@endsection