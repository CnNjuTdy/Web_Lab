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

class SportController extends Controller{
    //获得第一部分数据，完成
    public function getGoals(){
        $username = Input::get("username");

        $goalDB = DB::table('user')
            ->select('user_goal')
            ->where('user_name', $username)
            ->get();
        $goalDB = intval($goalDB[0]->user_goal);
        $stepDB = DB::table('sport')
            ->select('steps','date')
            ->where('user_name', $username)
            ->get();
        $step = [];
        $goal = [];
        for($i = 0;$i<count($stepDB);$i++){
            $date = strtotime($stepDB[$i]->date);
            $step[$i] = array($date*1000,intval($stepDB[$i]->steps));
            $goal[$i] = array($date*1000,$goalDB);
        }

        $reachDays = DB::table('sport')
            ->select('reach')
            ->where('user_name', $username)
            ->sum('reach');
        $allDays = DB::table('sport')
            ->select('reach')
            ->where('user_name', $username)
            ->count('reach');
        $reachRate = sprintf("%.3f", ($reachDays/$allDays));

        $todayDB = DB::table('sport')
            ->select('steps','reach')
            ->where('user_name', $username)
            ->where('date',my_getDate())
            ->get();
        $todayDB[0]->steps = intval($todayDB[0]->steps);
        $todayDB[0]->reach = intval($todayDB[0]->reach);

        return array("all_steps"=>$step,"goal"=>$goal,"reachRate"=>doubleval($reachRate),"new_steps"=>$todayDB[0]);
    }
    //获取第二部分数据，完成
    public function getCalories(){
        $username = Input::get("username");

        $stepDB = DB::table('sport')
            ->where('user_name', $username)
            ->sum("steps");

        $caloriesDB = DB::table('sport')
            ->where('user_name', $username)
            ->sum("calories");
        return array("all_steps"=>intval($stepDB),"all_calories"=>intval($caloriesDB));
    }
    //获取第三部分数据，完成
    public function getRank(){
        $username = Input::get("username");
        $calAllDB = DB::table('sport')
            ->select(DB::raw('sum(calories) as all_calories'))
            ->groupBy('user_name')
            ->get();
        $calAll = [];
        for($i = 0;$i<count($calAllDB);$i++){
            $calAll[$i] = intval($calAllDB[$i]->all_calories);
        }
        $calMyDB = DB::table('sport')
            ->where('user_name',$username)
            ->sum("calories");
        return array("all_calories"=>$calAll,"my_calories"=>intval($calMyDB));

    }
    //获取第四部分数据，完成
    public function getHealth(){
        $username = Input::get("username");

        $healthNewDB = DB::table('sport')
            ->select('height','weight')
            ->where('user_name', $username)
            ->where('date',my_getDate())
            ->get();
        $healthNewDB[0]->height = floatval($healthNewDB[0]->height);
        $healthNewDB[0]->weight = floatval($healthNewDB[0]->weight);

        $healthALLDB = DB::table('sport')
            ->select('date','weight')
            ->where('user_name', $username)
            ->get();
        $healthALL = [];
        for($i=0;$i<count($healthALLDB);$i++){
            $date = strtotime($healthALLDB[$i]->date);
            $healthALL[$i] = array($date*1000,floatval($healthALLDB[$i]->weight));
        }

        return array("newHealth"=>$healthNewDB[0],"allHealth"=>$healthALL);
    }
    //保存录入身体情况，
    public function inputHealth(){
        $username = Input::get("username");
        $height = Input::get("height");
        $weight = Input::get("weight");
        $already = DB::table('sport')
            ->where('user_name', $username)
            ->where('date',my_getDate())
            ->get();
        if(count($already)==0){
            DB::table('sport')->insert(
                ['user_name' => $username, "date" => my_getDate(),"height"=>$height,"weight"=>$weight]
            );
        }else{
            DB::table('sport')
                ->where('user_name', $username)
                ->where('date',my_getDate())
                ->update(["height"=>$height,"weight"=>$weight]);
        }
    }

    //restful

}