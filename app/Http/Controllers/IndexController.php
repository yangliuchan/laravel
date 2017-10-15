<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class IndexController extends Controller
{
    //默认首页
    public function  index(){
        return view('index');
    }

    //注册
    public function  register(){
        return view('index');
    }
}
