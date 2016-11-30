/**
 * Created by Tonndiyee on 2016/10/17.
 */
$(function () {
    //时间格式设置
    $(".form_datetime").datetimepicker({format: "YYYY-MM-DD hh:mm"});
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
        uploadUrl: uploadUrl, //上传的地址
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
    var pagS = "<div class=\"row text-center\">" + "<ul id = \"pagination\" class =\"pagination\">";
    var pagE = "</ul>" + "</div>";
    var p1 = "<li class=\"active\"  value=1><a class= \"num\">1</a></li>";
    var pages = parseInt(joinData.length);
    if (pages == 0) {
        //do nothing
    } else {
        var p = pagS + p1;
        for (var i = 1; i <= pages; i++) {
            p = p + getP(i + 1);
        }
        p = p + pagE;
        $("#join").append($(p));
    }
    showActivity(1);

});

getMyData();
getJoinData();
draw();

// alert(JSON.stringify(joinData))
function getP(n) {
    return "<li value=" + n + " class =\"\"><a class= \"num\" >" + n + "</a></li>";
}
$(".num").bind("click", function () {
    var index = this.innerHTML;
    showActivity(index);
})
function showActivity(index) {
    // alert(index);
    var data = joinData.slice((index - 1) * 6, index * 6);
    for (var i = 0; i < 6; i++) {
        $("#item1").find("img").attr("src","common/img/actvityImg/1.jpg");
    }

}