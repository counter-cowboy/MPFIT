@extends('layouts.main')
@section('content')

    <div class="w-50">
        <div class="card">
            <div class="card-body">
                <h5 class="card-title"> {{ $product->title }}</h5>
                <p class="card-text"> {{ $product->description }}</p>
                <p class="card-text">Price:  {{ $product->price }} &#8381</p>
                <p class="card-text">Category: {{ $product->category->title }}</p>
                <a href="{{ route('products.edit', $product) }}" class="btn btn-primary">Edit</a>

                <form action="{{ route('products.destroy', $product) }}" method="post">
                    @csrf
                    @method('delete')
                    <button type="submit" class="btn btn-danger" onclick="return confirm('Sure?')">
                        Delete
                    </button>
                </form>

            </div>
        </div>
    </div>

@endsection
