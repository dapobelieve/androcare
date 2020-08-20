@extends('layouts.template')

@section('styles')
	<link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-bs4.min.css" rel="stylesheet">
@endsection

@section('content')
	<div class="main-content">
        <div class="breadcrumb">
            <h1>Edit</h1>
            <ul>
            <li><a href="{{ route('admin.about.index') }}">About us</a></li>
                <li>Add</li>
            </ul>
        </div>
        <div class="separator-breadcrumb border-top"></div>
            <div class="row">
                <!-- end of col-->
                <div class="col-md-12 mb-4">
                    <div class="card text-left">
                        <div class="card-body">
                        	@if (Session::has('message'))
                        		<div class="alert alert-success" role="alert"><strong class="text-capitalize">Success!</strong> {{ Session::get('message') }}
                                    <button class="close" type="button" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                </div>
							    {{-- <div class="alert alert-info">{{ Session::get('message1') }}</div> --}}
							@endif
                            <h2>Full Editor</h2>
                            <p>
								Update the about us content
                            </p>
                            <form method="POST" action="{{ route('admin.about.update', $about->path()) }}">
                            	@method('PATCH')
                            	@csrf
	                            <div class="mx-auto col-md-8">
	                                <textarea class="form-control summernote" name="body" rows="20">{{ $about->body }}</textarea>
	                            </div>
	                            <button type="submit" class="btn btn-primary rounded">Update</button>
                            </form>
                        </div>
                    </div>
                </div>
                <!-- end of col-->
            </div>
        <!-- end of main-content -->
    </div>
@endsection

@section('scripts')
	<script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-bs4.min.js"></script>
    <script type="text/javascript">
        $(document).ready(function() {
          $('.summernote').summernote({
          	height: 500,
          });
        });
    </script>
@endsection
