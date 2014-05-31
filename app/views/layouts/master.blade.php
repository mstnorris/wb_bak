<!doctype html>
<html class="no-js" lang="">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Whiteboard</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    {{ HTML::style('//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css') }}
    {{ HTML::style('//netdna.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css') }}
    {{ HTML::style('css/main.css') }}
    {{ HTML::style('css/sticky-footer.css') }}
    <!-- Place favicon.ico and apple-touch-icon(s) in the root directory -->
</head>
<body>

<div class="navbar navbar-default navbar-fixed-top" role="navigation">
    <div class="container-fluid">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="/">Whiteboard</a>
        </div>
        <div class="navbar-collapse collapse">
            <ul class="nav navbar-nav navbar-right">
                <li class="dropdown user-dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-cubes"></i> Select Module
                        <b class="caret"></b></a>
                    <ul class="dropdown-menu">
                        <li><a href="#"><i class="fa fa-cube"></i> CI301 - The individual project</a></li>
                        <li><a href="#"><i class="fa fa-cube"></i> CI312 - Computer Graphics Algorithms</a></li>
                        <li><a href="#"><i class="fa fa-cube"></i> CI315 - Object-Oriented Design and Architecture</a>
                        </li>
                        <li><a href="#"><i class="fa fa-cube"></i> CI316 - Verification and Validation</a></li>
                        <li><a href="#"><i class="fa fa-cube"></i> CI346 - Programming languages, concurrency and client
                                server computing</a></li>
                        <li><a href="#"><i class="fa fa-cube"></i> CI360 - Mobile Application Development</a></li>
                    </ul>
                </li>
                <li class="dropdown user-dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-user"></i> DuncanOgle <b
                            class="caret"></b></a>
                    <ul class="dropdown-menu">
                        <li><a href="#"><i class="fa fa-user"></i> Profile</a></li>
                        <li><a href="#"><i class="fa fa-adjust"></i> High Contrast</a></li>
                        <li class="divider"></li>
                        <li><a href="#"><i class="fa fa-power-off"></i> Log Out</a></li>
                    </ul>
                </li>
            </ul>
        </div>
    </div>
</div>

@yield('content')

<footer id="footer">

    <p class="text-muted">Copyright &copy; 2014 Whiteboard - <a href="about">About</a></p>

</footer>

{{ HTML::script('//ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js') }}
{{ HTML::script('//netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js') }}
</body>
</html>