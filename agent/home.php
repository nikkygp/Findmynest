<?php 
session_start();
error_reporting(0);
date_default_timezone_set("Asia/Kolkata");
$c_date = date("d/m/Y");
$email = $_SESSION['email'];
include "../config.php";
include "header.php"; 
$query = "SELECT * FROM tbl_ads WHERE ad_feature = 'yes' and seller_email = '$email' and status = 2";
$res = mysqli_query($conn,$query);
?>
<section class="grids-4" id="properties" tabindex="0" style="outline:none;">
<div id="snackbar"></div>
    <div id="grids4-block" class="py-3">
            <?php
            {
                echo '<div class="container py-md-3">';
                    if(mysqli_num_rows($res))
                    { 
                      echo'
                    <div class="row mt-3 pt-3">';                       
                    while ($row = mysqli_fetch_array($res))
                    {
                        $simple_string = $row['ad_id'];
                        $ciphering = "AES-128-CTR";
                        $iv_length = openssl_cipher_iv_length($ciphering);
                        $options = 0;
                        $encryption_iv = '8191';
                        $encryption_key = "adid";
                        $encryption = openssl_encrypt($simple_string, $ciphering,
                                    $encryption_key, $options, $encryption_iv);
                        
                    echo '<div class="grids4-info  col-lg-3 col-md-3 mb-3">
                        <a href="#"><img src="../user/Property_images/'.$row['image1'].'"  class="img-fluid" height="200px" width="300px" alt=""></a>
                        <ul class="location-top">
                            <li class="rent">For '.$row['ad_cat'].'</li>
                            <li class="open-1">'.$row['ad_type'].'</li>
                        </ul>
                        <div class="info-bg">
                            <h5><a href="#">'.$row['ad_title'].'</a></h5>
                            <p>Rs. '.$row['ad_price'].'</p>
                            <li class="feature">Featured</li><br><br>
                            <span class="fa fa-map-marker"></span>&nbsp;&nbsp;'.$row['ad_loc'].'
                            <ul>

                                <li><span class="fa fa-bed"></span> '.$row['bedroom'].' Beds</li>
                                <li><span class="fa fa-bath"></span> '.$row['bathroom'].' Baths</li>
                                <li><span class="fa fa-share-square-o"></span> '.$row['area'].' sq ft</li>
                            </ul><br>';
                            if($row['status'] == 2)
                            {
                              echo ("<td><form action='home.php' method='post'><center><button type='submit' name='del' value=".$row['ad_id']." class='btn btn-primary px-5'>Mark as Sold</button></center></form></td>");
                            }
                        echo '</div>
                    </div>';
                        } 
                        }
                    echo'</div>';
                    
            }
            ?>
    </div>
  </section>
<?php
if(isset($_POST['del']))
{
  $id = $_POST['del'];
  $query = "UPDATE tbl_ads SET status = 1 , `ad_status`='sold' WHERE ad_id = '$id'";
  $res = mysqli_query($conn,$query);
  $query1 = "SELECT * FROM `tbl_ads` WHERE `ad_status` = 'sold' AND ad_id = '$id'" ;
  $run = mysqli_query($conn,$query1);
  $row = mysqli_fetch_array($run);
  $title = $row['ad_title'];
  $image = $row['image1'];
  $price = $row['ad_price'];
  $query2 = "INSERT INTO `tbl_sold_properties`(`agent`,`title`,`price`, `image`, `sold_date`) VALUES ('$email','$title','$price','$image','$c_date')";
  $res1 = mysqli_query($conn,$query2);
  if($res1)
  {
  echo("
  <script>
  var x = document.getElementById('snackbar');
  $('#snackbar').append('Ad marked as sold!');
  $('#snackbar').css('background-color', '#28a745');
  x.className = 'show';
  setTimeout(function(){ x.className = x.className.replace('show', ''); }, 3000);
  setTimeout(function(){
  window.location.reload(1);
}, 800);
  </script>");
}
}
?>
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
                 </script>
                 <!-- /move top -->
</section>
<!-- // grids block 5 -->
<script>
    $(function () {
      $('.navbar-toggler').click(function () {
        $('body').toggleClass('noscroll');
      })
    });
  </script>
  <script>
function autocomplete(inp, arr) {
  var currentFocus;
  inp.addEventListener("input", function(e) {
      var a, b, i, val = this.value;
      closeAllLists();
      if (!val) { return false;}
      currentFocus = -1;
      a = document.createElement("DIV");
      a.setAttribute("id", this.id + "autocomplete-list");
      a.setAttribute("class", "autocomplete-items");
      this.parentNode.appendChild(a);
      for (i = 0; i < arr.length; i++) {
        if (arr[i].substr(0, val.length).toUpperCase() == val.toUpperCase()) {
          b = document.createElement("DIV");
          b.innerHTML = "<strong>" + arr[i].substr(0, val.length) + "</strong>";
          b.innerHTML += arr[i].substr(val.length);
          b.innerHTML += "<input type='hidden' value='" + arr[i] + "'>";
          b.addEventListener("click", function(e) {
              inp.value = this.getElementsByTagName("input")[0].value;
              closeAllLists();
          });
          a.appendChild(b);
        }
      }
  });
  inp.addEventListener("keydown", function(e) {
      var x = document.getElementById(this.id + "autocomplete-list");
      if (x) x = x.getElementsByTagName("div");
      if (e.keyCode == 40) {
        currentFocus++;
        addActive(x);
      } else if (e.keyCode == 38) {
        currentFocus--;
        addActive(x);
      } else if (e.keyCode == 13) {
        e.preventDefault();
        if (currentFocus > -1) {
          if (x) x[currentFocus].click();
        }
      }
  });
  function addActive(x) {
    if (!x) return false;
    removeActive(x);
    if (currentFocus >= x.length) currentFocus = 0;
    if (currentFocus < 0) currentFocus = (x.length - 1);
    x[currentFocus].classList.add("autocomplete-active");
  }
  function removeActive(x) {
    for (var i = 0; i < x.length; i++) {
      x[i].classList.remove("autocomplete-active");
    }
  }
  function closeAllLists(elmnt) {
    var x = document.getElementsByClassName("autocomplete-items");
    for (var i = 0; i < x.length; i++) {
      if (elmnt != x[i] && elmnt != inp) {
        x[i].parentNode.removeChild(x[i]);
      }
    }
  }
  document.addEventListener("click", function (e) {
      closeAllLists(e.target);
  });
}
var cities = ["Thiruvananthapuram","Kollam","Pathanamthitta","Alappuzha","Kottayam","Idukki","Thrissur","Kochi","Kannur","Kasaragod","Kozhikode","Malappuram","Palakkad","Wayanad","Erumely","Kanjirappally","Ponkunnam","Aluva","Ranny","Mundakkayam","Pala","Erattupetta","Kayamkulam","Adoor","Kottarakkara"];
autocomplete(document.getElementById("location"), cities);
  </script>
<script src="../assets/js/jquery_validator.js"></script>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>
<?php
 if(isset($_POST['search']))
 {
    $loc = $_SESSION['loc'] = ucwords($_POST['loc']);
    echo("
        <script>
        window.location.href='searchresult.php';
        </script>");
 }
?>
