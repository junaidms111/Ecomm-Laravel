<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index()
    {
        $categories = Category::all();
        // return view('admin.categories.index', [
        //     'categories' => $categories
        // ]);

        return view('admin.categories.index', compact('categories'));
    }

    public function create()
    {
        return view('admin.categories.create');
    }

    public function edit($id)
    {
        $category = Category::find($id);
            return view('admin.categories.edit', compact('category'));
    }

    public function show($id)
    {
        $category = Category::find($id);
        return view('admin.categories.show', compact('category'));
    }

    public function delete($id)
    {
        # code...
    }
}
