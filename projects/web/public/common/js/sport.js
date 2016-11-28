/**
 * Created by Tonndiyee on 2016/10/15.
 */
//
var dataGoal = [];
var dataCalories = [];

var getGoal = (function () {
    var username = getCookie("WeSport_username")
    $.ajax({
        url: '/sport/get_goal',
        async: false,
        type: 'get',
        data: {username: username},
        success: function (data) {
            dataGoal = data;
        },
        error: function (data) {
            console.log(JSON.stringify(data));
            console.log("error");
        }
    });
});
var getCalories = (function () {
    var username = getCookie("WeSport_username")
    $.ajax({
        url: '/sport/get_calories',
        async: false,
        type: 'get',
        data: {username: username},
        success: function (data) {
            dataCalories = data;
        },
        error: function (data) {
            console.log(JSON.stringify(data));
            console.log("error");
        }
    });
});
var draw = (function () {

})

draw();
//绘图表
draw_line_chart('#lineChart');
draw_pie_chart('#pieChart');
draw_bar_chart('#allBarChart');
draw_bar_chart('#yourBarChart');
draw_bar_chart('#weightBarChart')