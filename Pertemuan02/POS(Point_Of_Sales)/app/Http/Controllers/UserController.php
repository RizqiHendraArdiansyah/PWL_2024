<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function user($id,$user) {
        return view('user' , ['id' => $id , 'user' => $user]);
    }
}