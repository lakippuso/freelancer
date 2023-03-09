@extends('layouts.index')

@section('content')
    <div class="main container-fluid g-0 row justify-content-center pt-sm-5">
        <div class="side-nav col-2">
            @foreach ($nav_categories as $item)
                <a href="" class="nav-link">{{$item->category_name}}</a>
            @endforeach
        </div>
        <div class="right-content col-8">
            <div class="py-sm-3">
                <h1 class="g-0">{{isset($category) ? $category->category_name : 'All'}}</h1>
            </div>
            <div class="row">
                @forelse ($freelancers as $item)
                    <div class="card col-sm-12 col-md-6 col-lg-3 offset-1 mb-4">
                        <div class="card-header">
                            <span>{{ $item->firstname }}</span>
                        </div>
                        <div class="card-body">
                            <div>{{ $item->firstname }} {{ $item->lastname }}</div>
                            <div>{{ $item->category_name }}</div>
                        </div>
                    </div>
                @empty
                    <div class="text-center"><span>No Freelancers Yet</span></div>
                @endforelse
            </div>
        </div>
    </div>
@endsection