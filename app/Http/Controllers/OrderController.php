<?php

namespace App\Http\Controllers;

use App\Http\Requests\OrderRequest;
use App\Models\Order;
use App\Models\Product;
use Carbon\Carbon;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    public function index()
    {
        $orders = Order::paginate(10);

        return view('order.index', compact('orders'));
    }

    public function create()
    {
        $products = Product::all();

        return view('order.create', compact('products'));
    }

    public function store(OrderRequest $request)
    {
        $data = $request->validated();
        $order = Order::firstOrCreate($data);

        $order->update([
            'order_date' => Carbon::now(),
        ]);

        return view('order.show', compact('order'));
    }

    public function show(Order $order)
    {
        return view('order.show', compact('order'));
    }

    public function edit(Order $order)
    {
        $products = Product::all();

        return view('order.edit', compact('order', 'products'));
    }

    public function update(Request $request, Order $order)
    {
        $data = $request->validated();
        $order->update($data);

        return redirect()->route('orders.show', compact('order'));
    }

    public function destroy(Order $order)
    {
        $order->delete();

        return redirect()->route('orders.index');
    }

    public function status(Order $order)
    {
        $order->update([
            'status' => 'completed',
        ]);

        return redirect()->route('orders.show', compact('order'));
    }
}
