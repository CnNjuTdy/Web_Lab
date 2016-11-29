/**
 * Created by Tonndiyee on 2016/10/15.
 */
var dataUserInfo = [];
var dataChart = [];
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
var draw = (function () {
    //根据数据渲染页面
});

getUserInfo();
getChart();
draw();
// alert(JSON.stringify(dataUserInfo));




draw_bar_chart('#chart');
