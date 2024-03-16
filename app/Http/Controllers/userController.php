<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function show($name, $lastName=null){
        return view('user', ['name' => $name, 'lastname' => $lastName]);
    }
}
