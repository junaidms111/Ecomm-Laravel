<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;
use PhpParser\Node\Expr\FuncCall;

class ProductController extends Controller
{
    /**
     * Show all products
     * If getting all data without where or other query we use all()
     * @return void
     */
    public function index()
    {
        $products = Product::all(); //
        return view('admin.products.index', compact('products'));
    }

    /**
     * if we use any where or other query we use get() for getting all data
     *
     * @return void
     */
    public  function create()
    {
        $categories = Category::where('status', 1)->get();
        return view('admin.products.create', compact('categories'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'category_id' => ['required'],
            'title' => ['required'],
            'price' => ['required'],
            'quantity' => ['required'],
            'model' => ['required'],
            'company' => ['required'],
            'description' => ['required'],
        ]);

        $product = new Product();
        $product->title = $request->title;
        $product->price = $request->price;
        $product->quantity = $request->quantity;
        $product->category_id = $request->category_id;
        $product->model = $request->model;
        $product->company = $request->company;
        $product->description = $request->description;
        $product->save();

        toastr()->success('Product added successfully!', 'Success');

        return redirect()->route('products.index');
    }

    public function show($id)
    {
        $product = Product::find($id);

        return view('admin.products.show', compact('product'));
    }

    public function edit($id)
    {
        $product = Product::find($id);
        $categories = Category::where('status', 1)->get();
        return view('admin.products.edit', compact('product', 'categories'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'category_id' => ['required'],
            'title' => ['required'],
            'price' => ['required'],
            'quantity' => ['required'],
            'model' => ['required'],
            'company' => ['required'],
            'description' => ['required'],
        ]);

        $product = Product::find($id);
        $product->title = $request->title;
        $product->price = $request->price;
        $product->quantity = $request->quantity;
        $product->category_id = $request->category_id;
        $product->model = $request->model;
        $product->company = $request->company;
        $product->description = $request->description;
        $product->update();

        toastr()->success('Product updated successfully!', 'Success');

        return redirect()->back();
    }

    public function delete($id)
    {
        $product = Product::find($id);
        $product->delete();
        toastr()->error('Product deleted successfully!', 'Success');

        return redirect()->route('products.index');
    }
}
