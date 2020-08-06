<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Category;

use App\Item;

use DB;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $items = DB::table('items')->get();

        $categories = DB::table('categories')
            ->orderBy('created_at', 'desc')
            ->limit(10)
            ->get();

        $lost_categories = (DB::table('categories')->count()) - ($categories->count());

        $dropdownCategories = DB::table('categories')
            ->orderBy('created_at', 'asc')
            ->limit($lost_categories)
            ->get();

        $featured_items = DB::table('items')
            ->where('category_id', '1')
            ->get();

        $limitedCategories = DB::table('categories')
            ->orderBy('created_at', 'asc')
            ->limit(4)
            ->get();

        return view('index', [
            'items' => $items,
            'categories' => $categories,
            'dropdownCategories' => $dropdownCategories,
            'featured_items' => $featured_items,
            'limitedCategories' => $limitedCategories
        ]);
    }
}
