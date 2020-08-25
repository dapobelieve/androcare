@extends('admin.template')

@section('admin.page', 'Services')

@section('admin.styles')
	<link href="//cdn.quilljs.com/1.3.6/quill.snow.css" rel="stylesheet">
@stop

@section('admin-content')
	<service-create />
@stop