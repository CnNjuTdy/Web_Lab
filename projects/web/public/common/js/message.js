/**
 * Created by Tonndiyee on 2016/11/29.
 */
var dataMessage =[];

var getMessage = (function () {
    var username = getCookie("WeSport_username");
    $.ajax({
        url: '/message/get_message',
        async: false,
        type: 'get',
        data: {username: username},
        success: function (data) {
            dataMessage = data;
        },
        error: function (data) {
            console.log(JSON.stringify(data));
            console.log("error");
        }
    });
});
var draw=(function () {

});

getMessage();
// draw();