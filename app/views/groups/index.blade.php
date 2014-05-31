@extends('layouts.master')

@section('content')

<ol class="breadcrumb">
    <li><a href="/"><i class="fa fa-dashboard"></i> Dashboard</a></li>
    <li class="active"><i class="fa fa-group"></i> Groups</li>
</ol>

<div class="container-fluid">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            @foreach ($groups as $group)
            <a href="/groups/{{ $group->wbid }}"><h1 class="page-header">{{ $group->name }}</h1></a>

            <p>ID: {{ $group->wbid }}</p>

            <p>Created: {{ $group->created_at }}</p>

            <p>Modified: {{ $group->updated_at }}</p>
            @endforeach
        </div>
    </div>
</div>

@stop