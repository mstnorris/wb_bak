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
            <h1 class="page-header">{{ $module->name }}</h1>

            <p>ID: {{ $module->wbid }}</p>
            <p>Created: {{ $module->created_at }}</p>
            <p>Modified: {{ $module->updated_at }}</p>
    </div>
</div>

@stop