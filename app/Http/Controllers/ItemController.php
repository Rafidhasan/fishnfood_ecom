<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Category;

use App\Item;

class ItemController extends Controller
{
    public function show() {
        $categories = Category::get();

        return view('admin.items.addForm', [
            'categories' => $categories
        ]);
    }

    public function store(Request $request) {
        $item = new Item();

        $item->name = $request->input('name');
        $item->category_id = $request->input('category_id');
        $item->amount = $request->input('amount');
        if($request->hasFile('image')) {
            $file = $request->file('image');
            $extension = $file->getClientOriginalExtension();
            $fileName = time() . '.' .$extension;
            $file->move('uploads/images/', $fileName);
            $item->image = $fileName;
        }   else {
            return $request;
            $item->image = ' ';
        }


        $item->save();

        return redirect('/items')->with('status', 'Item Added!');
    }
}
