<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserInfoController extends Controller
{
    public function index(...$data){
        return view('userInfo', ['data' => $data]);
    }
}
