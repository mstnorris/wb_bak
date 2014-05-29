@extends('layouts.master')

@section('content')

<div class="navbar navbar-default navbar-fixed-top" role="navigation">
    <div class="container-fluid">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="#"><i class="fa fa-graduation-cap"></i> WhiteBoard</a>
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

<ol class="breadcrumb">
    <li class="active"><i class="fa fa-dashboard"></i> Dashboard</li>
</ol>

<div class="container-fluid">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">

            <h1>Dashboard
                <small>Year Overview</small>
            </h1>
            <div class="progress">
                <div class="progress-bar progress-bar-success" style="width: 35%">
                    Week 7 of 20
                </div>
            </div>


            <div class="row">
                <div class="col-md-4">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h3 class="panel-title">Updates</h3>
                        </div>
                        <ul class="list-group">
                            <li class="list-group-item">
                                <div class="media">
                                    <img class="media-object pull-left" src="http://placehold.it/64x64" alt="...">

                                    <div class="media-body">
                                        <h4 class="media-heading">News heading</h4>
                                        Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante
                                        sollicitudin commodo. Cras purus odio, vestibulum in vulputate at, tempus
                                        viverra
                                        turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue
                                        felis
                                        in faucibus.
                                    </div>
                                </div>
                            </li>
                            <li class="list-group-item">
                                <div class="media">
                                    <img class="media-object pull-left" src="http://placehold.it/64x64" alt="...">

                                    <div class="media-body">
                                        <h4 class="media-heading">News heading</h4>
                                        Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante
                                        sollicitudin commodo. Cras purus odio, vestibulum in vulputate at, tempus
                                        viverra
                                        turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue
                                        felis
                                        in faucibus.
                                    </div>
                                </div>
                            </li>
                            <li class="list-group-item">
                                <div class="media">
                                    <img class="media-object pull-left" src="http://placehold.it/64x64" alt="...">

                                    <div class="media-body">
                                        <h4 class="media-heading">News heading</h4>
                                        Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante
                                        sollicitudin commodo. Cras purus odio, vestibulum in vulputate at, tempus
                                        viverra
                                        turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue
                                        felis
                                        in faucibus.
                                    </div>
                                </div>
                            </li>
                            <li class="list-group-item">
                                <div class="media">
                                    <img class="media-object pull-left" src="http://placehold.it/64x64" alt="...">

                                    <div class="media-body">
                                        <h4 class="media-heading">News heading</h4>
                                        Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante
                                        sollicitudin commodo. Cras purus odio, vestibulum in vulputate at, tempus
                                        viverra
                                        turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue
                                        felis
                                        in faucibus.
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>

                <div class="col-md-8">
                    <div class="row">
                        <div class="col-xs-7">
                            <div class="panel panel-success">
                                <div class="panel-heading text-right">
                                    <i class="fa fa-crosshairs fa-4x pull-left"></i>

                                    <div>
                                        <p class="announcement-heading">64% / 71%</p>

                                        <p class="announcement-text">Current/Predicted Grade</p>
                                    </div>
                                </div>
                                <a href="#">
                                    <div class="panel-footer announcement-bottom">
                                        Get higher grades <i class="fa fa-arrow-circle-right pull-right"></i>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div class="col-xs-5">
                            <div class="panel panel-warning">
                                <div class="panel-heading text-right">
                                    <p class="pull-left noal">3</p>

                                    <div>
                                        <p class="announcement-text">Assignments due in over the next month</p>
                                    </div>
                                </div>
                                <a href="#">
                                    <div class="panel-footer announcement-bottom">
                                        View assignments <i class="fa fa-arrow-circle-right pull-right"></i>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>


                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h3 class="panel-title">Opening Times</h3>

                            <div class="dropdown">
                                <a href="#" class="pull-right dropdown-toggle ccl" data-toggle="dropdown">Change
                                    campus <span
                                        class="caret"></span></a>
                                <ul class="dropdown-menu pull-right" role="menu" aria-labelledby="dropdownMenu1">
                                    <li role="presentation" class="dropdown-header">Brighton</li>
                                    <li role="presentation"><a role="menuitem" tabindex="-1" href="#">Mouslecoomb</a>
                                    </li>
                                    <li role="presentation"><a role="menuitem" tabindex="-1" href="#">Grand Parade</a>
                                    </li>
                                    <li role="presentation"><a role="menuitem" tabindex="-1" href="#">Falmer</a></li>
                                </ul>
                            </div>

                        </div>
                        <table class="table table-hover">
                            <thead>
                            <tr>
                                <th>Day</th>
                                <th>Aldrich Library</th>
                                <th>Computing Suite</th>
                                <th>School Office</th>
                            </tr>
                            </thead>
                            <tr>
                                <td>Mon</td>
                                <td>8:00 - 17:00</td>
                                <td>8:00 - 17:00</td>
                                <td>8:00 - 17:00</td>
                            </tr>
                            <tr>
                                <td>Tue</td>
                                <td>8:00 - 17:00</td>
                                <td>8:00 - 17:00</td>
                                <td>8:00 - 17:00</td>
                            </tr>
                            <tr class="active">
                                <td>Wed</td>
                                <td>8:00 - 17:00</td>
                                <td>8:00 - 17:00</td>
                                <td>8:00 - 17:00</td>
                            </tr>
                            <tr>
                                <td>Thu</td>
                                <td>8:00 - 17:00</td>
                                <td>8:00 - 17:00</td>
                                <td>8:00 - 17:00</td>
                            </tr>
                            <tr>
                                <td>Fri</td>
                                <td>8:00 - 17:00</td>
                                <td>8:00 - 17:00</td>
                                <td>8:00 - 17:00</td>
                            </tr>
                            <tr>
                                <td>Sat</td>
                                <td>8:00 - 17:00</td>
                                <td>8:00 - 17:00</td>
                                <td>8:00 - 17:00</td>
                            </tr>
                            <tr>
                                <td>Sun</td>
                                <td>8:00 - 17:00</td>
                                <td>8:00 - 17:00</td>
                                <td>8:00 - 17:00</td>
                            </tr>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<footer id="footer">
    <div class="container">
        <p class="text-muted">Copyright &copy; 2014 Whiteboard.</p>
    </div>
</footer>

@stop