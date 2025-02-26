@extends('layouts.main')
@section('content')
    <div class="w-50">
        <a href="{{ route('orders.status', $order) }}" class="btn btn-primary">Set completed status</a>
        <form action="{{ route('orders.update', $order) }}" method="post">
            @csrf
            @method('PATCH')
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Customer name</label>
                <input type="text" class="form-control" name="customer_name" value="{{old('customer_name', $order->customer_name)}}"
                       id="exampleFormControlInput1" placeholder="input customer name">
                @error('customer_name')
                <div class="text-danger">
                    Field must be fullfilled
                </div>
                @enderror
            </div>

            <div class="mb-3">
                <label for="exampleFormControlTextarea1" class="form-label">Customer comment</label>
                <textarea class="form-control" name="comment"
                          id="exampleFormControlTextarea1" rows="3">{{ $order->comment }}</textarea>
                @error('comment')
                <div class="text-danger">
                    Field must be fullfilled
                </div>
                @enderror
            </div>



            <div class="mb-3">
                Product
            </div>
            <div class="mb-3 ">
                <select class="form-select" aria-label="Category" name="product_id">
                    @foreach($products as $product)
                        <option value="{{$product->id}}">{{$product->title }}</option>
                    @endforeach

                </select>
            </div>

            <button type="submit" class="btn btn-success">Create</button>
        </form>
    </div>
@endsection


