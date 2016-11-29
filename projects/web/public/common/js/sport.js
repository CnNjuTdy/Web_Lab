/**
 * Created by Tonndiyee on 2016/10/15.
 */
//
var dataGoals = [];
var dataCalories = [];
var dataRank = [];
var dataHealth = [];

var getGoals = (function () {
    var username = getCookie("WeSport_username")
    $.ajax({
        url: '/sport/get_goals',
        async: false,
        type: 'get',
        data: {username: username},
        success: function (data) {
            dataGoals = data;
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
var getRank = (function () {
    var username = getCookie("WeSport_username")
    $.ajax({
        url: '/sport/get_rank',
        async: false,
        type: 'get',
        data: {username: username},
        success: function (data) {
            dataRank = data;
        },
        error: function (data) {
            console.log(JSON.stringify(data));
            console.log("error");
        }
    });
});
var getHealth = (function () {
        var username = getCookie("WeSport_username")
        $.ajax({
            url: '/sport/get_health',
            async: false,
            type: 'get',
            data: {username: username},
            success: function (data) {
                dataHealth = data;
            },
            error: function (data) {
                console.log(JSON.stringify(data));
                console.log("error");
            }
        });
    });
var draw = (function () {

})

getGoals();
getCalories();
getRank();
getHealth();

draw();
// alert(JSON.stringify(dataHealth));
//绘图表
draw_line_chart('#lineChart');
draw_pie_chart('#pieChart');
draw_bar_chart('#allBarChart');
draw_bar_chart('#yourBarChart');
draw_bar_chart('#weightBarChart')