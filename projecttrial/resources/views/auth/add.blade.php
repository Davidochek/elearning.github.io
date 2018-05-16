@extends('layouts.appt')
@section('content')
<div class="container">
	<div class="row">
		<div class="col-md-4 col-md-offset-4">
			<div class="panel panel-info">
				<div class="panel-heading">
					<h4 class="text-center"> Are you sure you would like to add {{$user->name}} in your class?</h4>
				</div>
			</div>
		</div>
	</div>
</div>
@endsection