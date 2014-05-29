@extends('layouts.master')

@section('content')

<ol class="breadcrumb">
    <li><a href="/"><i class="fa fa-dashboard"></i> Dashboard</a></li>
    <li><a href="/modules"><i class="fa fa-cubes"></i> Modules</a></li>
    <li class="active"><i class="fa fa-cube"></i> {{ $module->name }}</li>
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

            <div class="tab-content">
                <div class="tab-pane active" id="dashboard">
                    <p>I'm in Section 1.</p>
                </div>
                <div class="tab-pane" id="studyMaterials">
                    <p>I'm in Section 2.</p>
                </div>
                <div class="tab-pane" id="assignments">
                    <p>I'm in Section 3.</p>
                </div>
                <div class="tab-pane" id="contacts">
                    <p>I'm in Section 3.</p>
                </div>
            </div>

            <p>ID: {{ $module->wbid }}</p>

            <p>Created: {{ $module->created_at }}</p>

            <p>Modified: {{ $module->updated_at }}</p>
        </div>
    </div>
</div>

@stop