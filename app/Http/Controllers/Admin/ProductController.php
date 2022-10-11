<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Product;
use Illuminate\Http\Request;
use PhpParser\Node\Expr\FuncCall;

class ProductController extends Controller
{
    public function index()
    {
        $products = Product::all();
        return view('admin.products.index', compact('products'));
    }

    public  function create()
    {
        return view('admin.products.create');
    }

    public Function show($id)
    {
        $product = Product::find($id);

        return view('admin.products.show', compact('product'));
    }

    public function edit($id)
    {
        $product = Product::find($id);

        return view('admin.products.edit', compact('product'));
    }
}
