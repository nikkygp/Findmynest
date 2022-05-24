<?php
include 'header1.php';
?>
<section class="w3l-contact-breadcrum">
  <div class="breadcrum-bg py-sm-5 py-4">
    <div class="container py-lg-3">

      <h2>Contact Us</h2>
      <p><a href="landing.php">Home</a> &nbsp; / &nbsp; Contact</p>
   
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
                <button type="submit" id="lbtn" name="query" class="btn btn-theme3">Send Now</button>
              </div>
            </form>
            <?php
            if(isset($_POST['query']))
            {
              include '../config.php';
              $name = $_POST['name'];
              $email = $_POST['email'];
              $phone = $_POST['phone'];
              $message = $_POST['message'];
              $username = $_SESSION['email'];
              $query = "INSERT INTO `tbl_queries`(`name`, `email`, `phone`, `message`, `username`) VALUES ('$name','$email','$phone','$message','$username')";
              $res = mysqli_query($conn,$query);

            }

            ?>
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
    <div class="map">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d31482.604395058905!2d76.82484567724879!3d9.480386795061555!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3b0647d31a38cdc3%3A0x903ee3d8030699e9!2sErumeli%2C%20Kerala!5e0!3m2!1sen!2sin!4v1637776916041!5m2!1sen!2sin" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
        </div>
</section>
<!-- //contact form -->
 
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
                  <h6 class="footer-title-29">About Us</h6>
                  <ul>
                     <p>Findmynest is an exclusive real estate portal for kerala. It caters to resdential, commercial, industrial, and agricultural properties within the state. Findmynest offers a superior search experience for your dream home.</p>
                  </ul>
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
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/jquery-validation@1.19.3/dist/jquery.validate.js"></script>
<script src="../assets/js/jquery_validator.js"></script>
  
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"
    integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous">
  </script>
</body>
</html>
