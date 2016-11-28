@extends("layouts.base")
@section("css")
@endsection
@section("content")
    <div class="row">
        <div class="row">
            <div class="form-group col-md-12">
                <textarea placeholder="快来说说你附近发生了什么好玩的事吧~" class="form-control"
                          style="resize: none;height:100px; "></textarea>
                <button type="submit" class="btn btn-block btn-success" style="margin-top: 20px">
                    发表状态
                </button>
            </div>
            <ul class="nav nav-tabs" role="tablist">
                <li class="active"><a href="#all" data-toggle="tab">好友状态</a></li>
                <li><a href="#mine" data-toggle="tab">我的状态</a></li>
            </ul>
        </div>
        <div class="row" style="margin-top: 20px;">
            <div id="myTabContent" class="tab-content">
                <div class="tab-pane fade in active" id="all">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="panel panel-success" style="border-color: #FFE0E4;">
                                <div class="panel-body">
                                    <div>
                                        <div class="row" style="font-weight: bold">
                                            <div class="col-md-12">
                                                <p><a href="profile">滑板鞋1:</a>
                                                    今天玩滑板又被打了，嗨呀好气啊</p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-12">
                                                <p class="text-right" style="font-size: 7px">
                                                    <em>2016/11/05 15:39</em>
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row" style="font-style: italic">
                                        <div class="col-md-12">
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <a href="profile">滑板鞋2:</a>
                                                    该
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <a href="profile">滑板鞋3:</a>
                                                    该+1
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <a href="profile">滑板鞋4:</a>该+10086
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <hr/>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="input-group">
                                                <input placeholder="我也说两句" class="form-control">
                                                <span class="input-group-btn">
                                                    <button type="submit" class="btn">评论</button>
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="panel panel-success" style="border-color: #FFE0E4;">
                                <div class="panel-body">
                                    <div>
                                        <div class="row" style="font-weight: bold">
                                            <div class="col-md-12">
                                                <p><a href="profile">滑板鞋1:</a>
                                                    今天玩滑板又被打了，嗨呀好气啊</p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-12">
                                                <p class="text-right" style="font-size: 7px">
                                                    <em>2016/11/05 15:39</em>
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row" style="font-style: italic">
                                        <div class="col-md-12">
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <a href="profile">滑板鞋2:</a>
                                                    该
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <a href="profile">滑板鞋3:</a>
                                                    该+1
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <a href="profile">滑板鞋4:</a>该+10086
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <hr/>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="input-group">
                                                <input placeholder="我也说两句" class="form-control">
                                                <span class="input-group-btn">
                                                    <button type="submit" class="btn">评论</button>
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="panel panel-success" style="border-color: #FFE0E4;">
                                <div class="panel-body">
                                    <div>
                                        <div class="row" style="font-weight: bold">
                                            <div class="col-md-12">
                                                <p><a href="profile">滑板鞋1:</a>
                                                    今天玩滑板又被打了，嗨呀好气啊</p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-12">
                                                <p class="text-right" style="font-size: 7px">
                                                    <em>2016/11/05 15:39</em>
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row" style="font-style: italic">
                                        <div class="col-md-12">
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <a href="profile">滑板鞋2:</a>
                                                    该
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <a href="profile">滑板鞋3:</a>
                                                    该+1
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <a href="profile">滑板鞋4:</a>该+10086
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <hr/>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="input-group">
                                                <input placeholder="我也说两句" class="form-control">
                                                <span class="input-group-btn">
                                                    <button type="submit" class="btn">评论</button>
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="tab-pane fade" id="mine">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="panel panel-success" style="border-color: #FFE0E4;">
                                <div class="panel-body">
                                    <div>
                                        <div class="row" style="font-weight: bold">
                                            <div class="col-md-12">
                                                <p><a href="profile">滑板鞋1:</a>
                                                    今天玩滑板又被打了，嗨呀好气啊</p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-12">
                                                <p class="text-right" style="font-size: 7px">
                                                    <em>2016/11/05 15:39</em>
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row" style="font-style: italic">
                                        <div class="col-md-12">
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <a href="profile">滑板鞋2:</a>
                                                    该
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <a href="profile">滑板鞋3:</a>
                                                    该+1
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <a href="profile">滑板鞋4:</a>该+10086
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <hr/>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="input-group">
                                                <input placeholder="我也说两句" class="form-control">
                                                <span class="input-group-btn">
                                                    <button type="submit" class="btn">评论</button>
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="panel panel-success" style="border-color: #FFE0E4;">
                                <div class="panel-body">
                                    <div>
                                        <div class="row" style="font-weight: bold">
                                            <div class="col-md-12">
                                                <p><a href="profile">滑板鞋1:</a>
                                                    今天玩滑板又被打了，嗨呀好气啊</p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-12">
                                                <p class="text-right" style="font-size: 7px">
                                                    <em>2016/11/05 15:39</em>
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row" style="font-style: italic">
                                        <div class="col-md-12">
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <a href="profile">滑板鞋2:</a>
                                                    该
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <a href="profile">滑板鞋3:</a>
                                                    该+1
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <a href="profile">滑板鞋4:</a>该+10086
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <hr/>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="input-group">
                                                <input placeholder="我也说两句" class="form-control">
                                                <span class="input-group-btn">
                                                    <button type="submit" class="btn">评论</button>
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="panel panel-success" style="border-color: #FFE0E4;">
                                <div class="panel-body">
                                    <div>
                                        <div class="row" style="font-weight: bold">
                                            <div class="col-md-12">
                                                <p><a href="profile">滑板鞋1:</a>
                                                    今天玩滑板又被打了，嗨呀好气啊</p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-12">
                                                <p class="text-right" style="font-size: 7px">
                                                    <em>2016/11/05 15:39</em>
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row" style="font-style: italic">
                                        <div class="col-md-12">
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <a href="profile">滑板鞋2:</a>
                                                    该
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <a href="profile">滑板鞋3:</a>
                                                    该+1
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <a href="profile">滑板鞋4:</a>该+10086
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <hr/>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="input-group">
                                                <input placeholder="我也说两句" class="form-control">
                                                <span class="input-group-btn">
                                                    <button type="submit" class="btn">评论</button>
                                                </span>
                                            </div>
                                        </div>
                                    </div>
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
@endsection
