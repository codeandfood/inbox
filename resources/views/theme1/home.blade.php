 <!-- FlatFy Theme - Andrea Galanti /-->
<!doctype html>
<!--[if lt IE 7]> <html class="no-js ie6 oldie" lang="en"> <![endif]-->
<!--[if IE 7]>    <html class="no-js ie7 oldie" lang="en"> <![endif]-->
<!--[if IE 8]>    <html class="no-js ie8 oldie" lang="en"> <![endif]-->
<!--[if IE 9]>    <html class="no-js ie9" lang="en"> <![endif]-->
<!--[if gt IE 9]><!--> <html> <!--<![endif]-->
<head>
<?php 
$asset = 'resources/assets/theme1/';
$asset1 = 'resources/assets/';
?>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0">
    <meta name="description" content="Flatfy Free Flat and Responsive HTML5 Template ">
    <meta name="author" content="">

    <title>HotelsPondy</title>

    <!-- Bootstrap core CSS -->
    <link href="{{$asset}}css/bootstrap.min.css" rel="stylesheet">
 
    <!-- Custom Google Web Font -->
    <link href="{{$asset}}font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <link href='http://fonts.googleapis.com/css?family=Lato:100,300,400,700,900,100italic,300italic,400italic,700italic,900italic' rel='stylesheet' type='text/css'>
	<link href='http://fonts.googleapis.com/css?family=Arvo:400,700' rel='stylesheet' type='text/css'>
	
    <!-- Custom CSS-->
    <link href="{{$asset}}css/general.css" rel="stylesheet">
	
	 <!-- Owl-Carousel -->
    <link href="{{$asset}}css/custom.css" rel="stylesheet">
	<link href="{{$asset}}css/owl.carousel.css" rel="stylesheet">
    <link href="{{$asset}}css/owl.theme.css" rel="stylesheet">
	<link href="{{$asset}}css/style.css" rel="stylesheet">
	<link href="{{$asset}}css/animate.css" rel="stylesheet">
	
	<!-- Magnific Popup core CSS file -->
	<link rel="stylesheet" href="{{$asset}}css/magnific-popup.css"> 
	
	<script src="{{$asset}}js/modernizr-2.8.3.min.js"></script>  <!-- Modernizr /-->
	<!--[if IE 9]>
		<script src="js/PIE_IE9.js"></script>
	<![endif]-->
	<!--[if lt IE 	<script src="js/PIE_IE678.js"></script>
	<![endif]-->

	<!--[if lt IE 9]>
		<script src="js/html5shiv.js"></script>
	<![endif]-->

</head>

<body id="home">

	<!-- Preloader -->
	<div id="preloader">
		<div id="status"></div>
	</div>
	
	<!-- FullScreen -->
    <div class="intro-header">

    @if (Auth::guest())
    <a href="login" class="btn  btn-lg mybutton_cyano wow fadeIn" data-wow-delay="0.8s" style="float:right;margin:10px;"><span>Sign in</span></a>
	<a href="register" class="btn  btn-lg mybutton_cyano wow fadeIn" data-wow-delay="0.8s" style="float:right;margin:10px;"><span>Register</span></a>
	@endif

	@if (Auth::user())
	<a href="dashboard" class="btn  btn-lg mybutton_cyano wow fadeIn" data-wow-delay="0.8s" style="float:right;margin:10px;"><span>Dashboard</span></a>
	@endif
	


		<div class="col-xs-12 text-center abcen1">
			<h1 class="h1_home wow fadeIn" data-wow-delay="0.4s">HotelsPondy</h1>
			<h3 class="h3_home wow fadeIn" data-wow-delay="0.6s">Find all hotels in Pondy</h3>
			<ul class="list-inline intro-social-buttons">
				<li><a href="https://twitter.com/galantiandrea" class="btn  btn-lg mybutton_cyano wow fadeIn" data-wow-delay="0.8s"><span class="network-name">Twitter</span></a>
				</li>
				<li><a href="https://www.facebook.com/profile.php?id=100011283181723" class="btn  btn-lg mybutton_cyano wow fadeIn" data-wow-delay="0.8s"><span class="network-name">Facebook</span></a>
				</li>
<!-- 				<li id="download" ><a href="#downloadlink" class="btn  btn-lg mybutton_standard wow swing wow fadeIn" data-wow-delay="1.2s"><span class="network-name">Free Download</span></a>
				</li> -->
			</ul>
		</div>    
        <!-- /.container -->
		<div class="col-xs-12 text-center abcen wow fadeIn">
			<div class="button_down "> 
				<a class="imgcircle wow bounceInUp" data-wow-duration="1.5s"  href="#whatis"> <img class="img_scroll" src="{{$asset}}img/icon/circle.png" alt=""> </a>
			</div>
		</div>
    </div>
	
	<!-- NavBar-->
	<nav class="navbar-default" role="navigation">
		<div class="container">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<a class="navbar-brand" href="#home">HotelsPondy</a>
			</div>

			<div class="collapse navbar-collapse navbar-right navbar-ex1-collapse">
				<ul class="nav navbar-nav">
					
					<li class="menuItem"><a href="#whatis">What is?</a></li>
					<li class="menuItem"><a href="#screen">Screenshot</a></li>
					<li class="menuItem"><a href="#Aboutus">About us</a></li>
					<li class="menuItem"><a href="#enquiry">Enquiry</a></li>
					<li class="menuItem"><a href="#credits">Credits</a></li>
					<li class="menuItem"><a href="#contact">Contact</a></li>
				</ul>
			</div>
		   
		</div>
	</nav> 
	
	<!-- What is -->
	<div id="whatis" class="content-section-b" style="border-top: 0">
		<div class="container">

			<div class="col-md-6 col-md-offset-3 text-center wrap_title">
				<h2>What is?</h2>
				<p class="lead" style="margin-top:0">A special thanks to Death.</p>
				
			</div>
			
			<div class="row">
			
				<div class="col-sm-4 wow fadeInDown text-center">
				  <img class="rotate" src="{{$asset}}img/icon/tweet.svg" alt="Generic placeholder image">
				  <h3>Follow Me</h3>
				  <p class="lead">Epsum factorial non deposit quid pro quo hic escorol. Olypian quarrels et gorilla congolium sic ad nauseum. </p>

				  <!-- <p><a class="btn btn-embossed btn-primary view" role="button">View Details</a></p> -->
				</div><!-- /.col-lg-4 -->
				
				<div class="col-sm-4 wow fadeInDown text-center">
				  <img  class="rotate" src="{{$asset}}img/icon/picture.svg" alt="Generic placeholder image">
				   <h3>Gallery</h3>
				   <p class="lead">Epsum factorial non deposit quid pro quo hic escorol. Olypian quarrels et gorilla congolium sic ad nauseum. </p>
				   <!-- <p><a class="btn btn-embossed btn-primary view" role="button">View Details</a></p> -->
				</div><!-- /.col-lg-4 -->
				
				<div class="col-sm-4 wow fadeInDown text-center">
				  <img  class="rotate" src="{{$asset}}img/icon/retina.svg" alt="Generic placeholder image">
				   <h3>Retina</h3>
					<p class="lead">Epsum factorial non deposit quid pro quo hic escorol. Olypian quarrels et gorilla congolium sic ad nauseum. </p>
				  <!-- <p><a class="btn btn-embossed btn-primary view" role="button">View Details</a></p> -->
				</div><!-- /.col-lg-4 -->
				
			</div><!-- /.row -->
				
			<div class="row tworow">
			
				<div class="col-sm-4  wow fadeInDown text-center">
				  <img class="rotate" src="{{$asset}}img/icon/laptop.svg" alt="Generic placeholder image">
				  <h3>Responsive</h3>
				  <p class="lead">Epsum factorial non deposit quid pro quo hic escorol. Olypian quarrels et gorilla congolium sic ad nauseum. </p>
				 <!-- <p><a class="btn btn-embossed btn-primary view" role="button">View Details</a></p> -->
				</div><!-- /.col-lg-4 -->
				
				<div class="col-sm-4 wow fadeInDown text-center">
				  <img  class="rotate" src="{{$asset}}img/icon/map.svg" alt="Generic placeholder image">
				   <h3>Google</h3>
				   <p class="lead">Epsum factorial non deposit quid pro quo hic escorol. Olypian quarrels et gorilla congolium sic ad nauseum. </p>
				   <!-- <p><a class="btn btn-embossed btn-primary view" role="button">View Details</a></p> -->
				</div><!-- /.col-lg-4 -->
				
				<div class="col-sm-4 wow fadeInDown text-center">
				  <img  class="rotate" src="{{$asset}}img/icon/browser.svg" alt="Generic placeholder image">
				   <h3>Bootstrap</h3>
				 <p class="lead">Epsum factorial non deposit quid pro quo hic escorol. Olypian quarrels et gorilla congolium sic ad nauseum. </p>
				  <!-- <p><a class="btn btn-embossed btn-primary view" role="button">View Details</a></p> -->
				</div><!-- /.col-lg-4 -->
				
			</div><!-- /.row -->
		</div>
	</div>
	
	
    <div class="content-section-b"> 
		
		<div class="container">
            <div class="row">
                <div class="col-sm-6 wow fadeInLeftBig">
                     <div id="owl-demo-1" class="owl-carousel">
						<a href="img/iphone.png" class="image-link">
							<div class="item">
								<img  class="img-responsive img-rounded" src="{{$asset}}img/iphone.png" alt="">
							</div>
						</a>
						<a href="img/iphone.png" class="image-link">
							<div class="item">
								<img  class="img-responsive img-rounded" src="{{$asset}}img/iphone.png" alt="">
							</div>
						</a>
						<a href="img/iphone.png" class="image-link">
							<div class="item">
								<img  class="img-responsive img-rounded" src="{{$asset}}img/iphone.png" alt="">
							</div>
						</a>
					</div>       
                </div>
				
                <div class="col-sm-6 wow fadeInRightBig"  data-animation-delay="200">   
                    <h3 class="section-heading">Drag Gallery</h3>
					<div class="sub-title lead3">Lorem ipsum dolor sit atmet sit dolor greand fdanrh<br> sdfs sit atmet sit dolor greand fdanrh sdfs</div>
                    <p class="lead">
						In his igitur partibus duabus nihil erat, quod Zeno commuta rest gestiret. 
						Sed virtutem ipsam inchoavit, nihil ampliusuma. Scien tiam pollicentur, 
						uam non erat mirum sapientiae lorem cupido
						patria esse cariorem. Quae qui non vident, nihilamane umquam magnum ac cognitione.
					</p>

					 <p><a class="btn btn-embossed btn-primary" href="#" role="button">View Details</a> 
					 <a class="btn btn-embossed btn-info" href="#" role="button">Visit Website</a></p>
				</div>  			
			</div>
        </div>
    </div>

    <div class="content-section-a">

        <div class="container">

             <div class="row">
			 
				<div class="col-sm-6 pull-right wow fadeInRightBig">
                    <img class="img-responsive " src="{{$asset}}img/doge.png" alt="">
                </div>
			 
                <div class="col-sm-6 wow fadeInLeftBig"  data-animation-delay="200">   
                    <h3 class="section-heading">Font Awesome & Glyphicon</h3>
                    <p class="lead">A special thanks to Death to the Stock Photo for 
					providing the photographs that you see in this template. 
					</p>
					
					<ul class="descp lead2">
						<li><i class="glyphicon glyphicon-signal"></i> Reliable and Secure Platform</li>
						<li><i class="glyphicon glyphicon-refresh"></i> Everything is perfectly orgainized for future</li>
						<li><i class="glyphicon glyphicon-headphones"></i> Attach large file easily</li>
					</ul>
				</div>           
            </div>
        </div>

    </div>

	<!-- Screenshot -->
	<div id="screen" class="content-section-b">
        <div class="container">
          <div class="row" >
			 <div class="col-md-6 col-md-offset-3 text-center wrap_title ">
				<h2>Screen App</h2>
				<p class="lead" style="margin-top:0">A special thanks to Death.</p>
			 </div>
		  </div>
		    <div class="row wow bounceInUp" >
              <div id="owl-demo" class="owl-carousel">
				
				<a href="img/slide/1.png" class="image-link">
					<div class="item">
						<img  class="img-responsive img-rounded" src="{{$asset}}img/slide/1.png" alt="Owl Image">
					</div>
				</a>
				
               <a href="img/slide/2.png" class="image-link">
					<div class="item">
						<img  class="img-responsive img-rounded" src="{{$asset}}img/slide/2.png" alt="Owl Image">
					</div>
				</a>
				
				<a href="img/slide/3.png" class="image-link">
					<div class="item">
						<img  class="img-responsive img-rounded" src="{{$asset}}img/slide/3.png" alt="Owl Image">
					</div>
				</a>
				
				<a href="img/slide/1.png" class="image-link">
					<div class="item">
						<img  class="img-responsive img-rounded" src="{{$asset}}img/slide/1.png" alt="Owl Image">
					</div>
				</a>
				
               <a href="img/slide/2.png" class="image-link">
					<div class="item">
						<img  class="img-responsive img-rounded" src="{{$asset}}img/slide/2.png" alt="Owl Image">
					</div>
				</a>
				
				<a href="img/slide/3.png" class="image-link">
					<div class="item">
						<img  class="img-responsive img-rounded" src="{{$asset}}img/slide/3.png" alt="Owl Image">
					</div>
				</a>
              </div>       
          </div>
        </div>


	</div>

	<!-- About us -->
    <div id ="Aboutus" class="content-section-a">

        <div class="container">
			
            <div class="row">
			
				<div class="col-sm-6 pull-right wow fadeInRightBig">
                    <img class="img-responsive " src="{{$asset}}img/ipad.png" alt="">
                </div>
				
                <div class="col-sm-6 wow fadeInLeftBig"  data-animation-delay="200">   
                    <h3 class="section-heading">About us</h3>
					<div class="sub-title lead3">We make clients meet hotels<br>You will not regret it.</div>
                    <p class="lead">
                    	Finding a good place to stay for the treat that is Pondicherry can make or break all the potential experiences that you can have.</br>
						Our goal is to satisfy You as best as possible by making sure that You get your desired hotels along with numerous services that will make your experience in Pondicherry worth more than you expected.</br>
						We have contact with many hotels and we can find any hotel to your preference. So just send your desired hotel by the enquiry service that you can find just below and we will immediately start processing your demand.  
					</p>

					 <p><a class="btn btn-embossed btn-primary" href="#" role="button">View Details</a> 
					 <a class="btn btn-embossed btn-info" href="#" role="button">Visit Website</a></p>
				</div>   
            </div>
        </div>
        <!-- /.container -->
    </div>

	
	<!-- Enquiry -->
	<div id="enquiry" class="content-section-c ">
		<div class="container" ng-app="EnquiryApp" ng-controller="EnquiryController">
			<div class="row">
			<div class="col-md-6 col-md-offset-3 text-center white">
				<h2>Enquiry Service</h2>
				<p class="lead" style="margin-top:0">Send the details of the hotel you want.</p>
			 </div>
			<div class="col-md-6 col-md-offset-3 text-center">
				<div class="mockup-content">
						<div class="morph-button wow pulse morph-button-inflow morph-button-inflow-1">
							<button type="button "><span>Send an enquiry</span></button>
							<div class="morph-content">
								<div>
									<div class="content-style-form content-style-form-4 ">
										<h2 class="morph-clone">Enquiry</h2>
										<form>
											<p><label>Name</label><input type="text" ng-model='enquiry.name'/></p>
											<p><label>Email Address</label><input type="text" ng-model='enquiry.email' ng/></p>
											<p><label>Mobile</label><input type="text" ng-model='enquiry.mobile'/></p>
											<p><label>Message</label><textarea ng-model='enquiry.message'></textarea></p>
											<p><button type="submit" ng-click="submitform()">Send</button></p>
											<p style="text-align:center;color:red;font-size:90%;padding:2px"><span ng-show="error">[[ message ]]</span>
											<span ng-show="success">[[ message ]]</span></p>
											<!-- <input type="submit" value="Send"/> -->
										</form>
										<style type="text/css">
											textarea{
												border: none;
												background-color: #f0f0f0;
												padding: 10px;
											    width: 100%;
											    color: #b09a86;
											    font-weight: 300;
											    font-size: 16px;
											}
											input{
											    font-size: 16px !important;
											}
										</style>
									</div>
								</div>
							</div>
						</div>
				</div>
			</div>	
			</div>>
		</div>
	</div>	
	
	<!-- Credits -->
	<div id="credits" class="content-section-a">
		<div class="container">
			<div class="row">
			
			<div class="col-md-6 col-md-offset-3 text-center wrap_title">
				<h2>Credits</h2>
				<p class="lead" style="margin-top:0">A special thanks to Death.</p>
			 </div>
			 
				<div class="col-sm-6  block wow bounceIn">
					<div class="row">
						<div class="col-md-4 box-icon rotate"> 
							<i class="fa fa-desktop fa-4x "> </i> 
						</div>
						<div class="col-md-8 box-ct">
							<h3> Bootstrap </h3>
							<p> Lorem ipsum dolor sit ametconsectetur adipiscing elit. Suspendisse orci quam. </p>
						</div>
				  </div>
			  </div>
			  <div class="col-sm-6 block wow bounceIn">
					<div class="row">
					  <div class="col-md-4 box-icon rotate"> 
						<i class="fa fa-picture-o fa-4x "> </i> 
					  </div>
					  <div class="col-md-8 box-ct">
						<h3> Owl-Carousel </h3>
						<p> Nullam mo  arcu ac molestie scelerisqu vulputate, molestie ligula gravida, tempus ipsum.</p> 
					  </div>
					</div>
			  </div>
		  </div>
		  
		  <div class="row tworow">
				<div class="col-sm-6  block wow bounceIn">
					<div class="row">
						<div class="col-md-4 box-icon rotate"> 
							<i class="fa fa-magic fa-4x "> </i> 
						</div>
						<div class="col-md-8 box-ct">
							<h3> Codrops </h3>
							<p> Lorem ipsum dolor sit ametconsectetur adipiscing elit. Suspendisse orci quam. </p>
						</div>
				  </div>
			  </div>
			  <div class="col-sm-6 block wow bounceIn">
					<div class="row">
					  <div class="col-md-4 box-icon rotate"> 
						<i class="fa fa-heart fa-4x "> </i> 
					  </div>
					  <div class="col-md-8 box-ct">
						<h3> Lorem Ipsum</h3>
						<p> Nullam mo  arcu ac molestie scelerisqu vulputate, molestie ligula gravida, tempus ipsum.</p> 
					  </div>
					</div>
			  </div>
		  </div>
		</div>
	</div>
	
	<!-- Banner Download -->
	<div id="downloadlink" class="banner">
		<div class="container">
			<div class="row">
				<div class="col-md-6 col-md-offset-3 text-center wrap_title">
				<h2>Download Free</h2>
				<p class="lead" style="margin-top:0">Pay with a Tweet</p>
				<p><a class="btn btn-embossed btn-primary view" role="button">Free Download</a></p> 
			 </div>
			</div>
		</div>
	</div>
	
	<!-- Contact -->
	<div id="contact" class="content-section-a">
		<div class="container">
			<div class="row">
			
			<div class="col-md-6 col-md-offset-3 text-center wrap_title">
				<h2>Contact Us</h2>
				<p class="lead" style="margin-top:0">For any questions on our services.</p>
			</div>
			
			<form role="form" action="" method="post" >
				<div class="col-md-6">
					<div class="form-group">
						<label for="InputName">Your Name</label>
						<div class="input-group">
							<input type="text" class="form-control" name="InputName" id="InputName" placeholder="Enter Name" required>
							<span class="input-group-addon"><i class="glyphicon glyphicon-ok form-control-feedback"></i></span>
						</div>
					</div>
					
					<div class="form-group">
						<label for="InputEmail">Your Email</label>
						<div class="input-group">
							<input type="email" class="form-control" id="InputEmail" name="InputEmail" placeholder="Enter Email" required  >
							<span class="input-group-addon"><i class="glyphicon glyphicon-ok form-control-feedback"></i></span>
						</div>
					</div>
					
					<div class="form-group">
						<label for="InputMessage">Message</label>
						<div class="input-group">
							<textarea name="InputMessage" id="InputMessage" class="form-control" rows="5" required></textarea>
							<span class="input-group-addon"><i class="glyphicon glyphicon-ok form-control-feedback"></i></span>
						</div>
					</div>

					<input type="submit" name="submit" id="submit" value="Submit" class="btn wow tada btn-embossed btn-primary pull-right">
				</div>
			</form>
			
			<hr class="featurette-divider hidden-lg">
				<div class="col-md-5 col-md-push-1 address">
					<address>
					<h3>Office Location</h3>
					<p class="lead"><a href="https://www.google.co.in/maps/place/Natura+Web+Solutions/@11.943014,79.830072,15z/data=!4m2!3m1!1s0x0:0x67bed306fece1585?sa=X&ved=0ahUKEwipkpSi4uXNAhUBNY8KHcjqCAQQ_BIIXjAK">Natura Web Solutions<br>
					Ponniamman DP Near, 18, Senganniamman Koil St, Samipillai Thottam, Muthialpet, Puducherry, 605003
					</a><br>
					Phone: 0413-2211045<br>
					<!-- Fax: XXX-XXX-YYYY --></p>
					</address>

					<h3>Social</h3>
					<li class="social"> 
					<a href="#"><i class="fa fa-facebook-square fa-size"> </i></a>
					<a href="#"><i class="fa  fa-twitter-square fa-size"> </i> </a> 
					<a href="#"><i class="fa fa-google-plus-square fa-size"> </i></a>
					<a href="#"><i class="fa fa-flickr fa-size"> </i> </a>
					</li>
				</div>
			</div>
		</div>
	</div>
	
	
	
    <footer>
      <div class="container">
        <div class="row">
          <div class="col-md-7">
            <h3 class="footer-title">Follow Me!</h3>
            <p>Vuoi ricevere news su altri template?<br/>
              Visita Andrea Galanti.it e vedrai tutte le news riguardanti nuovi Theme!<br/>
              Go to: <a  href="http://andreagalanti.it" target="_blank">andreagalanti.it</a>
            </p>
			
			<!-- LICENSE -->
			<a rel="cc:attributionURL" href="http://www.andreagalanti.it/flatfy"
		   property="dc:title">Flatfy Theme </a> by
		   <a rel="dc:creator" href="http://www.andreagalanti.it"
		   property="cc:attributionName">Andrea Galanti</a>
		   is licensed to the public under 
		   <BR>the <a rel="license"
		   href="http://creativecommons.org/licenses/by-nc/3.0/it/deed.it">Creative
		   Commons Attribution 3.0 License - NOT COMMERCIAL</a>.
		   
	   
          </div> <!-- /col-xs-7 -->

          <div class="col-md-5">
            <div class="footer-banner">
              <h3 class="footer-title">Flatfy Theme</h3>
              <ul>
                <li>12 Column Grid Bootstrap</li>
                <li>Form Contact</li>
                <li>Drag Gallery</li>
                <li>Full Responsive</li>
                <li>Lorem Ipsum</li>
              </ul>
              Go to: <a href="http://andreagalanti.it/flatfy" target="_blank">andreagalanti.it/flatfy</a>
            </div>
          </div>
        </div>
      </div>
    </footer>

    <!-- JavaScript -->
    <script src="{{$asset}}js/jquery-1.10.2.js"></script>
    <script src="{{$asset}}js/bootstrap.js"></script>
	<script src="{{$asset}}js/owl.carousel.js"></script>
	<script src="{{$asset}}js/script.js"></script>
	<script src="{{$asset1}}js/angular.1.5.7.min.js"></script>
	<script src="public/app/app.js"></script>
	<script src="public/app/controllers/enquiry.js"></script>
	<!-- StikyMenu -->
	<script src="{{$asset}}js/stickUp.min.js"></script>
	<script type="text/javascript">
	  jQuery(function($) {
		$(document).ready( function() {
		  $('.navbar-default').stickUp();
		  
		});
	  });
	
	</script>
	<!-- Smoothscroll -->
	<script type="text/javascript" src="{{$asset}}js/jquery.corner.js"></script> 
	<script src="{{$asset}}js/wow.min.js"></script>
	<script>
	 new WOW().init();
	</script>
	<script src="{{$asset}}js/classie.js"></script>
	<script src="{{$asset}}js/uiMorphingButton_inflow.js"></script>
	<!-- Magnific Popup core JS file -->
	<script src="{{$asset}}js/jquery.magnific-popup.js"></script> 
</body>

</html>
