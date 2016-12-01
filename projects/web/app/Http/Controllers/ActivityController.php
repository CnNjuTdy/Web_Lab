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
    public function create(){
        $username = Input::get("username");
        $name = Input::get("name");
        $location = Input::get("location");
        $time = Input::get("time");
        $description = Input::get("description");
        $labels = Input::get("labels");

        $id = DB::table('activity')->insertGetId(
            ["activity_orgnizer" => $username, "activity_name" => $name,
                "activity_location"=>$location,"activity_time"=>$time,"activity_label"=>$labels,
                "activity_description"=>$description,"activity_state"=>0]
        );
        DB::table('activity_participant')->insert(
            ['activity_id' => $id, "participant_name" => $username]
        );


//        return $username.$name.$location.$time.$description.$labels;

    }
    //参加活动 必做
    public function join(){
        $id = Input::get("id");
        $username = Input::get("username");
        $allDB = DB::table('activity_participant')
            ->where("activity_id",$id)
            ->where("participant_name",$username)
            ->get();
        if(count($allDB)!=0){
            return -1;
        }
        DB::table('activity_participant')->insert(
            ['activity_id' => $id, "participant_name" => $username]
        );
        return 0;
    }
    //删除 选做
    public function del(){
        $id = Input::get("id");
        DB::table('activity')->where('activity_id', '=', $id)->delete();
        DB::table('activity_participant')->where('activity_id', '=', $id)->delete();
    }
}