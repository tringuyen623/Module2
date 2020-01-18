@extends('layouts.app')

@section('title', 'Cities')

@section('content')
<div class="container">
    <table class="table table-bordered table-hover">
        <div class="mt-3">
            <h3 class="float-left"><strong>Cities List</strong></h3>
            <a href="{{ route('cities.create') }}" role="button" class="btn btn-primary float-right">Add new
                city</a>
        </div>
        <thead class="thead-dark text-center">
            <tr>
                <th scope="col">STT</th>
                <th scope="col">Tên tỉnh thành</th>
                <th scope="col">Số khách hàng</th>
                <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody class="text-center">
            @foreach ($cities as $key=>$city)

            <tr>
                <th scope="row">{{ ++$key }}</th>
                <td>{{ $city->name }}</td>
                <td>{{ count($city->customers) }}</td>
                <td>
                    <a href="{{ route('cities.edit', $city->id) }}" role="button" class="btn btn-warning">Edit</a>
                    <form onclick="return confirm('Are you sure?')" action="{{ route('cities.destroy', $city->id) }}"
                        style="display:inline" method="POST">
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