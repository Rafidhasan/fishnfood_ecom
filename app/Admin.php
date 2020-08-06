<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Admin extends Model
{
    public function showCategory() {
        $categories = DB::table('categories')->get();

        dd($categories);
    }
}
