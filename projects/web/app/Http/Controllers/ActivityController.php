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

class ActivityController extends Controller{
    //参加活动部分数据,完成
    public function getJoin(){
        $allDB = DB::table('activity')
            ->get();
        return $allDB;
    }
    //我的活动部分数据,完成
    public function getMy(){
        $username = Input::get("username");

        $myJoinDB = DB::table('activity')
            ->join('activity_participant','activity_participant.activity_id','=','activity.activity_id')
            ->where("activity_participant.participant_name",$username)
            ->get();

        $myOrgnizeDB = DB::table('activity')
            ->where("activity.activity_orgnizer",$username)
            ->get();
        return array("myJoin"=>$myJoinDB,"myOrgnize"=>$myOrgnizeDB);
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