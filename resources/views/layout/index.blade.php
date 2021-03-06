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
                <div class="row play-music" ng-repeat="music in soundcloud.musics">
                    <div class="col-sm-3">
                        <div class="music-img" ng-click="soundcloud.linkURL(music)">
                            <img src="<% music.link_img %>"  alt="">
                            <div class="cover-img"></div>
                        </div>
                    </div>
                    {{--have to refactor variable like table at laravel--}}
                    <div class="col-sm-8">
                        <div class="article"><% music.name %></div>
                        <div class="article"><% music.alias %></div>
                        <div class="article"><% music.link_music %></div>
                        <div class="article"><% music.type %></div>
                        {{--lợi dụng --}}
                        <% soundcloud.myTransfer(music) %>

                    </div>
                </div>
            </div>
            <% soundcloud.embed_link %>
        </div>

        {{--modal--}}
        @include('layout.modal')
        {{--end modal--}}
    </div>
    {{--pin media play music at bottom--}}
    {{--play selected song--}}
    <div class="media_play">
        <div class="article ">
            <iframe scrolling="no" width="1500" height="50" ng-src="<% soundcloud.myTransfer(soundcloud.embed_link) %>"
                    frameborder="0" allowfullscreen="false" ></iframe>
        </div>
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