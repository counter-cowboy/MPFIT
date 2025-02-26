@extends('layouts.main')
@section('content')

    <table class="table">
        <thead>
        <tr>
            <th scope="col">ID</th>
            <th scope="col">Category name</th>
        </tr>
        </thead>
        <tbody>
        <a href="{{ route('categories.create') }}">
            <button type="button" class="btn btn-primary">
                Create category
            </button>
        </a>
        @foreach($categories as $category)
            <tr>
                <th scope="row">{{ $category->id }}   </th>
                <td>
                    <a href="{{ route('products.show', $category) }}">{{ $category->title }} </a>
                </td>

                <td>
                    <a href="{{ route('categories.update', $category) }}">
                        <button type="button" class="btn btn-success">Update</button>
                    </a>
                </td>
                <td>
                    <form action="{{ route('categories.destroy', $category) }}" method="post">
                        @csrf
                        @method('delete')
                        <button type="submit" class="btn btn-danger" onclick="return confirm('Sure?')">Delete</button>
                    </form>
                </td>
            </tr>
        @endforeach

        </tbody>
    </table>
@endsection
