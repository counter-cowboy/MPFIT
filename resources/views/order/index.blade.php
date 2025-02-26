@extends('layouts.main')
@section('content')
    {{ $products->links() }}
    <table class="table">
        <thead>
        <tr>
            <th scope="col">ID</th>
            <th scope="col">Product name</th>
            <th scope="col">Description</th>
            <th scope="col">Category</th>
            <th scope="col">Price</th>
        </tr>
        </thead>
        <tbody>
        <a href="{{ route('products.create') }}">
            <button type="button" class="btn btn-primary">
                Create product
            </button>
        </a>
        @foreach($products as $product)
            <tr>


                <th scope="row">    {{ $product->id }}   </th>
                <td> {{$product->title}}</td>
                <td><a href="{{ route('products.show', $product) }}">  {{ $product->description }} </a></td>
                <td>{{ $product->category->title }}</td>
                <td>{{ $product->price }}</td>

                <td>
                    <a href="{{ route('products.update', $product) }}">
                        <button type="button" class="btn btn-success">Update</button>
                    </a>
                    <form action="{{ route('products.destroy', $product) }}" method="post">
                        @csrf
                        @method('delete')
                        <button type="submit" class="btn btn-danger" onclick="return confirm('Sure?')">Delete</button>
                    </form>

                </td>


            </tr>
        @endforeach


        </tbody>
    </table>
    {{ $products->links() }}
@endsection
