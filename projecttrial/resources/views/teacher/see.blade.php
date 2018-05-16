@extends('layouts.app')
@section('content')
<div class="container">
	<div class="row">

		@foreach ($teachers as $teacher)
		@php
			$number=$teacher->id%2;
		@endphp
		@if ($number== 1 && $teacher->email != '')
		<div class="col-md-3">
			<div class="panel panel-info">
				<div class="panel-heading text-center">
					<i class="fa fa-user fa-2x"></i>
				</div>
				<div class="panel-body text-center">
					Name: {{$teacher->name}}<br>
					Last Name: {{$teacher->lastame}}<br>
					School: {{$teacher->school}}<br>
					Email: {{$teacher->email}}<br>
				<a href="/see/{{ $teacher->id}}/edit" type="button" class="btn btn-success">Message</a>
				</div>
			</div>
		</div>
		@elseif($number== 0 && $teacher->email != '')
		<div class="col-md-3">
			<div class="panel panel-warning">
				<div class="panel-heading text-center">
					<i class="fa fa-user fa-2x"></i>
				</div>
				<div class="panel-body text-center">
					Name: {{$teacher->name}}<br>
					Last Name: {{$teacher->lastname}}<br>
					School: {{$teacher->school}}<br>
					Email: {{$teacher->email}}<br>
					<a href="/see/{{ $teacher->id}}/edit" type="button" class="btn btn-success">Message</a>
				</div>
			</div>
		</div>
		@endif
		@endforeach
	</div>
</div>
@endsection
