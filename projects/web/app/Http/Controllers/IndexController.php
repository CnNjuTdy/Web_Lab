<?php
/**
 * Created by PhpStorm.
 * User: Tonndiyee
 * Date: 2016/10/31
 * Time: 13:05
 */

namespace App\Http\Controllers;


class IndexController extends Controller{
    public function Index(){
        return view('index');
    }
}