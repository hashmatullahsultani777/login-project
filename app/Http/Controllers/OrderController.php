<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class OrderController extends Controller
{
    public function index()
    {
        return view('orders.index');
    }

    public function create()
    {
        return view('orders.create');
    }

    public function store(Request $request)
    {
        return 'Order form handling is not implemented yet.';
    }

    public function show(string $order)
    {
        return view('orders.show');
    }

    public function edit(string $order)
    {
        return view('orders.edit');
    }

    public function update(Request $request, string $order)
    {
        return 'Order updating is not implemented yet.';
    }

    public function destroy(string $order)
    {
        return 'Order deletion is not implemented yet.';
    }
}
