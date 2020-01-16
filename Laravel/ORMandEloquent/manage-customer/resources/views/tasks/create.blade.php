@extends('layouts.app')

@section('title', 'Create new task')
@section('content')

<div class="row">
    <div class="mt-3 col-12">
        <h3 class="float-left"><strong>Add new task</strong></h3>
    </div>
    <div class="col-12 mt-3">
    <form method="POST" action="{{ route('tasks.store')}}" enctype="multipart/form-data">
        @csrf
            <div class="form-group">
                <label for="inputTitle">Task title</label>
                <input type="text" name="title" class="form-control" id="inputTitle" placeholder="Enter title">
            </div>
            <div class="form-group">
                <label for="inputContent">Task content</label>
                {{-- <textarea type="text" name="phone" class="form-control" id="inputPhone" placeholder="Nhập số điện thoại"> --}}
                    <textarea name="content" id="inputContent" cols="30" rows="10" class="form-control" placeholder="Enter content"></textarea>
            </div>
            <div class="form-group">
                <label for="inputDueDate">Due date</label>
                <input type="date" name="duedate" class="form-control" id="inputDueDate">
            </div>
            <div class="form-group">
                <label for="uploadImage">Image</label>
                <input type="file" name="image" class="form-control" id="uploadImage">
            </div>
            
            <button type="submit" class="btn btn-primary">Add</button>
            <a href="{{ route('tasks.index') }}" role="button" class="btn btn-secondary">Cancel</a>
        </form>
    </div>
</div>
@endsection