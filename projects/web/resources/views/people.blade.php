@extends("layouts.base")
@section("css")
    <link href="http://cdn.bootcss.com/jquery-confirm/2.5.1/jquery-confirm.min.css" rel="stylesheet">
@endsection
@section("content")
    <div class="row">
        <div class="col-md-6">
            <div class="form-group">
                <div class="input-group">
                    <input class="form-control" type="search" placeholder="输入昵称添加关注">
                    <span class="input-group-btn">
                                <button type="submit" class="btn">
                                    添加
                                </button>
                            </span>
                </div>
            </div>
            <div class="panel panel-success">
                <div class="panel-heading text-center">
                    我的关注
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
                                <div style="margin-top: 5px"><strong>
                                        <small><em>打篮球吗，带我一个，我发球贼6</em></small>
                                    </strong></div>
                            </div>
                            <div class="col-md-2 text-danger text-center" onclick="delete_my(this)">
                                <div><span class="fui-cross" style=""></span></div>
                                <div style="margin-top: 5px">
                                    <small>取消关注</small>
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
                                <div style="margin-top: 5px"><strong>
                                        <small><em>打篮球吗，带我一个，我发球贼6</em></small>
                                    </strong></div>
                            </div>
                            <div class="col-md-2 text-danger text-center" onclick="delete_my(this)">
                                <div><span class="fui-cross" style=""></span></div>
                                <div style="margin-top: 5px">
                                    <small>取消关注</small>
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
                                <div class="sas"><a href="#" onclick="viewOthers(this)">不会打篮球的迈克尔乔丹</a></div>
                                <div style="margin-top: 5px"><strong>
                                        <small><em>打篮球吗，带我一个，我发球贼6</em></small>
                                    </strong></div>
                            </div>
                            <div class="col-md-2 text-danger text-center" onclick="delete_my(this)">
                                <div><span class="fui-cross" style=""></span></div>
                                <div style="margin-top: 5px">
                                    <small>取消关注</small>
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
                                <div style="margin-top: 5px"><strong>
                                        <small><em>打篮球吗，带我一个，我发球贼6</em></small>
                                    </strong></div>
                            </div>
                            <div class="col-md-2 text-danger text-center" onclick="delete_my(this)">
                                <div><span class="fui-cross" style=""></span></div>
                                <div style="margin-top: 5px">
                                    <small>取消关注</small>
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
                                <div style="margin-top: 5px"><strong>
                                        <small><em>打篮球吗，带我一个，我发球贼6</em></small>
                                    </strong></div>
                            </div>
                            <div class="col-md-2 text-danger text-center" onclick="delete_my(this)">
                                <div><span class="fui-cross" style=""></span></div>
                                <div style="margin-top: 5px">
                                    <small>取消关注</small>
                                </div>
                            </div>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
        <div class="col-md-6">
            <div class="panel panel-info">
                <div class="panel-heading text-center   ">我的粉丝</div>
                <ul class="list-group">
                    <li class="list-group-item">
                        <div class="row">
                            <div class="col-md-2">
                                <img src="common/img/head.jpg" alt="example-image"
                                     class="img-responsive img-rounded">
                            </div>
                            <div class="col-md-8">
                                <div class="sas"><a>不会打篮球的迈克尔乔丹</a></div>
                                <div style="margin-top: 5px"><strong>
                                        <small><em>打篮球吗，带我一个，我发球贼6</em></small>
                                    </strong></div>
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
                                <div style="margin-top: 5px"><strong>
                                        <small><em>打篮球吗，带我一个，我发球贼6</em></small>
                                    </strong></div>
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
                                <div class="sas"><a href="#" onclick="viewOthers(this)">不会打篮球的迈克尔乔丹</a></div>
                                <div style="margin-top: 5px"><strong>
                                        <small><em>打篮球吗，带我一个，我发球贼6</em></small>
                                    </strong></div>
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
                                <div style="margin-top: 5px"><strong>
                                        <small><em>打篮球吗，带我一个，我发球贼6</em></small>
                                    </strong></div>
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
                                <div style="margin-top: 5px"><strong>
                                        <small><em>打篮球吗，带我一个，我发球贼6</em></small>
                                    </strong></div>
                            </div>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </div>
@endsection
@section("script")
    <script src="http://cdn.bootcss.com/jquery-confirm/2.5.1/jquery-confirm.min.js"></script>
    <script src="common/js/people.js"></script>
@endsection
