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
                                    sollicitudin commodo. Cras purus odio, vestibulum in vulputate at, tempus viverra
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
                                    sollicitudin commodo. Cras purus odio, vestibulum in vulputate at, tempus viverra
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
                                    sollicitudin commodo. Cras purus odio, vestibulum in vulputate at, tempus viverra
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
                                    sollicitudin commodo. Cras purus odio, vestibulum in vulputate at, tempus viverra
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
                                <li role="presentation"><a role="menuitem" tabindex="-1" href="#">Mouslecoomb</a></li>
                                <li role="presentation"><a role="menuitem" tabindex="-1" href="#">Grand Parade</a></li>
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
        <div class="row">
            <div class="col-md-8">
                <h4>
                    Student Life A-Z Directory
                </h4>

                <div class="row">
                    <div class="col-md-3">
                        <a href="#">About the University</a><br>
                        <a href="#">Accommodation</a><br>
                        <a href="#">Bullying and Harassment</a><br>
                        <a href="#">Burst Student Radio</a><br>
                        <a href="#">Careers, Jobs and Volunteering</a><br>
                        <a href="#">Changing Course</a><br>
                        <a href="#">Chaplaincy</a><br>
                        <a href="#">Childcare</a><br>
                        <a href="#">Clubs and Societies</a><br>
                    </div>
                    <div class="col-md-3">
                        <a href="#">Making a Complaint</a><br>
                        <a href="#">Computing, Libraries and Media</a><br>
                        <a href="#">Council Tax</a><br>
                        <a href="#">Counselling and Wellbeing</a><br>
                        <a href="#">Disability & Dyslexia</a><br>
                        <a href="#">Eating, Shopping and banking</a><br>
                        <a href="#">Enterprise and BeePurple</a><br>
                        <a href="#">Equality and Diversity</a><br>
                        <a href="#">Exam Stress</a><br>
                    </div>
                    <div class="col-md-3">
                        <a href="#">Feedback and the NSS</a><br>
                        <a href="#">Feeling Unwell</a><br>
                        <a href="#">Health</a><br>
                        <a href="#">International</a><br>
                        <a href="#">Maps and Directions</a><br>
                        <a href="#">Money</a><br>
                        <a href="#">Parking and Transport</a><br>
                        <a href="#">Safety, Fire and Security</a><br>
                        <a href="#">Sport Brighton</a><br>
                    </div>
                    <div class="col-md-3">
                        <a href="#">Student Advice Service</a><br>
                        <a href="#">Student Charter</a><br>
                        <a href="#">Student Regulations & Policies</a><br>
                        <a href="#">Students' Union</a><br>
                        <a href="#">Sustainability</a><br>
                        <a href="#">Term Dates</a><br>
                        <a href="#">Unicard</a><br>
                        <a href="#">Useful Contacts </a><br>
                    </div>
                </div>

            </div>

            <div class="col-md-4 text-right">
                <h4>WhiteBoard</h4>

                <p class="text-muted">Place sticky footer content here.</p>

                <p><a href="#">Change Year</a></p>
            </div>
        </div>

    </div>
</footer>

@stop