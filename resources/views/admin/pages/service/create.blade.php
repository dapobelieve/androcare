@extends('admin.template')

@section('admin.page', 'Create a new Service')

@section('admin.styles')
	<link href="https://cdn.quilljs.com/1.3.6/quill.snow.css" rel="stylesheet">
@stop

@section('admin-content')
	<service-create redirect="{{url('dashboard/services')}}"></service-create>
@stop