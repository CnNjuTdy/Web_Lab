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

class PeopleController extends Controller{
    //获得粉丝列表,完成
    public function getFollower(){
        $username = Input::get("username");
        $followerName = DB::table('follower')
            ->select('followerName')
            ->where('userName', $username)
            ->get();

        $nameArray = [];
        for($i=0;$i<count($followerName);$i++){
            $nameArray[$i] = $followerName[$i]->followerName;
        }
        $followerInfo = DB::table('user')
            ->whereIn('user_name', $nameArray)
            ->get();
        return $followerInfo;
    }
    //获得偶像列表，完成
    public function getFollowing(){
        $username = Input::get("username");
        $followingName = DB::table('following')
            ->select('followingName')
            ->where('userName', $username)
            ->get();

        $nameArray = [];
        for($i=0;$i<count($followingName);$i++){
            $nameArray[$i] = $followingName[$i]->followingName;
        }
        $followerInfo = DB::table('user')
            ->whereIn('user_name', $nameArray)
            ->get();
        return $followerInfo;
    }


    //删除好友，必做
    public function del(){
        $username = Input::get("username");
        $delName = Input::get("addName");

        DB::table('following')
            ->where("userName","=",$username)
            ->where("followingName","=",$delName)
            ->delete();
        DB::table('follower')
            ->where("userName","=",$delName)
            ->where("followerName","=",$username)
            ->delete();
    }
    //添加好友 必做
    public function add(){
        $username = Input::get("username");
        $addName = Input::get("addName");

        $isExist = DB::table('user')
            ->where('user_name', $addName)
            ->get();
        if(count($isExist)==0){
            return -1;
        }
        DB::table('following')->insert(
            ['username' => $username, "followingName" => $addName]
        );
        DB::table('follower')->insert(
            ['username' => $addName, "followerName" => $username]
        );
        return 0;
    }
}