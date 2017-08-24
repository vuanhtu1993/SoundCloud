<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    <title>SoundCloud</title>
    <link rel="stylesheet" href="">
    <!--    <base href="{{asset('')}}">-->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
    <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.6.4/angular.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/angucomplete-alt/3.0.0/angucomplete-alt.min.js"></script>
    <script src="js/soundcloud.js"></script>
</head>
<body>
<!--nav bar-->
<nav class="navbar navbar-default">
    <div class="container-fluid">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse"
                    data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="#">
                <img src="images/laravel_2x_1.png" alt="">
                <span >Angular</span>
            </a>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav">

            </ul>
            <form class="navbar-form navbar-left">
                <div class="form-group">
                    <input type="text" class="form-control" placeholder="Search">
                </div>
                <button type="submit" class="btn btn-search">Search</button>
            </form>
            <ul class="nav navbar-nav ">
                <li class="create-" ><a href="#">Sign in</a></li>
                <li><a href="#">Create account</a></li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true"
                       aria-expanded="false">Dropdown <span class="caret"></span></a>
                    <ul class="dropdown-menu">
                        <li><a href="#">Action</a></li>
                        <li><a href="#">Another action</a></li>
                        <li><a href="#">Something else here</a></li>
                        <li role="separator" class="divider"></li>
                        <li><a href="#">Separated link</a></li>
                    </ul>
                </li>
            </ul>
        </div><!-- /.navbar-collapse -->
    </div><!-- /.container-fluid -->
</nav>
<!--end nav bar-->
<div ng-app="SoundCloud" ng-controller="SoundCloudController">
    <!--autoComplete API-->
    <div angucomplete-alt
         id="ex5"
         placeholder="Search projects"
         pause="500"
         selected-object="selectedProject"
         remote-url="http://localhost/SoundCloud/public/musics?q="
         remote-url-request-formatter="remoteUrlRequestFn"
         remote-url-data-field=""
         title-field="name"
         description-field="description"
         minlength="1"
         input-class="form-control form-control-small"
         match-class="highlight">
    </div>
    <div class="result">
        <div class="" ng-show="selectedProject">
            Repository: <span class="bold-span">{{selectedProject.originalObject.name}}</span>
        </div>
    </div>
    <!--end autoComplete API-->
</div>
</body>
</html>
