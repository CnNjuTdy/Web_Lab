@extends('layouts.base')
@section('title')
    <title>WeSport_Activity</title>
@endsection
@section('css')
    <link href="http://cdn.bootcss.com/bootstrap-datetimepicker/4.17.43/css/bootstrap-datetimepicker.min.css"
          rel="stylesheet">

    <link href="http://cdn.bootcss.com/bootstrap-fileinput/4.3.5/css/fileinput.min.css" rel="stylesheet">

    <link href="http://cdn.bootcss.com/jquery-confirm/2.5.1/jquery-confirm.min.css" rel="stylesheet">
@endsection
@section('content')
    <div class="row">
        <div class="row">
            <ul class="nav nav-tabs" role="tablist" id="myTab">
                <li class="active"><a href="#add" data-toggle="tab" id="addTab">发起活动</a></li>
                <li><a href="#join" data-toggle="tab" id="jointab">参与活动</a></li>
                <li><a href="#mine" data-toggle="tab" id="mineTab">我的活动</a></li>
            </ul>
        </div>
        <div class="row" style="margin-top: 20px;">
            <div id="myTableContent" class="tab-content">
                <div class="tab-pane fade in active" id="add">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="row">
                                <div class="col-md-5">
                                    <div class="row">
                                        <div class="form-group col-md-12">
                                            <input id="name" type="text" value="" placeholder="活动名称"
                                                   class="form-control">
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="form-group col-md-12">
                                            <input id="loction" type="text" value="" placeholder="活动地点"
                                                   class="form-control">
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12 form-group">
                                            <input id="start_time" type="text" placeholder="时间"
                                                   class="form_datetime form-control">
                                        </div>
                                    </div>
                                    <div class="row" style="margin-top: 70px">
                                        <div class="col-md-3" style="margin-top: 4px;">
                                            <strong>参与方式:</strong>
                                        </div>
                                        <div class="col-md-9">
                                            <label class="radio">
                                                <input type="radio" name="optionsRadios" id="optionsRadios1"
                                                       value="option1" data-toggle="radio" checked="">
                                                任何人
                                            </label>
                                            <label class="radio">
                                                <input type="radio" name="optionsRadios" id="optionsRadios2"
                                                       value="option1" data-toggle="radio">
                                                仅限邀请
                                            </label>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <small><em>您可以在活动发起完成之后在"<a onclick="showMineTab()">我的活动</a>"中邀请好友参加</em>
                                            </small>
                                        </div>
                                    </div>
                                    <div class="row" style="margin-top: 70px">
                                        <div class="col-md-12" style="margin-top: 4px">
                                            <strong>活动标签:<em>(不超过3个)</em></strong>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="tagsinput-primary">
                                                <input id="labels" name="tagsinput" class="tagsinput" data-role="tagsinput"
                                                       value="跑步,半马"/>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <small><em>好的活动标签可以让你的活动有更多人参与！</em></small>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-7">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <strong>图片描述:</strong>
                                            <input id="activity_pic" type="file">
                                        </div>
                                    </div>
                                    <div class="row" style="margin-top: 20px">
                                        <div class="form-group col-md-12">
                                            <textarea id="description" placeholder="活动描述" class="form-control"
                                                      style="resize: none;height:200px"></textarea>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row" style="margin-top: 20px;">
                                <div class="col-md-4 col-md-offset-4">
                                    <label class="checkbox">
                                        <input type="checkbox" value="" id="isAgree" data-toggle="checkbox"
                                               checked onclick="isAgree()">
                                        我已阅读并同意《<a data-toggle="modal" data-target="#protocol">WeSport活动发起协议</a>》
                                    </label>
                                    <!--协议内容-->
                                    <div class="modal fade" id="protocol" tabindex="-1" role="dialog"
                                         aria-labelledby="myModalLabel" aria-hidden="true">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <button type="button" class="close" data-dismiss="modal"
                                                            aria-hidden="true">
                                                        &times;
                                                    </button>
                                                    <h4 class="modal-title" id="myModalLabel">
                                                        协议
                                                    </h4>
                                                </div>
                                                <div class="modal-body">
                                                    呵呵呵……
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-default"
                                                            data-dismiss="modal">关闭
                                                    </button>
                                                </div>
                                            </div><!-- /.modal-content -->
                                        </div><!-- /.modal -->
                                    </div>
                                    <!--协议内容结束-->
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-10 col-md-offset-1">
                                    <button id="addActivity" type="button" class="btn btn-block btn-primary" onclick="createActivity()">
                                        发起活动
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="tab-pane fade" id="join"></div>
                <div class="tab-pane fade" id="mine">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="panel panel-success">
                                <div class="panel-heading text-center">
                                    <strong>我参与的活动</strong>
                                </div>
                                <table class="table">
                                    <thead>
                                    <tr>
                                        <th class="text-center">活动名称</th>
                                        <th class="text-center">活动描述</th>
                                        <th class="text-center">活动状态</th>
                                    </tr>
                                    </thead>
                                    <tbody class="text-center" id="my_join">
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="panel panel-success">
                                <div class="panel-heading text-center">
                                    我发起的活动
                                </div>
                                <table class="table">
                                    <thead>
                                    <tr>
                                        <th class="text-center">活动名称</th>
                                        <th class="text-center">活动状态</th>
                                        <th class="text-center">操作</th>
                                    </tr>
                                    </thead>
                                    <tbody class="text-center" id="my_org">

                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('script')
    <!--时间相关组件-->
    <script src="http://cdn.bootcss.com/moment.js/2.15.1/moment.min.js"></script>
    <script src="http://cdn.bootcss.com/moment.js/2.15.1/locale/zh-cn.js"></script>
    <script src="http://cdn.bootcss.com/bootstrap-datetimepicker/4.17.43/js/bootstrap-datetimepicker.min.js"></script>
    <!--文件上传组件-->
    <script src="http://cdn.bootcss.com/bootstrap-fileinput/4.3.5/js/fileinput.min.js"></script>
    <script src="http://cdn.bootcss.com/bootstrap-fileinput/4.3.5/js/locales/zh.min.js"></script>
    <!--确认框-->
    <script src="http://cdn.bootcss.com/jquery-confirm/2.5.1/jquery-confirm.min.js"></script>
    <!--自制-->
    <script src="common/js/activity.js"></script>

    <script>
        function createActivity() {
            var name = $("#name").val();
            var location = $("#loction").val();
            var time = $("#start_time").val();
            var description = $("#description").val();
            var labels = $("#labels").val();
            if(name==""){
                alert("活动名不能为空！")
                return ;
            }else if(location==""){
                alert("活动地点不能为空！")
                return ;
            }else if(time==""){
                alert("活动时间不能为空！")
                return ;
            }else if(description==""){
                alert("活动描述不能为空！")
                return ;
            }else if(labels==""){
                alert("活动标签不能为空！")
            }
            var username = getCookie("WeSport_username");
            $.ajax({
                url: '/activity/create_activity',
                type: 'post',
                data: { username: username,name:name,
                        location:location,time:time,
                        description:description,labels:labels},
                success: function (data) {
//                    getJoinData();
//                    getMyData();
//                    draw();
                    alert("创建活动成功！");
                    window.location.reload();
                },
                error: function (data) {
                    console.log(JSON.stringify(data));
                    console.log("error");
                }
            });

        }
    </script>
@endsection