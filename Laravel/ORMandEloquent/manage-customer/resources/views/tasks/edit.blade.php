@extends('layouts.app')

@section('title', 'Edit task')

@section('content')
<div class="row">

    <div class="col-md-12">

        <h2>Edit task</h2>

    </div>

    <div class="col-md-12">

        <form method="post" action="{{ route('tasks.update', $task->id) }}" enctype="multipart/form-data">

            @csrf
            @method('PATCH')
            <div class="form-group">

                <label>Title</label>

                <input type="text" class="form-control" name="title" value="{{ $task->title }}" required>

            </div>

            <div class="form-group">

                <label>Content</label>

                <textarea name="content" id="inputContent" cols="30" rows="10" class="form-control" placeholder="Enter content">{{ $task->content }}</textarea>

            </div>

            <div class="form-group">

                <label>Due Date</label>

                <input type="date" name="duedate" class="form-control" id="inputDueDate" value="{{ $task->created_at }}">

            </div>

            <div class="form-group">

                <label>Image</label>

            <input type="file" name="image" class="form-control" id="inputImage" value="{{ $task->img }}">

            </div>

            <button type="submit" class="btn btn-primary">Update</button>

            <a href="{{ route('tasks.index') }}" role="button" class="btn btn-secondary">Cancel</a>

        </form>

    </div>

</div>
@endsection