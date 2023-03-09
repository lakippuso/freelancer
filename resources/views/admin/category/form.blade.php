@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card container-fluid">
                <div class="card-header">{{ __('Add Category')}}</div>
                <div class="card-body">
                    <form action="{{ route('admin.category.store') }}" class="category-form container-fluid" method="POST">
                        @csrf
                        <div class="input row my-sm-1">
                            @error('category_name')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                            <label for="category_name" class="col-sm-3 col-form-label">Category Name: </label>
                            <div class="col-sm-9 py-sm-auto">
                                <input type="text" name="category_name" id="category_name" class="form-control">
                            </div>
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
