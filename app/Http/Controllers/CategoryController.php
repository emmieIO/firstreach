<?php

namespace App\Http\Controllers;

use App\Http\Requests\Category\CreateCategoryRequest;
use App\Http\Requests\Category\UpdateCategoryRequest;
use Illuminate\Http\Request;
use App\Models\Category;

class CategoryController extends Controller
{
    public function index()
    {
        $categories = Category::paginate(20)->withQueryString();
        return view('admin.categories.index', compact('categories'));
    }


    public function create()
    {
        return view('admin.categories.create');
    }
    public function store(CreateCategoryRequest $request)
    {
        Category::create([
            'name' => $request->category_name
        ]);
        return redirect()->route('categories.index')->with('success', 'Category created successfully.');
    }

    public function edit( string $uuid)
    {
        $category = Category::where('uuid', $uuid)->first();
        return view('admin.categories.edit', compact('category'));
    }

    public function update(CreateCategoryRequest $request,  $uuid)
    {
        $category = Category::where('uuid', $uuid)->first();
        if (!$category) {
            return redirect()->route('categories.index')->with('error', 'Category not found.');
        }
        if($category->name === $request->category_name){
            return redirect()->back()->with('error', 'Category name is the same.');
        }
        $category->update([
            'name' => $request->category_name
        ]);
        return redirect()->route('categories.index')->with('success', 'Category updated successfully.');
    }

    public function destroy(Category $category)
    {
        $category->delete();
        return redirect()->route('categories.index')->with('success', 'Category deleted successfully.');
    }

}
