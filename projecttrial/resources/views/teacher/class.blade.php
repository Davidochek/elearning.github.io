@extends('layouts.appt')
@section('content')
<div class="container">
	<div class="row">
		<div class="col-md-8 col-md-offset-2">
			<div class="panel panel-info">
				<div class="panel-heading">
					<h3 class="text-center">Create a Class</h3>
				</div>
				<div class="panel-body">
					@if (count($errors)>0)
						@foreach($errors->all() as $error)
							<div class="alert alert-warning alert-dismissable">
								<button class="close" data-dismiss="alert">&times;</button>
							<h5>{{ $error 	}}</h5>
						</div>
						@endforeach
					@endif
					@if (session('mess'))
						<div class="alert alert-success">
							<h5>{{ session('mess') }}</h5>
						</div>
					@endif
					<form action="/student" method="post">
						{{ csrf_field()}}
						<div class="form-group" hidden>
							<input type="text" class="form-control" value="{{Auth::user()->id}}" name="teacher_id">
						</div>
						<div class="form-group">
							<label for="courses">Select A Course</label>
							<select name="course" id="" class="form-control">
								<option value="Computer Science">Computer Science</option>
                                <option value="Statistics">Statistics</option>
                                <option value="Hospitality">Hospitality</option>
                                <option value="Education Arts">Education Arts</option>
                                <option value="Education Science">Education Science</option>
                                <option value="English Literature">English Literature</option>
                                <option value="Tourism">Tourism</option>
                                <option value="Journalism">Journalism</option>
                                <option value="Forestry">Forestry</option>
                                <option value="Economics">Economics</option>
							</select>
						</div>
						<div class="form-group">
							<label for="unit">Unit</label>
							<input type="text" class="form-control" placeholder="e.g Communication Skills" name="unit">
						</div>
						<div class="form-group">
							<button class="btn btn-success" type="submit">Create</button>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
</div>
@endsection