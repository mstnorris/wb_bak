@extends('layouts.master')

@section('content')

<ol class="breadcrumb">
    <li><a href="/"><i class="fa fa-dashboard"></i> Dashboard</a></li>
    <li><a href="/universities"><i class="fa fa-cubes"></i> Universities</a></li>
    <li class="active"><i class="fa fa-cube"></i> {{ $university->name }}</li>
</ol>

<div class="container-fluid">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <h1>{{ $university->name }}</h1>

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
                        <h2>Dashboard<small>{{ $university->wbid }}</small></h2>


                        <p>Created: {{ $university->created_at }}</p>

                        <p>Modified: {{ $university->updated_at }}</p>
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