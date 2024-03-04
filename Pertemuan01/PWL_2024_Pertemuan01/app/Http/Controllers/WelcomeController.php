<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WelcomeController extends Controller
{
    public function hello() {
        return 'Hello World';
        }

    public function greeting(){
        return view('blog.hello')
            ->with('name','Andi')
            ->with('occupation','Astronaut');
    }

    public function index() {
        return 'Selamat Datang';
        }
    
    public function about() {
        return 'Nama Rizqi Hendra Ardiansyah Nim 2141762145';
    }

    public function articles($id) {
        return 'Halaman Artikel dengan ID ke - ' . $id;
    }
}
