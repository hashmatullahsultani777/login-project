<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        return view('products.index');
    }

    public function create()
    {
        return view('products.create');
    }

    public function store(Request $request)
    {
        return 'Product form handling is not implemented yet.';
    }

    public function show(string $product)
    {
        return view('products.show');
    }

    public function edit(string $product)
    {
        return view('products.edit');
    }

    public function update(Request $request, string $product)
    {
        return 'Product updating is not implemented yet.';
    }

    public function destroy(string $product)
    {
        return 'Product deletion is not implemented yet.';
    }
}
