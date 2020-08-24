@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            @if(Session::has('message'))
                <div class="alert alert-success">
                    {{Session::get('message')}}
                </div>
            @endif
        <form action="{{route('food.store')}}" method="post">@csrf
            <div class="card">
                <div class="card-header">Create New Food Item</div>
                <div class="card-body">
                    {{-- <<Name group --}}
                    <div class="form-group">
                        <label for="name">Name</label>
                        <input type="text" name="name" placeholder="Name of food" class="form-control @error('name') is-invalid @enderror">

                        @error('name')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                    {{-- End Name>> --}}


                    {{-- <<Description Group --}}
                    <div class="form-group">
                        <label for="description">Description</label>
                        <input type="text" name="description" placeholder="A short description" class="form-control @error('description') is-invalid @enderror">

                        @error('description')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                    {{-- End Description>> --}}

                    {{-- <<Price Group --}}
                    <div class="form-group">
                        <label for="name">Price</label>
                        <input type="number" name="price" placeholder="$0.00" class="form-control @error('price') is-invalid @enderror">

                        @error('price')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                    {{-- End Price>> --}}

                    {{-- <<Image Group --}}
                    <div class="form-group">
                            <label for="image">Image</label>
                            <input type="file" name="image" class="form-control @error('price') is-invalid @enderror">
    
                            @error('price')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                    </div>
                    {{-- End Image>> --}}

                    {{-- <<Category Group --}}
                    <div class="form-group">
                            <label for="category">Category</label>
                            <select name="category" class="form-control @error('category') is-invalid @enderror">
                                    <option>Select category</option>
                                @foreach (App\Category::all() as $category)
                                    <option value="{{$category->id}}">{{$category->name}}</option>
                                @endforeach
                            </select>
    
                            @error('category')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                    </div>
                    {{-- End Category>> --}}

                    <div class="form-group">
                        <button class="btn btn-outline-primary" type="submit">Submit</button>
                    </div>
                </div>
            </div>
            </form>
        </div>
    </div>
</div>
@endsection