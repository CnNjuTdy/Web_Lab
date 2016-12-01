@extends("layouts.base")
@section('title')
    <title>WeSport_People</title>
@endsection
@section("css")
    <link href="http://cdn.bootcss.com/jquery-confirm/2.5.1/jquery-confirm.min.css" rel="stylesheet">
@endsection
@section("content")
    <div class="row">
        <div class="col-md-6">
            <div class="form-group">
                <div class="input-group">
                    <input class="form-control" type="search" placeholder="输入昵称关注" id="addName_">
                    <span class="input-group-btn">
                                <button type="submit" class="btn" onclick="addFollowing()">
                                    添加
                                </button>
                            </span>
                </div>
            </div>
            <div class="panel panel-success">
                <div class="panel-heading text-center">
                    我的关注
                </div>
                <ul class="list-group" id="following"></ul>
            </div>
        </div>
        <div class="col-md-6">
            <div class="panel panel-info">
                <div class="panel-heading text-center   ">我的粉丝</div>
                <ul class="list-group" id="follower"></ul>
            </div>
        </div>
    </div>
@endsection
@section("script")
    <script src="http://cdn.bootcss.com/jquery-confirm/2.5.1/jquery-confirm.min.js"></script>
    <script src="common/js/people.js"></script>
    <script>
        function addFollowing() {
            var username = getCookie("WeSport_username");
            var addName = $("#addName_").val();
            if(addName==""){
                alert("请输入想要添加关注的用户名！")
                return ;
            }
            $.ajax({
                url: '/people/add',
                type: 'post',
                data: { username: username,addName :addName},
                success: function (data) {
                    if(data==0){
                        alert("添加好友成功！");
                        window.location.reload();
                    }else{
                        alert("您查询的用户不存在！");
                    }
                },
                error: function (data) {
                    console.log(JSON.stringify(data));
                    console.log("error");
                }
            });
        }
    </script>
@endsection
