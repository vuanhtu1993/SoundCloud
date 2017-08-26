var myApp =angular.module('myApp',[],function ($interpolateProvider) {
    $interpolateProvider.startSymbol('<%');
    $interpolateProvider.endSymbol('%>')
});
myApp.controller('SoundCloudController',function ($http,$sce) {
    var soundcloud = this;
    //get dữ liệu từ view của laravel music\index
    soundcloud.reload = function () {
        $http
            .get("http://localhost/SoundCloud/public/musics")
            .then(function (response) {
                soundcloud.musics = response.data;
            })
    };
    soundcloud.reload(); //thực hiện lấy dữ liệu
    //show modal
    soundcloud.modal=function () {
        $('#myModal').modal('show');
    };
    //hide modal
    soundcloud.close_modal=function () {
        $('#myModal').modal('hide');
    };
    //.then nghĩa là sau khi $http.post thành công thì mới then
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