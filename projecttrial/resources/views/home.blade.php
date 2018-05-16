     @extends('layouts.app')
     @section('headSection')

     <link rel="stylesheet" href="{{asset('adminn/bower_components/fullcalendar/dist/fullcalendar.min.css')}}">
     {{-- <link rel="stylesheet" href="{{asset('adminn/dist/css/AdminLTE.min.css')}}"> --}}
     @endsection

     @section('content')
     <div class="container">
      <style>
      #facey {
        z-index: 100;
        position: relative;
        display: block;
      }
      a#facey:hover {
        background-position: 0 -32px;
      }
      @media screen and (max-width: 800px) and (min-width: 50px ){
        .images{
          height: 860px;
        }
      }
    </style>
    <div class="row">
      <div class="alert  alert-success" alert-dismissible>
        <button type="button" class="close" data-dismiss="alert">&times;</button>
        <h4>Hey {{ Auth::user()->name}}, Welcome Let's Learn</h4>
      </div>
      <div class="col-md-offset-3">
        <div class="col-md-3">
          <button type="button" class=" btn btn-primary">Total Student<span class="badge" > 17</span>      
          </button>
        </div>
        <div class="col-md-3">
          <button type="button" class=" btn btn-primary">Total Teacher<span class="badge" > 10</span>      
          </button>
        </div>
        <div class="col-md-3">
          <button type="button" class=" btn btn-primary">Total Class<span class="badge" > 7</span>  		
          </button>
        </div>
      </div>
    </div>
    <br>  
    <div>
      <div class="col-md-3">
       <div class="panel panel-info">
        <div class="panel-heading">
          <center><div class="panel-title">Let's Learn</div></center> 
        </div>
        <div class="panel-body">
          <ul class="list-group">
            <li class="list-group-item"> <a href="/get">View Your Class</a></li>
            <li class="list-group-item"> <a href="/chat">Discussion Forum</a></li>
            <li class="list-group-item"> <a href="#">Post Your Story</a></li>
            <li class="list-group-item"> <a href="#">Update Your Profile</a></li>
            <li class="list-group-item"> <a href="/rate">Rate Your class</a></li>
          </ul>
        </div>
      </div>
      <div class="">
       <div class="box box-primary">
        <div class="box-body no-padding">
          <!-- THE CALENDAR -->
          <div id="calendar"></div>
        </div>
        <!-- /.box-body -->
      </div>
    </div>
  </div>
</div>
<div>
  <div class="col-md-9">
    <div class="nav-tabs-custom">
      <ul class="nav nav-tabs">
        <li class="active"><a href="#welcome" data-toggle="tab">Welcome</a></li>
        <li><a href="#library" data-toggle="tab">Library</a></li>
        <li><a href="#questions" data-toggle="tab">Questions</a></li>
      </ul>
      <div class="tab-content">
       <div class="active tab-pane" id="welcome">
        
        <img src="{{ asset('images/training-3207841_1920.jpg') }}" class="images" alt=""  width="100%" style="opacity: 0.2; position: absolute; z-index: 0; border-radius: 5px;">
        <div class="welcome text-center">
          <h2 class="cover-heading">welcome to the most interactive classes</h2>
          <p class="lead">This is where the classroom has already been created by your respective instructors. The classroom enhances instructor-student communication; management and oversight of course instruction and content; and instructional feedback provided on assignments.</p>
          <div id="facey">
           <a class="btn btn-success btn-sm" href="{{ url('/class') }}">Join</a>
         </div>
         <hr>
         <h2 class="cover-heading">Check on the library to get upto date class materials</h2>
         <p class="lead">In Your classroom Teachers are the facilitators, they provide guides for students navigating online courses, providing students with upto date course materials. This is where you can submit your assignments online and also get course notes</p>
         <div id="facey">
          {{-- <a href="" data-toggle="tab" class="btn btn-success btn-sm">Library</a> --}}
        </div>
        <hr>
      </div>
    </div>
    <div class="tab-pane" id="library">
      <br>
      <div class="row">
        <div class="col-md-6">
          <div class="panel panel-info">
            <div class="panel-heading">
              <div class="panel-title">Submit Assignments</div>
            </div>
            <div class="panel-body">
              @if (count($errors)>0)
              <div class="alert alert-danger">
                <button type="button" class="close" data-dismiss="alert">&times;</button>
                @foreach ($errors->all() as $error)
                {{$error}}
                @endforeach
              </div>
              @endif
              <form action="{{ url('library') }}" method="post" enctype="multipart/form-data">
                {{csrf_field()}}
                <div class="form-group">
                  <label for="description">Assignment Description</label>
                  <textarea name="description" placeholder="Write your surname here" class="form-control"  id="" cols="20" rows="2"></textarea>
                </div>
                <div class="form-group">
                  <label for="assignment"><i class="fa fa-upload"></i>Upload Assignment</label>
                  <input type="file" id="assignment" name="assignment">
                </div>
                <div class="form-group"> 
                  <button type="submit" type="file" class="btn btn-primary">Post Your Assignment</button>
                </div>
              </form>
            </div>
          </div>
        </div>
        <div class="col-md-6">
         <div class="panel panel-success">
          <div class="panel-heading">
            <div class="panel-title">Class Notes</div>
          </div>
          <div class="panel-body">
           @foreach ($notes as $note)
           <p> {{$loop->index +1}}. {{$note->notesdescription}}  &nbsp;&nbsp; &nbsp;<a href="/storage/{{$note->notes}}"  class="btn btn-success" ><i class="fa fa-download">Assignment</i></a></p>
           @endforeach
         </div>
       </div>
     </div>
   </div>
 </div>
 <div class="tab-pane" id="questions">
  @if (session()->has('mess'))
  <div class="alert alert-success">
    <button type="button" class="close" data-dismiss="alert">&times;</button>
    {{session()->get('mess')}}
  </div>
  @endif
  <div class="jumbotron" style="padding: 5px 15px 5px 15px">
    <h3><i class="fa fa-user"></i>  {{ucfirst(Auth::user()->name).' '.ucfirst(Auth::user()->lastname)}}</h3>
    <h2>What is your question?</h2>
  </div>
  <div>
    <div id="around" class="pre-scrollable" style="height:400px">
      @foreach ( $questions as $question)
      @if ($question->answer != '' && $question->question != '')
      @if (Auth::user()->course == $question->course )
      <div class="  alert alert-success" >
       <strong><h2>Question:</h2></strong> <p>{{ucfirst($question->question)}}</p>
       <span class="pull-right">{{$question->created_at->diffForHumans()}} </span>
     </div>
     <div class="alert alert-warning"> 
       <h4>Answer:</h4>  <p>{{ucfirst($question->answer)}}</p>
       @if ($question->pdfs != '')
       <a href="/storage/{{$question->pdfs}}"><i class="fa fa-download">Get Here</i></a>
       @endif
       <span class="pull-right">{{$question->created_at->diffForHumans()}} </span>
     </div>
     @endif
     @endif

     @endforeach
   </div>
 </div>
 <form action="{{ url('home') }}" method="post">
  {{ csrf_field()}}
  <div class="form-group" hidden>
    <input type="text" class="" name="school" value="{{ Auth::user()->school }}">
  </div>
  <div class="form-group" hidden>
    <input type="text" class="" name="course" value="{{ Auth::user()->course }}">
  </div>
  <div class="form-group">
    <label for="Question">Question</label>
    <textarea name="question" id="" cols="30" rows="3" class="form-control"></textarea>
  </div>
  <div class="  form-group" hidden> 
   <input type="text" class="" name="name" value="{{Auth::user()->name}}">
 </div>
 <div class="  form-group"> 
  <button type="submit" class="btn btn-primary">Post Your Question</button>
</div>
</form>
@if (count($errors)>0)
<div class="alert alert-danger">
  <button type="button" class="close" data-dismiss="alert">&times;</button>
  @foreach ($errors->all() as $error)
  {{$error}}
  @endforeach
</div>
@endif
</div>
</div>
</div>
</div>
</div>
</div>
<br>
<br>
<br>
<br>

</div>
</div>
@section('footerSection')
<script src="{{asset('adminn/bower_components/moment/moment.js')}}"></script>
<script src="{{asset('adminn/bower_components/fullcalendar/dist/fullcalendar.min.js')}}"></script>
<script>
  $(function () {

      /* initialize the external events
      -----------------------------------------------------------------*/
      function init_events(ele) {
        ele.each(function () {

          // create an Event Object (http://arshaw.com/fullcalendar/docs/event_data/Event_Object/)
          // it doesn't need to have a start or end
          var eventObject = {
            title: $.trim($(this).text()) // use the element's text as the event title
          }

          // store the Event Object in the DOM element so we can get to it later
          $(this).data('eventObject', eventObject)

          // make the event draggable using jQuery UI
          $(this).draggable({
            zIndex        : 1070,
            revert        : true, // will cause the event to go back to its
            revertDuration: 0  //  original position after the drag
          })

        })
      }

      init_events($('#external-events div.external-event'))

      /* initialize the calendar
      -----------------------------------------------------------------*/
      //Date for the calendar events (dummy data)
      var date = new Date()
      var d    = date.getDate(),
      m    = date.getMonth(),
      y    = date.getFullYear()
      $('#calendar').fullCalendar({
        header    : {
          left  : 'prev,next today',
          center: 'title',
          right : 'month,agendaWeek,agendaDay'
        },
        buttonText: {
          today: 'today',
          month: 'month',
          week : 'week',
          day  : 'day'
        },
      })

      /* ADDING EVENTS */
      var currColor = '#3c8dbc' //Red by default
      //Color chooser button
      var colorChooser = $('#color-chooser-btn')
      $('#color-chooser > li > a').click(function (e) {
        e.preventDefault()
        //Save color
        currColor = $(this).css('color')
        //Add color effect to button
        $('#add-new-event').css({ 'background-color': currColor, 'border-color': currColor })
      })
      $('#add-new-event').click(function (e) {
        e.preventDefault()
        //Get value and make sure it is not null
        var val = $('#new-event').val()
        if (val.length == 0) {
          return
        }

        //Create events
        var event = $('<div />')
        event.css({
          'background-color': currColor,
          'border-color'    : currColor,
          'color'           : '#fff'
        }).addClass('external-event')
        event.html(val)
        $('#external-events').prepend(event)

        //Add draggable funtionality
        init_events(event)

        //Remove event from text input
        $('#new-event').val('')
      })
    })
  </script>
  @endsection
  @endsection
