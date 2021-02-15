<!DOCTYPE html>
<html lang="en">


<!-- Mirrored from slimhamdi.net/tunis/dark/contact.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 29 Jan 2021 09:40:40 GMT -->
<head>
    <meta charset="utf-8">
    <title>Contact - Tunis Personal Portfolio</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Template Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Poppins:400,400i,500,500i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,400i,600,600i,700" rel="stylesheet">

    <!-- Template CSS Files -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/preloader.min.css" rel="stylesheet">
    <link href="css/circle.css" rel="stylesheet">
    <link href="css/font-awesome.min.css" rel="stylesheet">
    <link href="css/fm.revealator.jquery.min.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">

    <!-- CSS Skin File -->
    <link href="css/skins/yellow.css" rel="stylesheet">

    <!-- Live Style Switcher - demo only -->
    <link rel="alternate stylesheet" type="text/css" title="blue" href="css/skins/blue.css" />
    <link rel="alternate stylesheet" type="text/css" title="green" href="css/skins/green.css" />
    <link rel="alternate stylesheet" type="text/css" title="yellow" href="css/skins/yellow.css" />
    <link rel="alternate stylesheet" type="text/css" title="blueviolet" href="css/skins/blueviolet.css" />
    <link rel="alternate stylesheet" type="text/css" title="goldenrod" href="css/skins/goldenrod.css" />
    <link rel="alternate stylesheet" type="text/css" title="magenta" href="css/skins/magenta.css" />
    <link rel="alternate stylesheet" type="text/css" title="orange" href="css/skins/orange.css" />
    <link rel="alternate stylesheet" type="text/css" title="purple" href="css/skins/purple.css" />
    <link rel="alternate stylesheet" type="text/css" title="red" href="css/skins/red.css" />
    <link rel="alternate stylesheet" type="text/css" title="yellowgreen" href="css/skins/yellowgreen.css" />
    <link rel="stylesheet" type="text/css" href="css/styleswitcher.css" />

    <!-- Modernizr JS File -->
    <script src="js/modernizr.custom.js"></script>
</head>

<body class="contact">
<!-- Live Style Switcher Starts - demo only -->
<?php include("include/header.php"); ?>
<!-- Live Style Switcher Ends - demo only -->
<!-- Header Starts -->

<!-- Header Ends -->
<!-- Page Title Starts -->
<section class="title-section text-left text-sm-center revealator-slideup revealator-once revealator-delay1">
    <h1>get in <span>touch</span></h1>
    <span class="title-bg">contact</span>
</section>
<!-- Page Title Ends -->
<!-- Main Content Starts -->
<section class="main-content revealator-slideup revealator-once revealator-delay1">
    <div class="container">
        <div class="row">
            <!-- Left Side Starts -->
            <div class="col-12 col-lg-4">
                <h3 class="text-uppercase custom-title mb-0 ft-wt-600 pb-3">Address</h3>
                <p class="open-sans-font mb-3">No.
                                8 Gopal Chetty Street,anakaputhur,chennai-70</p>
                <p class="open-sans-font custom-span-contact position-relative">
                    <i class="fa fa-envelope-open position-absolute"></i>
                    <span class="d-block">mail me</span><a href="mailto:veeraglass@gmail.com" class="text-white" style="text-decoration: none;">veeraglass@gmail.com</a> 
                </p>
                <p class="open-sans-font custom-span-contact position-relative">
                    <i class="fa fa-phone-square position-absolute"></i>
                    <span class="d-block">call me</span><a href="tel:+919092652609" class="text-white" style="text-decoration: none;"> +919092652609</a>
                <!-- </p>
                <ul class="social list-unstyled pt-1 mb-5">
                    <li class="facebook"><a title="Facebook" href="#"><i class="fa fa-facebook"></i></a>
                    </li>
                    <li class="twitter"><a title="Twitter" href="#"><i class="fa fa-twitter"></i></a>
                    </li>
                    <li class="youtube"><a title="Youtube" href="#"><i class="fa fa-youtube"></i></a>
                    </li>
                    <li class="dribbble"><a title="Dribbble" href="#"><i class="fa fa-dribbble"></i></a>
                    </li>
                </ul> -->
            </div>
            <!-- Left Side Ends -->
            <!-- Contact Form Starts -->
            <div class="col-12 col-lg-8">
                <form class="contactform form" id="formmail" >
                <div id="mail-status"></div>
                    <div class="contactform">
                        <div class="row">
                            <div class="col-12 col-md-4">
                                <input type="text" name="userName" id="userName" placeholder="YOUR NAME">
                            </div>
                            <div class="col-12 col-md-4">
                                <input type="email" name="userEmail" id="userEmail" placeholder="YOUR EMAIL">
                            </div>
                            <div class="col-12 col-md-4">
                                <input type="text" name="subject" id="subject" placeholder="YOUR SUBJECT">
                            </div>
                            <div class="col-12">
                                <textarea name="content" id="content" placeholder="YOUR MESSAGE"></textarea>
                                <button type="submit" class="btn btn-contact" name="submit" onClick="sendContact();">Send Message</button>
                            </div>
                            <div class="col-12 form-message">
                                <span class="output_message text-center font-weight-600 text-uppercase"></span>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
            <!-- Contact Form Ends -->
        </div>
    </div>

</section>

<!-- <form class="form" id="formmail">
            <div id="mail-status"></div>
          <div class="form-row">
            <div class="col-md-6 form-group">
              <input type="text" name="userName" class="form-control" id="userName" placeholder="Your Name" data-rule="minlen:4" data-msg="Please enter at least 4 chars" />
              <div class="validate"></div>
            </div>
            <div class="col-md-6 form-group">
              <input type="email" class="form-control" name="userEmail" id="userEmail" placeholder="Your Email" data-rule="email" data-msg="Please enter a valid email" />
              <div class="validate"></div>
            </div>
          </div>
          <div class="form-group">
            <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" data-rule="minlen:4" data-msg="Please enter at least 8 chars of subject" />
            <div class="validate"></div>
          </div>
          <div class="form-group">
            <textarea class="form-control" name="content" id="content" rows="5" data-rule="required" data-msg="Please write something for us" placeholder="Message"></textarea>
            <div class="validate"></div>
          </div>
          <div class="mb-3">
            <div class="loading">Loading</div>
            <div class="error-message"></div>
            <div class="sent-message">Your message has been sent. Thank you!</div>
          </div>
          <div class="text-center"><button type="submit" name="submit" onClick="sendContact();">Send Message</button></div>
        </form> -->
<!-- Template JS Files -->
<script src="js/jquery-3.5.0.min.js"></script>
<script src="js/styleswitcher.js"></script>
<script src="js/preloader.min.js"></script>
<script src="js/fm.revealator.jquery.min.js"></script>
<script src="js/imagesloaded.pkgd.min.js"></script>
<script src="js/masonry.pkgd.min.js"></script>
<script src="js/classie.js"></script>
<script src="js/cbpGridGallery.js"></script>
<script src="js/jquery.hoverdir.js"></script>
<script src="js/popper.min.js"></script>
<script src="js/bootstrap.js"></script>
<script src="js/custom.js"></script>
<script>
function sendContact() {
	
		jQuery.ajax({
		url: "contact_mail.php",
		data:'userName='+$("#userName").val()+'&userEmail='+$("#userEmail").val()+'&subject='+$("#subject").val()+'&content='+$("#content").val(),
		type: "POST",
		success:function(data){
		$("#mail-status").html(data);
		},
		error:function (){}
		});
	
}
   </script> 
</body>


<!-- Mirrored from slimhamdi.net/tunis/dark/contact.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 29 Jan 2021 09:40:40 GMT -->
</html>
