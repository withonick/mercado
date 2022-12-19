<?php

namespace App\Http\Controllers\Adm;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index(){
        return view('adm.categories.index', ['categories' => Category::all()]);
    }

    public function create(){
        return view('adm.categories.create');
    }

    public function store(Request $request, Category $category){
        $validated = $request->validate([
            'name' => 'required',
        ]);

        $category->create($validated);

        return redirect()->route('adm.category.index');
    }

    public function edit(Category $category){
        return view('adm.categories.edit', ['category' => $category]);
    }

    public function update(Request $request, Category $category){
        $validated = $request->validate([
            'name' => 'required',
        ]);

        $category->update($validated);

        return redirect()->route('adm.categories.index');
    }

    public function destroy(Category $category){
        $category->delete();
        return back();
    }
}
