<?php
/**
 * Created by PhpStorm.
 * User: Tonndiyee
 * Date: 2016/10/31
 * Time: 20:53
 */

namespace App\Http\Controllers;


use Illuminate\Http\Request;

class ProfileController extends Controller{
    //返回主页，如果username=null返回自己的，加上编辑信息，如果不是返回username的，不加编辑，用两个界面
    //必做
    public function index($username = null){
        if ($username == null) {
            return view('profile');
        } else {
            return "Hello world!   " . $username;
        }
    }
    //编辑个人信息 必做
    public function editMyProfile(){

    }
}