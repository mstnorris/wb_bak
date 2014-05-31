@extends('layouts.master')

@section('content')

<ol class="breadcrumb">
    <li class="active"><i class="fa fa-building"></i> Schools</li>
</ol>

<div class="container-fluid">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            @foreach ($schools as $school)
            <a href="/schools/{{ $school->wbid }}"><h1 class="page-header">{{ $school->name }}</h1></a>

            <p>ID: {{ $school->wbid }}</p>

            <p>Created: {{ $school->created_at }}</p>

            <p>Modified: {{ $school->updated_at }}</p>
            @endforeach
        </div>
    </div>
</div>

@stop