<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use DB;

class AdminController extends Controller
{
    public function index() {
        $categories = DB::table('categories')->get();

        return view('admin.index', [
            'categories' => $categories
        ]);
    }

    public function items() {
        $items = DB::table('items')->get();

        return view('admin.items.index', [
            'items' => $items
        ]);
    }
}
