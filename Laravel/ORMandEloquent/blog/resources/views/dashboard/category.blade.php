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

                    <a href="{{ route('categories.create') }}" class="btn btn-primary">Add new category</a>
                    <a href="{{ route('home') }}" class="btn btn-light float-right">Back</a>

                    <div class="mt-2">
                        <table class="table table-striped table-bordered">
                            <thead class="thead-dark">
                                <tr>
                                    <th>No</th>
                                    <th>Name</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($categories as $key=>$category)
                                <tr>
                                    <td>
                                        {{ ++$key }}
                                    </td>

                                    <td>
                                        <a href="">{{ $category->name }}</a>
                                    </td>

                                    <td>
                                        <a href="{{ route('categories.edit', $category->id) }}" class="btn btn-warning"><span
                                                class="fa fa-edit"></span></a>

                                        <form onsubmit="return confirm('Are you sure?')" action="{{ route('categories.destroy', $category->id) }}" method="post"
                                            style="display:inline">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-danger"><span class="fa fa-trash"></button>
                                        </form>
                                    </td>
                                </tr>
                                @endforeach

                            </tbody>
                            <tbody id="tbMembers"></tbody>
                        </table>
                        <div class="pagination justify-content-center mt-5">
                            {{ $categories->links() }}
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection