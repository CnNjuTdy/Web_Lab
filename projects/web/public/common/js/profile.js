/**
 * Created by Tonndiyee on 2016/11/29.
 */
var username = getCookie("WeSport_username");
var visit = getCookie("visit");
var name = "";
if(visit==null) {
    name = username;
}
else{
    name = visit;
    delCookie("visit")
}


var dataProfile =[];

var getProfile = (function () {
    $.ajax({
        url: '/profile/get_profile',
        async: false,
        type: 'get',
        data: {name: name},
        success: function (data) {
            dataProfile = data;
        },
        error: function (data) {
            console.log(JSON.stringify(data));
            console.log("error");
        }
    });
});
var draw1=(function () {
    draw()
});
var draw2=(function () {
    draw();
    $("#pass").remove();
    $("#edit").remove();
    $("#logout").remove();
});
var draw=(function () {
    $("#user").html(name);
    for(var i=1;i<=6;i++){
        $("#pow"+i).html(getPower(i));
    }
    $("#loginDays").html(dataProfile[0].user_loginDays);
    var level = getLevel(dataProfile[0].user_loginDays);
    $("#level").html("lv"+level);
    $("#power").html(getPower(level));
    $("#icon").attr("src","common/img/userIcon/"+name+".jpg");
    $("#desc").html(dataProfile[0].user_description);
    $("#name").html(name);
    $("#address").html(dataProfile[0].user_address);
});

getProfile();
if(name ==username){
    draw1()
}
else {
    draw2();
}
// alert(JSON.stringify(dataProfile));

function confirmLogout() {
    $.confirm({
        animationBounce: 1.5,
        animationSpeed: 1000,
        title: '退出',
        content: '确认退出当前账号吗？',
        confirm: function(){
            delCookie("WeSport_username");
            location.href="login";
        },
        cancel: function(){
        }
    });
}