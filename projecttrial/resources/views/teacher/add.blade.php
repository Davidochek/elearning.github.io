@extends('layouts.appt')
@section('content')
<div class="container">
	<div class="row">
		<div class="col-md-6 col-md-offset-3">
			<div class="panel panel-info">
				<div class="panel-heading">
					<h4 class="text-center"> Are you sure you would like to add {{$user->name}} in your class?</h4>
				</div>
				<div class="row" style="margin-top: 50px;">
						<div class="col-md-2"></div>
						<div class="col-md-2">
							<a href="/student" class="btn btn-danger">No</a>
						</div>
						<div class="col-md-4"></div>
						<div class="col-md-2">
							<form action="/student/{{ $user->id }}" method="post">
								{{csrf_field()}}
								{{method_field('PUT')}}
								<div class="form-group" hidden>
									<input type="text" name="teacher_id" class="form-control" value="{{Auth::user()->id}}">
								</div>
								<div class="form-group" hidden>
									<input type="text" name="user_id" class="form-control" value="{{$user->id}}">
								</div>
								<div class="form-group">
									<button class="btn btn-success" type="submit">Yes</button>
								</div>
							</form>
						</div>
					</div>
			</div>
		</div>
	</div>
</div>
@endsection