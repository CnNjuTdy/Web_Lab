/**
 * Created by Tonndiyee on 2016/11/29.
 */
var dataAll = [];
var dataMy = [];

var getAll = (function () {
    var username = getCookie("WeSport_username");
    $.ajax({
            url: '/moments/get_all',
        async: false,
        type: 'get',
        data: {username: username},
        success: function (data) {
            dataAll = data;
        },
        error: function (data) {
            console.log(JSON.stringify(data));
            console.log("error");
        }
    });
});
var getMy = (function () {
    var username = getCookie("WeSport_username");
    $.ajax({
        url: '/moments/get_my',
        async: false,
        type: 'get',
        data: {username: username},
        success: function (data) {
            dataMy = data;
        },
        error: function (data) {
            console.log(JSON.stringify(data));
            console.log("error");
        }
    });
});

var draw = (function () {
    var allM = $("#allM");
    for(var i=0;i<dataAll.length;i++){
        var item1 =
            "<div class='panel-body'>"+
            "<div>"+
            "<div class='row' style='font-weight: bold'>"+
            "<div class='col-md-12'>"+
            "<article><a class='author profile'>滑板鞋1</a>:"+
            "<strong class='content'>今天玩滑板又被打了，嗨呀好气啊</strong></article>"+
            "</div>"+
            "</div>"+
            "<div class='row'>"+
            "<div class='col-md-12'>"+
            "<p class='text-right' style='font-size: 7px'>"+
            "<em class='time'>2016/11/05 15:39</em>"+
            "</p>"+
            "</div>"+
            "</div>"+
            "</div>"+
            "<div class='row'><div class='col-md-12' id='comments"+(i+1)+"'></div></div>"+
        "<hr/>"+
        "<div class='row'>"+
        "<div class='col-md-11'>"+
        "<div class='input-group'>"+
        "<input placeholder='我也说两句' class='form-control'>"+
        "<span class='input-group-btn'>"+
        "<button type='submit' class='btn comment'>评论</button>"+
        "</span>"+
        "</div>"+
        "</div>"+
        "<div class='col-md-1'>"+
                "<a>赞<strong class='like'>(21)</strong></a>"+
        "</div>"+
        "</div>"+
        "</div>"
        item1 = "<div class='panel panel-success' style='border-color: #FFE0E4;'"+"id='allM"+(i+1)+"'>"+item1;
        allM.append(item1);
        var moment = $("#allM"+(i+1));
        var momentData = dataAll[i].moment;
        moment.find(".author").html(momentData.moment_author);
        moment.find(".time").html(momentData.time);
        moment.find(".content").html(momentData.moment_content);
        moment.find(".form-control").attr("id","input"+momentData.moment_id);
        moment.find(".like").html(momentData.like_num);
        moment.find(".like").attr("id",-momentData.moment_id);
        moment.find(".comment").attr("id",momentData.moment_id);
        var commentsNum = (dataAll[i].comments).length;
        if(commentsNum>0){
            var item2 =
                "<div class='row' style='font-style: italic'>"+
                "<div class='col-md-12' id='comments"+(i+1)+"'>"+
                "</div>"+
                "</div>";
            $("#comments").append(item2);
            for (var j = 0; j <commentsNum; j++) {
                var item3 =
                    "<div class='row' id='comment"+(i+1)+""+(j+1)+"'>"+
                    "<div class='col-md-12'>"+
                    "<a class='author profile'>滑板鞋2</a>:<strong class='content'>该</strong>"+
                    "</div>"+
                    "</div>"
                var allC = $("#comments"+(i+1));
                allC.append(item3);
                var commentSingle = $("#comment"+(i+1)+""+(j+1));
                commentSingle.find(".author").html(((dataAll[i].comments)[j]).author);
                commentSingle.find(".content").html(((dataAll[i].comments)[j]).content);
            }
        }
    }
});

getAll();
getMy();
draw();


$(".like").bind("click",function () {
    var id = -this.id;
    $.ajax({
        url: '/moments/like',
        type: 'post',
        data: {id:id},
        success: function (data) {
            // dataAll = data;
            var likes = parseInt($("#-"+id).html());
            $("#-"+id).html(likes+1);
        },
        error: function (data) {
            console.log(JSON.stringify(data));
            console.log("error");
        }
    });
});

$(".comment").bind("click",function () {
    var id = this.id;
    var content = $("#input"+id).val();
    var username = getCookie("WeSport_username");

    $.ajax({
        url: '/moments/addC',
        type: 'post',
        data: {id:id,username:username,content:content},
        success: function (data) {
            // dataAll = data;
            alert("评论成功！");
            window.location.reload();
        },
        error: function (data) {
            console.log(JSON.stringify(data));
            console.log("error");
        }
    });
});

$(".profile").bind("click",function () {
    var visit = this.innerHTML;
    setCookie("visit",visit);
    location.href = "profile";
});