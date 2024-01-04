<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index()
    {
        return view('categories', [
            "title" => "Categories",
            "categories" => Category::all()
        ]);
    }

    public function create()
    {
        return view('createcategory', [
            "title" => "Categories"
        ]);
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            "name" => "required|max:100",
            "description" => "nullable"
        ]);

        $slug = strtolower(join("-", explode(' ', $request->name)));
        $validated["user_id"] = auth()->user()->id;
        $validated["slug"] = $slug;

        Category::create($validated);

        return redirect('/categories')->with('success', 'new category created.');
    }

    public function destroy(Category $category)
    {
        $category->delete();
        return redirect('/categories')->with('success', 'the category was deleted successfully');
    }
}
