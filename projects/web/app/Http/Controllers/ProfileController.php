<?php
/**
 * Created by PhpStorm.
 * User: Tonndiyee
 * Date: 2016/10/31
 * Time: 20:53
 */

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Input;

class ProfileController extends Controller{
    //返回某个人的数据
    public function getProfile(){
        $name = Input::get("name");
        $profile = DB::table('user')
            ->where('user_name',$name)
            ->get();
        return $profile;
    }
    //编辑个人信息 必做
    public function editMyProfile(){

    }
}