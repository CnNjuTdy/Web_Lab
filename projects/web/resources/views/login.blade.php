<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>WeSporter_Login</title>
    <meta name="viewport" content="width=1000, initial-scale=1.0, maximum-scale=1.0">

    <!-- Loading Bootstrap -->
    <link href="http://cdn.bootcss.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">

    <!-- Loading Flat UI -->
    <link href="common/css/flat-ui.css" rel="stylesheet">
</head>
<body>
<div class="container">
    <div class="row" style="margin-top: 50px">
        <div class="col-md-6 col-md-offset-3">
            <div class="panel panel-success">
                <div class="panel-heading text-center">
                    <strong>登录</strong>
                </div>
                <div class="panel-body">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group col-md-12">
                                <input type="text" value="" placeholder="昵称"
                                       class="form-control" id="username">
                            </div>
                            <div class="form-group col-md-12">
                                <input type="password" value="" placeholder="密码"
                                       class="form-control" id="userpasswd">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-10 col-md-offset-1">
                            <button type="button" class="btn btn-block btn-primary" onclick="login()">确认登录</button>
                        </div>
                    </div>
                    <div class="row" style="margin-top: 10px">
                        <div class="col-md-6 text-center">
                            <a href="">申请账号</a>
                        </div>
                        <div class="col-md-6 text-center">
                            <a class="text-danger" href="">忘记密码?</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script src="http://cdn.bootcss.com/jquery/3.1.1/jquery.min.js"></script>
<script src="http://cdn.bootcss.com/flat-ui/2.3.0/js/vendor/video.js"></script>
<script src="http://cdn.bootcss.com/flat-ui/2.3.0/js/flat-ui.min.js"></script>
<script src="common/js/application.js"></script>
<script src="http://cdn.hcharts.cn/highcharts/highcharts.js"></script>
<script src="common/js/util.js"></script>

<script>
    function login() {
        var username = $("input[id=username]").val();
        var passwd = $("input[id=userpasswd]").val();
        $.ajax({
            url: '/login',
            type: 'post',
            data: {username: username, userpasswd: passwd},
            success: function (data) {
                if (data["userValid"] == 1) {
                    setCookie("WeSport_username", data["username"])
                    window.location.href = "index";
                } else {

                }
            },
            error: function (data) {
                console.log(JSON.stringify(data));
                console.log("error");
            }
        });
    }
</script>
</body>
</html>