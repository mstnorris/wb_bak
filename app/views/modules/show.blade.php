@extends('layouts.master')

@section('content')

<ol class="breadcrumb">
    <li><a href="/universities/{{ $module->course->school->university->wbid }}"><i class="fa fa-university"></i>&nbsp;{{ $module->course->school->university->name }}</a></li>
    <li><a href="/schools/{{ $module->course->school->wbid }}"><i class="fa fa-building"></i>&nbsp;{{ $module->course->school->name }}</a></li>
    <li><a href="/modules"><i class="fa fa-cubes"></i>&nbsp;Modules</a></li>
    <li class="active"><i class="fa fa-cube"></i>&nbsp;{{ $module->name }}</li>
</ol>

<div class="container-fluid">
<div class="row">
<div class="col-md-10 col-md-offset-1">
<h1>{{ $module->name }}</h1>

<ul class="nav nav-tabs nav-justified">
    <li class="active"><a href="#dashboard" data-toggle="tab">Dashboard</a></li>
    <li><a href="#studyMaterials" data-toggle="tab">Study Materials</a></li>
    <li><a href="#assignments" data-toggle="tab">Assignments and Exams</a></li>
    <li><a href="#contacts" data-toggle="tab">Contacts</a></li>
</ul>
<div class="container-fluid">
<div class="tab-content">
<div class="tab-pane active" id="dashboard">
    <div class="row">

    </div>
    <h2>Dashboard</h2>

    <div class="row">
        <div class="col-sm-3">
            <p><strong>Single Semester</strong></p>
        </div>
        <div class="col-sm-9">
            <div class="progress">
                <div class="progress-bar progress-bar-success" style="width: 70%">
                    Week 7 of 10
                </div>
            </div>
        </div>
    </div>


    <div class="row">
        <div class="col-md-6 col-xs-12">
            <a href="#">
                <div class="panel panel-warning">
                    <div class="panel-heading text-center">
                        <p class="announcement-heading">3 weeks</p>

                        <p class="announcement-text">Until next assignment is due</p>
                    </div>
                </div>
            </a>
        </div>
        <div class="col-md-3 col-xs-6">
            <a href="#">
                <div class="panel panel-success">
                    <div class="panel-heading text-center">
                        <p class="announcement-heading">56%</p>

                        <p class="announcement-text">Current grade for this module</p>
                    </div>
                </div>
            </a>
        </div>
        <div class="col-md-3 col-xs-6">
            <a href="#">
                <div class="panel panel-info">
                    <div class="panel-heading text-center">
                        <p class="announcement-heading"><i class="fa fa-file-powerpoint-o"></i></p>

                        <p class="announcement-text">Get this weeks presentation</p>
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
                    <h3 class="panel-title">Reading List</h3>
                </div>
                <ul class="list-group">
                    <li class="list-group-item">
                        <h4>Java design patterns: a tutorial <small>Cooper, James W. c2000</small></h4>
                        <p class="btn btn-primary btn-sm">Preview</p>
                    </li>
                    <li class="list-group-item">
                        <h4>Real-time UML: developing efficient objects for embedded systems <small>Douglass, Bruce Powel c2000</small></h4>
                        <p class="btn btn-primary btn-sm">Preview</p>
                    </li>

                </ul>
            </div>
        </div>
    </div>
</div>
<div class="tab-pane" id="studyMaterials">
    <h2>Study Materials</h2>

    <div class="row bottom-border">
        <div class="col-sm-6 col-xs-12">
            <h3>Week 1</h3>

            <p>Lorem ipsum dolor sit amet, ipsum quam consequat nonummy elit, vehicula est amet venenatis ultrices,
                egestas vitae ut ullamcorper, viverra non interdum consectetuer scelerisque.</p>
        </div>

        <div class="col-sm-3 col-xs-6">
            <div class="well">
                <p><i class="fa fa-file-powerpoint-o fa-5x"></i></p>

                <p>Download Presentation</p>
            </div>
        </div>

        <div class="col-sm-3 col-xs-6">
            <div class="well">
                <p><i class="fa fa-flask fa-5x"></i></p>

                <p>Labs!</p>
            </div>
        </div>
    </div>

    <div class="row bottom-border">
        <div class="col-sm-6 col-xs-12">
            <h3>Week 2</h3>

            <p>Leo volutpat et sed vivamus, quis nibh donec fusce velit.</p>
        </div>

        <div class="col-sm-3 col-xs-6">
            <div class="well">
                <p><i class="fa fa-file-powerpoint-o fa-5x"></i></p>

                <p>Download Presentation</p>
            </div>
        </div>

        <div class="col-sm-3 col-xs-6">
            <div class="well">
                <p><i class="fa fa-book fa-5x"></i></p>

                <p>Reading!</p>
            </div>
        </div>
    </div>

    <div class="row bottom-border">
        <div class="col-sm-6 col-xs-12">
            <h3>Week 3</h3>

            <p>Nihil viverra vel consectetuer, pulvinar erat nec euismod, donec morbi nulla scelerisque.</p>
        </div>

        <div class="col-sm-3 col-xs-6">
            <div class="well">
                <p><i class="fa fa-file-powerpoint-o fa-5x"></i></p>

                <p>Download Presentation</p>
            </div>
        </div>

        <div class="col-sm-3 col-xs-6">
            <div class="well">
                <p><i class="fa fa-file-archive-o fa-5x"></i></p>

                <p>Tutorial Files!</p>
            </div>
        </div>
    </div>
</div>
<div class="tab-pane" id="assignments">
    <h2>Assignments and Exams</h2>

    <div class="row bottom-border">
        <div class="col-sm-6">
            <h3>Assignment 1</h3>

            <p>Nihil viverra vel consectetuer, pulvinar erat nec euismod, donec morbi nulla scelerisque.</p>
        </div>

        <div class="col-sm-6">
            <div class="panel panel-success">
                <div class="panel-heading text-center">
                    <p class="announcement-heading"><i class="fa fa-check"></i></p>

                    <p class="announcement-text">You submitted this on 12/05/2014</p>
                </div>
            </div>
        </div>
    </div>

    <div class="row bottom-border">
        <div class="col-sm-6">
            <h3>Assignment 2</h3>

            <p>Nihil viverra vel consectetuer, pulvinar erat nec euismod, donec morbi nulla scelerisque.</p>
        </div>

        <div class="col-sm-6">
            <div class="panel panel-default">
                <div class="panel-heading text-center">
                    <p class="announcement-heading"><i class="fa fa-cloud-upload"></i></p>

                    <p class="announcement-text">Not submitted - drag and drop your submission here
                        <br>or <a href="#">click here to upload</a></p>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="tab-pane" id="contacts">
    <h2>Contact Information</h2>

    <div class="row">
        <div class="col-sm-4">
            <h4>Dr Ali Hamie
                <small>Senior Lecturer</small>
            </h4>
            <p>Computing, Engineering and Mathematics<br>
                Watts Building<br>
                Moulsecoomb<br>
                Brighton</p>

            <p>Telephone: 01273 642032<br>
                Email: A.A.Hamie@brighton.ac.uk</p>
        </div>

        <div class="col-sm-4">
            <h4>Dr Nour Ali
                <small>Senior Lecturer</small>
            </h4>
            <p>Computing, Engineering and Mathematics<br>
                Watts Building<br>
                Moulsecoomb<br>
                Brighton</p>

            <p>Telephone: 01273 642495<br>
                Email: N.Ali2@brighton.ac.uk</p>
        </div>
        <div class="col-sm-4">
            <h4>Mr Mike Smith
                <small>Principal Lecturer</small>
            </h4>
            <p>Computing, Engineering and Mathematics<br>
                Watts Building<br>
                Moulsecoomb<br>
                Brighton</p>

            <p>Telephone: 01273 642471<br>
                Email: M.A.Smith@brighton.ac.uk</p>
        </div>
    </div>

</div>
</div>
</div>

</div>
</div>
</div>

@stop