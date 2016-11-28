<?php
/**
 * Created by PhpStorm.
 * User: Tonndiyee
 * Date: 2016/11/1
 * Time: 21:59
 */

namespace App\Http\Controllers;


class SportController extends Controller{
    //根据username初始化Sport界面的view，必做
    public function index(){
        return view("sport");
    }
    //保存录入身体情况，必做
    public function storeInfo(){

    }

}