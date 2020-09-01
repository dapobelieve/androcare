@extends('admin.template')

@section('admin.page', 'Services')

@section('admin-content')
	<service-index edit-url="{{url('dashboard/services/edit')}}" />
@stop