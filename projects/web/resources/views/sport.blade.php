@extends("layouts.base")
@section('title')
    <title>WeSport_Sport</title>
@endsection
@section("css")
@endsection
@section("content")
    <div class="row">
        <div class="row">
            <ul class="nav nav-tabs" role="tablist">
                <li class="active"><a href="#sport" data-toggle="tab">运动状况</a></li>
                <li><a href="#health" data-toggle="tab">身体状况</a></li>
            </ul>
        </div>
        <div class="row" style="margin-top: 20px;">
            <div id="myTabContent" class="tab-content">
                <div class="tab-pane fade in active" id="sport">
                    <div class="row text-center">
                        <div class="col-md-7">
                            <div class="panel panel-success">
                                <div class="panel-heading">
                                    今天你已经走了<strong id="stepNum">10000</strong>步，<strong id="stepDes">超额完成了目标！</strong>
                                </div>
                                <div class="panel-body">
                                    <div id="lineChart"></div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-5">
                            <div class="panel panel-success">
                                <div class="panel-heading">
                                    目标完成情况
                                </div>
                                <div class="panel-body">
                                    <div id="pieChart"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="panel panel-success">
                                <div class="panel-heading text-center">
                                    你在WeSport的运动总量
                                </div>
                                <div class="panel-body">
                                    <div class="row">
                                        <div class="col-md-4">
                                            <div class="panel panel-success">
                                                <div class="panel-body" style="font-family: 华文仿宋,serif">
                                                    运动距离:<strong id="dis">510公里</strong><br/>
                                                    相当于<strong id="dis_like">绕北京五环5圈</strong>
                                                    <div id="dis_description">厉害了我的哥！</div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="panel panel-success">
                                                <div class="panel-body" style="font-family: 华文仿宋,serif">
                                                    运动时间:<strong id="time">198小时</strong><br/>
                                                    大概相当于<strong id="time_like">1遍</strong>
                                                    <div id="time_dsecription">人终有一死，或胖死，或，胖死^_^</div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="panel panel-success">
                                                <div class="panel-body" style="font-family: 华文仿宋,serif">
                                                    消耗热量:<strong id="cal">40000千卡</strong><br/>
                                                    热量相当于<strong id="cal_like">减肥12斤</strong>
                                                    <div id="cal_description">少年你瘦了吗？</div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="panel panel-success">
                                <div class="panel-heading text-center">
                                    全网排行
                                </div>
                                <div class="panel-body">
                                    <div id="allBarChart"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="tab-pane fade" id="health">
                    <div class="row">
                        <div class="col-md-4">
                            <div class="panel panel-info">
                                <div class="panel-body">
                                    <div class="row text-center">
                                        <strong id="dateStr"></strong>
                                    </div>
                                    <div class="row">
                                        <div class="form-group col-md-12">
                                            <input id="height" type="text" value="" placeholder="身高(cm)/哼,如实填写哦！"
                                                   class="form-control">
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="form-group col-md-12">
                                            <input id="weight" type="text" value="" placeholder="体重(kg)/看看你,又胖了！"
                                                   class="form-control">
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-10 col-md-offset-1">
                                            <button class="btn btn-block btn-lg btn-primary" onclick="enterHealth()">保存录入</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-8">
                            <div class="panel panel-success">
                                <div class="panel-heading text-center">
                                    身高:<strong id="nowH">183cm</strong>   体重:<strong id="nowW">80kg</strong>
                                </div>
                                <div class="panel-body">
                                    <div class="row">
                                        <div class="col-md-10 col-md-offset-1">
                                            <div class="progress progress-striped"
                                                 style="height: 30px;border-radius: 0px;margin-bottom: 0px">
                                                <div id="p1" class="progress-bar progress-bar-success"
                                                     style="width: 25%;"></div>
                                                <div id="p2" class="progress-bar progress-bar-info"
                                                     style="width: 25%;"></div>
                                                <div id="p3" class="progress-bar progress-bar-warning"
                                                     style="width: 25%;"></div>
                                                <div id="p4" class="progress-bar progress-bar-danger"
                                                     style="width: 25%;"></div>
                                                <strong id="healthDes">偏胖</strong>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-10 col-md-offset-1">
                                            你的理想体重是<strong id="idealW" style="font-size: 40px">73.7</strong>kg，还需要<strong id="calAdd" style="font-size: 40px">
                                                燃烧200000</strong>大卡热量。为了好身材，努力吧！
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="panel panel-success">
                                <div class="panel-heading text-center">
                                    体重趋势变化图
                                </div>
                                <div class="panel-body">
                                    <div id="weightBarChart"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
@section("script")
    <script src="common/js/sport.js"></script>
    <script>
        var date = get_date();
        document.getElementById("dateStr").innerHTML =date;
        function enterHealth() {
            var height = $("input[id=height]").val();
            var weight = $("input[id=weight]").val();
            if(height==""){
                alert("还没有填写身高！");
                return ;
            }else if(weight==""){
                alert("还没有填写体重！");
                return ;
            }
            if(isDouble(height)==0){
                alert("身高必须是大于0的数字哦！")
                return;
            } else if(isDouble(weight)==0){
                alert("体重必须是大于0的数字哦！")
                return;
            }
            var username = getCookie("WeSport_username")
            $.ajax({
                url: '/sport/input_health',
                type: 'post',
                data: {username: username,height:height,weight:weight},
                success: function (data) {
                    //界面变化
                    getHealth();
                    draw();
                    alert("录入成功！")
                },
                error: function (data) {
                    console.log(JSON.stringify(data));
                    console.log("error");
                }
            });
        }
    </script>
@endsection