<?php
/**
 * Created by PhpStorm.
 * User: Tonndiyee
 * Date: 2016/11/1
 * Time: 21:59
 */

namespace App\Http\Controllers;


class MessageController extends Controller{
    //根据username初始化信息界面
    public function index(){
        return view("message");
    }
}