<?php
session_start();
error_reporting(0);
if(empty($_SESSION['userlogin']) || $_SESSION['userlogin'] == ""){
      echo ("<script LANGUAGE='JavaScript'>
      window.location.href='login.php';
      </script>"); 
    die();
}
include "../config.php";
$email = $_SESSION['email'];
$query = "SELECT * FROM tbl_ads WHERE status = 2";
$res = mysqli_query($conn,$query);
$query1 = "SELECT `fname` FROM tbl_userdetails WHERE `user_id` IN (SELECT `user_id` FROM tbl_usercredentials WHERE email = '$email' and status = 1)";
$res1 = mysqli_query($conn,$query1);
$r = mysqli_fetch_array($res1);
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title>Findmynest - Kerala's No.1 Real Estate portal</title>
    <!-- web fonts -->
    <link href="//fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800,900&display=swap" rel="stylesheet">
    <link href="//fonts.googleapis.com/css?family=Hind&display=swap" rel="stylesheet">
    <link rel="icon" href="../assets/images/head-logo.png" type="image/x-icon" />
     <script
      src="https://code.jquery.com/jquery-3.6.0.js"
      integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk="
      crossorigin="anonymous"></script>
       <script >
            (function($) { 
              $(function() { 
                $('rnav ul li a:not(:only-child)').click(function(e) {
                  $(this).siblings('.enav-edropdown').toggle();
                  $('.enav-edropdown').not($(this).siblings()).hide();
                      e.stopPropagation();
                    });
                    $('html').click(function() {
                      $('.enav-edropdown').hide();
                    });
                    $('#enav-toggle').click(function() {
                      $('rnav ul').slideToggle();
                    });
                    $('#enav-toggle').on('click', function() {
                      this.classList.toggle('active');
                    });
                  }); 
                })(jQuery); 
        </script>
        <script type="text/javascript">
        $(document).ready(function() {
            window.history.pushState(null, "", window.location.href);        
            window.onpopstate = function() {
                window.history.pushState(null, "", window.location.href);
            };
        });
                       // When the user clicks on the button, scroll to the top of the document
                     function topFunction() {
                         document.body.scrollTop = 0;
                         document.documentElement.scrollTop = 0;
                     }
                     document.addEventListener("DOMContentLoaded", function(){
                      window.addEventListener('scroll', function() {
                          if (window.scrollY > 50) {
                            document.getElementById('navbar_top').classList.add('fixed-top');
                            // add padding top to show content behind navbar
                            navbar_height = document.querySelector('.emenu').offsetHeight;
                            document.body.style.paddingTop = navbar_height + 'px';
                          } else {
                            document.getElementById('navbar_top').classList.remove('fixed-top');
                             // remove padding top from body
                            document.body.style.paddingTop = '0';
                          } 
                      });
                    }); 
      </script>
        <link rel="stylesheet" href="../assets/css/style-starter.css">
        <link rel="stylesheet" href="../assets/js/bootstrap.min.css">
  </head>
  <body>
<section id="navbar_top" class="emenu">
  <div class="sub-emenu">
      <a href="home.php"><img class="m-1" height="60px" width="150px" class="logo" src="../assets/images/main-logo.svg"></a>
    <rnav>
      <div class="enav-mobile">
        <a id="enav-toggle" href="#!"><span></span></a>
      </div>
      <ul class="enav-list">
        <li><a href="home.php">Home</a></li>
        <li><a href="agent_finder.php"><i class="fa fa-search-plus"></i>&nbsp;&nbsp;Agent Finder</a></li>
        <li><a class="info-sec2" href="#!">My Requests</a>
          <ul class="enav-edropdown">
            <li><a class="d-down" href="myrequests.php">Request status</a></li>
          </ul>
       </li>
        <li><a href="#!">Post Ad</a>
        <ul class="enav-edropdown">
            <li><a href="post_your_ad.php">Post Ad</a></li>
            <li><a class="d-down" href="post_your_requirements.php">Post Requirement</a></li>
          </ul>
      </li>
        <li><a class="info-sec2" href="#!">Home loans</a>
          <ul class="enav-edropdown">
            <li><a class="d-down" href="homeloan.php">Apply loan</a></li>
            <li><a class="d-down" href="mortgage_calc.php">Mortgage Calculator</a></li>
            <li><a class="d-down" href="loan_status.php">Loan status</a></li>
          </ul>
       </li>
        <li><a class="info-sec2" href="#!">Appointments</a><i class="arrow-down"></i>
          <ul class="enav-edropdown">
            <li><a class="d-down" href="appointment_status.php">Appointment status</a></li>
          </ul>
       </li>
        <li><a href="#!" data-toggle="modal" data-target="#ModalCenter"><i class="fa fa-search"></i>&nbsp;&nbsp;Search</a></li>
        <!-- <li><a class="d-down" href="notifications.php"><img src="https://img.icons8.com/external-inipagistudio-mixed-inipagistudio/64/000000/external-notification-computer-and-internet-inipagistudio-mixed-inipagistudio.png" height="23px" width="21px"/></a></li> -->
        <li><a class="info-sec2" href="#!">
          <?php
            $r1 = mysqli_fetch_array($res2);
            if($r1['profile_pic'] != "")
            {
                echo ("<img class='img_u' src='Profile_images/".$r1['profile_pic']."' width='40px' height='40px' style='border-radius: 55%;'>");
            }
            else
            {
                echo ("<img class='img_u' src='../assets/images/user_img.jpg' width='35px' height='35px' style='border-radius: 55%;' alt='Avatar'>");
            }
          ?>
          <b>Hi, <?php echo $r['fname']; ?></b></a>
          <ul class="enav-edropdown">
            <li><a class="d-down" href="userprofile.php"><i class="fa fa-user"></i>&nbsp;&nbsp;&nbsp;&nbsp;My Profile</a></li>
            <li><a class="d-down" href="myads.php"><i class="fa fa-shopping-cart"></i>&nbsp;&nbsp;&nbsp;&nbsp;My Ads</a></li>
            <li><a class="d-down" href="myenquiry.php"><i class="fa fa-envelope"></i>&nbsp;&nbsp;&nbsp;&nbsp;My Messages</a></li>
            <li><a class="d-down" href="rec_enquiry.php"><i class="fa fa-envelope"></i>&nbsp;&nbsp;&nbsp;&nbsp;Recieved Enquiries</a></li>
            <li><a class="d-down" href="favourites.php"><i class="fa fa-heart"></i>&nbsp;&nbsp;&nbsp;&nbsp;Favourites</a></li>
            <li><a class="d-down" href="logout.php"><i class="fa fa-sign-out"></i>&nbsp;&nbsp;&nbsp;&nbsp;Sign Out</a></li>
          </ul>
        </li>
      </ul>
    </rnav>
  </div>
</section>