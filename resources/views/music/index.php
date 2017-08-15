
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>SoundCloud</title>
    <link rel="stylesheet" href="">
    <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.6.4/angular.min.js"></script>
    <script src="js/soundcloud.js"></script>
</head>
<body ng-app="SoundCloud" ng-controller="SoundCloudController">
<form action="" >
    <input type="text" name="name" ng-model="search">{{search}}
    <button type="submit">Search</button>
</form>
<?php
/** @var array $musics */
foreach ($musics as $music){
    echo $music->name;
} ?>

</body>
</html>
