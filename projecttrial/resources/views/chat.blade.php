    	<!DOCTYPE html>
    	<html lang="en">
    	<head>
    		<meta charset="UTF-8">
    		<meta name="csrf-token" content="{{ csrf_token() }}">
    		<title>Chat Room</title>
    		<link rel="stylesheet" href="{{ asset('css/app.css') }}">
    		<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
    		<style>


   
    body
    {
        font-family: 'Open Sans', sans-serif;
        }
    .popup-box {
       background-color: #ffffff;
        border: 1px solid #b0b0b0;
        bottom: 0;
        display: none;
        height: 415px;
       position: absolute;
        right: 70px;
        min-width: 400px;
        font-family: 'Open Sans', sans-serif;
    }
    .round.hollow {
        margin: 40px 0 0;
    }
    .round.hollow a {
        border: 2px solid #EE352E;
        border-radius: 35px;
        color: #EE352E;
        color: #EE352E;
        font-size: 23px;
        padding: 10px 21px;
        text-decoration: none;
        font-family: 'Open Sans', sans-serif;
    }
    .round.hollow a:hover {
        border: 2px solid green;
        border-radius: 35px;
        color: #EE352E;
        color: green;
        font-size: 23px;
        padding: 10px 21px;
        text-decoration: none;
    }
    .popup-box-on {
        display: block !important;
    }
    .popup-box .popup-head {
        background-color: #fff;
        clear: both;
        color: #7b7b7b;
        display: inline-table;
        font-size: 20px;
        padding: 7px 10px;
        width: 100%;
         font-family: Oswald;
    }
    .bg_none i {
        border: 1px solid #EE352E;
        border-radius: 25px;
        color: #EE352E;
        font-size: 17px;
        height: 33px;
        line-height: 30px;
        width: 33px;
    }
    .bg_none:hover i {
        border: 1px solid green;
        border-radius: 25px;
        color: green;
        font-size: 17px;
        height: 33px;
        line-height: 30px;
        width: 33px;
    }
    .bg_none {
        background: rgba(0, 0, 0, 0) none repeat scroll 0 0;
        border: medium none;
    }
    .popup-box .popup-head .popup-head-right {
        margin: 11px 7px 0;
    }

    .simple_round {
        background: #d1d1d1 none repeat scroll 0 0;
        border-radius: 50%;
        color: #4b4b4b !important;
        height: 21px;
        padding: 0 0 0 1px;
        width: 21px;
    }


    .popup-head-right .btn-group {
        display: inline-flex;
    	margin: 0 8px 0 0;
    	vertical-align: top !important;
    }
    .chat-header-button {
        background: transparent none repeat scroll 0 0;
        border: 1px solid #636364;
        border-radius: 50%;
        font-size: 14px;
        height: 30px;
        width: 30px;
    }
    .popup-head-right .btn-group .dropdown-menu {
        border: medium none;
        min-width: 122px;
    	padding: 0;
    }
    .popup-head-right .btn-group .dropdown-menu li a {
        font-size: 12px;
        padding: 3px 10px;
    	color: #303030;
    }


    .list-group{
    				overflow-y: scroll;
    				height: 200px; 
    			}
    		</style>
    	</head>
    <body>
<img src="images/newfinallogo.png" style="background-color:#EE352E; width: 100%;">

    		<div class="container text-center">
    	<div class="row">
    		<h2>Open in chat (popup-box chat-popup)</h2>
            <h4>Click Here</h4>
            <div class="round hollow text-center">
            <a href="#" id="addClass"><span class="glyphicon glyphicon-comment"></span> Open in chat </a>
            </div>
            
            <hr>
            
            MORE :
            <a target="_blank" href="#">Join Private Chat</a>,
             <a  href="/home"> Home  </a>
    	</div>
    </div>
    <div class="popup-box chat-popup" id="qnimate">
        		  <div class="popup-head">
    				
    					  <div class="popup-head-right pull-right">
    						<div class="btn-group">
        								  <button class="chat-header-button" data-toggle="dropdown" type="button" aria-expanded="false">
    									   <i class="glyphicon glyphicon-cog"></i> </button>
    									  <ul role="menu" class="dropdown-menu pull-right">
    										<li><a href="#">Media</a></li>
    										<li><a href="#">Block</a></li>
    										<li><a href="#">Clear Chat</a></li>
    										<li><a href="#">Email Chat</a></li>
    									  </ul>
    						</div>
    						
    						<button data-widget="remove" id="removeClass" class="chat-header-button pull-right" type="button"><i class="glyphicon glyphicon-off"></i></button>
                          </div>
                          <div class="row" id="app">
    				<div class=" col-sm-10 col-sm-offset-1">
    					<li class="list-group-item active">Chat Room <span class="label label-pill label-danger">@{{ numberOfUsers }}</span></li>
    					<div class="label label-pill label-primary">@{{typing}}	</div>
    					<ul class="list-group" v-chat-scroll >
    	 <message
    	 v-for="value, index in chat.message"
    	 :key=value.index
    	 :color=chat.color[index]
    	 :user= chat.user[index]
    	 :time= chat.time[index]
    	 >
    	 	@{{ value }}
    	 </message>
    	</ul>
    	<input type="text" class="form-control" placeholder="Type your message here..." v-model='message' @keyup.enter='send'>
        <div class="btn-footer">
                <button class="bg_none"><i class="glyphicon glyphicon-film"></i> </button>
                <button class="bg_none"><i class="glyphicon glyphicon-camera"></i> </button>
                <button class="bg_none"><i class="glyphicon glyphicon-paperclip"></i> </button>
                <button class="bg_none pull-right"><i class="glyphicon glyphicon-thumbs-up"></i> </button>
                </div>
    				</div>
    			  </div>
    			</div>
    		</div>
    		<script src="{{ asset('js/app.js') }}"></script>
    		<script>
    			 $(function(){
    $("#addClass").click(function () {
              $('#qnimate').addClass('popup-box-on');
                });
              
                $("#removeClass").click(function () {
              $('#qnimate').removeClass('popup-box-on');
                });
      })
    		</script>
    </body>
    	</html>