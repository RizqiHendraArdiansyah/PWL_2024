<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Category01Controller extends Controller
{
    public function produk01() {
        return view('Category.foodbeverages');
    }
}