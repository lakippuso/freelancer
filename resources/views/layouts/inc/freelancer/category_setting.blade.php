<div class="row justify-content-center my-3">
    <div class="col-md-8">
        <div class="card">
            <div class="card-header">Freelancing Category</div>
            <div class="card-body">
                <form action="{{ route('freelancer.freelancer.update', [ 'freelancer' => Auth::user()->id ] ) }}" class="container row" method="POST">
                    @csrf
                    @method('PUT')
                    
                    @error('category')
                    <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                    @foreach ($nav_categories as $category)
                        <div class="form-check col-3">
                                <input class="form-check-input" type="radio" name="category" id="category{{$loop->iteration}}" value="{{$category->id}}" {{ ($category->id == $freelancer->category) ? 'checked' : ''}}>
                                <label class="form-check-label" for="category{{$loop->iteration}}">{{$category->category_name}}</label>
                        </div>
                    @endforeach
                    <div class="mt-2">
                        <input type="submit" id="email" class="form-control btn btn-primary" value="Save">
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>