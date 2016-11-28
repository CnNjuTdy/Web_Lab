<?php
/**
 * Created by PhpStorm.
 * User: Tonndiyee
 * Date: 2016/11/1
 * Time: 21:59
 */

namespace App\Http\Controllers;


class PeopleController extends Controller{
    //根据username初始化圈子界面，必做
    public function index(){
        return view("people");
    }
    //删除好友，必做
    public function deleteFollowing(){

    }
    //添加好友 必做
    public function addFollowing(){

    }
}