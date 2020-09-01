@extends('admin.template')

@section('admin.page', 'Gallery')


@section('admin-content')
	<gala-index create="{{ route('admin.gallery.create')}}"></gala-index>
@stop