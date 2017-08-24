<!DOCTYPE html >
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    <title>Angular-Laravel</title>
    <base href="{{asset('')}}">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/bootstrap-theme.min.css">
    <link rel="stylesheet" href="css/style.css">
    <script src="angular/angular.min.js"></script>
    <script src="angular/soundcloud.js"></script>
    <link href="https://fonts.googleapis.com/css?family=Ubuntu" rel="stylesheet">
</head>
<body ng-app="myApp" ng-controller="SoundCloudController as soundcloud">
{{--header--}}
@include('layout.header')
{{--end header--}}
<div class="background">
    <div class="cover">
        <div class="results-search">
            Search results for “rhymastic”
        </div>
        <div class="row contain">
            {{--menu right--}}
            @include('layout.menu_right')
            {{-- end menu right--}}
            <div class="col-sm-10 col-md-10 content">
                <div class="row play-music" ng-repeat="data in soundcloud.data_music">
                    <div class="col-sm-3">
                        <div class="music-img"><img src="<% data.link_img %>" alt=""></div>
                    </div>
                    <div class="col-sm-8">
                        <div class="article"><% data.name %></div>
                        <div class="article"><% data.link_music %></div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Modal -->
        <div class="modal fade" tabindex="-1" role="dialog" id="myModal">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                                    aria-hidden="true">&times;</span></button>
                        <h4 class="modal-title">Modal title</h4>
                    </div>
                    <div class="modal-body">
                        <form name="frmSinhVien" class="form-horizontal">
                            <div class="form-group">
                                <label for="inputEmail3" class="col-sm-3 control-label">Họ tên</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" id="name" name="name"
                                           placeholder="Vui lòng nhập họ tên"/>
                                    <span id="helpBlock2" class="help-block">Vui lòng nhập họ tên</span>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="inputEmail3" class="col-sm-3 control-label">Tuổi</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" id="age" name="age"
                                           placeholder="Vui lòng nhập tuổi">
                                    <span id="helpBlock2" class="help-block">Vui lòng nhập tuổi</span>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="inputEmail3" class="col-sm-3 control-label">Email</label>
                                <div class="col-sm-9">
                                    <input type="email" class="form-control" id="email" name="email"
                                           placeholder="Vui lòng nhập Email"/>
                                    <span id="helpBlock2" class="help-block">Vui lòng nhập email</span>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="inputEmail3" class="col-sm-3 control-label">Điện thoại</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" id="phone" name="phone"
                                           placeholder="Vui lòng nhập số điện thoại"/>
                                    <span id="helpBlock2" class="help-block">Vui lòng nhập điện thoại</span>
                                </div>
                            </div>

                        </form>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-primary">Lưu</button>
                    </div>
                </div><!-- /.modal-content -->
            </div><!-- /.modal-dialog -->
        </div><!-- /.modal -->
    </div>
</div>

<script src="js/jquery-3.2.1.min.js"></script>
<script src="js/jquery-migrate-1.2.1.js"></script>
<script src="js/bootstrap.min.js"></script>
<script>
    $(document).ready(function () {
        $("#user").mouseenter(function () {
            $(".user-list").css("display", "block");

        });
        $("#user").mouseleave(function () {
            $(".user-list").css("display", "none");
        })
    })
</script>
</body>
</html>