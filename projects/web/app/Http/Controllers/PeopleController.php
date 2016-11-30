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
    public function deleteFollowing(){

    }
    //添加好友 必做
    public function addFollowing(){

    }
}