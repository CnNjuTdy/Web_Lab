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
function draw() {
    $("#stepNum").html(dataGoals.new_steps.steps);
    if(dataGoals.new_steps.reach == 0){
        $("#stepDes").html("没有完成目标哦，继续加油吧！");
    }else {
        $("#stepDes").html("超额完成了目标！");
    }
    drawMyLineChart();
    drawMyPieChart();

    var dis = dataCalories.all_steps*0.8;
    if(dis<10000) {
        dis+="米";
        $("#dis_description").html("小兄弟你还不行啊！")
    } else {
        dis=dis/1000;
        dis+="公里";
        $("#dis_description").html("厉害了我的哥！")
    }
    $("#dis").html(dis);
    var stepLike = getStepsLike(dataCalories.all_steps)
    $("#dis_like").html(stepLike.like+stepLike.num+stepLike.unit);

    var time = dataCalories.all_steps/100;
    if(time<100){
        time+="分钟";
    }else {
        time = (time/60).toFixed(2);
        time+="小时";
    }
    $("#time").html(time);
    var timeLike = getTimeLike(dataCalories.all_steps);
    $("#time_like").html(timeLike.num+timeLike.unit+timeLike.like);

    $("#cal").html(dataCalories.all_calories+"千卡");
    var calLike = getCaloriesLike(dataCalories.all_steps);
    $("#cal_like").html(calLike.num+calLike.unit+calLike.like);

    var nowH = dataHealth.newHealth.height;
    var nowW = dataHealth.newHealth.weight;
    $("#nowH").html(nowH+"cm");
    $("#nowW").html(nowW+"kg");
    var bmi = BMI(nowH,nowW);
    var progress = 4*bmi-40;
    progress = progress.toFixed(2);
    if(progress<25){
        $("#p1").css("width",progress.toFixed(0)+"%");
        $("#p2").css("width",0);
        $("#p3").css("width",0);
        $("#p4").css("width",0);
    }else if(progress<50){
        $("#p1").css("width","25%");
        $("#p2").css("width",(progress-25)+"%");
        $("#p3").css("width",0);
        $("#p4").css("width",0);
    }else if(progress<75){
        $("#p1").css("width","25%");
        $("#p2").css("width","25%");
        $("#p3").css("width",(progress-50)+"%");
        $("#p4").css("width",0);
    }else if(progress<100){
        $("#p1").css("width","25%");
        $("#p2").css("width","25%");
        $("#p3").css("width","25%");
        $("#p4").css("width",(progress-75)+"%");
    }
    if(bmi<19){
        $("#healthDes").html("太瘦啦！")
    }else if(bmi<20){
        $("#healthDes").html("偏瘦")
    }else if(bmi<22){
        $("#healthDes").html("极佳身材")
    }else if(bmi<26){
        $("#healthDes").html("偏胖")
    }else{
        $("#healthDes").html("太胖啦")
    }
    $("#idealW").html(getIdealW(nowH));
    var wNeed = nowW-getIdealW(nowH);
    if(wNeed>0){
        $("#calAdd").html("燃烧"+wToc(wNeed));
    }else{
        $("#calAdd").html("补充"+wToc(-wNeed));
    }

    drawRank();
    drawWeight();
}

getGoals();
getCalories();
getRank();
getHealth();

draw();
// alert(JSON.stringify(dataHealth));
//绘图表
function drawRank() {
    $('#allBarChart').highcharts({
        chart: {type: 'column'},
        title: {text: '全站消耗卡路里排行'},
        xAxis: {gridLineWidth: 1},
        yAxis: [{
            title: {text: '人数'}
        }],
        series: [{
            name: '直方图',
            type: 'column',
            data: histogram(dataRank.all_calories, 100),
            pointPadding: 0,
            groupPadding: 0,
            pointPlacement: 'between'
        }]
    });
}
function drawMyLineChart(){
    $('#lineChart').highcharts({
        chart: {type: 'spline'},
        title: {text: '我的步数变化趋势'},
        xAxis: {
            type: 'datetime',
            dateTimeLabelFormats: {
                day: '%m-%d',
                month: '%Y-%m',
                year: '%Y'
            }
        },
        yAxis: [{
            title: {text: '步数'}
        }],
        tooltip: {
            headerFormat: '<b>{series.name}</b><br>',
            pointFormat: '{point.x:%e. %b}: {point.y} 步'
        },
        series: [{
            name: '步数变化趋势',
            data: dataGoals.all_steps,
        },{
            name: '目标步数',
            data: dataGoals.goal,
        }]
    });
}
function drawMyPieChart() {
    $('#pieChart').highcharts({
        chart: {
            plotBackgroundColor: null,
            plotBorderWidth: null,
            plotShadow: false
        },
        title: {text: '目标完成情况'},
        tooltip: {pointFormat: '<b>{point.percentage:.1f}%</b>'},
        plotOptions: {
            pie: {
                allowPointSelect: true,
                cursor: 'pointer',
                dataLabels: {
                    enabled: true,
                    format: '<b>{point.name}</b>: {point.percentage:.1f} %',
                    style: {
                        color: (Highcharts.theme && Highcharts.theme.contrastTextColor) || 'black'
                    }
                }
            }
        },
        series: [{
            type: 'pie',
            data: [
                ["完成",dataGoals.reachRate*100],
                ["未完成",100-dataGoals.reachRate*100]
            ]
        }]
    });
}
function drawWeight() {
    $('#weightBarChart').highcharts({
        chart: {type: 'spline'},
        title: {text: '我的体重变化趋势'},
        xAxis: {
            type: 'datetime',
            dateTimeLabelFormats: {
                day: '%m-%d',
                month: '%Y-%m',
                year: '%Y'
            }
        },
        yAxis: [{
            title: {text: '体重/kg'}
        }],
        tooltip: {
            headerFormat: '<b>体重</b><br>',
            pointFormat: '{point.x:%e. %b}: {point.y} kg'
        },
        series: [{
            name: '体重变化趋势',
            data: dataHealth.allHealth,
        }]
    });
}



// draw_line_chart('#lineChart');
// draw_pie_chart('#pieChart');
// draw_bar_chart('#allBarChart');
// draw_bar_chart('#weightBarChart')