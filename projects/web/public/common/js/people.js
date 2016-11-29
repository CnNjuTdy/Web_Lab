/**
 * Created by Tonndiyee on 2016/10/18.
 */
function delete_my(item) {
    var userNameNode = item.previousSibling.previousSibling;
    var userName = ((userNameNode.childNodes).item(1)).childNodes.item(0).lastChild.nodeValue;
    $.confirm({
        animationBounce: 1.5,
        animationSpeed: 1000,
        title: '删除好友',
        content: '确认删除好友'+'"'+userName+'"'+"吗？",
        confirm: function(){
             $.alert('好友已删除！');
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
    
});

getFollowerData();
getFollowingData();

// alert(JSON.stringify(followerData));
// draw();


