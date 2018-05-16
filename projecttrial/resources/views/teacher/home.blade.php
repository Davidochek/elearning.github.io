            @extends('layouts.appt')
            @section('headSection')

            <link rel="stylesheet" href="{{asset('adminn/bower_components/fullcalendar/dist/fullcalendar.min.css')}}">
            {{-- <link rel="stylesheet" href="{{asset('adminn/dist/css/AdminLTE.min.css')}}"> --}}
            {!! Charts::styles() !!}
            @endsection
            <style>
            .images{
              opacity: 0.2; 
              position: absolute; 
              z-index: 0; 
              border-radius: 5px;
            }
          </style>

          @section('content')
          <div class="container">
           <style>
           #nav2 {
            z-index: 100;
            position: relative;
            display: block;
          }
          a#nav2:hover {
            background-position: 0 -32px;
          }
          @media screen and (max-width: 800px) and (min-width: 50px ){
            .images{
              height: 860px;
            }
          }
        </style>
        <div class="row">
         <div class="panel-body">
          @if (session('status'))
          <div class="alert alert-success">
            {{ session('status') }}
          </div>
          @endif
          <div class="col-md-3">
            <div class="panel panel-info">
              <div class="panel-heading">
                <center><div class="panel-title">Welcome Teacher</div></center> 
              </div>
              <div class="panel-body">
                <ul class="list-group">
                  <li class="list-group-item"> <a href="#">Create Your Class</a></li>
                  <li class="list-group-item"> <a href="#">Share to class</a></li>
                  <li class="list-group-item"> <a href="#">Post Your Story</a></li>
                  <li class="list-group-item"> <a href="#">Update Your Profile</a></li>
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
        <div class="col-md-9">
          <div class="nav-tabs-custom">
            <ul class="nav nav-tabs">
              <li class="active"><a href="#welcome" data-toggle="tab">Welcome</a></li>
              <li><a href="#library" data-toggle="tab">Library</a></li>
              <li><a href="#questions" data-toggle="tab">Questions</a></li>
              <li><a href="#perfomance" data-toggle="tab">Perfomance</a></li>
            </ul>
            <div class="tab-content">
             <div class="active tab-pane" id="welcome">

              <img src="{{ asset('images/training-3207841_1920.jpg') }}" class="images" alt=""  width="100%" style="opacity: 0.2; position: absolute; z-index: 0; border-radius: 5px; ">
              <div class="welcome text-center">
                <h2 class="cover-heading">Create interactive class for your students</h2>
                <p class="lead">This is the place where communication is enhanced between instructors and students, and among students. Place where delivery of lectures is enhanced and at any time there is asynchronous access to course materials.</p>
                <div id="nav2">
                 <a href="{{ url('/class') }}" class="btn btn-success">Create</a>
               </div>
               <hr>
               <h2 class="cover-heading">Share course materials to Your Class</h2>
               <p class="lead">This is the place where communication is enhanced between instructors and students, and among students. Place where delivery of lectures is enhanced and at any time there is asynchronous access to course materials.</p>
               <div id="nav2">
                <a href="" class="btn btn-success">Library</a>
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
                    <div class="panel-title">Send Notes</div>
                  </div>
                  <div class="panel-body">
                    @if (count($errors)>0)
                    <div class="alert alert-danger">
                      <button type="button" class="close" data-dismiss="alert">&times;</button>
                      @foreach ($errors->all() as $error)
                      <h4>{{ $error}}</h4>
                      @endforeach 
                    </div>
                    @endif  
                    @if (session()->has('mess'))
                    <div class="alert alert-success">
                      <button type="button" class="close" data-dismiss="alert">&times;</button>
                      {{session()->get('mess')}}
                    </div>
                    @endif
                    <form action="{{url('library')}}" method="post" enctype="multipart/form-data">
                      {{csrf_field()}}
                      <div class="form-group">
                        <label for="notesdescription" class="">Notes Description</label>
                        <textarea class="form-control" placeholder="i.e COM420" name="notesdescription" id="notesdescription" cols="20" rows="2"></textarea>
                      </div>
                      <div class="form-group">
                        <label for="notes"><i class="fa fa-upload"></i>Upload Notes</label>
                        <input type="file" id="notes" name="notes">
                      </div>
                      <div class="form-group"> 
                        <button type="submit" class="btn btn-primary">Post the Notes</button>
                      </div>
                    </form>
                  </div>
                </div>
              </div>
              <div class="col-md-6">
               <div class="panel panel-success">
                <div class="panel-heading">
                  <div class="panel-title">Submitted Assignments</div>
                </div>
                <div class="panel-body">
                  @foreach ($libraries as $library)
                  <p> {{$loop->index +1}}. {{$library->description}}  &nbsp;&nbsp; &nbsp;<a href="/storage/{{$library->assignment}}"  class="btn btn-success" ><i class="fa fa-download">Assignment</i></a></p>
                  @endforeach
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="tab-pane" id="questions">
          <div class="">
            <div class="jumbotron" style="padding: 5px 15px 5px 15px">
              <h3><i class="fa fa-user"></i>  {{ucfirst(Auth::user()->name).' '.ucfirst(Auth::user()->lastname)}}</h3>
              <h2>Check for the new questions from your class </h2>
            </div>
            <div id="around" class="pre-scrollable" style="height:400px; background-color:white;">
             @foreach ( $questions as $question)
             @if (Auth::user()->school == $question->school)
             @if ($question->answer== '')
             <div class="alert-info">  
               <p class="list-group-item list-group-item-info" style="padding-bottom: 17px;"><strong><a href="/teacher/home/{{ $question->id}}/edit">A new question</a></strong>
                <br>
                <span class="pull-right">{{$question->created_at->diffForHumans()}} </span>
                <span class="pull-left">Asked by {{ucfirst($question->name)}}</span>
              </p>
            </div>
            @else
            <div class="alert-warning">  
             <p class="list-group-item list-group-item-warning" style="padding-bottom: 17px;"><strong><a href="/teacher/home/{{ $question->id}}/edit">{{ ucfirst($question->question)}}</a></strong>
              <br>
              <span class="pull-right">{{$question->updated_at->diffForHumans()}} </span>
              <span class="pull-left">Asked by {{ucfirst($question->name)}}</span>
            </p>
          </div>
          @endif
          @endif
          @endforeach   
        </div> 
      </div>
    </div>
    <div class="tab-pane" id="perfomance">
     {!! $chart->html() !!}
   </div>
 </div>
</div>
</div>
</div>
</div>
</div>
<br>
<br>
@section('footerSection')
{!! Charts::scripts() !!}
{!! $chart->script() !!}
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
