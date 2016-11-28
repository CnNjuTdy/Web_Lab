<?php
/**
 * Created by PhpStorm.
 * User: Tonndiyee
 * Date: 2016/11/1
 * Time: 21:59
 */

namespace App\Http\Controllers;


class ActivityController extends Controller{
    //根据username初始化activity的界面，必做
    public function index(){
        return view("activity");
    }
    //添加活动 必做
    public function createActivity(){

    }
    //参加活动 必做
    public function joinActivity(){

    }
    //编辑活动 选做
    public function editActivity(){

    }
}