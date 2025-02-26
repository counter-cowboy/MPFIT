@extends('layouts.main')
@section('content')
<div class="w-50">
    <form action="{{ route('products.store') }}" method="post">
        @csrf
        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Product name</label>
            <input type="text" class="form-control" name="title" value="{{old('title')}}"
                   id="exampleFormControlInput1" placeholder="input product name">
            @error('title')
            <div class="text-danger">
                Field must be fullfilled
            </div>
            @enderror
        </div>
        <div class="mb-3">
            <label for="exampleFormControlTextarea1" class="form-label">Product description</label>
            <textarea class="form-control" name="description"
                      id="exampleFormControlTextarea1" rows="3"></textarea>
            @error('description')
            <div class="text-danger">
                Field must be fullfilled
            </div>
            @enderror
        </div>

        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Product name</label>
            <input type="number" step="any" class="form-control" name="price" value="{{old('price')}}"
                   id="exampleFormControlInput1" placeholder="input product price">
            @error('price')
            <div class="text-danger">
                Field must be fullfilled
            </div>
            @enderror
        </div>
        <div class="mb-3">
            Category
        </div>
        <div class="mb-3 ">
            <select class="form-select" aria-label="Category" name="category_id">
                @foreach($categories as $category)
                    <option value="{{ $category->id }}">{{ $category->title }}</option>
                @endforeach

            </select>
        </div>

        <button type="submit" class="btn btn-success">Create</button>
    </form>
</div>
@endsection


