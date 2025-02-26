@extends('layouts.main')
@section('content')
<div class="w-50">
    <form action="{{ route('categories.store') }}" method="post">
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


        <button type="submit" class="btn btn-success">Create</button>
    </form>
</div>
@endsection


