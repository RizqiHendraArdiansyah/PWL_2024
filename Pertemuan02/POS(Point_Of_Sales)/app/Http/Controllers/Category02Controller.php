<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Category02Controller extends Controller
{
    public function produk02() {
        return view('Category.beautyhealth');
    }
}