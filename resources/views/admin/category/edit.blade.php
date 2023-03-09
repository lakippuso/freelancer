@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card container-fluid">
                <div class="card-header">{{ __('Edit Category')}}</div>
                <div class="card-body">
                    <form action="{{ route('admin.category.update',['category'=>$category->id]) }}" class="category-form container-fluid" method="POST">
                        @csrf
                        @method('PUT')
                        <div class="input row my-sm-1">
                            <label for="category_name" class="col-sm-3 col-form-label">Category Name: </label>
                            <div class="col-sm-9 py-sm-auto">
                                <input type="text" name="category_name" id="category_name" class="form-control" value="{{ !empty($category->category_name ) ? $category->category_name : ''}}">
                            </div>
                            @error('category')
                                <span class="alert-danger">Error</span>
                            @enderror
                        </div>
                        <div class="input row">
                                <input type="submit" class="btn btn-primary form-control mt-sm-2 mx-sm-2" value="Add">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
