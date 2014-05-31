@extends('layouts.master')

@section('content')

<ol class="breadcrumb">
    <li><a href="/"><i class="fa fa-dashboard"></i> Dashboard</a></li>
    <li class="active"><i class="fa fa-cubes"></i> Courses</li>
</ol>

<div class="container-fluid">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            @foreach ($courses as $course)
            <a href="/courses/{{ $course->wbid }}"><h1 class="page-header">{{ $course->name }}</h1></a>

            <p>ID: {{ $course->wbid }}</p>

            <p>Created: {{ $course->created_at }}</p>

            <p>Modified: {{ $course->updated_at }}</p>
            @endforeach
        </div>
    </div>
</div>

@stop