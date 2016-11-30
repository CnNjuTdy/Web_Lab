@extends('layouts.base')
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
                                            <input type="text" value="" placeholder="活动名称"
                                                   class="form-control">
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="form-group col-md-12">
                                            <input type="text" value="" placeholder="活动地点"
                                                   class="form-control">
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6 form-group">
                                            <input id="start_time" type="text" placeholder="开始时间"
                                                   class="form_datetime form-control">
                                        </div>
                                        <div class="col-md-6 form-group">
                                            <input id="end_time" type="text" placeholder="结束时间"
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
                                                <input name="tagsinput" class="tagsinput" data-role="tagsinput"
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
                                            <textarea placeholder="活动描述" class="form-control"
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
                                    <button id="addActivity" type="button" class="btn btn-block btn-primary">
                                        发起活动
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="tab-pane fade" id="join">
                    <div class="row" id="line1">
                        <div id="item1" class="col-md-4">
                            <div class="panel panel-success">
                                <div class="panel-body">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <img src="common/img/activity_pic/skateborder.jpg" alt="example-image"
                                                 class="img-responsive">
                                        </div>
                                    </div>
                                    <div class="row" style="margin-top: 5px">
                                        <div class="col-md-12">
                                            <div class="tagsinput-primary">
                                                <input class="tagsinput" data-role="tagsinput"
                                                       value="滑板,极限" disabled/>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="text-center"><big><em><strong>一起滑板啊！</strong></em></big></div>
                                    <div class="text-center">发起人:<a>炫酷滑板鞋</a></div>
                                    <div class="text-center">地点:南京市鼓楼区汉口路附近</div>
                                    <div class="text-center">时间:10月17日16点</div>
                                    <div class="row" style="margin-top: 7px">
                                        <div class="col-md-12">
                                            <small class="text-danger">还在担心你的周末？穿上滑板鞋一起嗨皮！</small>
                                        </div>
                                    </div>
                                </div>
                                <div class="panel-footer">
                                    <button type="button" class="btn btn-block btn-primary">
                                        参与活动
                                    </button>
                                </div>
                            </div>
                        </div>
                        <div id="item2" class="col-md-4">
                            <div class="panel panel-success">
                                <div class="panel-body">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <img src="common/img/activity_pic/skateborder.jpg" alt="example-image"
                                                 class="img-responsive">
                                        </div>
                                    </div>
                                    <div class="row" style="margin-top: 5px">
                                        <div class="col-md-12">
                                            <div class="tagsinput-primary">
                                                <input class="tagsinput" data-role="tagsinput"
                                                       value="滑板,极限" disabled/>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="text-center"><big><em><strong>一起滑板啊！</strong></em></big></div>
                                    <div class="text-center">发起人:<a>炫酷滑板鞋</a></div>
                                    <div class="text-center">地点:南京市鼓楼区汉口路附近</div>
                                    <div class="text-center">时间:10月17日16点</div>
                                    <div class="row" style="margin-top: 7px">
                                        <div class="col-md-12">
                                            <small class="text-danger">还在担心你的周末？穿上滑板鞋一起嗨皮！</small>
                                        </div>
                                    </div>
                                </div>
                                <div class="panel-footer">
                                    <button type="button" class="btn btn-block btn-primary">
                                        参与活动
                                    </button>
                                </div>
                            </div>
                        </div>
                        <div id="item3" class="col-md-4">
                            <div class="panel panel-success">
                                <div class="panel-body">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <img src="common/img/activity_pic/skateborder.jpg" alt="example-image"
                                                 class="img-responsive">
                                        </div>
                                    </div>
                                    <div class="row" style="margin-top: 5px">
                                        <div class="col-md-12">
                                            <div class="tagsinput-primary">
                                                <input class="tagsinput" data-role="tagsinput"
                                                       value="滑板,极限" disabled/>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="text-center"><big><em><strong>一起滑板啊！</strong></em></big></div>
                                    <div class="text-center">发起人:<a>炫酷滑板鞋</a></div>
                                    <div class="text-center">地点:南京市鼓楼区汉口路附近</div>
                                    <div class="text-center">时间:10月17日16点</div>
                                    <div class="row" style="margin-top: 7px">
                                        <div class="col-md-12">
                                            <small class="text-danger">还在担心你的周末？穿上滑板鞋一起嗨皮！</small>
                                        </div>
                                    </div>
                                </div>
                                <div class="panel-footer">
                                    <button type="button" class="btn btn-block btn-primary">
                                        参与活动
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row" id="line2">
                        <div id="item4" class="col-md-4">
                            <div class="panel panel-success">
                                <div class="panel-body">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <img src="common/img/activity_pic/skateborder.jpg" alt="example-image"
                                                 class="img-responsive">
                                        </div>
                                    </div>
                                    <div class="row" style="margin-top: 5px">
                                        <div class="col-md-12">
                                            <div class="tagsinput-primary">
                                                <input class="tagsinput" data-role="tagsinput"
                                                       value="滑板,极限" disabled/>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="text-center"><big><em><strong>一起滑板啊！</strong></em></big></div>
                                    <div class="text-center">发起人:<a>炫酷滑板鞋</a></div>
                                    <div class="text-center">地点:南京市鼓楼区汉口路附近</div>
                                    <div class="text-center">时间:10月17日16点</div>
                                    <div class="row" style="margin-top: 7px">
                                        <div class="col-md-12">
                                            <small class="text-danger">还在担心你的周末？穿上滑板鞋一起嗨皮！</small>
                                        </div>
                                    </div>
                                </div>
                                <div class="panel-footer">
                                    <button type="button" class="btn btn-block btn-primary">
                                        参与活动
                                    </button>
                                </div>
                            </div>
                        </div>
                        <div id="item5" class="col-md-4">
                            <div class="panel panel-success">
                                <div class="panel-body">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <img src="common/img/activity_pic/skateborder.jpg" alt="example-image"
                                                 class="img-responsive">
                                        </div>
                                    </div>
                                    <div class="row" style="margin-top: 5px">
                                        <div class="col-md-12">
                                            <div class="tagsinput-primary">
                                                <input class="tagsinput" data-role="tagsinput"
                                                       value="滑板,极限" disabled/>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="text-center"><big><em><strong>一起滑板啊！</strong></em></big></div>
                                    <div class="text-center">发起人:<a>炫酷滑板鞋</a></div>
                                    <div class="text-center">地点:南京市鼓楼区汉口路附近</div>
                                    <div class="text-center">时间:10月17日16点</div>
                                    <div class="row" style="margin-top: 7px">
                                        <div class="col-md-12">
                                            <small class="text-danger">还在担心你的周末？穿上滑板鞋一起嗨皮！</small>
                                        </div>
                                    </div>
                                </div>
                                <div class="panel-footer">
                                    <button type="button" class="btn btn-block btn-primary">
                                        参与活动
                                    </button>
                                </div>
                            </div>
                        </div>
                        <div id="item6" class="col-md-4">
                            <div class="panel panel-success">
                                <div class="panel-body">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <img src="common/img/activity_pic/skateborder.jpg" alt="example-image"
                                                 class="img-responsive">
                                        </div>
                                    </div>
                                    <div class="row" style="margin-top: 5px">
                                        <div class="col-md-12">
                                            <div class="tagsinput-primary">
                                                <input class="tagsinput" data-role="tagsinput"
                                                       value="滑板,极限" disabled/>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="text-center"><big><em><strong>一起滑板啊！</strong></em></big></div>
                                    <div class="text-center">发起人:<a>炫酷滑板鞋</a></div>
                                    <div class="text-center">地点:南京市鼓楼区汉口路附近</div>
                                    <div class="text-center">时间:10月17日16点</div>
                                    <div class="row" style="margin-top: 7px">
                                        <div class="col-md-12">
                                            <small class="text-danger">还在担心你的周末？穿上滑板鞋一起嗨皮！</small>
                                        </div>
                                    </div>
                                </div>
                                <div class="panel-footer">
                                    <button type="button" class="btn btn-block btn-primary">
                                        参与活动
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
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
                                    <tbody class="text-center">
                                    <tr>
                                        <td>南京马拉松</td>
                                        <td>南京市马拉松比赛</td>
                                        <td>已结束</td>
                                    </tr>
                                    <tr>
                                        <td>第一届滑板大赛</td>
                                        <td>南京市鼓楼区第一届滑板大赛</td>
                                        <td>已结束</td>
                                    </tr>
                                    <tr>
                                        <td>第二届滑板大赛</td>
                                        <td>南京市鼓楼区第二届滑板大赛</td>
                                        <td>正在进行中</td>
                                    </tr>
                                    <tr>
                                        <td>第三届滑板大赛</td>
                                        <td>南京市鼓楼区第三届滑板大赛</td>
                                        <td>正在进行中</td>
                                    </tr>
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
                                    <tbody class="text-center">
                                    <tr>
                                        <td>第一届滑板大赛</td>
                                        <td><strong>已</strong>结束/<strong>已</strong>录入名次</td>
                                        <td><a href="javascript:void(0);"><em
                                                        style="text-decoration: underline">编辑活动</em></a>
                                            <a href="javascript:void(0);"><em style="text-decoration: underline">详情</em></a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>第二届滑板大赛</td>
                                        <td><strong>未</strong>结束/<strong>未</strong>录入名次</td>
                                        <td><a href="javascript:void(0);"><em
                                                        style="text-decoration: underline">编辑活动</em></a>
                                            <a href="javascript:void(0);"><em style="text-decoration: underline">详情</em></a>
                                        </td>
                                    </tr>

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
@endsection