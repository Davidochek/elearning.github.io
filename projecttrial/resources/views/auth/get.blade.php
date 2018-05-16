@extends('layouts.app')
@section('content')
	<div class="container">
		<div class="row">
			<div class="col-md-6 col-md-offset-3">
				<div class="panel panel-info">
					<div class="panel-heading">
						<h2 class="text-center">My Class</h2>
					</div>
						<div class="panel-body">
							<ul class="list-group">
								@foreach ($users as $user)
								@if (Auth::user()->course == $user->course) 
									<li class='list-group-item'><p>{{ucfirst($user->name)}}</p></li>
								@endif
								@endforeach
								
							</ul>
						</div>
				</div>
			</div>
		</div>
	</div>
	<br>
@endsection