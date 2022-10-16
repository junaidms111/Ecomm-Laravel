<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Validation\Rules\Unique;
use Illuminate\Validation\Rule;


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

    public function store(Request $request)
    {
        $request ->validate([
            'title' => ['required'],
            'slug' => ['required', 'unique:categories,slug'],
            'description' => ['required'],
        ]);
        //category object
        $category =  new Category();
        $category->title = $request->title;
        $category->slug = $request->slug;
        $category->description = $request->description;
        $category->save();

        toastr()->success('Category added successfully!', 'Success');

        return redirect()->route('categories.index');
    }

    public function edit($id)
    {
        $category = Category::find($id);
            return view('admin.categories.edit', compact('category'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'title' => ['required'],
            'slug' => ['required', Rule::unique('categories')->ignore($id),],
            'description' => ['required'],
        ]);

        $category = Category::find($id);
        $category->title = $request->title;
        $category->slug = $request->slug;
        $category->description = $request->description;
        $category->update();

        toastr()->success('Product updated successfully!', 'Success');

        return redirect()->back();

    }

    public function show($id)
    {
        $category = Category::find($id);
        return view('admin.categories.show', compact('category'));
    }

    public function delete($id)
    {
        $category = Category::find($id);
        $category->delete();
        toastr()->error('Product deleted successfully!', 'Success');

        return redirect()->route('categories.index');
    }
}
