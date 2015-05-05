<?php

?>

<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <!-- Meta Tags -->
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
    <meta name="keywords" content="Cumulus, Soundcloud, Music Tracking, Social Music, Music Trends"/>
    <meta name="description"
          content="Cumulus tracks your Soundcloud listening habits and allows you to view your trends with a beautiful UI."/>
    <meta name="robots" content="index,follow"/>
    <meta name="classification" content="Music Tracker, Music Trend Display"/>
    <meta name="audience" content="Music Listeners"/>
    <meta name="author" content="Matthew Gross &amp; Derek Baumgartner"/>
    <meta name="publisher" content="Matthew Gross &amp; Derek Baumgartner"/>
    <meta name="Content-Language" content="en-us,english"/>
    <meta name="distribution" content="global"/>
    <meta name="copyright" content="Matthew Gross &amp; Derek Baumgartner"/>

    <title>Cumulus</title>

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="js/html5shiv.min.js"></script>
    <script src="js/respond.min.js"></script>
    <![endif]-->

    <!-- CSS styling for page -->
    <link href="css/main.css" rel="stylesheet">

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="js/jquery-1.11.2.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>

    <!-- Wow.js Linkage -->
    <link rel="stylesheet" href="css/animate.css">
    <script src="js/wow.min.js"></script>
    <script>
        $(document).ready(function () {
            new WOW().init();

            // Begin FadeIn
            $('#overlay').css('opacity', '0.15');
        });
    </script>

    <!-- Angular.js -->
    <script src="js/angular.min.js"></script>

    <!-- Font Imports -->
    <link href='http://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Merriweather:400,300,700' rel='stylesheet' type='text/css'>
</head>
<body>
<!--<div class="main_header row">
    <div class="col-lg-3"><img src="img/logo_64.png" class="logo_header"></div>
    <div class="col-lg-6">Menu (align right)</div>
    <div class="col-lg-3">Search/Misc</div>
</div>-->
<nav class="navbar navbar-fixed-top main_header">
    <div class="container">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse"
                    data-target="#bs-example-navbar-collapse-1">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="#">Brand</a>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav">
                <li class="active"><a href="#">Link <span class="sr-only">(current)</span></a></li>
                <li><a href="#">Link</a></li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Dropdown
                        <span class="caret"></span></a>
                    <ul class="dropdown-menu" role="menu">
                        <li><a href="#">Action</a></li>
                        <li><a href="#">Another action</a></li>
                        <li><a href="#">Something else here</a></li>
                        <li class="divider"></li>
                        <li><a href="#">Separated link</a></li>
                        <li class="divider"></li>
                        <li><a href="#">One more separated link</a></li>
                    </ul>
                </li>
            </ul>
            <form class="navbar-form navbar-left" role="search">
                <div class="form-group">
                    <input type="text" class="form-control" placeholder="Search">
                </div>
                <button type="submit" class="btn btn-default">Submit</button>
            </form>
            <ul class="nav navbar-nav navbar-right">
                <li><a href="#">Link</a></li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Dropdown
                        <span class="caret"></span></a>
                    <ul class="dropdown-menu" role="menu">
                        <li><a href="#">Action</a></li>
                        <li><a href="#">Another action</a></li>
                        <li><a href="#">Something else here</a></li>
                        <li class="divider"></li>
                        <li><a href="#">Separated link</a></li>
                    </ul>
                </li>
            </ul>
        </div>
        <!-- /.navbar-collapse -->
    </div>
    <!-- /.container-fluid -->
</nav>

<div id="title_pane">
    <div id="overlay"></div>
    <div id="title_body" class="col-lg-12"></div>
    <div id="title_text" class="wow fadeIn animated" data-wow-delay="3.5s">
        <h1>Welcome to Cumulus</h1>
    </div>
</div>

<!--
<div class="col-lg-offset-1 col-lg-10 login_pane">
    <h2>Swag</h2>
</div>
-->
</body>
</html>

