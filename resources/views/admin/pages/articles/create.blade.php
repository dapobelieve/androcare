@extends('admin.template')

@section('admin.page', 'Create a new Article')

@section('admin.styles')
	<link href="https://cdn.quilljs.com/1.3.6/quill.snow.css" rel="stylesheet">
@stop

@section('admin-content')
	<article-create redirect="{{url('dashboard/articles')}}" ></article-create>
@stop