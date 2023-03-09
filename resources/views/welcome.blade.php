@extends('layouts.index')

@section('content')
    <div class="main bg container-fluid g-0">
        <div class="content-wrapper">
            <div class="header">
                <p class="m-0">Improve our customer's lives by providing effective solutions.</p>
                <p class="m-0">
                    Tara dito! May trabaho ka. Makakatulong ka. May tutulong sayo.</p>
            </div>
            <div class="controls">
                <a class="btn btn-success" href="{{ route('login')}}"><span>Log-in</span></a>
                <a class="btn btn-success" href="{{ route('register')}}"><span>Register</span></a>
            </div>
        </div>
    </div>
    
    <div class="container g-0">
        <div class="container-wrapper">
            <div class="header text-center"><h2>Top Freelancers</h2></div>
            <div class="carousel container row justify-content-around m-auto">
                @foreach ($top_freelancers as $item)
                    
                    <div class="card col-2">
                        <div class="card-header">{{$item->firstname}}</div>
                        <div class="card-body">{{$item->category_name}}</div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>

@endsection