<?php 
session_start();
error_reporting(0);
$loc = $_SESSION['loc'];
include "../config.php";
include "header.php"; 
include "xml.php";
$query1 = "SELECT * FROM tbl_ads WHERE ad_loc = '$loc' and status = 2";
$res1 = mysqli_query($conn,$query1);
$query2 = "SELECT * FROM tbl_places";
$res2 = mysqli_query($conn,$query2);
?>
<form action="#" method="post">
<div class="container bg-white shadow round px-3 py-3 mt-5">
<h3><font color="#006aff">Filter your search</font></h3>
  <div class="row">
    <div class="col-sm">
    <h6>Location</h6>
    </div>
    <div class="col-sm">
    <h6>Rooms</h6>
    </div>
    <div class="col-sm">
    <h6>Bedrooms</h6>
    </div>
    <div class="col-sm">
    <h6>Bathrooms</h6>
    </div>
    <div class="col-sm">
    </div>
    </div>
    <div class="row">
    <div class="col-sm">
    <select class="form-control" name="loc" required>
        <option value=""><?php echo $loc ?></option>
        <?php
          while($row = mysqli_fetch_array($res2))
            {
              echo('<option value='.$row['name'].'>'.$row['name'].'</option>');
            }
         ?>
     </select>
    </div>
    <div class="col-sm">
         <select class="form-control" name="rooms" >
             <option value="">Select One  </option>
             <option value="1">1</option>
             <option value="2">2</option>
             <option value="3">3</option>
             <option value="4">4</option>
             <option value="5">5</option>
             <option value="6">6</option>
             <option value="7">7</option>
          </select>
    </div>
    <div class="col-sm">
         <select class="form-control" name="bedrooms" >
            <option value="">Select One  </option>
            <option value="1">1</option>
            <option value="2">2</option>
            <option value="3">3</option>
            <option value="4">4</option>
            <option value="5">5</option>
            <option value="6">6</option>
            <option value="7">7</option>
         </select>
    </div>
    <div class="col-sm">
     <select class="form-control" name="bathrooms" >
           <option value="">Select One  </option>
           <option value="1">1</option>
           <option value="2">2</option>
           <option value="3">3</option>
           <option value="4">4</option>
           <option value="5">5</option>
           <option value="6">6</option>
           <option value="7">7</option>
         </select>
    </div>
    <div class="col-sm">
    <input type="submit" class="btn btn-primary px-5" name="fsearch" value="Filter">
    </div>
    </div>
</div>
</form>
<div class="container bg-blue shadow round px-3 py-3 mt-3">
  <div class="row">
    <div class="col-sm">
    <div id="map"></div>
    </div>
    <div class="col-sm">
      <section class="grids-4 mt-n5" id="properties">
    <div id="grids4-block" class="py-0">
            <div class="container py-md-3">
            <div class="row mt-3 pt-3">
                <?php 
                if(isset($_POST['fsearch']))
                {
                  $loc = $_SESSION['loc'] = $_POST['loc'];
                  $room = $_POST['rooms'];
                  $bedroom = $_POST['bedrooms'];
                  $bathroom = $_POST['bathrooms'];
                  $query = "SELECT * FROM tbl_ads WHERE ad_loc = '$loc' and room = '$room' and bedroom = '$bedroom' and bathroom = '$bathroom' and status = 2";
                  $res = mysqli_query($conn,$query);
                  if(mysqli_num_rows($res))
                  {                       
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
                  ?>
                  <div class="grids4-info  col-lg-6 col-md-4 mb-3">
                          <a href="adview.php?ad_id=<?php echo $encryption; ?>"><img src="Property_images/<?php echo $row['image1']; ?>" height="200px" class="img-fluid" alt=""></a>
                          <ul class="location-top">
                              <li class="rent">For <?php echo $row['ad_cat']; ?></li>
                              <li class="open-1">Open <?php echo $row['ad_type']; ?></li>
                          </ul>
                          <div class="info-bg">
                              <h5><a href="adview.php?ad_id=<?php echo $encryption; ?>"><?php echo $row['ad_title']; ?> in <?php echo $row['ad_loc']; ?></a></h5>
                              <p>Rs. <?php echo $row['ad_price']; ?></p>
                              <li class="feature">Featured</li><br><br>
                              <span class="fa fa-map-marker"></span>&nbsp;&nbsp;<?php echo $row['ad_loc']; ?>
                          </div>
                      </div>
                      <?php
                      }
                      }
                    }
                    else
                    {
                    if(mysqli_num_rows($res1)>0)
                    {                       
                    while ($row1 = mysqli_fetch_array($res1))
                    {
                        $simple_string = $row1['ad_id'];
                        $ciphering = "AES-128-CTR";
                        $iv_length = openssl_cipher_iv_length($ciphering);
                        $options = 0;
                        $encryption_iv = '8191';
                        $encryption_key = "adid";
                        $encryption = openssl_encrypt($simple_string, $ciphering,
                                    $encryption_key, $options, $encryption_iv);
                    ?>
                    <div class="grids4-info  col-lg-6 col-md-4 mb-3">
                            <a href="adview.php?ad_id=<?php echo $encryption; ?>"><img src="Property_images/<?php echo $row1['image1']; ?>" height="200px" class="img-fluid" alt=""></a>
                            <ul class="location-top">
                                <li class="rent">For <?php echo $row1['ad_cat']; ?></li>
                                <li class="open-1">Open <?php echo $row1['ad_type']; ?></li>
                            </ul>
                            <div class="info-bg">
                                <h5><a href="adview.php?ad_id=<?php echo $encryption; ?>"><?php echo $row1['ad_title']; ?> in <?php echo $row1['ad_loc']; ?></a></h5>
                                <p>Rs. <?php echo $row1['ad_price']; ?></p>
                                <li class="feature">Featured</li><br><br>
                                <span class="fa fa-map-marker"></span>&nbsp;&nbsp;<?php echo $row1['ad_loc']; ?>
                            </div>
                        </div>
                        <?php
                        }
                        }
                      }
                        ?>
                </div>
           </div>
    </div>
</section>
    </div>
  </div>
</div>


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
<script>
    $(function () {
      $('.navbar-toggler').click(function () {
        $('body').toggleClass('noscroll');
      })
    });
  </script>
  <script>
      var customLabel = {
        House: {
          label: 'H'
        },
        Villa: {
          label: 'V'
        },
         Apartment: {
          label: 'A'
        }
      };

        function initMap() {
        var map = new google.maps.Map(document.getElementById('map'), {
          center: new google.maps.LatLng(9.385747459057502, 76.87175966240655),
          zoom: 12
        });
        var infoWindow = new google.maps.InfoWindow;

          // Change this depending on the name of your PHP or XML file
          downloadUrl('http://localhost/findmynest/user/xml.php', function(data) {
            var xml = data.responseXML;
            var markers = xml.documentElement.getElementsByTagName('marker');
            Array.prototype.forEach.call(markers, function(markerElem) {
              var id = markerElem.getAttribute('id');
              var title = markerElem.getAttribute('title');
              var type = markerElem.getAttribute('type');
              var point = new google.maps.LatLng(
                  parseFloat(markerElem.getAttribute('lat')),
                  parseFloat(markerElem.getAttribute('lng')));

              var infowincontent = document.createElement('div');
              var strong = document.createElement('strong');
              strong.textContent = title
              infowincontent.appendChild(strong);
              infowincontent.appendChild(document.createElement('br'));
              var icon = customLabel[type] || {};
              var marker = new google.maps.Marker({
                map: map,
                position: point,
                label: icon.label
              });
              marker.addListener('click', function() {
                infoWindow.setContent(infowincontent);
                infoWindow.open(map, marker);
              });
            });
          });
        }
      function downloadUrl(url, callback) {
        var request = window.ActiveXObject ?
            new ActiveXObject('Microsoft.XMLHTTP') :
            new XMLHttpRequest;

        request.onreadystatechange = function() {
          if (request.readyState == 4) {
            request.onreadystatechange = doNothing;
            callback(request, request.status);
          }
        };

        request.open('GET', url, true);
        request.send(null);
      }

      function doNothing() {}
    </script>
<script
async 
      src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCA2ouNIjo8B4hyKPQeknjd5lHoc6VF6ww&callback=initMap"
    ></script>
</body>
</html>