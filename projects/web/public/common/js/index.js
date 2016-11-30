/**
 * Created by Tonndiyee on 2016/10/15.
 */
var dataUserInfo = {};
var dataChart = {};
var getUserInfo = (function () {
    var username = getCookie("WeSport_username")
    $.ajax({
        url: '/index/get_user_info',
        async: false,
        type: 'get',
        data: {username: username},
        success: function (data) {
            dataUserInfo = data;
        },
        error: function (data) {
            console.log(JSON.stringify(data));
            console.log("error");
        }
    });
});
var getChart = (function () {
    var username = getCookie("WeSport_username")
    $.ajax({
        url: '/index/get_chart',
        async: false,
        type: 'get',
        data: {username: username},
        success: function (data) {
            dataChart = data;
        },
        error: function (data) {
            console.log(JSON.stringify(data));
            console.log("error");
        }
    });
});

function draw() {
    //根据数据渲染页面
    var username = getCookie("WeSport_username");

    //头像
    $("#head").attr('src','common/img/userIcon/'+username+'.jpg');
    //用户名
    $("#username").html(username);

    var userInfo = dataUserInfo.userInfo;
    var sportInfo = dataUserInfo.sportInfo;
    var caloriesLike = getCaloriesLike(sportInfo.calories);
    //简介
    $("#description").html(userInfo.user_description);
    //标签
    $("#labels").html(userInfo.user_labels);
    //运动量
    $("#steps").html(sportInfo.steps);
    $("#calories").html(sportInfo.calories);
    $("#like").html(caloriesLike.num+caloriesLike.unit+caloriesLike.like);
    //图表
    drawChart();
}

getUserInfo();
getChart();
draw();
// alert(JSON.stringify(dataUserInfo.userInfo));
// draw_bar_chart('#chart');
function drawChart() {
    $('#chart').highcharts({
        chart: {
            type: 'column'
        },
        title: {
            text: '全站步数统计'
        },
        xAxis: {
            gridLineWidth: 1
        },
        yAxis: [{
            title: {
                text: '步数/(步)'
            }
        }],
        series: [{
            name: '直方图',
            type: 'column',
            data: histogram(dataChart.all_data, 100),
            pointPadding: 0,
            groupPadding: 0,
            pointPlacement: 'between'
        }]
    });
}
function histogram(data, step) {
    var histo = {},
        x,
        i,
        arr = [];
    // Group down
    for (i = 0; i < data.length; i++) {
        x = Math.floor(data[i] / step) * step;
        if (!histo[x]) {
            histo[x] = 0;
        }
        histo[x]++;
    }
    // Make the histo group into an array
    for (x in histo) {
        if (histo.hasOwnProperty((x))) {
            arr.push([parseFloat(x), histo[x]]);
        }
    }
    // Finally, sort the array
    arr.sort(function (a, b) {
        return a[0] - b[0];
    });
    return arr;
}
//注册
//参加活动
//生成活动
//添加好友
//删除好友
//个人设置
//发帖
//点赞