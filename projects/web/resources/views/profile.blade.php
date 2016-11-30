@extends("layouts.base")
@section("css")
    <link href="http://cdn.bootcss.com/jquery-confirm/2.5.1/jquery-confirm.min.css" rel="stylesheet">
@endsection
@section("content")
    <div class="row">
        <div class="row">
            <div class="col-md-12">
                <div class="panel panel-success">
                    <div class="panel-body">
                        <p>你已登录3天，现在的等级是<strong><big>lv2</big></strong>，权限包括同时创建最多3个项目，累计创建项目不超过5个，好友数目不超过20人</p>
                        <a href="#" data-toggle="modal" data-target="#info">
                            <small><em>查看所有等级详情及权限</em></small>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="panel panel-success">
                    <div class="panel-body">
                        <div class="row">
                            <div class="col-md-4">
                                <div class="row">
                                    <div class="col-md-12">
                                        <img src="common/img/head.jpg" alt="example-image"
                                             class="img-circle img-responsive">
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="panel panel-success">
                                            <div class="panel-heading text-center">
                                                自我描述
                                            </div>
                                            <div class="panel-body">
                                                <p>
                                                    先帝创业未半而中道崩殂，今天下三分，益州疲弊，此诚危急存亡之秋也。
                                                    然侍卫之臣不懈于内，忠志之士忘身于外者，盖追先帝之殊遇，欲报之于陛下也。
                                                    诚宜开张圣听，以光先帝遗德，恢弘志士之气，不宜妄自菲薄，引喻失义，以塞忠谏之路也。
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!--<div class="form-group">-->
                            <!--<label>个人标签:</label>-->
                            <!--<div class="tagsinput-primary">-->
                            <!--<input class="tagsinput" data-role="tagsinput"-->
                            <!--value="滑板,极限" disabled/>-->
                            <!--</div>-->
                            <!--</div>-->
                            <div class="col-md-4">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="panel panel-success">
                                            <div class="panel-heading">基本资料</div>
                                            <div class="panel-body">
                                                <div class="row">
                                                    <div class="col-md-12"><strong>昵称:</strong>炫酷滑板鞋</div>
                                                </div>
                                                <div class="row" style="margin-top: 10px">
                                                    <div class="col-md-12"><strong>所在城市:</strong>南京市</div>
                                                </div>
                                                <div class="row" style="margin-top: 10px">
                                                    <div class="col-md-12"><strong>详细地址:</strong>鼓楼区南京大学附近</div>
                                                </div>
                                                <div class="row" style="margin-top: 25px">
                                                    <div class="col-md-12">
                                                        <div class="tagsinput-primary">
                                                            <input class="tagsinput" data-role="tagsinput"
                                                                   value="滑板,极限" disabled/>
                                                        </div>
                                                    </div>
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12  text-center">
                                <a href="#" class="text-info"
                                   style="text-decoration: underline" data-toggle="modal"
                                   data-target="#editInfo"><strong><em>编辑信息</em></strong></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="panel-success panel">
                    <div class="panel-body ">
                        <div class="row">
                            <div class="col-md-12 text-center">
                                用户编号: <em class="text-info">000001</em>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12 text-center">
                                用户名: <em class="text-info">酷炫滑板鞋</em>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12 text-center">
                                密码: **********
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12 text-center ">
                                <a href="#" data-toggle="modal" data-target="#editPass"><strong><em>
                                            <small class="text-danger">修改密码</small>
                                        </em></strong></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <button type="button" class="btn btn-danger btn-lg btn-block" onclick="confirmLogout()">退出登录</button>
            </div>
        </div>
        <div class="modal fade" id="info" tabindex="-1" role="dialog"
             aria-labelledby="myModalLabel" aria-hidden="true">
            <div class="modal-dialog" style="width: 80%">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal"
                                aria-hidden="true">
                            &times;
                        </button>
                        <h4 class="modal-title" id="myModalLabel">
                            等级详情
                        </h4>
                    </div>
                    <div class="modal-body">
                        <table class="table">
                            <thead>
                            <tr>
                                <th class="text-center">等级</th>
                                <th class="text-center">需登录天数</th>
                                <th class="text-center">权限</th>
                            </tr>
                            </thead>
                            <tbody class="text-center">
                            <tr>
                                <td>lv1</td>
                                <td>1</td>
                                <td>权限1</td>
                            </tr>
                            <tr>
                                <td>lv2</td>
                                <td>4</td>
                                <td>权限2</td>
                            </tr>
                            <tr>
                                <td>lv3</td>
                                <td>10</td>
                                <td>权限3</td>
                            </tr>
                            <tr>
                                <td>lv4</td>
                                <td>30</td>
                                <td>权限4</td>
                            </tr>
                            <tr>
                                <td>lv5</td>
                                <td>60</td>
                                <td>权限5</td>
                            </tr>
                            <tr>
                                <td>lv6</td>
                                <td>100</td>
                                <td>权限6</td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default"
                                data-dismiss="modal">关闭
                        </button>
                    </div>
                </div><!-- /.modal-content -->
            </div><!-- /.modal -->
        </div>
        <div class="modal fade" id="editInfo" tabindex="-1" role="dialog"
             aria-labelledby="myModalLabel" aria-hidden="true">
            <div class="modal-dialog" style="width: 80%">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal"
                                aria-hidden="true">
                            &times;
                        </button>
                        <h4 class="modal-title">
                            编辑个人信息
                        </h4>
                    </div>
                    <div class="modal-body">编辑个人信息</div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default"
                                data-dismiss="modal">确定
                        </button>
                        <button type="button" class="btn btn-default"
                                data-dismiss="modal">关闭
                        </button>
                    </div>
                </div><!-- /.modal-content -->
            </div><!-- /.modal -->
        </div>
        <div class="modal fade" id="editPass" tabindex="-1" role="dialog"
             aria-labelledby="myModalLabel" aria-hidden="true">
            <div class="modal-dialog" style="width: 80%">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal"
                                aria-hidden="true">
                            &times;
                        </button>
                        <h4 class="modal-title">
                            修改密码
                        </h4>
                    </div>
                    <div class="modal-body">
                        修改密码
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-danger"
                                data-dismiss="modal">确认
                        </button>
                        <button type="button" class="btn btn-default"
                                data-dismiss="modal">关闭
                        </button>
                    </div>
                </div><!-- /.modal-content -->
            </div><!-- /.modal -->
        </div>
    </div>
@endsection
@section("script")
    <script src="http://cdn.bootcss.com/jquery-confirm/2.5.1/jquery-confirm.min.js"></script>
    <script src="common/js/profile.js"></script>
@endsection