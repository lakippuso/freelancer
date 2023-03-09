<nav class="categories navbar navbar-expand-lg p-0 border-bottom d-none d-md-block">
    <div class="container-fluid col-10">
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse text-center g-0" id="navbarNavAltMarkup">
            <div class="navbar-nav col">
                <a class="nav-link col" href='{{ route('category.home')}}'>
                    <span>All</span>
                </a>
            </div>
            @foreach ($nav_categories as $category)
                <div class="navbar-nav col">
                    <a class="nav-link col" href='{{ route('category.view', [$category->id])}}'>
                        <span>{{ $category->category_name }}</span>
                    </a>
                </div>
            @endforeach
        </div>
    </div>
</nav>