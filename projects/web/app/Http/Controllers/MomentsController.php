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

class MomentsController extends Controller{
    //获得所有状态
    public function getAll(){
        $moments = DB::table('moment')
            ->orderBy('moment_id', 'desc')
            ->get();
        return $moments;
    }
    //获得自己的所有状态
    public function getMy(){
        $username = Input::get("username");
        $moments = DB::table('moment')
            ->orderBy('moment_id', 'desc')
            ->where('moment_author',$username)
            ->get();
        return $moments;
    }
    //发表状态
    public function addMoments(){

    }
}