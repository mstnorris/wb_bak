@extends('layouts.master')

@section('content')

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
    <div class="col-md-3 col-xs-6">
        <a href="#">
            <div class="panel panel-success">
                <div class="panel-heading text-center">
                    <p class="announcement-heading">64%</p>

                    <p class="announcement-text">Current grade</p>
                </div>
            </div>
        </a>
    </div>
    <div class="col-md-3 col-xs-6">
        <a href="#">
            <div class="panel panel-warning">
                <div class="panel-heading text-center">
                    <p class="announcement-heading">3</p>

                    <p class="announcement-text">Assignments due</p>
                </div>
            </div>
        </a>
    </div>
    <div class="col-md-3 col-xs-6">
        <a href="#">
            <div class="panel panel-success">
                <div class="panel-heading text-center">
                    <p class="announcement-heading">42</p>

                    <p class="announcement-text">Meaning of life</p>
                </div>
            </div>
        </a>
    </div>
    <div class="col-md-3 col-xs-6">
        <a href="#">
            <div class="panel panel-info">
                <div class="panel-heading text-center">
                    <p class="announcement-heading">Help</p>

                    <p class="announcement-text">Exams</p>
                </div>
            </div>
        </a>
    </div>
</div>

<div class="row">
    <div class="col-md-6">
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

    <div class="col-md-6">
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
                    <td>Mon<span class="fullDay">day</span></td>
                    <td>8:00 - 17:00</td>
                    <td>8:00 - 17:00</td>
                    <td>8:00 - 17:00</td>
                </tr>
                <tr>
                    <td>Tue<span class="fullDay">sday</span></td>
                    <td>8:00 - 17:00</td>
                    <td>8:00 - 17:00</td>
                    <td>8:00 - 17:00</td>
                </tr>
                <tr class="active">
                    <td>Wed<span class="fullDay">nesday</span></td>
                    <td>8:00 - 17:00</td>
                    <td>8:00 - 17:00</td>
                    <td>8:00 - 17:00</td>
                </tr>
                <tr>
                    <td>Thu<span class="fullDay">rsday</span></td>
                    <td>8:00 - 17:00</td>
                    <td>8:00 - 17:00</td>
                    <td>8:00 - 17:00</td>
                </tr>
                <tr>
                    <td>Fri<span class="fullDay">day</span></td>
                    <td>8:00 - 17:00</td>
                    <td>8:00 - 17:00</td>
                    <td>8:00 - 17:00</td>
                </tr>
                <tr>
                    <td>Sat<span class="fullDay">urday</span></td>
                    <td>8:00 - 17:00</td>
                    <td>8:00 - 17:00</td>
                    <td>8:00 - 17:00</td>
                </tr>
                <tr>
                    <td>Sun<span class="fullDay">day</span></td>
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

@stop