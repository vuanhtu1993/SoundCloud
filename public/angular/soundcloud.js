var myApp =angular.module('myApp',[],function ($interpolateProvider) {
    $interpolateProvider.startSymbol('<%');
    $interpolateProvider.endSymbol('%>')
});
myApp.controller('SoundCloudController',function ($http,$sce) {
    var soundcloud = this;

    soundcloud.reload = function () {
        $http
            .get("http://localhost/SoundCloud/public/musics")
            .then(function (response) {
                soundcloud.musics = response.data;
            })
    };
    soundcloud.reload();
    soundcloud.modal=function () {
        $('#myModal').modal('show');
    };
    soundcloud.close_modal=function () {
        $('#myModal').modal('hide');
    };

    soundcloud.save = function () {
        $http.post('http://localhost/SoundCloud/public/musics', soundcloud.song)
            .then(soundcloud.close_modal)
            .then(soundcloud.reload);
    };

    // hàm RegExp
    soundcloud.myTransfer = function (music) {
        var part1 = /\/[A-Z0-9]*\./g;
        results = music.link_music.match(part1);
        results[0] = results[0].replace('.',''); //chuyển array thành string, lấy string 0
        var embed_song_url = 'http://mp3.zing.vn/embed/song' + results[0];
        return $sce.trustAsResourceUrl(embed_song_url);
    }
});