
<!DOCTYPE html>
<!--[if lt IE 7]>      <html lang="en" class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html lang="en" class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html lang="en" class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html lang="en" class="no-js"> <!--<![endif]-->
    <head>

    	<!-- meta character set -->
        <meta charset="utf-8">
		<!-- Always force latest IE rendering engine or request Chrome Frame -->
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title>Pragyan 16</title>		
		<!-- Meta Description -->
        <meta name="description" content="Pragyan 2016">
        <meta name="keywords" content="Pragyan, Delta Delta Force">
        <meta name="author" content="Delta Force">
		
		<!-- Mobile Specific Meta -->
        <meta name="viewport" content="width=device-width, initial-scale=1">
		
		<!-- CSS
		================================================== -->
		
		<!-- <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,700' rel='stylesheet' type='text/css'> -->
		<!-- Fontawesome Icon font -->
        <link rel="stylesheet" href="{{ asset('/css/font-awesome.min.css') }}">
		<!-- bootstrap.min -->
        <link rel="stylesheet" href="{{ asset('/css/jquery.fancybox.css') }}">
		<!-- bootstrap.min -->
        <link rel="stylesheet" href="{{ asset('/css/bootstrap.min.css') }}">
		<!-- bootstrap.min -->
        <link rel="stylesheet" href="{{ asset('/css/owl.carousel.css') }}">
		<!-- bootstrap.min -->
        <link rel="stylesheet" href="{{ asset('/css/slit-slider.css') }}">
		<!-- bootstrap.min -->
        <link rel="stylesheet" href="{{ asset('/css/animate.css') }}">
		<!-- Main Stylesheet -->
        <link rel="stylesheet" href="{{ asset('/css/main.css') }}">

        <link rel="stylesheet" href="{{ asset('/css/scedule.css') }}">
        
		<!-- Modernizer Script for old Browsers -->
        <script src="{{ asset('/js/modernizr-2.6.2.min.js') }}"></script>
		<script>var base_url = "{{ url('/') }}";</script>
		<!-- Essential jQuery Plugins
		================================================== -->
		<!-- Main jQuery -->
        <script src="{{ asset('/js/jquery-1.11.1.min.js') }}"></script>
		<!-- Twitter Bootstrap -->
        <script src="{{ asset('/js/bootstrap.min.js') }}"></script>
        <script type="text/javascript">
		    $(document).ready(function()
		    {
		        $(".board").click(function()
		        {
		            var x = $(this).data('id');

		            $("#myModal").modal('show');
		            $("#score_id").val(x);
		            $("#save").click(function()
		            {
		            	   $("#score_form").submit();
		            });
		        });
		    });
		  </script>

		<!-- Single Page Nav 
        <script src="{{ asset('/js/jquery.singlePageNav.min.js') }}"></script>
		-->
		<!-- jquery.fancybox.pack -->
        <script src="{{ asset('/js/jquery.fancybox.pack.js') }}"></script>
		<!-- Owl Carousel -->
        <script src="{{ asset('/js/owl.carousel.min.js') }}"></script>
        <!-- jquery easing -->
        <script src="{{ asset('/js/jquery.easing.min.js') }}"></script>
        <!-- Fullscreen slider -->
        <script src="{{ asset('/js/jquery.slitslider.js') }}"></script>
        <script src="{{ asset('/js/jquery.ba-cond.min.js') }}"></script>
		<!-- onscroll animation -->
        <script src="{{ asset('/js/wow.min.js') }}"></script>
		<!-- Custom Functions -->
        <script src="{{ asset('/js/main.js') }}"></script>
        <script type="text/javascript">
 		$(document).ready(function() {
		$(".fancybox").fancybox();
		});
		</script>
		
    </head>
	
<body id="body">
		<!-- preloader -->
		<div id="preloader">
            <div class="loder-box">
            	<div class="battery"></div>
            </div>
		</div>
		<!-- end preloader -->

        <!--
        Fixed Navigation
        ==================================== -->
        <header id="navigation" class="navbar-inverse navbar-fixed-top animated-header">
            <div class="container">
                <div class="navbar-header">
                    <!-- responsive nav button -->
					<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
						<span class="sr-only">Toggle navigation</span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
                    </button>
					<!-- /responsive nav button -->
					
					<!-- logo -->
					<h1 class="navbar-brand">
						<a href="{{url('/')}}">Pragyan 16</a>
					</h1>
					<!-- /logo -->
                </div>

				<!-- main nav -->
                <nav class="collapse navbar-collapse navbar-right" role="navigation">
                    <ul id="nav" class="nav navbar-nav">
	                   	@if (Session::has('user_name'))
	                        <li><a href="#">{{Session::get('user_name')}}</a></li>
	                        <li><a href="{{ url('/register') }}">Register</a></li>
	                        <li><a href="{{ url('/logout') }}">Logout</a></li>
	                    @elseif (Session::has('admin_login'))
	                    	<li><a href="{{ url('/admin/home') }}">Admin Home</a></li>
	                    	<li><a href="{{ url('/logout') }}">Logout</a></li>
	                    @else
	                        <li><a id="loginbtn" href="{{ url('login') }}">Log In</a></li>
	                    	<li><a id="adminloginbtn" href="{{ url('admin/login') }}">Admin Log In</a></li>
						@endif
      <!--                   <li><a href="#portfolio">portfolio</a></li>
                        <li><a href="#testimonials">Testimonial</a></li>
                        <li><a href="#price">price</a></li>
                        <li><a href="#contact">Contact</a></li> -->
                    </ul>
                </nav>
				<!-- /main nav -->
				
            </div>
        </header>
        <!--
        End Fixed Navigation
        ==================================== -->
		
		<main class="site-content" role="main">
		
        <!--
        Home Slider
        ==================================== -->
		
		<section id="home-slider">
            <div id="slider" class="sl-slider-wrapper">

				<div class="sl-slider">
				
					<div class="sl-slide" data-orientation="horizontal" data-slice1-rotation="-25" data-slice2-rotation="-25" data-slice1-scale="2" data-slice2-scale="2">

						<div class="bg-img bg-img-1"></div>

						<div class="slide-caption">
                            <div class="caption-content">
                                <h2 class="animated fadeInDown">Pragyan 2016</h2>
                                <span class="animated fadeInDown">Inter Hostel Technical Tournament</span>
                                <!-- <a href="{{ url('/register') }}" class="btn btn-blue btn-effect">Participate</a> -->
                            </div>
                        </div>
						
					</div>
					
					<div class="sl-slide" data-orientation="vertical" data-slice1-rotation="10" data-slice2-rotation="-15" data-slice1-scale="1.5" data-slice2-scale="1.5">
					
						<div class="bg-img bg-img-2"></div>
						<div class="slide-caption">
                            <div class="caption-content">
                                <h2>Pragyan 2016</h2>
                                <span>Inter Hostel Technical Tournament</span>
                                <!-- <a href="{{ url('/register') }}" class="btn btn-blue btn-effect">Participate</a> -->
                            </div>
                        </div>
						
					</div>
					
					<div class="sl-slide" data-orientation="horizontal" data-slice1-rotation="3" data-slice2-rotation="3" data-slice1-scale="2" data-slice2-scale="1">
						
						<div class="bg-img bg-img-3"></div>
						<div class="slide-caption">
                            <div class="caption-content">
                                <h2>Pragyan 2016</h2>
                                <span>Inter Hostel Technical Tournament</span>
                                <!-- <a href="{{ url('/register') }}" class="btn btn-blue btn-effect">Participate</a> -->
                            </div>
                        </div>

					</div>

				</div><!-- /sl-slider -->

                <!-- 
                <nav id="nav-arrows" class="nav-arrows">
                    <span class="nav-arrow-prev">Previous</span>
                    <span class="nav-arrow-next">Next</span>
                </nav>
                -->
                
                <nav id="nav-arrows" class="nav-arrows hidden-xs hidden-sm visible-md visible-lg">
                    <a href="javascript:;" class="sl-prev">
                        <i class="fa fa-angle-left fa-3x"></i>
                    </a>
                    <a href="javascript:;" class="sl-next">
                        <i class="fa fa-angle-right fa-3x"></i>
                    </a>
                </nav>
                

				<nav id="nav-dots" class="nav-dots visible-xs visible-sm hidden-md hidden-lg">
					<span class="nav-dot-current"></span>
					<span></span>
					<span></span>
				</nav>

			</div><!-- /slider-wrapper -->
		</section>
		
        <!--
        End Home SliderEnd
        ==================================== -->
		<section id="testimonials" class="parallax">
				<div class="overlay">
					<div class="container">
						<div class="row">
						
							<div class="sec-title text-center white wow animated fadeInDown">
								<h2>Pragyan 2016 Inter Hostel Technical Tournament</h2>
							</div>
							
							<div id="testimonial" class=" wow animated fadeInUp">
								<div class="testimonial-item text-center">
									<!-- <img src="img/member-1.jpg" alt="Our Clients"> -->
									<br>
									<div class="clearfix">
									
										<span></span>
										<p style="font-size:1.2em"> First year into college. Boundless enthusiasm and passion to discover. A tournament that gives this enthusiasm a release and a platform for the technical inquisitiveness in you.
Pragyan 16 presents the Inter Hostel Tournament 2015. A series of contests exclusively for first years.
This tournament consists of a splash of every flavour of Pragyan. Events are designed to cater to every interest and give the newest members of NIT Trichy a glimpse of Pragyan will hold for them.</p>
									
									</div>
								</div>
								<!-- <div class="testimonial-item text-center">
									<img src="img/member-1.jpg" alt="Our Clients">
									<div class="clearfix">
										<span>Katty Flower</span>
										<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>
									</div>
								</div>
								<div class="testimonial-item text-center">
									<img src="img/member-1.jpg" alt="Our Clients">
									<div class="clearfix">
										<span>Katty Flower</span>
										<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>
									</div>
								</div> -->
							</div>
						
						</div>
					</div>
				</div>
			</section>
			

			<!-- Service section -->
			<section id="service">
			<!-- <section id="about"> -->
				<div class="container">
					<div class="row">
					
						<div class="sec-title text-center">
							<h2 style="font-size:3em; color:dark-blue;  " class="wow animated bounceInLeft">Events</h2>
							<p style="font-size:2.5em" class="wow animated bounceInRight">8 Exciting events!</p>
						</div>
						
						<div class="col-md-3 col-sm-6 col-xs-12 text-center wow animated zoomIn">
							<div class="service-item">
								<div class="service-icon">
									<a href="{{asset('/pdfs/1.pdf')}}" target="_blank"><i class="fa fa-android fa-3x"></i></a>
								</div>
								<h3>Grab To Smash</h3>
								<p>Gain access to smash your opponents by grabbing your powers.</p>
							</div>
						</div>
					
						<div class="col-md-3 col-sm-6 col-xs-12 text-center wow animated zoomIn" data-wow-delay="0.3s">
							<div class="service-item">
								<div class="service-icon">
								<a href="{{asset('/pdfs/2.pdf')}}" target="_blank">
									<i class="fa fa-bolt fa-3x" onclick="$.fancybox({});"></i></a>
								</div>
								<h3>Electrolution</h3>
								<p>Work on some of the most cutting-edge technologies in the world of elect
ronics and
be amazed at what you are capable of</p>
							</div>
						</div>
					
						<div class="col-md-3 col-sm-6 col-xs-12 text-center wow animated zoomIn" data-wow-delay="0.6s">
							<div class="service-item">
								<div class="service-icon">
								<a href="{{asset('/pdfs/3.pdf')}}" target="_blank">
									<i class="fa fa-cube fa-3x"></i></a>
								</div>
								<h4>Pragyan Design Challenge</h4>
								<p>Unleash your engineering skills, creativity and intuition, and structure your ideas for
the given problem statement and present it by a drawing/ sketchup/ 3D Modelling  </p>
							</div>
						</div>
					
						<div class="col-md-3 col-sm-6 col-xs-12 text-center wow animated zoomIn" data-wow-delay="0.9s">
							<div class="service-item">
								<div class="service-icon">
								<a href="{{asset('/pdfs/4.pdf')}}" target="_blank">
									<i class="fa fa-heart fa-3x"></i></a>
								</div>
								
								<h3>Yaconai</h3>
								<p>The main idea/aim of this Event is to elevate/bring-out some of the existing problems wi
thin the
college using Existing Technologies which are feasible at the same time. </p>							
							</div>
						</div>
					</div>
					<br><br>
					<br><br>
					<div class="row">			
						
						<div class="col-md-3 col-sm-6 col-xs-12 text-center wow animated zoomIn">
							<div class="service-item">
								<div class="service-icon">
								<a href="{{asset('/pdfs/5.pdf')}}" target="_blank">	<i class="fa fa-code fa-3x"></i>
								</a></div>
								<h3>Bytecode junior</h3>
								<p>ByteCode Junior is an online algorithm programming conte
st. The contest tests your skills in Algorithms and Data
Structures. </p>
							</div>
						</div>
					
						<div class="col-md-3 col-sm-6 col-xs-12 text-center wow animated zoomIn" data-wow-delay="0.3s">
							<div class="service-item">
								<div class="service-icon">
								<a href="{{asset('/pdfs/6.pdf')}}" target="_blank">	<i class="fa fa-users fa-3x"></i>
								</a></div>
								<h3>The Ultimate Manager</h3>
								<p>A fun filled, creative and challenging event, where we wil
l test you on your business acumen,
creativity, “thinking-outside-the-box” capabilities and g
eneral awareness. </p>
							</div>
						</div>
					
						<div class="col-md-3 col-sm-6 col-xs-12 text-center wow animated zoomIn" data-wow-delay="0.6s">
							<div class="service-item">
								<div class="service-icon">
								<a href="{{asset('/pdfs/7.pdf')}}" target="_blank">	<i class="fa fa-rocket fa-3x"></i>
								</a></div>
								<h3>Water Rocket</h3>
								<p>Take your first big step to propel yourself into the world of aerodynamics!</p>
							</div>
						</div>
					
						<div class="col-md-3 col-sm-6 col-xs-12 text-center wow animated zoomIn" data-wow-delay="0.9s">
							<div class="service-item">
								<div class="service-icon">
								<a href="{{asset('/pdfs/8.pdf')}}" target="_blank">
									<i class="fa fa-smile-o fa-3x"></i></a>
								</div>
								
								<h3>Trollphy</h3>
								<p> Trollphy event is for those w
ho want everyone to have a good laugh with humorous memes
on
physics/physicists. </p>							
							</div>
						</div>
					</div>

					<div class="row" style="margin-top: 50px">
						<h2 style="padding-top: 20px; padding-bottom: 0px; text-align: center"> SCHEDULE</h2>
						<div class="col-md-6">
							<h4 style="padding: 10px; padding-bottom: 0px; text-align: center">Day 1</h4>
							<h4 style="padding-bottom: 10px; text-align: center">(Date: 28-11-2015)</h4>
					 		<div class="table-responsive">
							<table  id="my-table" class="table table-striped" >
							  <thead>
							    <tr>
							      <th>EVENT</th>
							      <th>TIME</th>
							      <th>VENUE</th>
							    </tr>
							  </thead>
							  <tbody>
							    <tr>
							      <td>The Ultimate Manager</td>
							      <td>10 am to 3 pm</td>
							      <td>A2</td>
							    </tr>
							    <tr>
							      <td>Electrolution</td>
							      <td>10 am to 4 pm</td>
							      <td>LHC / Orion</td>
							    </tr>
							    <tr>
							      <td>PDC</td>
							      <td>2 pm to 5 pm</td>
							      <td>A11</td>
							    </tr>
							    <tr>
							      <td>Bytecode Junior</td>
							      <td>5:30 pm to 8:30 pm</td>
							      <td>-</td>
							    </tr>
							  </tbody>
							</table>
							</div>
						</div>
						<div class="col-md-6">
						<h4 style="padding: 10px; padding-bottom: 0px; text-align: center">Day 2</h4>
						<h4 style="padding-bottom: 10px; text-align: center">(Date: 29-11-2015)</h4>
						<div class="table-responsive">
							<table  id="my-table" class="table table-striped" >
						  <thead>
						    <tr>
						      <th>EVENT</th>
						      <th>TIME</th>
						      <th>VENUE</th>
						    </tr>
						  </thead>
						  <tbody>
						    <tr>
						    	<td>Grab to Smash</td>
						      <td>10 am to 4 pm</td>
						      <td>Barn Hall</td>
						    </tr>
						    <tr>
						      <td>Yocanai</td>
						      <td>10 am to 1 pm</td>
						      <td>A11</td>
						    </tr>
						    <tr>
						      <td>Water Rocket</td>
						      <td>9:30 to 12:30 pm</td>
						      <td>CEESAT Ground</td>
						    </tr>
						    <tr>
						      <td>TrollPhy (2nd round)</td>
						      <td>2 pm to 4 pm</td>
						      <td>A11</td>
						    </tr>
						    <tr>
						    	<td>Validiction</td>
						    	<td>5:30 pm</td>
						    	<td>EEE Audi</td>
						    </tr>
						    </tbody>
						</table>
						</div>
						</div>
					</div>
					<div class="row" style="margin-top:50px">
					<h2 style="padding-top: 20px; padding-bottom: 0px; text-align: center">Score board</h2>
						<div id="myModal" class="modal fade" role="dialog">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title">Modal Header</h4>
              </div>
              <div class="modal-body">
                <form id="score_form" class="form-horizontal" method="POST" action="{{ url('/scores') }}">
                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                    <label>First</label> : <input type="text" name="first" id="first"/><br/>
                    <label>Second</label>: <input type="text" name="second" id="second"/><br/>
                    <label>Third</label> : <input type="text" name="third" id="third"/><br/>
                    <input type="hidden" id="score_id" name="id" value="" />
                </form>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-default" id="save" data-dismiss="modal">Save</button>
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
              </div>
            </div>

          </div>
        </div>

    <div class="table-responsive">
      <table class="table table-striped">
        <thead>
          <th>Event</th>
          <th>First Place</th>
          <th>Second Place</th>
          <th>Third Place</th>
        </thead>
        <tbody>
          <tr>
            <td>Grab To Smash</td>
            <td id="fisrt1">{{ $scores[0]->first }}</td>
            <td id="second1">{{ $scores[0]->second }}</td>
            <td id="third1">{{ $scores[0]->third }}</td>
            <td>
            <?php 
            if(Session::has('admin_login')) 
              echo '<button data-id="1" class="board btn btn-xs btn-warning"><span class="glyphicon glyphicon-pencil"></span> Edit</button>';
              
              ?>
            </td>
          </tr>
          <tr>
            <td>Electrolution</td>
            <td id="fisrt2">{{ $scores[1]->first }}</td>
            <td id="second2">{{ $scores[1]->second }}</td>
            <td id="third2">{{ $scores[1]->third }}</td>
            <td>
            <?php 
            if(Session::has('admin_login')) 
              echo '<button data-id="2" class="board btn btn-xs btn-warning"><span class="glyphicon glyphicon-pencil"></span> Edit</button>';
              ?>
            </td>
          </tr>
          <tr>
            <td>Pragyan Design Challenge</td>
            <td id="first3">{{ $scores[2]->first }}</td>
            <td id="second3">{{ $scores[2]->second }}</td>
            <td id="third3">{{ $scores[2]->third }}</td>
            <td>
            <?php 
            if(Session::has('admin_login')) 
              echo '<button data-id="3" class="board btn btn-xs btn-warning"><span class="glyphicon glyphicon-pencil"></span> Edit</button>';
              ?>
            </td>
          </tr>
          <tr>
            <td>Yaconai</td>
            <td id="first4">{{ $scores[3]->first }}</td>
            <td id="second4">{{ $scores[3]->second }}</td>
            <td id="third4">{{ $scores[3]->third }}</td>
            <td>
            <?php 
            if(Session::has('admin_login')) 
              echo '<button data-id="4" class="board btn btn-xs btn-warning"><span class="glyphicon glyphicon-pencil"></span> Edit</button>';
              ?>
            </td>
          </tr>
          <tr>
            <td>Bytecode junior</td>
            <td id="first5">{{ $scores[4]->first }}</td>
            <td id="second5">{{ $scores[4]->second }}</td>
            <td id="third5">{{ $scores[4]->third }}</td>
            <td>
            <?php 
            if(Session::has('admin_login')) 
              echo '<button data-id="5" class="board btn btn-xs btn-warning"><span class="glyphicon glyphicon-pencil"></span> Edit</button>';
          ?>
            </td>
          </tr>
          <tr>
            <td>The Ultimate Manager</td>
            <td id="first6">{{ $scores[5]->first }}</td>
            <td id="second6">{{ $scores[5]->second }}</td>
            <td id="third6">{{ $scores[5]->third }}</td>
            <td>
            <?php 
            if(Session::has('admin_login')) 
              echo '<button data-id="6" class="board btn btn-xs btn-warning"><span class="glyphicon glyphicon-pencil"></span> Edit</button>';
              ?>
            </td>
          </tr>
          <tr>
            <td>Water Rocket</td>
            <td id="first7">{{ $scores[6]->first }}</td>
            <td id="second7">{{ $scores[6]->second }}</td>
            <td id="third7">{{ $scores[6]->third }}</td>
            <td>
            <?php 
            if(Session::has('admin_login')) 
              echo '<button data-id="7" class="board btn btn-xs btn-warning"><span class="glyphicon glyphicon-pencil"></span> Edit</button>';
              ?>
            </td>
          </tr>
          <tr>
            <td>Trollphy</td>
            <td id="first8">{{ $scores[7]->first }}</td>
            <td id="second8">{{ $scores[7]->second }}</td>
            <td id="third8">{{ $scores[7]->third }}</td>
            <td>
            <?php 
            if(Session::has('admin_login')) 
              echo '<button data-id="8" class="board btn btn-xs btn-warning"><span class="glyphicon glyphicon-pencil"></span> Edit</button>';
              ?>
            </td>
          </tr>
        </tbody>
      </table>
    </div>
					</div>
				</div>
			</section>
			<!-- end Service section -->
			
			<!-- portfolio section -->
		<!-- 	<section id="portfolio">
				<div class="container">
					<div class="row">
					
						<div class="sec-title text-center wow animated fadeInDown">
							<h2>FEATURED PROJECTS</h2>
							<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
						</div>
						

						<ul class="project-wrapper wow animated fadeInUp">
							<li class="portfolio-item">
								<img src="img/portfolio/item.jpg" class="img-responsive" alt="Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat">
								<figcaption class="mask">
									<h3>Wall street</h3>
									<p>Lorem Ipsum is simply dummy text of the printing and typesetting ndustry. </p>
								</figcaption>
								<ul class="external">
									<li><a class="fancybox" title="Araund The world" data-fancybox-group="works" href="img/portfolio/item.jpg"><i class="fa fa-search"></i></a></li>
									<li><a href=""><i class="fa fa-link"></i></a></li>
								</ul>
							</li>
							
							<li class="portfolio-item">
								<img src="img/portfolio/item2.jpg" class="img-responsive" alt="Lorem Ipsum is simply dummy text of the printing and typesetting ndustry. ">
								<figcaption class="mask">
									<h3>Wall street</h3>
									<p>Lorem Ipsum is simply dummy text of the printing and typesetting ndustry. </p>
								</figcaption>
								<ul class="external">
									<li><a class="fancybox" title="Wall street" href="img/slider/banner.jpg" data-fancybox-group="works" ><i class="fa fa-search"></i></a></li>
									<li><a href=""><i class="fa fa-link"></i></a></li>
								</ul>
							</li>
							
							<li class="portfolio-item">
								<img src="img/portfolio/item3.jpg" class="img-responsive" alt="Lorem Ipsum is simply dummy text of the printing and typesetting ndustry. ">
								<figcaption class="mask">
									<h3>Wall street</h3>
									<p>Lorem Ipsum is simply dummy text of the printing and typesetting ndustry. </p>
								</figcaption>
								<ul class="external">
									<li><a class="fancybox" title="Behind The world" data-fancybox-group="works" href="img/portfolio/item3.jpg"><i class="fa fa-search"></i></a></li>
									<li><a href=""><i class="fa fa-link"></i></a></li>
								</ul>
							</li>
							
							<li class="portfolio-item">
								<img src="img/portfolio/item4.jpg" class="img-responsive" alt="Lorem Ipsum is simply dummy text of the printing and typesetting ndustry.">
								<figcaption class="mask">
									<h3>Wall street</h3>
									<p>Lorem Ipsum is simply dummy text of the printing and typesetting ndustry. </p>
								</figcaption>
								<ul class="external">
									<li><a class="fancybox" title="Wall street 4" data-fancybox-group="works" href="img/portfolio/item4.jpg"><i class="fa fa-search"></i></a></li>
									<li><a href=""><i class="fa fa-link"></i></a></li>
								</ul>
							</li>
							
							<li class="portfolio-item">
								<img src="img/portfolio/item5.jpg" class="img-responsive" alt="Lorem Ipsum is simply dummy text of the printing and typesetting ndustry. ">
								<figcaption class="mask">
									<h3>Wall street</h3>
									<p>Lorem Ipsum is simply dummy text of the printing and typesetting ndustry. </p>
								</figcaption>
								<ul class="external">
									<li><a class="fancybox" title="Wall street 5" data-fancybox-group="works" href="img/portfolio/item5.jpg"><i class="fa fa-search"></i></a></li>
									<li><a href=""><i class="fa fa-link"></i></a></li>
								</ul>
							</li>
							
							<li class="portfolio-item">
								<img src="img/portfolio/item6.jpg" class="img-responsive" alt="Lorem Ipsum is simply dummy text of the printing and typesetting ndustry. ">
								<figcaption class="mask">
									<h3>Wall street</h3>
									<p>Lorem Ipsum is simply dummy text of the printing and typesetting ndustry. </p>
								</figcaption>
								<ul class="external">
									<li><a class="fancybox" title="Wall street 6" data-fancybox-group="works" href="img/portfolio/item6.jpg"><i class="fa fa-search"></i></a></li>
									<li><a href=""><i class="fa fa-link"></i></a></li>
								</ul>
							</li>
						</ul>
						
					</div>
				</div>
			</section>
		 -->	<!-- end portfolio section -->
			
			<!-- Testimonial section 
			-->
			<!-- end Testimonial section -->
			
			<!-- Social section 
			<section id="social" class="parallax">
				<div class="overlay">
					<div class="container">
						<div class="row">
						
							<div class="sec-title text-center white wow animated fadeInDown">
								<h2>FOLLOW US</h2>
							</div>
							
							<ul class="social-button">
								<li class="wow animated zoomIn"><a href="#"><i class="fa fa-thumbs-up fa-2x"></i></a></li>
								<li class="wow animated zoomIn" data-wow-delay="0.3s"><a href="#"><i class="fa fa-twitter fa-2x"></i></a></li>
								<li class="wow animated zoomIn" data-wow-delay="0.6s"><a href="#"><i class="fa fa-dribbble fa-2x"></i></a></li>							
							</ul>
							
						</div>
					</div>
				</div>
			</section>
			-->
			<!-- end Social section -->
			
			<!-- Contact section 
			<section id="contact" >
				<div class="container">
					<div class="row">
						
						<div class="sec-title text-center wow animated fadeInDown">
							<h2>Contact</h2>
							<p>Leave a Message</p>
						</div>
						
						
						<div class="col-md-7 contact-form wow animated fadeInLeft">
							<form action="#" method="post">
								<div class="input-field">
									<input type="text" name="name" class="form-control" placeholder="Your Name...">
								</div>
								<div class="input-field">
									<input type="email" name="email" class="form-control" placeholder="Your Email...">
								</div>
								<div class="input-field">
									<input type="text" name="subject" class="form-control" placeholder="Subject...">
								</div>
								<div class="input-field">
									<textarea name="message" class="form-control" placeholder="Messages..."></textarea>
								</div>
						       	<button type="submit" id="submit" class="btn btn-blue btn-effect">Send</button>
							</form>
						</div>
						
						<div class="col-md-5 wow animated fadeInRight">
							<address class="contact-details">
								<h3>Contact Us</h3>						
								<p><i class="fa fa-pencil"></i>Phoenix Inc.<span>PO Box 345678</span> <span>Little Lonsdale St, Melbourne </span><span>Australia</span></p><br>
								<p><i class="fa fa-phone"></i>Phone: (415) 124-5678 </p>
								<p><i class="fa fa-envelope"></i>website@yourname.com</p>
							</address>
						</div>
			
					</div>
				</div>
			</section>
			-->
			<!-- end Contact section 
			
			<section id="google-map">
				<div id="map-canvas" class="wow animated fadeInUp"></div>
			</section>
			-->
		
		</main>
		
		<footer id="footer">
			<div class="container">
				<div class="row text-center">
					<div class="footer-content">
						<div class="wow animated fadeInDown">
							<p>Let's Celebrate Technology</p>
							<p>Enjoy Pragyan 16</p>
						</div>
					<!-- 	<form action="#" method="post" class="subscribe-form wow animated fadeInUp">
							<div class="input-field">
								<input type="email" class="subscribe form-control" placeholder="Enter Your Email...">
								<button type="submit" class="submit-icon">
									<i class="fa fa-paper-plane fa-lg"></i>
								</button>
							</div>
						</form> -->
						<div class="footer-social">
							<ul>
<!-- 								<li class="wow animated zoomIn"><a href="#"><i class="fa fa-thumbs-up fa-3x"></i></a></li>
								<li class="wow animated zoomIn" data-wow-delay="0.3s"><a href="#"><i class="fa fa-twitter fa-3x"></i></a></li>
								<li class="wow animated zoomIn" data-wow-delay="0.6s"><a href="#"><i class="fa fa-skype fa-3x"></i></a></li>
								<li class="wow animated zoomIn" data-wow-delay="0.9s"><a href="#"><i class="fa fa-dribbble fa-3x"></i></a></li>
								<li class="wow animated zoomIn" data-wow-delay="1.2s"><a href="#"><i class="fa fa-youtube fa-3x"></i></a></li>
 -->							</ul>
						</div>
						
						<p>Made with &hearts; by <a href="http://delta.nitt.edu">Delta Force</a> </p>
					</div>
				</div>
			</div>
		</footer>
		
		
       

	
    </body>
</html>