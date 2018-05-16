@extends('layouts.appt')
@section('content')
<div class="container">
	<div class="row">
		<div class="col-md-3">
			<a href="/message"><button class="btn btn-lg btn-primary">Back</button></a>
		</div>
		<div class="col-md-6">
			<div class="panel panel-info">
				<div class="panel-heading">
					<center><div class="panel-title">Let's Learn</div></center> 
				</div>
				<div class="panel-body">
					<ul class="list-group">
						<li class="list-group-item list-group-item-info" style="padding-bottom: 17px;"><h6>Message</h6><p>{{$message->mail}}</p></li>
					</ul>
					<form action="/message/{{$message->id}}" method="post">
						{{csrf_field()}}
						{{ method_field('PUT') }}
						<div class="form-group">
							<label for="reply">Reply here</label>
							<textarea class="form-control" name="response" id="" cols="30" rows="3"></textarea>
						</div>
						<div class="form-group">
							<button class="btn btn-success" type="submit">Send</button>
						</div>
					</form>
				</div>
			</div>
		</div>	
	</div>
</div>
@endsection