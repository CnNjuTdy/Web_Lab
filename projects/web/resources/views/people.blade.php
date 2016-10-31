@extends("layouts.base")
@section("css")
    <link href="http://cdn.bootcss.com/jquery-confirm/2.5.1/jquery-confirm.min.css" rel="stylesheet">
@endsection
@section("content")
    <div class="row">
        <div class="col-md-6">
            <div class="panel panel-success">
                <div class="panel-heading text-center">
                    <div class="form-group">
                        <div class="input-group">
                            <input class="form-control" type="search" placeholder="输入昵称搜索好友">
                            <span class="input-group-btn">
                                <button type="submit" class="btn">
                                    <span class="fui-search"></span>
                                </button>
                            </span>
                        </div>
                    </div>
                </div>
                <ul class="list-group">
                    <li class="list-group-item">
                        <div class="row">
                            <div class="col-md-2">
                                <img src="common/img/head.jpg" alt="example-image"
                                     class="img-responsive img-rounded">
                            </div>
                            <div class="col-md-8">
                                <div class="sas"><a>不会打篮球的迈克尔乔丹</a></div>
                                <div style="margin-top: 7px"><strong>
                                        <small><em>打篮球吗，带我一个，我发球贼6</em></small>
                                    </strong></div>
                            </div>
                            <div class="col-md-2 text-danger text-center" onclick="delete_my(this)">
                                <div><span class="fui-cross" style=""></span></div>
                                <div style="margin-top: 7px">
                                    <small>删除好友</small>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li class="list-group-item">
                        <div class="row">
                            <div class="col-md-2">
                                <img src="common/img/head.jpg" alt="example-image"
                                     class="img-responsive img-rounded">
                            </div>
                            <div class="col-md-8">
                                <div class="sas"><a>不会打篮球的迈克尔乔丹</a></div>
                                <div style="margin-top: 7px"><strong>
                                        <small><em>打篮球吗，带我一个，我发球贼6</em></small>
                                    </strong></div>
                            </div>
                            <div class="col-md-2 text-danger text-center" onclick="delete_my(this)">
                                <div><span class="fui-cross" style=""></span></div>
                                <div style="margin-top: 7px">
                                    <small>删除好友</small>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li class="list-group-item">
                        <div class="row">
                            <div class="col-md-2">
                                <img src="common/img/head.jpg" alt="example-image"
                                     class="img-responsive img-rounded">
                            </div>
                            <div class="col-md-8">
                                <div class="sas"><a>不会打篮球的迈克尔乔丹</a></div>
                                <div style="margin-top: 7px"><strong>
                                        <small><em>打篮球吗，带我一个，我发球贼6</em></small>
                                    </strong></div>
                            </div>
                            <div class="col-md-2 text-danger text-center" onclick="delete_my(this)">
                                <div><span class="fui-cross" style=""></span></div>
                                <div style="margin-top: 7px">
                                    <small>删除好友</small>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li class="list-group-item">
                        <div class="row">
                            <div class="col-md-2">
                                <img src="common/img/head.jpg" alt="example-image"
                                     class="img-responsive img-rounded">
                            </div>
                            <div class="col-md-8">
                                <div class="sas"><a>不会打篮球的迈克尔乔丹</a></div>
                                <div style="margin-top: 7px"><strong>
                                        <small><em>打篮球吗，带我一个，我发球贼6</em></small>
                                    </strong></div>
                            </div>
                            <div class="col-md-2 text-danger text-center" onclick="delete_my(this)">
                                <div><span class="fui-cross" style=""></span></div>
                                <div style="margin-top: 7px">
                                    <small>删除好友</small>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li class="list-group-item">
                        <div class="row">
                            <div class="col-md-2">
                                <img src="common/img/head.jpg" alt="example-image"
                                     class="img-responsive img-rounded">
                            </div>
                            <div class="col-md-8">
                                <div class="sas"><a>不会打篮球的迈克尔乔丹</a></div>
                                <div style="margin-top: 7px"><strong>
                                        <small><em>打篮球吗，带我一个，我发球贼6</em></small>
                                    </strong></div>
                            </div>
                            <div class="col-md-2 text-danger text-center" onclick="delete_my(this)">
                                <div><span class="fui-cross" style=""></span></div>
                                <div style="margin-top: 7px">
                                    <small>删除好友</small>
                                </div>
                            </div>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
        <div class="col-md-6">
            <div class="row text-center">
                <div class="col-md-12">
                    <div class="form-group">
                        <div class="input-group">
                            <input class="form-control" id="navbarInput-01" type="search" placeholder="输入昵称添加用户">
                            <span class="input-group-btn">
                                <button type="submit" class="btn">
                                    <span>添加</span>
                                </button>
                            </span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="panel panel-success">
                <div class="panel-heading text-center   ">推荐好友</div>
                <div class="panel-body text-center">
                    <div class="row">这里是好友信息</div>
                    <br><br><br>
                    <div class="row"><small><em>不满意？你可以 <a href="#">换一个</a>或者尝试<a href="setting.blade.php">修改偏好设置</a></em></small></div>
                </div>
            </div>
        </div>
    </div>
@endsection
@section("script")
    <script src="http://cdn.bootcss.com/jquery-confirm/2.5.1/jquery-confirm.min.js"></script>
    <script src="common/js/people.js"></script>
@endsection
