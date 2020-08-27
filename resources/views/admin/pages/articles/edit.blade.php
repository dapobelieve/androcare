@extends('admin.template')

@section('admin.page', 'Edit Article')

@section('admin.styles')
	<link href="//cdn.quilljs.com/1.3.6/quill.snow.css" rel="stylesheet">
@stop

@section('admin-content')
	<article-edit redirect="{{url('dashboard/articles')}}" model="{{request()->slug}}" />
@stop