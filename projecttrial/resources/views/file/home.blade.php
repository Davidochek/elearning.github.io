<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	 <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
       <link rel="stylesheet" href="{{asset('font-awesome-4.7.0/css/font-awesome.min.css')}}">
       <script src="/js/bootstrap.js"></script>
       <link rel="stylesheet" href="{{asset('css/bootstrap.css') }}">
</head>
<body>
	<br>
	<div class="col-md-offset-4 col-md-4">
		<h1>UPLOAD</h1>
	<form action="/store" enctype="multipart/form-data" method="post">
		{{csrf_field()}}
		<input type="file" name="image">
		<br>
		<input type="submit" value="UPLOAD">
		
	</form>
	</div>
</body>
</html>