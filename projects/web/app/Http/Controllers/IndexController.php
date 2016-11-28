<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Input;

class IndexController extends Controller{
    //获取userinfo数据
    /**
     * @return array
     */
    public function getUserInfo(){
        $username = Input::get("username");

        $userInfo = DB::table('user')
            ->select('user_description','user_labels')
            ->where('user_name', $username)
            ->get();

        $sportInfo = DB::table('sport')
            ->select('steps','calories','reach')
            ->where('user_name', $username)
            ->where('date',my_getDate())
            ->get();

        return array("userInfo"=>$userInfo,"sportInfo"=>$sportInfo);
    }
    //获取chart数据
    public function getChart(){
        $chartDB = DB::table('sport')
            ->select('steps')
            ->where('date',my_getDate())
            ->get();

        $chart = [];
        foreach ($chartDB as $step => $value){
            array_push($chart,$value);
        }
        return $chart;
    }
    //每日必做的勾选,选做
    public function done(){

    }
    //每日必做的取消勾选,选做
    public function cancel(){

    }
}
