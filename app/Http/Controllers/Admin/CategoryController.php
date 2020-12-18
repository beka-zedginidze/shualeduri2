<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Category;

class CategoryController extends Controller
{
    // $cateories = Category::all();
    public function index() {

        return view('admin.category.index');
    }

    public function store(Request $request) {

        $request->validate([
            'name' => ['required', 'min:2', 'max:100']
          ]);
        dd($request->all());
   
        Category::create([
            'name' => $request->name,
        ]);

        return redirect()->route('admin.category.index');

    }
}
