<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Input;

class MyLoginController extends Controller
{
    //主页 根据username初始化view，必做
    public function index()
    {
        return view("login");
    }

    public function login()
    {
        $username = Input::get("username");
        $passwd = Input::get("userpasswd");
        $user = DB::table('user')->where('user_name', $username)->where('user_passwd',$passwd)->get();
        $userValid = count($user);
        return array("userValid"=>$userValid,"username"=>$username);
    }
}
