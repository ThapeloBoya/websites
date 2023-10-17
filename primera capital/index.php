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
<title>Primera Capital | Home</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="corporate finance and advisory, primera capital, Assisting shareholder value preservation and growth throughout the economic cycle" />
<meta name="description" content="Primera is founded on integrity and sound corporate governance. We ensure the highest standards of ethics in all our dealings with Clients, Funders, Investors and ..." />
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
<link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png">
<link href="//fonts.googleapis.com/css?family=Raleway:100,200,300,400,500,600,700,800,900" rel="stylesheet">
<link href="//fonts.googleapis.com/css?family=Poiret+One" rel="stylesheet">
<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" media="all" rel="stylesheet" type="text/css">
<script src="js/modernizr.js"></script>
</head>
<body>
<?php include 'includes/header.php';?>
<!-- slider Section -->
<div class="pogoSlider" id="js-main-slider">
<div class="pogoSlider-slide" data-transition="verticalSlide" data-duration="5000"  style="background-image:url(images/banner1.jpg);filter: brightness(50%);">
<div class="pogoSlider-slide-element">
<div class="container">
<h3>Grow Your Business</h3>
<p>We are a corporate finance and advisory firm</p>
<ul class="banner-agileits">
<li><a href="contact" class="link-w3l2 page-scroll">Let's talk</a></li>
</ul>
<a href="#about" class="btn btn-circle page-scroll">
<i class="fa fa-angle-double-down animated"></i>
</a>
</div>  
</div>
</div>  
<div class="pogoSlider-slide" data-transition="verticalSlide" data-duration="5000"  style="background-image:url(images/banner2.jpg);filter: brightness(50%);">
<div class="pogoSlider-slide-element">
<div class="container">
<h3>Get Master Advice</h3>
<p>Focusing on providing high quality advice to</p>
<ul class="banner-agileits">
<li><a href="contact" class="link-w3l2 page-scroll">Let's talk</a></li>
</ul>
<a href="#about" class="btn btn-circle page-scroll">
<i class="fa fa-angle-double-down animated"></i>
</a>
</div>  
</div>
</div>  
<div class="pogoSlider-slide " data-transition="verticalSlide" data-duration="5000"  style="background-image:url(images/banner3.jpg);filter: brightness(50%);">
<div class="pogoSlider-slide-element">
<div class="container">
<h3>Create Sustainable Wealth</h3>
<p>Privately owned businesses in South Africa</p>
<ul class="banner-agileits">
<li><a href="contact" class="link-w3l2 page-scroll">Let's talk</a></li>
</ul>
<a href="#about" class="btn btn-circle page-scroll">
<i class="fa fa-angle-double-down animated"></i></a>
</div>  
</div>
</div>
<div class="pogoSlider-slide " data-transition="verticalSlide" data-duration="5000"  style="background-image:url(images/banner4.jpg);filter: brightness(50%);">
<div class="pogoSlider-slide-element">
<div class="container">
<h3>Long Term Investor</h3>
<p>To facilitating their growth and success</p>
<ul class="banner-agileits">
<li><a href="contact" class="link-w3l2 page-scroll">Let's talk</a></li>
</ul>
<a href="#about" class="btn btn-circle page-scroll">
<i class="fa fa-angle-double-down animated"></i>
</a>
</div>            
</div>
</div>
</div>
<!-- slider Section -->


<!-- about section -->
<section class="about-w3l" id="about" data-aos="zoom-in" style="padding: 70px 0 0 40px;">
<div class="container">
<div class="col-lg-6 col-md-6 col-sm-12"><br><br>
<h4 style="border-left: #1C164B solid 4px; font-size: 35px; color:#707070; text-transform: uppercase; padding: 0 0 5px 7px; font-weight: bold;">about us</h4>
<p style="font-size: 16px; line-height: 2;text-align: justify;padding: 20px 0 0 0;color: #808080;">Primera Capital is a corporate finance and strategic advisory services firm providing advisory services to privately owned businesses with revenues of R100 million and above (mid-market companies).

We assist mid-market companies to grow and thrive through innovative, high quality corporate finance and strategic advisory solutions. We help companies raise debt and equity capital, conclude and finance an acquisition, introduce BEE parties or dispose of a business. 

We are also skilled at Turnarounds and restructuring of businesses helping them back to profitability and growth. We are also licenced to do Business Rescues. 
.</p>
<ul class="banner-agileits">
<div class="bht1">
<a href="about" >Read More</a>
</div>
</div>
<br><br><br>
<div class="col-lg-6 col-md-6 col-sm-12">
<div id="slideshow-banner">
<ul>
<li class="slideshow-item"><img src="https://img.freepik.com/free-photo/colleagues-giving-fist-bump_53876-64857.jpg?size=626&ext=jpg&ga=GA1.2.2089925354.1605085641" alt="Primera capital" class="img-responsive"/></li>
<li class="slideshow-item"><img src="https://t3.ftcdn.net/jpg/01/19/39/12/240_F_119391262_rkxOXmXy9vVyBxTGIHFEeFwPeguFuspb.jpg" alt="primera capital" class="img-responsive"/></li>
<li class="slideshow-item"><img src="https://img.freepik.com/free-photo/workers-show-schedules-achievements-work-director_85574-11141.jpg?size=626&ext=jpg&ga=GA1.2.2089925354.1605085641" alt="primera capital" class="img-responsive" alt="Primera capital" class="img-responsive"/></li>
<li class="slideshow-item"><img src="https://img.freepik.com/free-photo/workplace-results-professional-report-accounting-during_1418-61.jpg?size=626&ext=jpg&ga=GA1.2.2089925354.1605085641" alt="primera capital" class="img-responsive" alt="Primera capital" class="img-responsive"/></li>
</ul>
</div>
</div>
</div>
</section>
<!-- /about section -->

<!-- services section -->
<br><b><br>
<div class="w3ls blog" id="blog" data-aos="zoom-in" style="padding: 70px 0 0 40px;">
<div class="container">
<h4 style="border-left: #1C164B solid 4px; font-size: 35px; color:#707070; text-transform: uppercase; padding: 0 0 5px 7px; font-weight: bold;">our solutions</h4><br><br>
<div class="col-md-3 w3ls-left" >
<div class="tc-ch">
<div class="flip-card">
<div class="flip-card-inner">
<div class="flip-card-front">
<img src="images/o1.jpg" alt="Avatar" style="width:250px;height:250px;">
</div>
<div class="flip-card-back">
<h3 style="text-align: center;font-size: 25px; color:#fff;padding: 30px;">Corporate Finance</h3> 
<p style="color: #fff;padding: 20px 0 0 0;font-size: 16px;text-align: justify;">  &#10687;  Mergers and Acquisitions (M&A) Advisory</p>
<br><br>
<div class="bht12">
<a href="corporate-finance" >Read More</a>
</div>
</div>
</div>
</div>
<div class="clearfix"></div>
</div>
</div>

<div class="col-md-3 w3ls-left">
<div class="tc-ch">
<div class="flip-card">
<div class="flip-card-inner">
<div class="flip-card-front">
<img src="https://t4.ftcdn.net/jpg/03/00/41/83/240_F_300418300_O7U8ugtIM6nD6oxOYVlTk2c2sjXEBiyQ.jpg" alt="Avatar" style="width:250px;height:250px;">
</div>
<div class="flip-card-back">
<h3 style="text-align: center;font-size: 25px; color:#fff;padding: 30px 0 0 20px;">Capital Raising</h3>
<p style="color: #fff;padding: 20px 0 0 0;font-size: 16px;">Primera project manages the entire capital raising process including assisting with the Strategic and Business Plan</p> 
<br>
<div class="bht12">
<a href="capital-raising" >Read More</a>
</div>
</div>
</div>
</div>

<div class="clearfix"></div>
</div>
</div>
<div class="col-md-3 w3ls-left">
<div class="tc-ch">
<div class="flip-card">
<div class="flip-card-inner">
<div class="flip-card-front">
<img src="https://t4.ftcdn.net/jpg/02/27/19/17/240_F_227191731_6y3Epf2MoeSEbwyI5mXfxO7aTtWUbF2Y.jpg" alt="Avatar" style="width:250px;height:250px;">
</div>
<div class="flip-card-back">
<h3 style="text-align: center;font-size: 25px; color:#fff;padding: 30px 0 0 20px;">Restructuring and Turnarounds</h3>
<p style="color: #fff;padding: 7px 0 0 0;font-size: 16px;">South Africa experienced a decade of the lowest GDP growth on record. Primera provides advisory services to assist business in Informal Restructurings</p> 
<div class="bht12">
<a href="restructuring-turnarounds" >Read More</a>
</div>
</div>
</div>
</div>
<div class="clearfix"></div>
</div>
</div>

<div class="col-md-3 w3ls-left">
<div class="tc-ch">
<div class="flip-card">
<div class="flip-card-inner">
<div class="flip-card-front">
<img src="https://t4.ftcdn.net/jpg/01/89/76/29/240_F_189762921_PznXSpqz3fxpSifn8VloI5ClT6Ksn8A2.jpg" alt="Avatar" style="width:250px;height:250px;">
</div>
<div class="flip-card-back">
<h3 style="text-align: center;font-size: 25px; color:#fff;padding: 27px;">Business Rescues</h3>  
<p style="color: #fff;padding: 5px 0 0 0;font-size: 16px;">The objective is to devise a superior solution for affected persons (creditors, shareholders, employees and trade unions) than would be the case in a liquidation</p> 
<div class="bht12">
<a href="business-rescue" >Read More</a>
</div>
</div>
</div>
</div>
<div class="clearfix"></div>
</div>
</div>
<div class="clearfix"></div>
</div>
</div>
<!-- /services section -->


<!-- relationship -->
<br><br><br>
<div class="w3ls blog" data-aos="zoom-in" id="blog" style="padding: 70px 0 0 40px;">
<div class="container">
<h4 style="border-left: #1C164B  solid 4px; font-size: 35px; color:#707070; text-transform: uppercase; padding: 0 0 5px 7px;font-weight: bold;">relationships</h4><br><br>
<div class="col-md-4 w3ls-left">
<div class="tc-ch">
<h3 style="  text-align: left;font-size: 25px; color:#1C164B;padding:20px 0 10px 0; font-weight: bold; " class="top-and-bottom">Join Our Team</h3>
<p style="color: #808080;padding: 20px 0 0 0;font-size: 16px;line-height: 2;text-align: justify; font-weight: normal;">We are constantly looking to partner with like-minded professionals in the area of:</p>
<p style="color: #808080;padding: 20px 0 0 0;font-size: 16px;text-align: justify;font-weight: normal;">  &#10687; Corporate Finance Advisory</p>
<p style="color: #808080;padding: 20px 0 0 0;font-size: 16px;text-align: justify;font-weight: normal;">  &#10687; Restructuring and Turnaround</p>
<p style="color: #808080;padding: 20px 0 0 0;font-size: 16px; text-align: justify;font-weight: normal;">  &#10687;  Business Rescue Assignments</p>
<p style="color: #808080;padding: 20px 0 0 0;font-size: 17px;line-height: 2;text-align: justify;font-weight: normal;">Opportunities generally fall into the following categories</p>
<div class="clearfix"></div>
</div>
</div>

<div class="col-md-4 w3ls-left">
<div class="tc-ch">
<h3 style="  text-align: left;font-size: 25px; color:#1C164B;padding:20px 0 10px 0; font-weight: bold; " class="top-and-bottom">Deal Origination</h3>
<p style="color: #808080;padding: 20px 0 0 0;font-size: 16px;line-height: 2;text-align: justify;font-weight: normal;">We pay finders fees as a percentage of the success fee earned from Clients on the successful conclusion of capital raising projects as well as the conclusion of M&A assignments such as acquisitions, disposals, BEE transactions, Strategic Equity Partnership transactions, Management Buy-in and Buy-Outs</p>
<div class="clearfix"></div>
</div>
</div>

<div class="col-md-4 w3ls-left">
<div class="tc-ch">
<h3 style="  text-align: left;font-size: 25px; color:#1C164B;padding:20px 0 10px 0; font-weight: bold; " class="top-and-bottom">Project Execution Partners</h3> 
<p style="color: #808080;padding: 20px 0 0 0;font-size: 16px;line-height: 2; text-align: justify;font-weight: normal;">&#10687; Turnaround and Restructuring Professionals – Turnaround CEO, CRO, CFO’s to team up on a turnaround assignment on a project by project basis.</p>
<p style="color: #808080;padding: 20px 0 0 0;font-size: 16px;line-height: 2; text-align: justify;font-weight: normal;">&#10687; Corporate Finance and Financial Modelling Professionals: partnering on M&A and capital raising assignments on a project by project basis on a fee sharing arrangement based on skills, competencies and work allocation</p>
<div class="clearfix"></div>
</div>
</div>
<div class="clearfix"></div>
</div>
</div>
<!-- //Relationship -->

<!------associates and membership----------->
<section id="service"  data-aos="zoom-in" style="padding: 70px 0 0 40px;">
<div class="container">
<section class="team-agileinfo jarallax" id="team">
<div class="container">
<h4 style="border-left: #1C164B  solid 4px; font-size: 35px; color:#707070; text-transform: uppercase; padding: 0 0 5px 7px;font-weight: bold;">Associations and Memberships</h4><br><br>
<div class="row"  data-aos="zoom-in">
<div class="col-md-6 col-lg-4 col-sm-12">
<div class="single_service hvr-curl-top-right">
<div class="single_service-left">
</div>
<div class="single_service-body">
<img src="images/d1.jpg" style="width: 100px">
</div>
</div>
</div>

<div class="col-md-6 col-lg-4 col-sm-12">
<div class="single_service hvr-curl-top-right">
<div class="single_service-left">
</div>
<div class="single_service-body">
<img src="images/d2.jpg" style="width: 100px">
</div>
</div>
</div>

<div class="col-md-6 col-lg-4 col-sm-12">
<div class="single_service hvr-curl-top-right">
<div class="single_service-left">
</div>
<div class="single_service-body">
<img src="images/d3.jpg" style="width: 100px">
</div>
</div>
</div>
</div>  
</section>

</div>
</div>
</section> 
<!------associates and membership----------->


<!-- contact section -->
<section class="contact-w3layouts jarallax" id="contact">
<div class="container">
<h2 style="border-left: #1C164B solid 4px; font-size: 35px; color:#707070; text-transform: uppercase; padding: 0 0 5px 7px; font-weight: bold;">Contact Us</h2>
<div class="col-lg-5 col-md-5 col-sm-12" data-aos="zoom-in">
<p class="contact-p1" style="font-size: 26px;">Let's Talk</p>
<ul class="contact-w3ls">
<li>
<i class="fa fa-mobile" aria-hidden="true" style="font-size: 18px;color: #808080"></i>
<p class="con" style="font-size: 18px; color: #808080;">076 992 2278</p>
</li>
<li>
<i class="fa fa-phone" aria-hidden="true" style="font-size: 18px;color: #808080"></i>
<p class="con" style="font-size: 18px; color: #808080;">010 140 6158</a></p>
</li>
<li>
<i class="fa fa-envelope-o" aria-hidden="true" style="font-size: 18px;color: #808080"></i>
<p class="con" style="font-size: 20px;"><a href="mailto:info_primera@primeracapital.co.za"  style="font-size: 18px; color: #808080;"> info_primera@primeracapital.co.za</a></p>
</li>
<li>
<i class="fa fa-map-marker" aria-hidden="true" style="font-size: 18px;color: #808080"></i>
<p class="con" style="font-size: 20px;"><a href="https://goo.gl/maps/PKP6ajAyViCHuWAp7" style="font-size: 18px; color: #808080;"> 1 Wedgewood Link, Bryanston, 2191</a></p>
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