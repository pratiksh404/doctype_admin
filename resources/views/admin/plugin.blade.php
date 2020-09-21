@extends('adminlte::page')

@section('title', 'Plugins')

@section('content_header')
<h1>Plugins</h1>
@stop

@section('content')
<div class="row">
    @include('documentation.blog_plugin')
    @include('documentation.setting_plugin')
    @include('documentation.landing_plugin')
    @include('documentation.website_plugin')
</div>
@stop