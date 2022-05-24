<?php
include "config.php";
$query = "SELECT * FROM tbl_ads WHERE  ad_feature = 'yes' and status = 2";
$res = mysqli_query($conn,$query);
$query1 = "SELECT * FROM tbl_ads WHERE  ad_feature = 'no' and status = 2";
$res1 = mysqli_query($conn,$query1);
?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title>Home | Findmynest</title>
    <!-- web fonts -->
    <link href="//fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800,900&display=swap" rel="stylesheet">
    <link href="//fonts.googleapis.com/css?family=Hind&display=swap" rel="stylesheet">
    <link rel="icon" href="assets/images/head-logo.png" type="image/x-icon" />
    <link rel="stylesheet" href="assets/css/style-starter.css">
  </head>
  <body>


<!-- Top Menu 1 -->
<section class="w3l-top-menu-1">
	<div class="top-hd">
		<div class="container">
	<header class="row">
		<div class="social-top col-lg-3 col-6">
			<li>Follow Us</li>
			<li><a href="#"><span class="fa fa-facebook"></span></a></li>
			<li><a href="#"><span class="fa fa-instagram"></span></a> </li>
				<li><a href="#"><span class="fa fa-twitter"></span></a></li>
				<li><a href="#"><span class="fa fa-vimeo"></span></a> </li>
		</div>
		<div class="accounts col-lg-9 col-6">
			<li class=""><a href="user/login.php">Login</a></li>
			<li class="top_li2"><a href="user/register.php">Sign Up</a></li>
		</div>
		
	</header>
</div>
</div>
</section>
<!-- //Top Menu 1 -->
<section class="w3l-bootstrap-header">
  <nav class="navbar navbar-expand-lg navbar-light py-lg-2 py-2">
    <div class="container">
      <a href="landing.php"><img height="50px" width="200px" class="logo" src="assets/images/main-logo.svg"></a>
      <!-- if logo is image enable this   
    <a class="navbar-brand" href="#index.html">
        <img src="image-path" alt="Your logo" title="Your logo" style="height:35px;" />
    </a> -->
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
        aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon fa fa-bars"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item">
            <a class="nav-link" href="index.php">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#locations">Popular Locations</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#services">Services</a>
          </li>
           <li class="nav-item">
            <a class="nav-link" href="#about">About Us</a>
          </li>
          <li class="nav-item mr-0">
            <a class="nav-link" href="#contact">Contact</a>
          </li>
        </ul>
       
      </div>
    </div>
  </nav>
</section>
<section class="form-12" id="home">
	<div class="form-12-content">
		<div class="container">
			<div class="main-heading">Find your place <br>of dream</div>
			<div class="sub-heading">Findmynest is Kerala's No.1 Real Estate Broker where you can find your perfect homes and sell your property faster</div>
		</div>
	</div>
</section>
<section class="locations-1" id="locations">
<div class="locations py-5">
 <div class="container py-md-3">
    <div class="heading text-center mx-auto">
        <h3 class="head">Popular Locations</h3>
        <p class="my-3 head "> We are providing our services in major cities all over Kerala. Major cities include Kochi, Trivandrum, Palakkad, Kozhikode, Kannur, Malappuram, Kasaragod, Kottayam etc.</p>
      </div>
            <div class="row mt-3 pt-5">
                <div class="col-md-4 col-sm-6">
                    <div class="box16">
                        <img class="img-fluid" src="assets/images/g1.jpg" alt="">
                        <div class="box-content">
                            <h3 class="title">Kochi</h3>
                            <span class="post">2 Listings</span>
                           
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6">
                    <div class="box16">
                        <img class="img-fluid" src="assets/images/g2.jpg" alt="">
                        <div class="box-content">
                            <h3 class="title">Trivandrum</h3>
                            <span class="post">2 Listings</span>
                           
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 mt-lg-0 pt-lg-0 mt-md-4 pt-md-2">
                    <div class="box16">
                        <img class="img-fluid" src="assets/images/g3.jpg" alt="">
                        <div class="box-content">
                            <h3 class="title">Kozhikode</h3>
                            <span class="post">2 Listings</span>
                           
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 mt-md-4 pt-md-2">
                    <div class="box16">
                        <img class="img-fluid" src="assets/images/g4.jpg" alt="">
                        <div class="box-content">
                            <h3 class="title">Kasaragod</h3>
                            <span class="post">2 Listings</span>
                            
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 mt-md-4 pt-md-2">
                    <div class="box16">
                        <img class="img-fluid" src="assets/images/g5.jpg" alt="">
                        <div class="box-content">
                            <h3 class="title">Kollam</h3>
                            <span class="post">2 Listings</span>
                           
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 mt-md-4 pt-md-2">
                    <div class="box16">
                        <img class="img-fluid" src="assets/images/g6.jpg" alt="">
                        <div class="box-content">
                            <h3 class="title">Kottayam</h3>
                            <span class="post">2 Listings</span>
                           
                        </div>
                    </div>
                </div>
            </div>
        </div>
	 </div>
 </section>
<section class="w3l-services2" id="services">
			<div class="features-with-17_sur py-5">
				   <div class="container py-md-3">
					<div class="heading text-center mx-auto">
						<h3 class="head text-white">What We Offer</h3>
						<p class="my-3 head "> Findmynest offers its users an elaborate and easy search facility that allows them to locate their property by region, area, price, amenities and availability. We keep an update of all the latest market trends and happenings, in order to enable ourselves to answer all your questions and keep you updated over time, as well as add value to your properties through our experience and expertise.</p>
					  </div>
				     <div class="row pt-5 mt-3">
						<div class="col-lg-5 features-with-17-left_sur">
							<h4 class="lft-head">We’re Offering Unmatched Services</h4>
							<p>We offer opportunities to interested clients/investors to invest in Real Estate in Kerala. We give all kinds of information, advice and services on the real estate sector in Kerala, with respect to buying, selling, renting, leasing of Land/Property. We also deal with customer queries regarding any aspect of real estate and help them choose suitable land or property according to their need and budget.</p>
						</div>
						<div class="col-lg-7 my-lg-0 my-5 align-self-center features-with-17-right_sur">
							<div class="features-with-17-right-tp_sur">
								<div class="features-with-17-left1">
									<span class="fa fa-laptop s4"></span>		
								</div>
								<div class="features-with-17-left2">
									<h6><a href="#url">Fastest Service</a></h6>
									<p>We provide our services to our users at the earliest witout any delays.</p>		
								</div>
							</div>
							<div class="features-with-17-right-tp_sur">
								<div class="features-with-17-left1">
										<span class="fa fa-database s5"></span>		
								</div>
								<div class="features-with-17-left2">
										<h6><a href="#url">Largest Real Estate</a></h6>
										<p>Findmynest is Kerala's fastest Real Estate dealer which provides you better services for all your Real Estate needs.</p>			
								</div>
							</div>
							<div class="features-with-17-right-tp_sur">
								<div class="features-with-17-left1">
									<span class="fa fa-lock s3"></span>		
								</div>
								<div class="features-with-17-left2">
										<h6><a href="#url">100% Verified Ads</a></h6>
										<p>We provide 100% assurance to our users.</p>	
								</div>
							</div>
							<div class="features-with-17-right-tp_sur">
								<div class="features-with-17-left1">
										<span class="fa fa-codepen s2"></span>		
								</div>
								<div class="features-with-17-left2">
										<h6><a href="#url">Easy access</a></h6>
										<p>Easily accessible and reliable portal for all your Real Estate needs.</p>	
								</div>
							</div>
							
							
						</div>
					</div>
				</div>
			</div>
		</section>
<section class="w3l-apply-6">
	<!-- /apply-6-->
	<div class="apply-info py-5">
		<div class="container py-lg-3">
			<div class="heading text-center mx-auto">
				<h3 class="head text-white1">What Makes Us The Preferred Choice</h3>
				<p class="my-3 head "> We keep an update of all the latest market trends and happenings, in order to enable ourselves to answer all your questions and keep you updated over time, as well as add value to your properties through our experience and expertise.</p>
			  </div>
			<div class="apply-grids-info row pt-5 mt-3">
				<div class="apply-gd-left col-lg-7">
						<div class="row">
						<div class="col-sm-6 sub-apply">
								<div class="apply-sec-info text-center">
										
											<span class="fa fa-university mb-4"></span>
									
										<div class="appyl-sub-icon-info">
												<h5><a href="#">Maximum Choices</a></h5>
											<p>We provide a wide variety of choices from which customers can choose the best from them.</p>
										</div>
					
									</div>

						</div>
						<div class="col-sm-6 sub-apply mt-sm-0 mt-5">
							<div class="apply-sec-info text-center">
									
										<span class="fa fa-bath mb-4"></span>
									
									<div class="appyl-sub-icon-info">
											<h5><a href="#">Buyers Trust Us</a></h5>
										<p>The way we treat our Buyers makes us trustworthy.</p>
									</div>
				
								</div>

					</div>
					<div class="col-sm-6 sub-apply mt-5">
						<div class="apply-sec-info text-center">
								
									<span class="fa fa-cubes mb-4"></span>
								
								<div class="appyl-sub-icon-info">
										<h5><a href="#">Seller Prefer Us</a></h5>
									<p>We offer a lot of features to our sellers to sell their property at the earliest.</p>
								</div>
			
							</div>

				</div>
						<div class="col-sm-6 sub-apply mt-5">
								<div class="apply-sec-info text-center">
										
											<span class="fa fa-hospital-o mb-4"></span>
										
										<div class="appyl-sub-icon-info">
												<h5><a href="#">Expert Guidance</a></h5>
											<p>We maintain a groups of Experts in the field of Real Estate and anyone can seek proper guidance from them.</p>
										</div>
					
									</div>
						</div>
					</div>
				</div>
				<div class="apply-gd-right col-lg-5 mt-lg-0 mt-5">
					<div class="apply-form p-md-5 p-4 mx-auto bg-white mw-100">
						<h4>What Makes Us </h4>
						<p class="mt-3">We keep an update of all the latest market trends and happenings, in order to enable ourselves to answer all your questions and keep you updated over time, as well as add value to your properties through our experience and expertise.</p>
						<p class="mt-3"> We offer opportunities to interested clients/investors to invest in Real Estate in Kerala. We give all kinds of information, advice and services on the real estate sector in Kerala, with respect to buying, selling, renting, leasing of Land/Property. </p>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<section class="w3l-content-with-photo-4" id="about">
    <div id="content-with-photo4-block" class="py-5"> 
        <div class="container py-md-3">
            <div class="cwp4-two row">
               
                <div class="cwp4-text col-lg-6">
                        <h3>About Us</h3>
                    <p>Findmynest offers its users an elaborate and easy search facility that allows them to locate their property by region, area, price, amenities and availability. We keep an update of all the latest market trends and happenings, in order to enable ourselves to answer all your questions and keep you updated over time, as well as add value to your properties through our experience and expertise.
                    </p>
                </div>
                <div class="cwp4-image col-lg-6 pl-lg-5 mt-lg-0 mt-5">
                    <img src="assets/images/g4.jpg" class="img-fluid" alt="" />
                </div>
            </div>
        </div>
    </div>
</section>
<!-- contact form -->
<section class="w3l-contacts-2" id="contact">
	<div class="contacts-main">
		
		<div class="form-41-mian py-5">
			<div class="container py-md-3">
				<h3 class="cont-head">Get in touch</h3>
				<div class="d-grid align-form-map">
					<div class="form-inner-cont">	           
		            <form action="#" method="post" class="main-input" autocomplete="off">
		              <div class="top-inputs d-grid">
		                <div>
		                       <input type="text" placeholder="Name" name="name" id="fname" required="">
		                <span id="name" class="er"><font size="2">Please enter a valid name!!</font></span>
		                </div>
		                <div>
		                <input type="email" name="email" placeholder="email" id="email" required="">
		                <span id="error" class="er"><font size="2">Please enter a valid email!!</font></span>
		              </div>
		              </div>
		              <div>
		              <input type="text" placeholder="Phone Number" name="phone" id="phone" required="">
		              <span id="ephone" class="er"><font size="2">Please enter a valid phone number!!</font></span>
		              </div>
		              <div>
		              <textarea placeholder="Message" name="message" id="des" required=""></textarea>
		              <span id="name1" class="er"><font size="2">Please enter a valid Message, Numbers not allowed!!</font></span>
		              </div>
		              <div class="text-right">
		                <button type="submit" name="query" id="lbtn" class="btn btn-theme3">Send Now</button>
		              </div>
		            </form>
					</div>
					
					<div class="contact-right">
						<img src="assets/images/ab-2.jpg" class="img-fluid" alt="">
					</div>
				</div>
			</div>
		</div>
		<div class="contant11-top-bg py-5">
			<div class="container py-md-3">
				<div class="d-grid contact section-gap">
					<div class="contact-info-left d-grid text-center">
						<div class="contact-info">
							<span class="fa fa-location-arrow" aria-hidden="true"></span>
							<h4>Address</h4>
							<p></p>
						</div>
						<div class="contact-info">
							<span class="fa fa-phone" aria-hidden="true"></span>
							<h4>Phone</h4>
							<p><a href="tel:+44 7834 857829">+91 7594959975</a></p>
							<p><a href="tel:+44 987 654 321">+91 8921347184</a></p>
						</div>
						<div class="contact-info">
							<span class="fa fa-envelope-open-o" aria-hidden="true"></span>
							<h4>Mail</h4>
							<p><a href="mailto:findmynestteam.com" class="email">findmynestteam.com</a></p>
						</div>
					</div>
				</div>
			</div>
		</div>
</section>
 <!-- grids block 5 -->
 <section class="w3l-footer-29-main" id="footer">
  <div class="footer-29">
    <div class="grids-forms-1 pb-5">
<div class="container">
  <div class="grids-forms">
      <div class="main-midd">
          <h4 class="title-head">Newsletter – Get Updates & Latest News</h4>
          
      </div>
      <div class="main-midd-2">
          <form action="#" method="post" class="rightside-form">
              <input type="email" name="email" placeholder="Enter your email">
              <button class="btn" type="submit">Subscribe</button>
          </form>
      </div>
    </div>
  </div>
  </div>
      <div class="container pt-5">
          <div class="d-grid grid-col-4 footer-top-29">
              <div class="footer-list-29 footer-1">
                  <div class="main-social-footer-29">
                    <h6 class="footer-title-29">Social Links</h6>
                      <a href="#facebook" class="facebook"><span class="fa fa-facebook"></span></a>
                      <a href="#twitter" class="twitter"><span class="fa fa-twitter"></span></a>
                      <a href="#instagram" class="instagram"><span class="fa fa-instagram"></span></a>
                      <a href="#google-plus" class="google-plus"><span class="fa fa-google-plus"></span></a>
                      <a href="#linkedin" class="linkedin"><span class="fa fa-linkedin"></span></a>
                  </div>
              </div>
              <div class="footer-list-29 footer-2">
                  <ul>
                      <h6 class="footer-title-29">Useful Links</h6>
                      <li><a href="services.php">Management</a></li>
                      <li><a href="services.php">Reporting</a></li>
                      <li><a href="services.php">Tracking</a></li>
                      <li><a href="services.php">All Users</a></li>
                      <li><a href="contact.php">Support</a></li>
                  </ul>
              </div>
              <div class="footer-list-29 footer-3">
                  <div class="properties">
                      <h6 class="footer-title-29">Featured Properties</h6>
                      <a href="#"><img src="assets/images/g7.jpg" class="img-responsive" alt=""><p>We Are Leading International Consultiing Agency</p></a>
                      <a href="#"><img src="assets/images/g8.jpg" class="img-responsive" alt=""><p>Digital Marketing Agency all the foundational tools</p></a>
                      <a href="#"><img src="assets/images/g9.jpg" class="img-responsive" alt=""><p>Doloremque velit sapien labore eius itna</p></a>
                  </div>
              </div>
              <div class="footer-list-29 footer-4">
                  <ul>
                      <h6 class="footer-title-29">Quick Links</h6>
                      <li><a href="landing.php">Home</a></li>
                      <li><a href="about.php">About</a></li>
                      <li><a href="services.php">Services</a></li>
                      <li><a href="contact.php">Contact</a></li>
                  </ul>
              </div>
          </div>
          <div class="bottom-copies text-center">
              <p class="copy-footer-29">© <script>document.write(new Date().getFullYear())</script> Findmynest. All rights reserved</p>
               
          </div>
      </div>
  </div>
   <!-- move top -->
  <button onclick="topFunction()" id="movetop" title="Go to top">
              <span class="fa fa-angle-up"></span>
                 </button>
                 <script>
                     // When the user scrolls down 20px from the top of the document, show the button
                     window.onscroll = function () {
                         scrollFunction()
                     };
              
                     function scrollFunction() {
                         if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
                             document.getElementById("movetop").style.display = "block";
                         } else {
                             document.getElementById("movetop").style.display = "none";
                         }
                     }
              
                     // When the user clicks on the button, scroll to the top of the document
                     function topFunction() {
                         document.body.scrollTop = 0;
                         document.documentElement.scrollTop = 0;
                     }
                 </script>
                 <!-- /move top -->
</section>
<!-- // grids block 5 -->
<script src="assets/js/jquery-3.3.1.min.js"></script>
<!-- //footer-28 block -->
<script>
    $(function () {
      $('.navbar-toggler').click(function () {
        $('body').toggleClass('noscroll');
      })
    });
  </script>
  <!-- jQuery first, then Popper.js, then Bootstrap JS -->
  <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"
    integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous">
  </script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/jquery-validation@1.19.3/dist/jquery.validate.js"></script>
	<script src="assets/js/jquery_validator.js"></script>
  
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"
    integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous">
  </script>
</body>
</html>
