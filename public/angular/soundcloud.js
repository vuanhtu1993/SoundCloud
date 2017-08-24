var myApp =angular.module('myApp',[],function ($interpolateProvider) {
    $interpolateProvider.startSymbol('<%');
    $interpolateProvider.endSymbol('%>')
});
myApp.controller('SoundCloudController',function ($http) {
    var soundcloud = this;
    $http.get("http://localhost/SoundCloud/public/musics")
        .then(function (response) {
            soundcloud.data_music = response.data;
        });

});