var caloriesLike = {
    "calories":[1000,10000],
    "like":["鸡蛋","巧克力","脂肪"],
    "unit":["个","克","斤"],
    "num":[76,5.86,3850]
};
var stepsLike = {
    "dis":[10000,200000],
    "like":["标准操场","北京三环路","北京到天津"],
    "unit":["圈","圈","次"],
    "num":[400,32000,121700]
};
var timeLike = {
    "time":[1000,10000],
    "like":["晚饭","手抄孙子兵法","手抄史记"],
    "unit":["顿","次","次"],
    "num":[30,150,10000]
};

function draw_line_chart(container) {
    $(function () {
        $(container).highcharts({
            title: {
                text: 'Monthly Average Temperature',
                x: -20 //center
            },
            subtitle: {
                text: 'Source: WorldClimate.com',
                x: -20
            },
            xAxis: {
                categories: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun',
                    'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec']
            },
            yAxis: {
                title: {
                    text: 'Temperature (°C)'
                },
                plotLines: [{
                    value: 0,
                    width: 1,
                    color: '#808080'
                }]
            },
            tooltip: {
                valueSuffix: '°C'
            },
            legend: {
                layout: 'vertical',
                align: 'right',
                verticalAlign: 'middle',
                borderWidth: 0
            },
            series: [{
                name: 'Tokyo',
                data: [7.0, 6.9, 9.5, 14.5, 18.2, 21.5, 25.2, 26.5, 23.3, 18.3, 13.9, 9.6]
            }, {
                name: 'New York',
                data: [-0.2, 0.8, 5.7, 11.3, 17.0, 22.0, 24.8, 24.1, 20.1, 14.1, 8.6, 2.5]
            }, {
                name: 'Berlin',
                data: [-0.9, 0.6, 3.5, 8.4, 13.5, 17.0, 18.6, 17.9, 14.3, 9.0, 3.9, 1.0]
            }, {
                name: 'London',
                data: [3.9, 4.2, 5.7, 8.5, 11.9, 15.2, 17.0, 16.6, 14.2, 10.3, 6.6, 4.8]
            }]
        });
    });
}
function draw_bar_chart(container) {
    $(function () {
        $(container).highcharts({
            chart: {
                type: 'bar'
            },
            title: {
                text: 'Historic World Population by Region'
            },
            subtitle: {
                text: 'Source: Wikipedia.org'
            },
            xAxis: {
                categories: ['Africa', 'America', 'Asia', 'Europe', 'Oceania'],
                title: {
                    text: null
                }
            },
            yAxis: {
                min: 0,
                title: {
                    text: 'Population (millions)',
                    align: 'high'
                },
                labels: {
                    overflow: 'justify'
                }
            },
            tooltip: {
                valueSuffix: ' millions'
            },
            plotOptions: {
                bar: {
                    dataLabels: {
                        enabled: true
                    }
                }
            },
            legend: {
                layout: 'vertical',
                align: 'right',
                verticalAlign: 'top',
                x: -40,
                y: 100,
                floating: true,
                borderWidth: 1,
                backgroundColor: ((Highcharts.theme && Highcharts.theme.legendBackgroundColor) || '#FFFFFF'),
                shadow: true
            },
            credits: {
                enabled: false
            },
            series: [{
                name: 'Year 1800',
                data: [107, 31, 635, 203, 2]
            }, {
                name: 'Year 1900',
                data: [133, 156, 947, 408, 6]
            }, {
                name: 'Year 2008',
                data: [973, 914, 4054, 732, 34]
            }]
        });
    });
}
function draw_pie_chart(container) {
    $(function () {
        $(container).highcharts({
            chart: {
                plotBackgroundColor: null,
                plotBorderWidth: null,
                plotShadow: false
            },
            title: {
                text: 'Browser market shares at a specific website, 2014'
            },
            tooltip: {
                pointFormat: '{series.name}: <b>{point.percentage:.1f}%</b>'
            },
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
                name: 'Browser share',
                data: [
                    ['Firefox', 45.0],
                    ['IE', 26.8],
                    {
                        name: 'Chrome',
                        y: 12.8,
                        sliced: true,
                        selected: true
                    },
                    ['Safari', 8.5],
                    ['Opera', 6.2],
                    ['Others', 0.7]
                ]
            }]
        });
    });
}
function get_date() {
    var now = new Date();
    var result = "20";
    result = now.getFullYear() + "-" + (now.getMonth() + 1) + "-" + now.getDate();
    return result;
}
function setCookie(name,value) {
    var Days = 30;
    var exp = new Date();
    exp.setTime(exp.getTime() + Days*24*60*60*1000);
    document.cookie = name + "="+ escape (value) + ";expires=" + exp.toUTCString();
}
function getCookie(name) {
    var arr,reg=new RegExp("(^| )"+name+"=([^;]*)(;|$)");

    if(arr=document.cookie.match(reg))

        return unescape(arr[2]);
    else
        return null;
}
function delCookie(name) {
    var exp = new Date();
    exp.setTime(exp.getTime() - 1);
    var cval=getCookie(name);
    if(cval!=null)
        document.cookie= name + "="+cval+";expires="+exp.toUTCString();
}
function test_user() {
    var username = getCookie("WeSport_username");
    if(username == null){
        window.location.href = "login";
    }
    else {
        //TO-DO`
    }

}
function isDouble(str) {
    var match = str.match(/^(([0-9]+\\.[0-9]*[1-9][0-9]*)|([0-9]*[1-9][0-9]*\\.[0-9]+)|([0-9]*[1-9][0-9]*))$/);   //正浮点数
    if(match) {
        return 1;
    } else {
        return 0;
    }
}
function isNum(str) {
    var match = str.match(/^[0-9]*[1-9][0-9]*$/);   //正整数
    if(match) {
        return 1;
    } else {
        return 0;
    }
}
function getCaloriesLike(cal) {
    var index = 0;
    if(cal<caloriesLike.calories[0]) index = 0;
    else if(cal<caloriesLike.calories[1]) index = 1;
    else index = 2;

    return {
        "like":caloriesLike.like[index],
        "unit":caloriesLike.unit[index],
        "num":(cal/(caloriesLike.num[index])).toFixed(1)
    }

}
function getStepsLike(steps) {
    var dis = steps*0.8;
    var index = 0;
    if(dis<stepsLike.dis[0]) index = 0;
    else if(dis<stepsLike.dis[1]) index = 1;
    else index = 2;

    return {
        "like":stepsLike.like[index],
        "unit":stepsLike.unit[index],
        "num":(dis/(stepsLike.num[index])).toFixed(1)
    }
}
function getTimeLike(steps) {
    var time = steps/100;
    var index = 0;
    if(time<timeLike.time[0]) index = 0;
    else if(time<timeLike.time[1]) index = 1;
    else index = 2;

    return {
        "like":timeLike.like[index],
        "unit":timeLike.unit[index],
        "num":(time/(timeLike.num[index])).toFixed(1)
    }
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

/**
 * @return {string}
 */
function BMI(h,w) {
    h = h/100;
    return (w/(h*h)).toFixed(2);
}
function getIdealW(h) {
    return (21*h*h/10000).toFixed(2);
}
function wToc(w) {
    return (3850*w).toFixed(2);
}


