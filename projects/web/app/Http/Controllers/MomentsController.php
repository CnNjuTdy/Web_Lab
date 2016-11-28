<?php
/**
 * Created by PhpStorm.
 * User: Tonndiyee
 * Date: 2016/11/1
 * Time: 21:59
 */

namespace App\Http\Controllers;


class MomentsController extends Controller{
    //根据username初始化moments界面
    public function index(){
        return view("moments");
    }
    //发表状态
    public function addMoments(){

    }
}