<?php

if (isset($_POST['submit'])) {
$name = trim($_POST['name']);
$email = trim($_POST['email']);
$message = trim($_POST['message']);

$myMail = "fgillion@primeracapital.co.za";
$header = "FROM: " . $email;
$message2 = "You have received a message from " . $name . ". \n\n" . $message;

mail($myMail, $subject, $message2, $header);
header("location: contact.php?mailsend");
}

?>
<!DOCTYPE HTML>
<html>
<head>
<title>Primera Capital | Contact</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="corporate finance and advisory, primera capital, Assisting shareholder value preservation and growth throughout the economic cycle" />
<meta name="description" content="Primera is founded on integrity and sound corporate governance. We ensure the highest standards of ethics in all our dealings with Clients, Funders, Investors and ..." />
<meta name="robots" content="noindex" />
<link rel="icon" href="https://d1ujqdpfgkvqfi.cloudfront.net/favicon-generator/htdocs/favicons/2020-11-07/93889ed146ac051698b9aacba97a77f7.ico.png">
<link href="css/bootstrap.min.css" rel="stylesheet" type="text/css" media="all" />
<link href="css/font-awesome.min.css" rel="stylesheet" type="text/css" media="all" />
<link href="css/jQuery.lightninBox.css" rel="stylesheet" type="text/css" media="all" />
<link href="css/team.css" rel="stylesheet" type="text/css" media="all" />
<link href="css/portfolio.css" rel="stylesheet" type="text/css" media="all" />
<link href="css/services.css" rel="stylesheet" type="text/css" media="all" />
<link href="css/pogo-slider.min.css" rel="stylesheet" type="text/css" media="all" />
<link href="css/nav.css" rel="stylesheet" type="text/css" media="all" />
<link href="css/aos.css" rel="stylesheet" type="text/css" media="all" />
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
<link href="//fonts.googleapis.com/css?family=Raleway:100,200,300,400,500,600,700,800,900" rel="stylesheet">
<link href="//fonts.googleapis.com/css?family=Poiret+One" rel="stylesheet">
<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" media="all" rel="stylesheet" type="text/css">
<script src="js/modernizr.js"></script>
<style type="text/css">

.header {
padding: 100px;
text-align: center;
background: url(images/team.jpg) no-repeat;
background-size: cover;
color: white;
font-size: 30px;
}

.content {padding:20px;}
</style>
</head>
<body>

<?php include 'includes/header.php';?>
<div class="header">
  <h1></h1>
  <p></p>
</div>



<!-- contact section -->
<section class="contact-w3layouts jarallax" id="contact">
<div class="container">
<h2 style="border-left: #1C164B solid 4px; font-size: 35px; color:#707070; text-transform: uppercase; padding: 0 0 5px 7px; font-weight: bold;">Contact Us</h2>
<div class="col-lg-5 col-md-5 col-sm-12" data-aos="zoom-in">
<p class="contact-p1" style="font-size: 26px;">Let's Talk</p>
<ul class="contact-w3ls">
<li>
<i class="fa fa-mobile" aria-hidden="true" style="font-size: 18px;color: #808080"></i>
<p class="con" style="font-size: 16px; color: #808080;">076 992 2278</p>
</li>
<li>
<i class="fa fa-phone" aria-hidden="true" style="font-size: 18px;color: #808080"></i>
<p class="con" style="font-size: 16px; color: #808080;">010 140 6158</a></p>
</li>
<li>
<i class="fa fa-envelope-o" aria-hidden="true" style="font-size: 16px;color: #808080"></i><p class="con" style="font-size: 20px;"><a href="mailto:info_primera@primeracapital.co.za"  style="font-size: 18px; color: #808080;"> info_primera@primeracapital.co.za</a></p>
</li>
<li>
<i class="fa fa-map-marker" aria-hidden="true" style="font-size: 18px;color: #808080"></i>
<p class="con" style="font-size: 18px;color: #808080;"> 1 Wedgewood Link, Bryanston, 2191</a></p>
</li>
</ul>
</div>
<div class="col-lg-7 col-md-7 col-sm-12" data-aos="zoom-in"> 
<form action="." method="post">
<div class="col-lg-6 col-md-6 col-sm-6">
<div class="control-group form-group">
<div class="controls">
<label>Name:</label>
<input type="text" class="form-control" name="name" id="name" required data-validation-required-message="Please enter your name.">
<p class="help-block"></p>
</div>
</div>
</div>
<div class="col-lg-6 col-md-6 col-sm-6">	
<div class="control-group form-group">
<div class="controls">
<label>Email Address:</label>
<input type="email" class="form-control" name="email" id="email" required data-validation-required-message="Please enter your email address.">
</div>
</div>
</div>
<div class="clearfix"></div>
<div class="col-lg-12 col-md-12 col-sm-12">	
<div class="control-group form-group">
<div class="controls">
<label>Message:</label>
<textarea rows="10" cols="100" class="form-control" name="message" id="message" required data-validation-required-message="Please enter your message" maxlength="999" style="resize:none"></textarea>
</div>
</div>
</div>	
<div id="success"></div>
<div class="col-lg-12 col-md-12 col-sm-12">    
<button type="submit" name="submit" class="btn btn-primary">Submit</button>
</div>
<div class="clearfix"></div>	
</form>
</div>
<div class="clearfix"></div>
</div>
</section>
<!-- /contact section -->
<!-- map -->
<div class="map" data-aos="zoom-in">
<iframe class="googlemaps" src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d896.1182032346561!2d28.02173!3d-26.0508!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x1e9573f4d9caf921%3A0x1948de30747637b3!2s1%20Wedgewood%20Link%20Rd%2C%20Bryanston%2C%20Sandton%2C%202191%2C%20South%20Africa!5e0!3m2!1sen!2sus!4v1604660283114!5m2!1sen!2sus" style="border:0" allowfullscreen></iframe>
</div>
<!-- /map -->

<?php include 'includes/footer.php';?>
<script src="js/jquery.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/smoothscroll.js"></script>
<script src='js/aos.js'></script>
<script src="js/lazyload.js"></script>
<script src="js/jquery.easing.min.js"></script>
<script src="js/grayscale.js"></script>
<script src="js/jarallax.js"></script>
<script type="text/javascript">
$('.jarallax').jarallax({
speed: 0.5,
imgWidth: 1680,
imgHeight: 925
})
</script>
<script src="js/main2.js"></script>
<script src="js/jQuery.lightninBox.js"></script>
<script type="text/javascript">
$(".lightninBox").lightninBox();
</script>
<script src="js/imagesloaded.pkgd.min.js"></script>
<script src="js/masonry.pkgd.min.js"></script>
<script src="js/classie2.js"></script>
<script src="js/cbpGridGallery.js"></script>
<script>
new CBPGridGallery( document.getElementById( 'grid-gallery' ) );
</script>
<script type="text/javascript" src="js/jquery.slide.js"></script>
<script type="text/javascript">
$('#slideshow-banner').slide({
cdTime : 5000,      
controllerLeftButton : "images/left.png",   
controllerRightButton : "images/right.png"   
});
</script>
<script src="js/jquery.pogo-slider.min.js"></script>
<script src="js/main.js"></script>
<script src="js/classie.js"></script>
<script src="js/demo1.js"></script>
</body>
</html>