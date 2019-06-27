<?php session_start(); ?>
<!DOCTYPE html>
<html dir="ltr" lang="en">

<!-- Mirrored from kodesolution.com/demo/personal/s/studypress/v5.0/demo/page-about-style1.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 11 May 2017 05:05:10 GMT -->
<head>

<!-- Meta Tags -->
<meta name="viewport" content="width=device-width,initial-scale=1.0"/>
<meta http-equiv="content-type" content="text/html; charset=UTF-8"/>
<meta name="description" content="StudyPress | Education & Courses HTML Template" />
<meta name="keywords" content="academy, course, education, education html theme, elearning, learning," />
<meta name="author" content="ThemeMascot" />

<!-- Page Title -->
<title>Contact Us | Shanti Nagar High School</title>

<!-- Favicon and Touch Icons -->
<link href="images/favicon.png" rel="shortcut icon" type="image/png">
<link href="images/apple-touch-icon.png" rel="apple-touch-icon">
<link href="images/apple-touch-icon-72x72.png" rel="apple-touch-icon" sizes="72x72">
<link href="images/apple-touch-icon-114x114.png" rel="apple-touch-icon" sizes="114x114">
<link href="images/apple-touch-icon-144x144.png" rel="apple-touch-icon" sizes="144x144">

<!-- Stylesheet -->
<link href="css/bootstrap.min.css" rel="stylesheet" type="text/css">
<link href="css/jquery-ui.min.css" rel="stylesheet" type="text/css">
<link href="css/animate.css" rel="stylesheet" type="text/css">
<link href="css/css-plugin-collections.css" rel="stylesheet"/>
<!-- CSS | menuzord megamenu skins -->
<link id="menuzord-menu-skins" href="css/menuzord-skins/menuzord-rounded-boxed.css" rel="stylesheet"/>
<!-- CSS | Main style file -->
<link href="css/style-main.css" rel="stylesheet" type="text/css">
<!-- CSS | Preloader Styles -->
<link href="css/preloader.css" rel="stylesheet" type="text/css">
<!-- CSS | Custom Margin Padding Collection -->
<link href="css/custom-bootstrap-margin-padding.css" rel="stylesheet" type="text/css">
<!-- CSS | Responsive media queries -->
<link href="css/responsive.css" rel="stylesheet" type="text/css">
<!-- CSS | Style css. This is the file where you can place your own custom css code. Just uncomment it and use it. -->
<!-- <link href="css/style.css" rel="stylesheet" type="text/css"> -->

<!-- CSS | Theme Color -->
<link href="css/colors/theme-skin-color-set-1.css" rel="stylesheet" type="text/css">

<!-- external javascripts -->
<script src="js/jquery-2.2.4.min.js"></script>
<script src="js/jquery-ui.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<!-- JS | jquery plugin collection for this theme -->
<script src="js/jquery-plugin-collection.js"></script>

<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
<!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
<![endif]-->
</head>
<body class="">
<div id="wrapper" class="clearfix">
  <section class="mainLoader" id="mainLoader">
        <div class="imageWrap">
          <img src="images/logo-wide.png" alt="">
        </div>
    </section>
  
  <!-- Header -->
  <header id="header" class="header navbar-scrolltofixed">    <div class="header-middle p-0 bg-lightest xs-text-center">      <div class="container pt-0 pb-0">        <div class="row">          <div class="col-xs-12 col-sm-4 col-md-3 pt-5 pb-10">            <div class="widget no-border m-0">              <a class="menuzord-brand pull-left flip xs-pull-center" href="javascript:void(0)"><img src="images/logo-wide.png" alt=""></a>            </div>          </div>          <div class="header-nav col-xs-12 col-sm-8 col-md-9 pt-10 pb-5">				<div class="header-nav-wrapper bg-theme-colored border-bottom-theme-color-2-1px">				  <nav id="menuzord" class="menuzord bg-theme-colored pull-left flip menuzord-responsive">					<ul class="menuzord-menu">					  <li class="active"><a href="index.html">Home</a>					  </li>					  <li><a href="about-us.html">About Us</a>					  </li>					  <li><a href="academics.html">Academics</a>					  </li>					  <li><a href="beyond-academics.html">Beyond Academics</a>					  </li>					  <li><a href="gallery.html">Gallery</a>					  </li>					  <li><a href="contact-us.html">Contact Us</a>					  </li>					</ul>				  </nav>				</div>			</div>                 </div>      </div>    </div>  </header>
  <!-- Start main-content -->
  <div class="main-content">

    <!-- Section: inner-header -->
    <section class="inner-header parallax layer-overlay" data-bg-img="images/bg/bg1.jpg">
      <div class="container pt-40 pb-40">
        <!-- Section Content -->
        <div class="section-content">
          <div class="row"> 
            <div class="col-sm-8 xs-text-center">
              <h2 class="text-white mt-10">Contact Us</h2>
            </div>
            <div class="col-sm-4">
              <ol class="breadcrumb white mt-10 text-right xs-text-center">
                <li><a href="index.html">Home</a></li>
                <!--<li><a href="#">Pages</a></li>-->
                <li class="active">Contact Us</li>
              </ol>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!--Contact Section Starts-->
	<!-- Divider: Contact -->
    <section class="divider layer-overlay overlay-white-9" data-bg-img="images/bg/bg15.html">
      <div class="container">
        <div class="row pt-30">
          <div class="col-md-7">
            <h3 class="line-bottom mt-0 mb-20">Reach Us</h3>

            <!-- show success message -->
            <?php
            if(isset($_SESSION['msg']) && $_SESSION['msg']!='')
            	echo $_SESSION['msg'];
            	$_SESSION['msg'] = '';
            ?>

            <!-- Contact Form -->
            <form id="contact_form" name="contact_form" class="form-transparent" action="contact.html" method="post">
              <div class="row">
                <div class="col-sm-6">
                  <div class="form-group">
                    <label for="form_name">Name <small>*</small></label>
                    <input name="form_name" class="form-control" type="text" style="color:#555;" placeholder="Enter Name" required="">
                  </div>
                </div>
                <div class="col-sm-6">
                  <div class="form-group">
                    <label for="form_email">Email <small>*</small></label>
                    <input name="form_email" class="form-control" style="color:#555;" type="email" placeholder="Enter Email">
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-sm-6">
                  <div class="form-group">
                    <label for="form_name">Subject <small>*</small></label>
					<select name="form_subject" class="form-control" type="text" placeholder="Select Subject" style="color:#555;">
					  <option value="General Enquiry">General Enquiry</option>
					  <option value="Admission Enquiry">Admission Enquiry</option>
					</select>
                  </div>
                </div>
                <div class="col-sm-6">
                  <div class="form-group">
                    <label for="form_phone">Phone</label>
                    <input name="form_phone" class="form-control" type="text" style="color:#555;" placeholder="Enter Phone">
                  </div>
                </div>
              </div>
              <div class="form-group">
                <label for="form_name">Message</label>
                <textarea name="form_message" class="form-control" rows="5" style="color:#555;" placeholder="Enter Message"></textarea>
              </div>
              <div class="form-group">
                <input name="form_botcheck" class="form-control" type="hidden" value="" />
                <!-- <button type="submit" name="submit" class="btn btn-dark btn-theme-colored btn-flat mr-5" data-loading-text="Please wait...">Send your message</button> -->
                <i class="fa fa-spinner fa-spin" style="font-size:24px; display:none" id="form_loader"></i>
                <button type="submit" name="submit" class="btn btn-dark btn-theme-colored btn-flat mr-5" id="send_message">Send your message</button>
                <button type="reset" class="btn btn-default btn-flat btn-theme-colored">Reset</button>
              </div>
            </form>
          </div>
          <div class="col-md-5">
            <div class="row">
              <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="icon-box left media bg-black-333 p-25 mb-20"> <a class="media-left pull-left" href="#"> <i class="pe-7s-map-2 text-theme-color-2"></i></a>
                  <div class="media-body"> <strong class="text-white">SCHOOL LOCATION</strong>
                    <p class="text-white">Sector 2, Shanti Nagar, Mira Road East, Mira Bhayandar, Mum-401107</p>
                  </div>
                </div>
              </div>
              <div class="col-xs-12 col-sm-6 col-md-12 text-white">
                <div class="icon-box left media bg-black-333 p-25 mb-20"> <a class="media-left pull-left" href="#"> <i class="pe-7s-call text-theme-color-2"></i></a>
                  <div class="media-body"> <strong class="text-white">CONTACT NUMBER</strong>
                    <p>022 2811 5288</p>
                  </div>
                </div>
              </div>
              <div class="col-xs-12 col-sm-6 col-md-12 text-white">
                <div class="icon-box left media bg-black-333 p-25 mb-20"> <a class="media-left pull-left" href="#"> <i class="pe-7s-mail text-theme-color-2"></i></a>
                  <div class="media-body"> <strong class="text-white">E-MAIL</strong>
                    <p>shantinagar.highschool@rediffmail.com</p>
                  </div>
                </div>
              </div>
              <!--<div class="col-xs-12 col-sm-6 col-md-12 text-white">
                <div class="icon-box left media bg-black-333 p-25 mb-20"> <a class="media-left pull-left" href="#"> <i class="fa fa-skype text-theme-color-2"></i></a>
                  <div class="media-body"> <strong class="text-white">Make a Video Call</strong>
                    <p>ThemeMascotSkype</p>
                  </div>
                </div>
              </div>-->
            </div>
          </div>
        </div>
      </div>
    </section>
	<!--Contact Section Ends-->
	   
	  <!-- Divider: Google Map -->
    <section>
      <div class="container-fluid p-0">
        <div class="row">

          <!-- Google Map HTML Codes -->
          <div 
            data-address="121 King Street, Melbourne Victoria 3000 Australia"
            data-popupstring-id="#popupstring1"
            class="map-canvas autoload-map"
            data-mapstyle="style4"
            data-height="400"
            data-latlng="19.2779499,72.8598558"
            data-title="sample title"
            data-zoom="15"
            data-marker="images/map-marker.png">
          </div>
          <div class="map-popupstring hidden" id="popupstring1">
            <div class="text-center">
              <h3>Sector 2, Shanti Nagar,</h3>
              <p> Mira Road East, Mira Bhayandar, Maharashtra 401107</p>
            </div>
          </div>
          <!-- Google Map Javascript Codes -->
          <script src="http://maps.google.com/maps/api/js?key=AIzaSyAYWE4mHmR9GyPsHSOVZrSCOOljk8DU9B4"></script>
          <script src="js/google-map-init.js"></script>

        </div>
      </div>
    </section>	 
  </div>
  <!-- end main-content -->
  
  <!-- Footer -->
  <footer id="footer" class="footer" data-bg-color="#1f1f1f"><footer id="footer" class="footer" data-bg-color="#1f1f1f">
    <div class="footer-bottom bg-black-333">
      <div class="container pt-20 pb-20">
        <div class="row">
          <div class="col-md-12 text-center">            <p class="font-11 text-black-777 m-0">Copyright &copy;2016 Shanti Nagar High School. All Rights Reserved. Developed With Love By Pi-Square Innovations</p>          </div>
        </div>
      </div>
    </div>
  </footer>
  <a class="scrollToTop" href="#"><i class="fa fa-angle-up"></i></a> </div>
<!-- end wrapper --> 

<!-- Footer Scripts --> 
<!-- JS | Custom script for all pages --> 
<script src="js/custom.js"></script>
<script src="js/wow.js"></script>
<script>
	new WOW().init();
</script>

<script>
   window.setTimeout(function(){
	$('#mainLoader').addClass("displayNone");
	}, 2000);
</script>
</body>

<!-- Mirrored from kodesolution.com/demo/personal/s/studypress/v5.0/demo/page-about-style1.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 11 May 2017 05:05:10 GMT -->
</html>


<!-- Contact Form Validation-->
<script type="text/javascript">
	$('#contact_form').validate({
        rules: {
        	form_name: {
        		required: true,
        	},
        	form_email: {
        		required: true,
        		email: true
        	},
        	form_phone: {
            	// required: true,
            	digits: true,
            	minlength: 10,
            	maxlength: 12
            },
     	},
		submitHandler: function (form) {
		    $('#send_message').hide();
		    $('#form_loader').show();
			form.submit();
		}
	});
</script>