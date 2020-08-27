@extends('admin.template')

@section('admin.page', 'Edit Service')

@section('admin.styles')
	<link href="//cdn.quilljs.com/1.3.6/quill.snow.css" rel="stylesheet">
@stop


@section('admin-content')
	<service-edit redirect="{{url('dashboard/services')}}" model="{{request()->slug}}"></service-edit>
@stop