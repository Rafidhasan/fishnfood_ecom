<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use DB;

use App\Category;

class CategoryController extends Controller
{
    public function show() {
        return view('admin.category.showForm');
    }

    public function store() {
        $category = new Category();
        $name = request('name');

        if(! $name) {
            abort(404);
        }   else {
            $category->name = request('name');
            $category->save();
            return redirect('/admin')->with('status', 'Category Added!');
        }
    }

    public function edit($id) {
        $category = Category::find($id);

        return view('admin.category.editForm', ['category' => $category]);
    }

    public function update($id) {
        $category = Category::find($id);

        $category->name = request('name');
        $category->save();

        return redirect('/admin')->with('status', 'Category Updated!');
    }

    public function delete($id) {
        $category = Category::find($id);

        Category::where('id', $id)->delete();
        return redirect('/admin')->with('status', 'Category Deleted!');
    }
}
