@extends('admin.template')

@section('admin-content')
	<article-index edit-url="{{url('dashboard/articles/edit')}}" />
@stop