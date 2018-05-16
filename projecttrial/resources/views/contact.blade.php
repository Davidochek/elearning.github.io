<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
       <link rel="stylesheet" href="{{asset('font-awesome-4.7.0/css/font-awesome.min.css')}}">
       <script src="/js/bootstrap.js"></script>
       <link rel="stylesheet" href="{{asset('css/bootstrap.css') }}">
       <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto">
	<title>Contact</title>
	<style>
		#contact{
    background-color:#f1f1f1;
    font-family: 'Roboto', sans-serif;
}
#contact .well{
    margin-top:30px;
    border-radius:0;
}

#contact .form-control{
    border-radius: 0;
    border:2px solid #1e1e1e;
}

#contact button{
    border-radius:0;
    border:2px solid #1e1e1e;
}

#contact .row{
    margin-bottom:30px;
}

@media (max-width: 768px) { 
    #contact iframe {
        margin-bottom: 15px;
    }
    
}
	</style>
</head>
<body>
	<section id="contact">
    <div class="row">
       <div class="col-md-12">
            <img src="{{ asset('images/newfinallogo.png') }}" class="img-responsive" style="background-color:#EE352E;">
        </div>
    </div>
  <div class="container">
    <div class="well well-sm">
      <h3><strong>Contact Us</strong></h3>
    </div>
	<div class="row">
	  <div class="col-md-7">
        <iframe src="https://www.google.com/maps/embed?pb=!1m10!1m8!1m3!1d3736489.7218514383!2d90.21589792292741!3d23.857125486636733!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2sbd!4v1506502314230" width="100%" height="315" frameborder="0" style="border:0" allowfullscreen></iframe>
      </div>

      <div class="col-md-5">
          <h4><strong>Get in Touch</strong></h4>
        <form>
          <div class="input-group">
                    <div class="input-group-addon">
                      <i class="fa fa-user"></i>
                            </div>
                    <input type="text" class="form-control" placeholder="Enter your name" name="">
                        </div><br>
                        <div class="input-group">
                              <div class="input-group-addon">
                                <i class="fa fa-envelope"></i>
                            </div>
                            <input type="text" class="form-control" placeholder="Enter email" name="">
                        </div><br>
          <div class="input-group">
                              <div class="input-group-addon">
                      <i class="fa fa-phone"></i>                      
                    </div>
                    <input type="tel" class="form-control" name="" value="" placeholder="Phone">
                  </div><br>
          <div class="form-group">
                  <div class="input-group">
                    <div class="input-group-addon">
                      <i class="fa fa-comment fa-2"></i>                
                    </div>                  
                    <textarea class="form-control" placeholder="Enter your message here"></textarea>
                  </div>                                    
                </div>
                <button class="btn btn-default" type="submit" name="button">
              <i class="btn btn-default btn-primary fa fa-paper-plane-o" aria-hidden="true"></i> CONTACT US
          </button>
          </form>
                      </div>
        
      </div>
    </div>
    
<div class="well well-sm">
  <div class="col-md-offset-5"  >
                        <p style="color:black;">
                            <strong><i class="fa fa-map-marker"></i> Address</strong><br>
                            1216/Narok University, Kenya(Nairobi)
                        </p>
                        <p style="color:#black;"><strong><i class="fa fa-phone"></i> Phone Number</strong><br>
                            (+254)711439698</p>
                        <p style="color:#black;">
                            <strong><i class="fa fa-envelope"></i>  Email Address</strong><br>
                            davidkiprono4@gmail.com</p>
                        <p></p>
                        </div>
                    </div>

    
  </div>
</section>
</body>
</html>