@extends('layouts.app')
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
            <li class="list-group-item"> <a href="/home">Dashboard</a></li>
            <li class="list-group-item"> <a href="/chat">Discussion Forum</a></li>
            <li class="list-group-item"> <a href="#">Post Your Story</a></li>
            <li class="list-group-item"> <a href="#">Update Your Profile</a></li>
          </ul>
        </div>
      </div>
		</div>
		<div class="col-md-6">
			@if (session()->has('mess'))
			<div class="alert alert-success">
				<button type="button" class="close" data-dismiss="alert">&times;</button>
				{{session()->get('mess')}}
			</div>
			@endif
			@if (count($errors)>0)
			<div class="alert alert-danger">
				<button type="button" class="close" data-dismiss="alert">&times;</button>
				@foreach ($errors->all() as $error)
				{{$error}}
				@endforeach
			</div>
			@endif
			<h2 class="">Please help us improve our class</h2>
			<hr>
			<div class="jumbotron" style="padding: 5px 15px 5px 15px">
				<p>Hello {{ucfirst(Auth::user()->name).' '.ucfirst(Auth::user()->lastname)}}, help us evaluate our online class by giving us your review based on the following:</p>
				<ul>
					<li>Assessments given</li>
					<li>Course coverage or the syllabus</li>
					<li>Regular feedback from your teacher and or from your colleagues</li>
					<li>Quality of instruction</li>
					<li>Course organization</li>
					<li>Student Participation</li>
					<li>Student Interaction</li>
				</ul>
				<form action="/rate" method="post">
				{{csrf_field()}}
				<div class="form-group" hidden>
					<label for="user_id"></label>
					<input type="text" name="user_id" value="{{ Auth::user()->id }}">
				</div>
				<div class="form-group" hidden>
					<label for="course"></label>
					<input type="text" name="user_course" value="{{ Auth::user()->course }}">
				</div>
				<div class="form-group">
							<label for="rate">Your Rating</label><br>
							<input type="radio" name="rate" value="Excellent">Excellent&nbsp;&nbsp;
							<input type="radio" name="rate" value="Good">Good&nbsp;&nbsp;
							<input type="radio" name="rate" value="Average">Average&nbsp;&nbsp;
							<input type="radio" name="rate" value="Fair">Fair&nbsp;&nbsp;
							<input type="radio" name="rate" value="Poor">Poor&nbsp;&nbsp;
				</div>
				<div class="form-group">
					<button class="btn btn-primary" type="submit">Submit</button>
				</div>
			</form>
			</div>
		</div>
	</div>
</div>
@endsection