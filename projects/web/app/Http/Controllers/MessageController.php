<?php
/**
 * Created by PhpStorm.
 * User: Tonndiyee
 * Date: 2016/11/1
 * Time: 21:59
 */

namespace App\Http\Controllers;


use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Input;

class MessageController extends Controller{
    //根据username初始化信息界面
    public function getMessage(){
        $username = Input::get("username");
        $moments = DB::table('message')
            ->where('user_name',$username)
            ->get();
        return $moments;
    }
}