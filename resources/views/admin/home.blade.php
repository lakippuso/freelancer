@extends('layouts.app')

@section('content')
<div class="container">
    <div class="floating-cards row mb-sm-5 justify-content-center">
        <div class="card col-md-3 mx-sm-3 py-3 text-center">
            <span>Users: {{ $users->count()}}</span>
        </div>
        <div class="card col-md-3 mx-sm-3 py-3 text-center">
            <span>Freelancer: {{ $users->where('usertype','freelancer')->count() }}</span>
        </div>
        <div class="card col-md-3 mx-sm-3 py-3 text-center">
            <span>Clients: {{ $users->where('usertype','client')->count() }} </span>
        </div>
    </div>
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <div class="card-header">{{ __('Admin Dashboard') }}</div>

                <div class="card-body">
                    
                    <table class="table table-hover">
                        <thead>
                            <tr>
                                <th scope="col">Fullname</th>
                                <th scope="col">Email</th>
                                <th scope="col">Usertype</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($users as $item)
                                <tr>
                                    <td><a href="{{route('admin.user.view',[$item->id])}}">{{$item->fullname}}</a></td>
                                    <td>{{$item->email}}</td>
                                    <td>{{$item->usertype}}</td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
