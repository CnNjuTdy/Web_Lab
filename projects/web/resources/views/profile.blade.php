@extends("layouts.base")
@section('title')
    <title>WeSport_Profile</title>
@endsection
@section("css")
    <link href="http://cdn.bootcss.com/jquery-confirm/2.5.1/jquery-confirm.min.css" rel="stylesheet">
@endsection
@section("content")
    <div class="row">
        <div class="row">
            <div class="col-md-12">
                <div class="panel panel-success">
                    <div class="panel-body">
                        <p><strong id="user">你</strong>已经登录<strong id="loginDays">3</strong>天，现在的等级是<strong><big id="level">lv2</big></strong>，权限包括<strong id="power"></strong></p>
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
                                        <img id="icon" src="common/img/head.jpg" alt="example-image"
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
                                                <p id="desc">
                                                    先帝创业未半而中道崩殂，今天下三分，益州疲弊，此诚危急存亡之秋也。
                                                    然侍卫之臣不懈于内，忠志之士忘身于外者，盖追先帝之殊遇，欲报之于陛下也。
                                                    诚宜开张圣听，以光先帝遗德，恢弘志士之气，不宜妄自菲薄，引喻失义，以塞忠谏之路也。
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="panel panel-success">
                                            <div class="panel-heading">基本资料</div>
                                            <div class="panel-body">
                                                <div class="row">
                                                    <div class="col-md-12">昵称:<strong id="name">炫酷滑板鞋</strong></div>
                                                </div>
                                                <div class="row" style="margin-top: 10px">
                                                    <div class="col-md-12">详细地址:<strong id="address">鼓楼区南京大学附近</strong></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row" id="edit">
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
        <div class="row" id="pass">
            <div class="col-md-12">
                <div class="panel-success panel">
                    <div class="panel-body ">
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
        <div class="row" id="logout">
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
                                <td id="pow1">权限1</td>
                            </tr>
                            <tr>
                                <td>lv2</td>
                                <td>4</td>
                                <td id="pow2">权限2</td>
                            </tr>
                            <tr>
                                <td>lv3</td>
                                <td>10</td>
                                <td id="pow3">权限3</td>
                            </tr>
                            <tr>
                                <td>lv4</td>
                                <td>30</td>
                                <td id="pow4">权限4</td>
                            </tr>
                            <tr>
                                <td>lv5</td>
                                <td>60</td>
                                <td id="pow5">权限5</td>
                            </tr>
                            <tr>
                                <td>lv6</td>
                                <td>100</td>
                                <td id="pow6">权限6</td>
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
                    <div class="modal-body">
                        <div class="row">
                            <div class="col-md-5">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="row">
                                            <div class="form-group col-md-12">
                                                <input id="new_address" type="text" value="" placeholder="地址：最好写的详细些哦！"
                                                       class="form-control">
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="form-group col-md-12">
                                                <input id="new_goal" type="text" value="" placeholder="目标：每天10000步！"
                                                       class="form-control">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-7">
                                <div class="row">
                                    <div class="form-group col-md-12">
                                            <textarea id="new_description" placeholder="自我描述：王婆卖瓜！" class="form-control"
                                                      style="resize: none;height:100px">

                                            </textarea>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default" onclick="editInfo()"
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
                        <div class="row">
                            <div class="form-group col-md-12">
                                <input id="new_pass" type="password" value="" placeholder="输入新的密码"
                                   class="form-control">
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group col-md-12">
                                <input id="new_pass_con" type="password" value="" placeholder="重复新的密码"
                                   class="form-control">
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-danger" onclick="editPass()"
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
    <script>
        function editInfo() {
            var username = getCookie("WeSport_username");
            var address = $("#new_address").val();
            var goal = $("#new_goal").val();
            var des = $("#new_description").val();

            if(address==""){
                alert("没有填写地址！");
                return ;
            }else if(goal==""){
                alert("没有填写目标！");
                return ;
            }else if(des==""){
                alert("没有填写个人描述！");
            }
            $.ajax({
                url: '/profile/edit_info',
                type: 'post',
                data: {username: username,address:address,goal:goal,des:des},
                success: function (data) {
                    alert("编辑个人资料成功")
                    window.location.reload();
                },
                error: function (data) {
                    console.log(JSON.stringify(data));
                    console.log("error");
                }
            });
        }
        function editPass() {
            var username = getCookie("WeSport_username");
            var passwd = $("input[id=new_pass]").val();
            var confirm = $("input[id=new_pass_con]").val();
            if(passwd!=confirm){
                alert("两次新密码不一致！")
                return ;
            }else if(passwd==""){
                alert("密码不能为空！")
                return ;
            }
            $.ajax({
                url: '/profile/edit_pass',
                type: 'post',
                data: {username: username,pass:passwd},
                success: function (data) {
                    alert("修改密码成功")
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