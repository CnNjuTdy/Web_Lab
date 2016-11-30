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
});
var draw2=(function () {
});

getProfile();
name ==null?draw1():draw2();
// alert(JSON.stringify(dataProfile));