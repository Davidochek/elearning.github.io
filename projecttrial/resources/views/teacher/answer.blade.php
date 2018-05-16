  @extends('layouts.appt')
  @section('content')
  <div class="container">
    <div class="row">
      <div class="col-md-3">
       <a href="/teacher/home"><button class="btn btn-lg btn-primary">Back</button></a> 
      </div>
      <div class="col-md-6">
       @if (count($errors)>0)
       <div class="alert alert-danger">
        <button type="button" class="close" data-dismiss="alert">&times;</button>
        @foreach ($errors->all() as $error)
        <h4>{{ $error}}</h4>
        @endforeach	
      </div>
        @endif	
      <form action="/teacher/home/{{$question->id}}" method="post" enctype="multipart/form-data">
        {{method_field('PUT')}}
        {{ csrf_field()}}
        <div class="form-group">	
         <label for="Question">Question</label>
         <input type="text" name="question" value="{{ucfirst($question->question)}}" class="form-control" 	>
       </div>
       <div class="form-group">
        <label for="Answer">Answer</label>
        <textarea name="answer" id="" cols="30" rows="3" class="form-control"></textarea>
      </div>
      <div class="form-group">
        <label for="pdfs"><i class="fa fa-upload"></i>Upload Tutorial</label>
        <input type="file" id="pdfs" name="pdfs">
      </div>
      <div class="form-group"> 
        <button type="submit" type="file" class="btn btn-primary">Post Your Answer</button>
      </div>
    </form>
  </div>
</div>
</div>
<br>
<br>
<br>
@endsection