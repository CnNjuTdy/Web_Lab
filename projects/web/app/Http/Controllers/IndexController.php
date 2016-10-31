<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Http\Request;

class IndexController extends Controller{
    public function index(){
////        return view('index');
////        $username = $request->session()->get("username");
//        echo session("username");
        $username = session("username");
        return view("index");
    }
}
