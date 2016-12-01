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
            ->orderBy('moment.moment_id', 'desc')
            ->get();
        $result = array();
        for($i = 0;$i<count($moments);$i++){
            $id = $moments[$i]->moment_id;
            $comments = DB::table('comment')
                ->where("moment_id",$id)
                ->get();
            $item = ["moment"=>$moments[$i],"comments"=>$comments];
            array_push($result,$item);
        }
        return $result;
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
    public function addM(){
        $author = Input::get("username");
        $content = Input::get("content");
        $time = my_getDateTime();

        DB::table('moment')->insertGetId(
            ['moment_content' => $content, "like_num" => 0,
            'time'=>$time,'moment_author'=>$author]
        );
    }
    public function addC(){
        $id = Input::get("id");
        $author = Input::get("username");
        $content = Input::get("content");

        DB::table('comment')->insert(
            ['content' => $content, 'moment_id'=>$id,'author'=>$author]
        );
    }
    public function like(){
        $id = Input::get("id");
        DB::table('moment')
            ->where("moment_id","=",$id)
            ->increment('like_num');
    }
}