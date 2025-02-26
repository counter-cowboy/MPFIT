@extends('layouts.main')
@section('content')

    <div class="w-50">
        <div class="card">
            <div class="card-body">
                <h5 class="card-title"> {{ $category->title }}</h5>

                <a href="{{ route('categories.edit', $category) }}" class="btn btn-primary">Edit</a>

                <form action="{{ route('categories.destroy', $category) }}" method="post">
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
