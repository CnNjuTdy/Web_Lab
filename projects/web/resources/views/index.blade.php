@extends('layouts.base')
@section('css')
@endsection
@section('content')
    <div class="row">
        <div class="col-md-4">
            <div class="row">
                <img src="common/img/head.jpg" alt="example-image"
                     class="img-circle img-responsive">
            </div>
            <div class="row text-center">
                <a href="setting">
                    <h6>炫酷滑板鞋</h6>
                </a>
            </div>
            <div class="row">
                <div class="todo">
                    <div class="todo-title text-center">
                        <strong>每日必做</strong>
                    </div>
                    <ul>
                        <li>
                            <div class="todo-content">
                                <h4 class="todo-name">
                                    录入身高体重
                                </h4>
                                年轻人你又胖了吗？
                            </div>
                        </li>
                        <li>
                            <div class="todo-content">
                                <h4 class="todo-name">
                                    和好友攀比运动量
                                </h4>
                                我就是稀罕你这种天天和我比谁更健康的人^-^
                            </div>
                        </li>
                        <li>
                            <div class="todo-content">
                                <h4 class="todo-name">
                                    参加活动
                                </h4>
                                嘿，那边的，对对对就是你。快来参加活动吧~
                            </div>
                        </li>
                    </ul>
                </div><!-- /.todo -->
            </div>
        </div>
        <div class="col-md-8 text-center" style="font-family: 华文仿宋,serif;">
            <div class="panel panel-success">
                <div class="panel-heading">简介</div>
                <div class="panel-body">
                    <strong>自我描述:</strong>我的滑板鞋时尚时尚最时尚<br>
                    <strong>爱好特长:</strong>老子只会滑板
                </div>
            </div>
            <div class="panel panel-success">
                <div class="panel-body ">
                    今日运动量1000大卡，相当于10个面包的热量，在好友中排名第1！
                </div>
            </div>
            <div class="panel panel-success">
                <div class="panel-body">
                    在刚刚结束的南京市鼓楼区滑板活动中，你表现优异，获得了第二名！
                </div>
            </div>
            <div class="panel panel-success">
                <div class="panel-heading">全站统计</div>
                <div class="panel-body">
                    <div id="chart"></div>

                </div>
            </div>
        </div>
    </div>
@endsection
@section('script')
    <script src="common/js/index.js"></script>
@endsection