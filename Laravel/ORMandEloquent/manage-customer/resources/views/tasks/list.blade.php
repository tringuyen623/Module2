@extends('layouts.app')

@section('title', 'Tasks')

@section('content')

<div class="container">
    <table class="table table-bordered table-hover">
        <div class="mt-3">
            <h3 class="float-left"><strong>Tasks List</strong></h3>
        <a href="{{ route('tasks.create') }}" role="button" class="btn btn-primary float-right">Add new task</a>
        </div>
        <thead class="thead-dark text-center">
            <tr>
                <th scope="col">STT</th>
                <th scope="col">Task Title</th>
                <th scope="col">Content</th>
                <th scope="col">Created</th>
                <th scope="col">Due Date</th>
                <th scope="col">Image</th>
                <th scope="col">Action</th>

            </tr>
        </thead>
        <tbody class="text-center">
            @foreach ($tasks as $key=>$task)

            <tr>
                <th scope="row">{{++$key}}</th>
                <td>{{ $task->title }}</td>
                <td>{{ $task->content }}</td>
                <td>{{ $task->created_at }}</td>
                <td>{{ $task->updated_at }}</td>
            <td><img src="{{ asset('storage/images/' . $task->img) }}" width="60px" height="60px"></td>
                <td>
                <a href="{{ route('tasks.show', $task->id) }}" role="button" class="btn btn-info">Detail</a>
                    <a href="{{ route('tasks.edit', $task->id) }}" role="button" class="btn btn-warning">Edit</a>
                <form onclick="return confirm('Are you sure?')" action="{{route('tasks.destroy', $task->id) }}" style="display:inline" method="POST">
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