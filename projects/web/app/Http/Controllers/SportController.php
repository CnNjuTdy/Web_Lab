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

        $stepDB = DB::table('sport')
            ->select('steps','date')
            ->where('user_name', $username)
            ->get();
        for($i = 0;$i<count($stepDB);$i++){
            $stepDB[$i]->steps = intval($stepDB[$i]->steps,10);
        }

        $goalDB = DB::table('user')
            ->select('user_goal')
            ->where('user_name', $username)
            ->get();
        $goalDB = intval($goalDB[0]->user_goal);

        $reachDays = DB::table('sport')
            ->select('reach')
            ->where('user_name', $username)
            ->sum('reach');

        $allDays = DB::table('sport')
            ->select('reach')
            ->where('user_name', $username)
            ->count('reach');

//        $reachDays = 0;
//        for($i = 0;$i<count($reachDB);$i++){
//            $reachDays += intval($reachDB[$i]->reach);
//        }
        $reachRate = sprintf("%.2f", ($reachDays/$allDays));
        return array("all_steps"=>$stepDB,"goal"=>$goalDB,"reachRate"=>doubleval($reachRate));
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
        $stepsAllDB = DB::table('sport')
            ->select(DB::raw('sum(steps) as all_step'))
            ->groupBy('user_name')
            ->get();
        $stepsAll = [];
        for($i = 0;$i<count($stepsAllDB);$i++){
            $stepsAll[$i] = intval($stepsAllDB[$i]->all_step);
        }
        return $stepsAll;

    }
    //获取第四部分数据，完成
    public function getHealth(){
        $username = Input::get("username");

        $healthNewDB = DB::table('sport')
            ->select('height','weight')
            ->where('user_name', $username)
            ->where('date',my_getDate())
            ->get();

        $healthALLDB = DB::table('sport')
            ->select('date','height','weight')
            ->where('user_name', $username)
            ->get();

        return array("newHealth"=>$healthNewDB[0],"allHealth"=>$healthALLDB);
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

}