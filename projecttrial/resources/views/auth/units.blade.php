@extends('layouts.app')
@section('content')
<div class="container">
		<div class="row">
			<div class="col-md-8 col-md-offset-2">
				<div class="panel panel-info">
					<div class="panel-heading">
						<h2 class="text-center">Join Class</h2>	
					</div>
						<div class="panel-body">
							<h3 class="">Please click to join your class</h3>
							<ul class="list-group">			
								@foreach ($units as $unit)
									@if (Auth::user()->course == $unit->course )
										<h4><a href="">{{$unit->unit}}</a></h4> 
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