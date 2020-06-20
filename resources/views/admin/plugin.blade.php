@extends('adminlte::page')

@section('title', 'Plugins')

@section('content_header')
<h1>Plugins</h1>
@stop

@section('content')
<div class="row">
    @include('documentation.plugin')
</div>
@stop