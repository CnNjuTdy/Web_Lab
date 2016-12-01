/**
 * Created by Tonndiyee on 2016/10/18.
 */
function delete_my(delName) {
    $.confirm({
        animationBounce: 1.5,
        animationSpeed: 1000,
        title: '删除好友',
        content: '确认删除好友'+'"'+delName+'"'+"吗？",
        confirm: function(){
            var username = getCookie("WeSport_username");
            $.ajax({
                url: '/people/del',
                type: 'post',
                data: { username: username,addName :delName},
                success: function (data) {
                    alert("删除好友成功！");
                    window.location.reload();
                },
                error: function (data) {
                    console.log(JSON.stringify(data));
                    console.log("error");
                }
            });
        },
        cancel: function(){
        }
    });
}
function viewOthers(item) {
    var username = item.innerHTML
    window.location.href = "profile/"+username;
}

var followerData = [];
var followingData = [];

var getFollowerData = (function () {
    var username = getCookie("WeSport_username")
    $.ajax({
        url: '/people/get_follower',
        async: false,
        type: 'get',
        data: {username: username},
        success: function (data) {
            followerData = data;
        },
        error: function (data) {
            console.log(JSON.stringify(data));
            console.log("error");
        }
    });
})
var getFollowingData = (function () {
    var username = getCookie("WeSport_username")
    $.ajax({
        url: '/people/get_following',
        async: false,
        type: 'get',
        data: {username: username},
        success: function (data) {
            followingData = data;
        },
        error: function (data) {
            console.log(JSON.stringify(data));
            console.log("error");
        }
    });
})

var draw = (function () {
    draw1();
    draw2();
});

draw1 = (function () {
    var following = $("#following");
    for(var i=0;i<followingData.length;i++){
        var item = "<div class='row'>"+
            "<div class='col-md-2'>"+
            "<img src='common/img/userIcon/admin.jpg' alt='example-image'class='img-responsive img-rounded'>"+
            "</div>"+
            "<div class='col-md-8'>"+
            "<div class='sas'><a class='name profile'>不会打篮球的迈克尔乔丹</a></div>"+
            "<div style='margin-top: 5px'><strong>"+
            "<small><em class='des'>打篮球吗，带我一个，我发球贼6</em></small>"+
            "</strong></div>"+
            "</div>"+
            "<div class='col-md-2 text-danger text-center'>"+
            "<div><span class='fui-cross' style=''></span></div>"+
            "<div style='margin-top: 5px'>"+
            "<small class='del'>取消关注</small>"+
            "</div>"+
            "</div>"+
            "</div>"+
            "</li>"
        item = "<li class='list-group-item' "+"id='following"+(i+1)+"'>"+item;
        following.append(item);
        $("#following"+(i+1)).find("img").attr("src","common/img/userIcon/"+followingData[i].user_name+".jpg");
        $("#following"+(i+1)).find(".name").html(followingData[i].user_name);
        $("#following"+(i+1)).find(".des").html(followingData[i].user_description);
        $("#following"+(i+1)).find(".del").attr("id",followingData[i].user_name);
    }
});
draw2 = (function () {
    var follower = $("#follower");
    for(var i=0;i<followerData.length;i++){
        var item = "<div class='row'>"+
            "<div class='col-md-2'>"+
            "<img src='common/img/userIcon/admin.jpg' alt='example-image'class='img-responsive img-rounded'>"+
            "</div>"+
            "<div class='col-md-10'>"+
            "<div class='sas'><a class='name profile'>不会打篮球的迈克尔乔丹</a></div>"+
            "<div style='margin-top: 5px'><strong>"+
            "<small><em class='des'>打篮球吗，带我一个，我发球贼6</em></small>"+
            "</strong></div>"+
            "</div>"+
            "</div>"+
            "</div>"+
            "</li>"
        item = "<li class='list-group-item' "+"id='follower"+(i+1)+"'>"+item;
        follower.append(item);
        $("#follower"+(i+1)).find("img").attr("src","common/img/userIcon/"+followerData[i].user_name+".jpg");
        $("#follower"+(i+1)).find(".name").html(followerData[i].user_name);
        $("#follower"+(i+1)).find(".des").html(followerData[i].user_description);
    }
});

getFollowerData();
getFollowingData();
draw();
// alert(JSON.stringify(followerData));
$(".del").bind("click",function () {
    delete_my(this.id);
});
$(".profile").bind("click",function () {
    var visit = this.innerHTML;
    setCookie("visit",visit);
    location.href="profile"
})


