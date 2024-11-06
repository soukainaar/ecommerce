<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Order;

class OrderController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $orders = Order::all();
        return response()->json($orders);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validateData = $request->validate([
            'customer_id' => 'required|integer|exists:customers,id',
            'date_order' => 'required|date',
            'status' => 'required|string|in:pending,in delivery,delivered',
            'total' => 'required|numeric'
        ]);
        $order = Order::create($validateData);
        return response()->json($order, 201);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $order = Order::find($id);
        return response()->json($order);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $validateData = $request->validate([
            'customer_id' => 'required|integer|exists:customers,id',
            'date_order' => 'required|date',
            'status' => 'required|string|in:pending,in delivery,delivered',
            'total' => 'required|numeric'
        ]);
        $order = Order::find($id);
        $order->update($validateData);
        return response()->json($order, 200);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $order = Order::find($id);
        $order->delete();
        return response()->json(null, 204);
    }
}
