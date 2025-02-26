@extends('layouts.main')
@section('content')

    <div class="w-50">
        <div class="card">
            <div class="card-body">
                <h5 class="card-title"> {{ $order->customer_name }}</h5>
                <p class="card-text"> {{ \Carbon\Carbon::parse($order->order_date) }}</p>
                <p class="card-text">Product:  {{ $order->product->title }} </p>
                <p class="card-text">Status: {{ $order->status }}</p>
                <p class="card-text">Cost: {{ $order->product->price }} &#8381</p>


                <a href="{{ route('orders.edit', $order) }}" class="btn btn-primary">Edit</a>

                <form action="{{ route('orders.destroy', $order) }}" method="post">
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
