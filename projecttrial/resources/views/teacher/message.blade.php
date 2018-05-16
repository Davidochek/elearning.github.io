@extends('layouts.appt')
@section('content')
<div class="container">
	<div class="row">
		<div class="col-md-3">
			<div class="panel panel-info">
				<div class="panel-heading">
					<center><div class="panel-title">Let's Learn</div></center> 
				</div>
				<div class="panel-body">
					<ul class="list-group">
						<li class="list-group-item"> <a href="#">Manage Your Class</a></li>
						<li class="list-group-item"> <a href="#">Update Library</a></li>
						<li class="list-group-item"> <a href="#">Post Your Story</a></li>
						<li class="list-group-item"> <a href="#">Update Your Profile</a></li>
					</ul>
				</div>
			</div>
		</div>
		<div class=" col-md-offset-1 col-md-6">	
			<div class="panel panel-info">
				<div class="panel-head"></div>
				<div class="panel-heading">
					<h2><i class="fa fa-comments-o"></i>  Chat</h2>
				</div>
				<div class="panel-body">
					<div class="pre-scrollable" style="height:400px">
						@foreach ($messages as 	$message)
						@if (($message->response == '') && ($message->name == Auth::user()->name))
						<ul class="list-group">
							<li class="list-group-item list-group-item-info" style="padding-bottom: 17px;">	<a href="/message/{{$message->id}}/edit"><h4>New Message</h4></a>
								<br>
								<span class="pull-right">{{$message->created_at->diffForHumans()}} </span>
							</li>
						</ul>
						@else
						<ul class="list-group">
							<li class="list-group-item list-group-item-warning" style="padding-bottom: 17px;">	<a href="/message/{{$message->id}}/edit">{{$message->mail}}</a>
								<br>
								<span class="pull-right">{{$message->created_at->diffForHumans()}} </span>
							</li>
						</ul>
						@endif
						@endforeach
					</div>
				</div>

			</div>
		</div>
	</div>	
</div>
@endsection