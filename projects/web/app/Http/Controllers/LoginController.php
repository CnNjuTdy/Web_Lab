<?php
/**
 * Created by PhpStorm.
 * User: Tonndiyee
 * Date: 2016/10/31
 * Time: 20:53
 */

namespace App\Http\Controllers;


use Illuminate\Http\Request;

class LoginController extends Controller{
    public function index(){
        return view('login');
    }
    public function login(Request $request){
        $username = $request->input("username");
        $userpasswd = $request->input("userpasswd");
        if($username == "admin"&& $userpasswd =="admin"){
            session(['username' => $username]);
            return redirect()->action("IndexController@index");
        }
        else{
            echo "错误";
        }
    }
}