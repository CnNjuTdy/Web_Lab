<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Input;

class IndexController extends Controller{
    //获取userinfo数据，完成
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

        return array("userInfo"=>$userInfo[0],"sportInfo"=>$sportInfo[0]);
    }
    //获取chart数据，完成
    public function getChart(){
        $username = Input::get("username");
        $chartDB = DB::table('sport')
            ->select('steps')
            ->where('date',my_getDate())
            ->get();
        $chart = [];
        for($i = 0;$i<count($chartDB);$i++){
            $chart[$i] = intval($chartDB[$i]->steps,10);
        }

        $step = DB::table('sport')
            ->select('steps')
            ->where('user_name', $username)
            ->where('date',my_getDate())
            ->get();
        $step = intval($step[0]->steps,10);
        return array("all_data"=>$chart,"your_data"=>$step);
    }
}
