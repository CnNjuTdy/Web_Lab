@extends("layouts.base")
@section('title')
    <title>WeSport_Moments</title>
@endsection
@section("css")
@endsection
@section("content")
    <div class="row">
        <div class="row">
            <div class="form-group col-md-12">
                <textarea id="myContent" placeholder="快来说说你附近发生了什么好玩的事吧~" class="form-control"
                          style="resize: none;height:100px; "></textarea>
                <button type="submit" onclick="addMoment()" class="btn btn-block btn-success" style="margin-top: 20px">
                    发表状态
                </button>
            </div>
        </div>
        <div class="row" style="margin-top: 20px;">
            <div id="myTabContent" class="tab-content">
                <div class="row">
                        <div class="col-md-12" id="allM">
                        </div>
                    </div>
            </div>
        </div>
    </div>
@endsection
@section("script")
    <script src="common/js/moments.js"></script>
    <script>
        function addMoment() {
            var content = $("#myContent").val();
            var username = getCookie("WeSport_username");
            if(content == ""){
                alert("内容不能为空！");
                return ;
            }
            $.ajax({
                url: '/moments/addM',
                type: 'post',
                data: {username: username,content:content},
                success: function (data) {
                    alert("发表动态成功！");
                    window.location.reload();
                },
                error: function (data) {
                    console.log(JSON.stringify(data));
                    console.log("error");
                }
            });
        }
    </script>
@endsection
