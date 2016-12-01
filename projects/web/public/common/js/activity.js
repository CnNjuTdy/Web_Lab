/**
 * Created by Tonndiyee on 2016/10/17.
 */
$(function () {
    //时间格式设置
    $(".form_datetime").datetimepicker({format: "YYYY-MM-DD"});
    //初始化文件控制器
    initFileInput("activity_pic", "/projects/demo1/common/img/activity_pic");
});
function confirmEdit(item) {
    var activityNameNade = item.previousElementSibling
    $.confirm({
        animationBounce: 1.5,
        animationSpeed: 1000,
        title: '确认编辑',
        content: '确认编辑活动' + '"' + userName + '"' + "吗？",
        confirm: function () {
            $.alert('更改已保存');
        },
        cancel: function () {
        }
    });
}
function isAgree() {
    var is = document.getElementById("isAgree");
    var bt = document.getElementById("addActivity");
    if (!is.checked) {
        bt.disabled = true;
    } else {
        bt.disabled = false;
    }
}
function showMineTab() {
    $('#myTab').find('a[href="#mine"]').tab('show')
}
function showAddTab() {
    $('#myTab').find('a[href="#add"]').tab('show')
}
function showJoinTab() {
    $('#myTab').find('a[href="#join"]').tab('show')
}
function initFileInput(ctrlName, uploadUrl) {
    var control = $('#' + ctrlName);
    control.fileinput({
        language: 'zh', //设置语言
        uploadUrl: 'common/img/activityIcon/', //上传的地址
        allowedFileExtensions: ['jpg', 'png', 'gif'],//接收的文件后缀
        showUpload: false, //是否显示上传按钮
        showCaption: false,//是否显示标题
        browseClass: "btn btn-primary", //按钮样式
        previewFileIcon: "<i class='glyphicon glyphicon-king'></i>",
    });
}


var joinData = [];
var myData = [];

var getJoinData = (function () {
    var username = getCookie("WeSport_username")
    $.ajax({
        url: '/activity/get_join',
        async: false,
        type: 'get',
        data: {username: username},
        success: function (data) {
            joinData = data;
        },
        error: function (data) {
            console.log(JSON.stringify(data));
            console.log("error");
        }
    });
});
var getMyData = (function () {
    var username = getCookie("WeSport_username")
    $.ajax({
        url: '/activity/get_my',
        async: false,
        type: 'get',
        data: {username: username},
        success: function (data) {
            myData = data;
        },
        error: function (data) {
            console.log(JSON.stringify(data));
            console.log("error");
        }
    });
});

var draw = (function () {
    draw1();
    draw2();
    draw3();
});
var draw1 = (function () {
    var item =
            "<div class=\"panel panel-success\">"+
                "<div class=\"panel-body\">"+
                    "<div class=\"row\">"+
                        "<div class=\"col-md-12\">"+
                            "<img src=\"common/img/activity_pic/skateborder.jpg\" alt=\"example-image\"class=\"img-responsive\">"+
                        "</div>"+
                    "</div>"+
                    "<div class=\"row\" style=\"margin-top: 5px\">"+
                        "<div class=\"col-md-12\">"+
                            "<div class=\"tagsinput-primary\">"+
                                "<input class=\"tagsinput\" data-role=\"tagsinput\"value=\"滑板,极限\" disabled/>"+
                            "</div>"+
                        "</div>"+
                    "</div>"+
                    "<div class=\"text-center\">发起人:<a class=\"organizer profile\">炫酷滑板鞋</a></div>"+
                    "<div class=\"text-center\">地点:<strong class=\"location\">南京市鼓楼区汉口路附近</strong></div>"+
                    "<div class=\"text-center time\">时间:<strong class=\"time\">10月17日16点</strong></div>"+
                    "<div class=\"row\" style=\"margin-top: 7px\">"+
                    "<div class=\"col-md-12\">"+
                            "<small class=\"text-danger description\" >还在担心你的周末？穿上滑板鞋一起嗨皮！</small>"+
                    "</div>"+
                "</div>"+
            "</div>"+
            "<div class=\"panel-footer\">"+
                "<button type=\"button\" class=\"btn btn-block btn-primary join_ac\">参与活动</button>"+
            "</div>"+
        "</div>"+
    "</div>"
    for(var i=0;i<joinData.length;i++){
        var activity = joinData[i];
        $("#join").append("<div class=\"col-md-4\" id=\"join"+(i+1)+"\">"+item);
        var item_a = $("#join"+(i+1));
        item_a.find("img").attr("src","common/img/activityImg/"+activity.activity_id+".jpg");
        item_a.find("input").attr("value",activity.activity_label);
        item_a.find(".organizer").html(activity.activity_orgnizer);
        item_a.find(".location").html(activity.activity_location);
        item_a.find(".time").html(activity.activity_time);
        item_a.find(".description").html(activity.activity_description);
        item_a.find("button").attr("id",activity.activity_id);
        if(activity.activity_state!=0){
            item_a.find("button").html("活动已结束！");
            item_a.find("button").addClass("disabled");
            item_a.find("button").removeClass("join_ac");
        }
    }

});


var draw2 = (function () {
    var my_join = $("#my_join");
    var dataJoin = myData.myJoin;
    for(var i=0;i<dataJoin.length;i++){
        var item = "<td class='name'>南京马拉松</td><td class='des'>南京市马拉松比赛</td><td class='state'>已结束</td></tr>";
        item = "<tr id='myJoin"+(i+1)+"'>"+item;
        my_join.append(item)
        $("#myJoin"+(i+1)).find(".name").html(dataJoin[i].activity_name);
        $("#myJoin"+(i+1)).find(".des").html(dataJoin[i].activity_description);
        if(dataJoin[i].activity_state==0){
            $("#myJoin"+(i+1)).find(".state").html("未开始");
        }else{
            $("#myJoin"+(i+1)).find(".state").html("已结束");
        }
    }
});
var draw3 = (function () {
    var my_org = $("#my_org");
    var dataOrg = myData.myOrgnize;
    for(var i=0;i<dataOrg.length;i++){
        var item = "<td class='name'>第一届滑板大赛</td><td class='state'>已结束</td><td>"+
            "<a><em class='op' style=‘text-decoration: underline’>删除</em></a></td> </tr>"
        item = "<tr id='myOrg"+(i+1)+"'>"+item;
        my_org.append(item);
        $("#myOrg"+(i+1)).find(".name").html(dataOrg[i].activity_name);
        $("#myOrg"+(i+1)).find(".op").attr("id",-dataOrg[i].activity_id);
        if(dataOrg[i].activity_state==0){
            $("#myOrg"+(i+1)).find(".state").html("未开始");
        }else{
            $("#myOrg"+(i+1)).find(".state").html("已结束");
        }
    }
});


getMyData();
getJoinData();
draw();

// alert(JSON.stringify(joinData))
$(".join_ac").bind("click",function () {
    var username = getCookie("WeSport_username");
    var id = this.id;
    $.ajax({
        url: '/activity/join_activity',
        type: 'post',
        data: { username:username,id:id,},
        success: function (data) {
            if(data == 0) {
                alert("成功参与活动!");
                window.location.reload();
            }else{
                alert("参与活动失败，您可能已经参与了该活动!");
            }
        },
        error: function (data) {
            console.log(JSON.stringify(data));
            console.log("error");
        }
    });
})
$(".op").bind("click",function () {
    var id = -this.id;
    $.ajax({
        url: '/activity/del_activity',
        type: 'post',
        data: {id:id,},
        success: function (data) {
            alert("成功删除活动!");
            window.location.reload();
        },
        error: function (data) {
            console.log(JSON.stringify(data));
            console.log("error");
        }
    });
})

$(".profile").bind("click",function () {
    var visit;
    if (navigator.appName.indexOf("Explorer") > -1) {
        visit = this.innerText;
    } else {
        visit = this.textContent;
    }
    visit = this.innerHTML;
    setCookie("visit",visit);
    location.href="profile"
})