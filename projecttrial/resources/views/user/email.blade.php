@extends('layouts.app')
@section('content')
<div class="container">
	<div class="row">
		<div class="col-md-offset-3 col-md-6">
			<div class="panel panel-info">
				<div class="panel-heading">
					<h1>Talk To {{$teacher->name}}</h1>
				</div>
				<div class="panel-body">
	
					
						<div id="scrollable" class="pre-scrollable">
						<div class="list-group">
							<strong><p>Your recent chats with the teacher</p></strong>
							@foreach ($gets as $get)
							@if ($get->user_id != '' && Auth::user()->id==$get->user_id)
							   <a class="list-group-item list-group-item-warning" style="border-radius: 5px"><strong>You:</strong> {{$get->mail}}</a>
								<a class="list-group-item list-group-item-info"><strong>Teacher:</strong> {{$get->response}}</a>
								<br>
							@endif
							@endforeach
						</div>
					</div>
					
					<form action="/see/{{ $teacher->id}}" method="post">
						{{method_field('put')}}
						{{ csrf_field()}}
						<div class="form-group" hidden>
							<label for="email">Lastname</label>
							<input type="text" class="form-control" value="{{ Auth::user()->id }}" name="user_id">
						</div>
						<div class="form-group" hidden>
							<label for="email" hidden>Lastname</label>
							<input type="text" class="form-control" value="{{ $teacher->lastname }}" name="lastname">
						</div>
						<div class="form-group" hidden>
							<label for="email" hidden>Pass</label>
							<input type="password" class="form-control" value="{{ $teacher->password }}" name="password">
						</div>
						<div class="form-group" hidden>
							<label for="email" hidden>Name</label>
							<input type="text" class="form-control" value="{{ $teacher->name }}" name="name">
						</div>
						<div class="form-group" hidden>
							<label for="email">Email</label>
							<input type="email"  name="email" class="form-control" value="{{ $teacher->email }}">
						</div>
						<div class="form-group">
							<label for="email">Your Text</label>
							<textarea name="mail" id="" cols="30" rows="3" class="form-control"></textarea>
						</div>
						<div class="form-group">
							<button type="submit" class="btn-success btn"><i class="fa fa-envelope"></i> Send</button>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
</div>
@endsection