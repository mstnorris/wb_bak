@extends('layouts.master')

@section('content')

<ol class="breadcrumb">
    <li><a href="/"><i class="fa fa-dashboard"></i> Dashboard</a></li>
    <li class="active"><i class="fa fa-cubes"></i> Universities</li>
</ol>

<div class="container-fluid">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <h1>Universities</h1>
            @foreach ($universities as $university)
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h3 class="panel-title"><a href="/universities/{{ $university->wbid }}">{{ $university->name }}</a><p class="pull-right">ID: {{ $university->wbid }}</p></h3>
                </div>
                <div class="panel-body">
                    <p>This university has {{ $university->schools()->count() }} schools.</p>
                    <p>Created: {{ $university->created_at }}</p>
                    <p>Modified: {{ $university->updated_at }}</p>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</div>

@stop