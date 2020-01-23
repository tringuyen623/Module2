@extends('layouts.app')

@section('head')
@endsection

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Dashboard
                </div>

                <div class="card-body">

                    <a href="{{ route('blogs.create') }}" class="btn btn-primary">Add new blog</a>
                    <a href="{{ route('home') }}" class="btn btn-light float-right">Back</a>


                    <div class="mt-2">
                        <table class="table table-striped table-bordered">
                            <thead class="thead-dark">
                                <tr>
                                    <th>No</th>
                                    <th>Title</th>
                                    <th>Category</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($blogs as $key=>$blog)
                                <tr>
                                    <td>
                                        {{ ++$key }}
                                    </td>

                                    <td>
                                        <a href="">{{ $blog->title }}</a>
                                    </td>

                                    

                                    <td>
                                        {{ $blog->category->name}}
                                    </td>

                                    <td>
                                        <a href="{{ route('blogs.edit', $blog->id) }}" class="btn btn-warning"><span
                                                class="fa fa-edit"></span></a>

                                        <form onsubmit="return confirm('Are you sure?')" action="{{ route('blogs.destroy', $blog->id) }}" method="post"
                                            style="display:inline">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-danger"><span class="fa fa-trash"></button>
                                        </form>
                                    </td>
                                </tr>
                                @endforeach

                            </tbody>
                        </table>
                        <div class="pagination justify-content-center mt-5">
                            {{ $blogs->links() }}
                        </div>
                    </div>

                </div>
            </div>



        </div>
    </div>
</div>
@endsection