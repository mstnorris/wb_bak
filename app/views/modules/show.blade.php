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

                        <p>ID: {{ $module->wbid }}</p>

                        <p>Created: {{ $module->created_at }}</p>

                        <p>Modified: {{ $module->updated_at }}</p>
                    </div>
                    <div class="tab-pane" id="studyMaterials">
                        <h2>Study Materials</h2>

                        <div class="row bottom-border">
                            <div class="col-md-6">
                                <h3>Week 1</h3>
                                <p>This week we cover stuff</p>
                            </div>

                            <div class="col-md-3">
                                <div class="well">
                                    <p><i class="fa fa-file-powerpoint-o fa-5x"></i></p>
                                    <p>Download Presentation</p>
                                </div>
                            </div>

                            <div class="col-md-3">
                                <div class="well">
                                    <p>Labs!</p>
                                </div>
                            </div>
                        </div>

                        <div class="row bottom-border">
                            <div class="col-md-6">
                                <h3>Week 2</h3>
                                <p>This week we cover more stuff</p>
                            </div>

                            <div class="col-md-3">
                                <div class="well">
                                    <p><i class="fa fa-file-powerpoint-o fa-5x"></i></p>
                                    <p>Download Presentation</p>
                                </div>
                            </div>

                            <div class="col-md-3">
                                <div class="well">
                                    <p>Labs!</p>
                                </div>
                            </div>
                        </div>

                        <div class="row bottom-border">
                            <div class="col-md-6">
                                <h3>Week 3</h3>
                                <p>This week we cover even more stuff!</p>
                            </div>

                            <div class="col-md-3">
                                <div class="well">
                                    <p><i class="fa fa-file-powerpoint-o fa-5x"></i></p>
                                    <p>Download Presentation</p>
                                </div>
                            </div>

                            <div class="col-md-3">
                                <div class="well">
                                    <p>Labs!</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane" id="assignments">
                        <h2>Assignments and Exams</h2>

                        <p>I'm in Section 3.</p>
                    </div>
                    <div class="tab-pane" id="contacts">
                        <h2>Contact Information</h2>

                        <p>I'm in Section 3.</p>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>

@stop