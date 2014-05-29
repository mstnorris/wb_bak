@extends('layouts.master')

@section('content')

<ol class="breadcrumb">
    <li><a href="/"><i class="fa fa-dashboard"></i> Dashboard</a></li>
    <li class="active"><i class="fa fa-cubes"></i> Modules</li>
</ol>

<div class="container-fluid">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            @foreach ($modules as $module)
                <a href="/modules/{{ $module->wbid }}"><h1 class="page-header">{{ $module->name }}</h1></a>

                <p>ID: {{ $module->wbid }}</p>

                <p>Created: {{ $module->created_at }}</p>

                <p>Modified: {{ $module->updated_at }}</p>
            @endforeach
        </div>
    </div>
</div>

@stop