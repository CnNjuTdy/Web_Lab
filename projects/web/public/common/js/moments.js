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

});

getAll();
getMy();

// draw();