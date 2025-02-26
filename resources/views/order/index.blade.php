@extends('layouts.main')
@section('content')
    {{ $orders->links() }}
    <table class="table">
        <thead>
        <tr>
            <th scope="col">ID</th>
            <th scope="col">Order date</th>
            <th scope="col">Customer name</th>
            <th scope="col">Status</th>
            <th scope="col">Cost</th>
        </tr>
        </thead>
        <tbody>
        <a href="{{ route('orders.create') }}">
            <button type="button" class="btn btn-primary">
                Create order
            </button>
        </a>
        @foreach($orders as $order)
            <tr>

                <th scope="row">    {{ $order->id }}   </th>
                <td> {{ \Carbon\Carbon::parse(  $order->order_date  )  }}</td>
                <td> {{$order->customer_name}}</td>
                <td><a href="{{ route('orders.show', $order) }}">{{ $order->status }} </a></td>
                <td>{{ $order->product->price}}</td>

                <td>
                    <a href="{{ route('orders.update', $order) }}">
                        <button type="button" class="btn btn-success">Update</button>
                    </a>
                    <form action="{{ route('orders.destroy', $order) }}" method="post">
                        @csrf
                        @method('delete')
                        <button type="submit" class="btn btn-danger" onclick="return confirm('Sure?')">Delete</button>
                    </form>

                </td>


            </tr>
        @endforeach


        </tbody>
    </table>
    {{ $orders->links() }}
@endsection
