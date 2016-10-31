<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>WeSporter</title>
    <meta name="viewport" content="width=1000, initial-scale=1.0, maximum-scale=1.0">

    <!-- Loading Bootstrap -->
    <link href="http://cdn.bootcss.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">

    <!-- Loading Flat UI -->
    <link href="common/css/flat-ui.css" rel="stylesheet">
    @yield('css')

</head>
<body>
<div class="container">
    <div class="row">
        <div class="col-xs-12">
            <nav class="navbar navbar-inverse navbar-embossed" role="navigation">
                <div class="navbar-header">
                    <a class="navbar-brand" href="index">WeSporter</a>
                </div>
                <div class="collapse navbar-collapse" id="navbar-collapse-01">
                    <ul class="nav navbar-nav navbar-left">
                        <li><a href="index">首页</a></li>
                        <li><a href="sport">运动</a></li>
                        <li><a href="activity">活动</a></li>
                        <li><a href="people">圈子</a></li>
                    </ul>
                    <ul class="nav navbar-nav navbar-right">
                        <li><a href="setting"><span class="fui-user"></span></a></li>
                        <li><a href="message"><span class="fui-info-circle"></span></a></li>
                    </ul>
                </div>
            </nav>
        </div><!-- /.navbar-collapse -->
    </div>
    @yield('content')
</div>
<script src="http://cdn.bootcss.com/jquery/3.1.1/jquery.min.js"></script>
<script src="http://cdn.bootcss.com/flat-ui/2.3.0/js/vendor/video.js"></script>
<script src="http://cdn.bootcss.com/flat-ui/2.3.0/js/flat-ui.min.js"></script>
<script src="common/js/application.js"></script>

<script src="http://cdn.hcharts.cn/highcharts/highcharts.js"></script>
<script src="common/js/util.js"></script>
@yield('script')
</body>
</html>
