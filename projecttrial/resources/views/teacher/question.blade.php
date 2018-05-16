@extends('layouts.appt')
@section('content')
<div class="container">
	<div class="row ">
		<div class="col-md-offset-3 col-md-9">
			  @foreach ($questions as $question)
			  <h4>{{$question}}</h4>
			  @endforeach
		</div>
	</div>
</div>
@endsection