@extends('layouts.app')

@section('content')
<div class="container">
    @if (session('status'))
        <div class="alert alert-success text-center">{{session('status')}}</div>
    @endif
    <div class="row justify-content-center">
        <div class="col-md-8">
            <h3>My Profile</h3>
        </div>
        <div class="col-md-8">
            <div class="card">
                <div class="card-body">
                    <form action="#" class="container">
                        <div class="input row my-sm-3">
                            <label for="firstname" class="col-sm-2 col-form-label">Firstname: </label>
                            <div class="col-sm-10">
                                <input type="text" name="firstname" id="firstname" class="form-control" value="{{$user->firstname}}">
                            </div>
                            @error('firstname')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="input row my-sm-3">
                            <label for="lastname" class="col-sm-2 col-form-label">Lastname: </label>
                            <div class="col-sm-10">
                                <input type="text" name="lastname" id="lastname" class="form-control" value="{{$user->lastname}}">
                            </div>
                            @error('lastname')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="input row my-sm-3">
                            <label for="email" class="col-sm-2 col-form-label">Email: </label>
                            <div class="col-sm-10">
                                <input type="text" name="email" id="email" class="form-control" value="{{$user->email}}">
                            </div>
                            @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="input row my-sm-3 ">
                            <input type="submit" class="form-control btn btn-primary" value="Save Profile">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    @if (Auth::user()->usertype == 'freelancer')
        @include('layouts.inc.freelancer.category_setting')
    @endif
</div>
@endsection
