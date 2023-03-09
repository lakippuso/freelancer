@extends('layouts.app')

@section('content')
<div class="container">
    @if(session('status'))
        <div class="row my-sm-2 justify-content-center">
                <div class="col-md-10 alert alert-success">
                    <span>{{session('status')}}</span>
                </div>
        </div>
    @endif
    <div class="row my-sm-2 justify-content-end">
        <div class="col-md-3 mx-sm-3 py-3 text-center">
            <button class="btn btn-primary" onclick="window.location='{{ route('admin.category.create') }}'">Add Category</button>
        </div>
    </div>
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <div class="card-header">{{ __('Categories') }}</div>

                <div class="card-body">
                    <table class="table table-hover text-center">
                        @if(count($categories) !=0)
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Category Name</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($categories as $category)
                                    <tr>
                                        <td>{{ $category->id }}</td>
                                        <td>{{ $category->category_name }}</td>
                                        <td>
                                            <form action="{{ route('admin.category.destroy',['category' => $category->id]) }}" method="POST">
                                                @csrf
                                                @method('DELETE')
                                                <button class="btn btn-primary mx-sm-1" onclick="window.location='{{ route('admin.category.edit',['category' => $category->id]) }}'">Edit</button>
                                                <input type="submit" class="btn btn-danger" value="Delete">
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                        @else
                            <p class="text-center">No Categories</p>
                        @endif
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
