<?php
include 'header1.php';
$id = $_GET['ad_id'];
$ciphering = "AES-128-CTR";
$iv_length = openssl_cipher_iv_length($ciphering);
$options = 0;
$decryption_iv = '8191';
$decryption_key = "adid";
$decryption = openssl_decrypt($id, $ciphering,
                                $decryption_key, $options, $decryption_iv);
$query = "SELECT * FROM tbl_ads WHERE ad_id = '$decryption' and status = 2";
$res = mysqli_query($conn,$query);
$row = mysqli_fetch_array($res);
$s_name = $row['seller_name'];
$q = "SELECT * FROM tbl_agents WHERE name = '$s_name'";
$s = mysqli_query($conn,$q);
$ro = mysqli_fetch_array($s);
$email = $_SESSION['email'];
$query1 = "SELECT * FROM tbl_favourites WHERE ad_id = '$decryption' and username = '$email' and status = 1";
$res1 = mysqli_query($conn,$query1);
?>
<div class="container mt-5">
</div>
<div class="container">
  <div class="row">
    <div class="col-md-5 mr-0 bg-white p-4 rounded-0">
    <div id="custCarousel" class="carousel slide" data-ride="carousel" align="center">
                    <!-- slides -->
                    <div class="carousel-inner">
                        <div class="carousel-item active"> <img class="d-block w-100 rounded" src="Property_images/<?php echo $row['image1']; ?>" alt="Hills"> </div>
                        <div class="carousel-item"> <img class="d-block w-100 rounded" src="Property_images/<?php echo $row['image2']; ?>" alt="Hills"> </div>
                        <div class="carousel-item"> <img class="d-block w-100 rounded" src="Property_images/<?php echo $row['image3']; ?>" alt="Hills"> </div>
                    </div> <!-- Left right --> <a class="carousel-control-prev" href="#custCarousel" data-slide="prev"> <span class="carousel-control-prev-icon"></span> </a> <a class="carousel-control-next" href="#custCarousel" data-slide="next"> <span class="carousel-control-next-icon"></span> </a> <!-- Thumbnails -->
                    <ol class="carousel-indicators list-inline">
                        <li class="list-inline-item active"> <a id="carousel-selector-0" class="selected" data-slide-to="0" data-target="#custCarousel"> <img src="Property_images/<?php echo $row['image1']; ?>" class="img-fluid rounded"> </a> </li>
                        <li class="list-inline-item"> <a id="carousel-selector-1" data-slide-to="1" data-target="#custCarousel"> <img src="Property_images/<?php echo $row['image2']; ?>" class="img-fluid rounded"> </a> </li>
                        <li class="list-inline-item pb-4"> <a id="carousel-selector-2" data-slide-to="2" data-target="#custCarousel"> <img src="Property_images/<?php echo $row['image3']; ?>" class="img-fluid rounded"> </a> </li>
                    </ol>
    </div>
                
        <div class="col mt-5">
         <div class="card mt-3">
					<div class="card-body">
					<h5>Additional informations</h5>
							<div class="card horizontal round border-1 mt-2">
	                        <div class="row">
	                            <div class="col-w-25">
	                            </div>
	                            <div class="col p-3">
	                            <div class="card-stacked">
	                              <div class="card-content m-2">
                                <div class="badged"><b>Furnished status:</b> <?php echo $row['feature1']; ?></div>
                                <div class="badged"><b>Land Area:</b> 
                                <?php 
                                if($row['feature7'] == '')
                                {
                                  echo "NA";
                                }
                                else{
                                  echo $row['feature7']; echo" cent";
                                }
                                 ?></div>
                                <div class="badged"><b>Car Parking spaces:</b> <?php echo $row['feature2']; ?></div>
                                <div class="badged"><b>School:</b> <?php echo $row['feature3']; ?></div>
                                <div class="badged"><b>Hospital:</b> <?php echo $row['feature4']; ?></div>
                                <div class="badged"><b>Bus station:</b> <?php echo $row['feature5']; ?></div>
                                <div class="badged"><b>Railway station:</b> <?php echo $row['feature6']; ?></div>
	                              </div>
	                            </div>
	                            </div>
	                        </div>
	                      </div>
						</div>
					</div>
        </div>
    </div>
    <div class="col-md-7 bg-white p-4">
      <div class="row mt-1">
        <h2 class="prb"><font color="#006aff"><?php echo $row['ad_title']; ?></font></h2>
      </div>
      <div class="row mt-2">
      <?php
                        if($row['ad_cat']=='Sale')
                        {
                          echo('
                          <h6 class="card-title mt-2">Rs. '.$row['ad_price'].'</h6>
                          ');
                        }
                        if($row['ad_cat']=='Rent')
                        {
                          echo('
                          <h6 class="card-title mt-2">Rs. '.$row['ad_price'].'/month</h6>
                          ');
                        }
                        ?>
      </div>
      <div class="row mt-3">
        <a class="btn1 btn-primary1 text-light">For <?php echo $row['ad_cat']; ?></a>&nbsp;&nbsp;&nbsp;
        <a class="btn1 btn-warning text-light"><?php echo $row['ad_type']; ?></a>
      </div>
      <br>
      <div class="row">
        <h4>Description</h4>
      </div>
      <hr color="#f2f2f2" style="border-top: dotted 1px;"></hr>
      <div class="row">
        <h6><?php echo $row['ad_description']; ?></h6>
      </div>
      <br>
      <div class="row">
        <h4>Features</h4>
      </div>
      <hr color="#f2f2f2" style="border-top: dotted 1px;"></hr>
      <div class="row">
        <h6><span class="fa fa-bed"></span> <h4>&nbsp;&nbsp;Rooms:</h4>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $row['room']; ?> rooms</h6>
      </div>
      <div class="row">
        <h6><span class="fa fa-bed"></span> <h4>&nbsp;&nbsp;Bedrooms:</h4>&nbsp;&nbsp;&nbsp;<?php echo $row['bedroom']; ?> Beds</h6>
      </div>
      <div class="row">
       <h6><span class="fa fa-bath"></span> <h4>&nbsp;&nbsp;Bathrooms:</h4>&nbsp;&nbsp;<?php echo $row['bathroom']; ?> Baths</h6>
      </div>
      <div class="row">
        <h6><span class="fa fa-share-square-o"></span> <h4>&nbsp;&nbsp;Total Area:</h4>&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $row['area']; ?> sq ft</h6>
      </div>
      <div class="row mt-3">
        <h4>Location</h4>
      </div>
      <hr color="#f2f2f2" style="border-top: dotted 1px;"></hr>
      <div class="row">
        <h6><span class="fa fa-map-marker"></span>&nbsp;&nbsp; <?php echo $row['ad_loc']; ?></h6>
      </div>
      <form method="post" action="#" id="favouritesform">
      <div class="row">
          <?php
            if(mysqli_num_rows($res1)>0)
            {
              echo ("<div class='mt-5 text-center'><button class='btn btn-danger1 profile-button' type='button' id='ybtn' onclick='removefromfavourite();'><i class='fa fa-heart11'></i>&nbsp;&nbsp;Remove from Favorites</button></div>&nbsp;&nbsp;&nbsp;&nbsp;");
            }
            else if($row['username'] == $email)
            {
              echo ("<div class='mt-5 text-center'><button class='btn btn-danger1 profile-button' type='button' disabled><i class='fa fa-heart11'></i>&nbsp;&nbsp;Add as Favorite</button></div>&nbsp;&nbsp;&nbsp;&nbsp;");
            }
            else
            {
              echo ("<div class='mt-5 text-center'><button class='btn btn-danger profile-button' type='button' id='fbtn' onclick='addtofavourite();'><i class='fa fa-heart1'></i>&nbsp;&nbsp;Add to Favorites</button></div>&nbsp;&nbsp;&nbsp;&nbsp;");
            }
          ?>
       </form>
       <form method="post" action="#">
            <div id="snackbar"></div>
        <div class="mt-5 text-center"><button class="btn btn-primary" data-toggle="modal" data-target="#exampleModal" type="button"><i class="fa fa-envelope1"></i>&nbsp;&nbsp;Enquire now</button></div>
      </div>
      <?php
      if($row['ad_feature']=='yes')
      {
        echo('<div class="mt-3"><button class="btn btn-success ml-n2" style="width: 390px;" data-toggle="modal" data-target="#exampleModal1" type="button"><i class="fa fa-calendar-plus-o"></i>&nbsp;&nbsp;Book an Appointment</button></div>
        ');
      }
      ?>
      </form>
      <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel">Send message</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
              <form action="#" method="post">
                <div class="form-group">
                  <label for="recipient-name" class="col-form-label">From:</label>
                  <input type="text" class="form-control" name="from" value="<?php echo $email; ?>" id="recipient-name" disabled>
                </div>
                <div class="form-group">
                  <label for="message-text" class="col-form-label">Message:</label>
                  <textarea class="form-control"  rows="4" name="message" id="message-text"></textarea>
                </div>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-light" data-dismiss="modal">Close</button>
              <button type="submit" id="lbtn" class="btn btn-primary" name="msg">Send message</button>
            </div>
            </form>
          </div>
        </div>
      </div>
      <div class="modal fade" id="exampleModal1" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel">Book an Appointment</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
              <form action="#" method="post">
                <div class="form-group">
                  <label for="recipient-name" class="col-form-label">Select a preferred Date:</label>
                  <input type="date" id="date" name="date" data-provide="datepicker" class="form-control" required>                </div>
                <div class="form-group">
                  <label for="message-text" class="col-form-label">Select a preferred time:</label>
                  <select name="time" class="form-control" required>
                  <option value="09:00 am">09:00 am</option>
                  <option value="09:30 am">09:30 am</option>
                  <option value="10:00 am">10:00 am</option>
                  <option value="10:30 am">10:30 am</option>
                  <option value="11:00 am">11:00 am</option>
                  <option value="11:30 am">11:30 am</option>
                  <option value="12:00 pm">12:00 pm</option>
                  <option value="12:30 pm">12:30 pm</option>
                  <option value="01:00 pm">01:00 pm</option>
                  <option value="01:30 pm">01:30 pm</option>
                  <option value="02:00 pm">02:00 pm</option>
                  <option value="02:30 pm">02:30 pm</option>
                  <option value="03:00 pm">03:00 pm</option>
                  <option value="03:30 pm">03:30 pm</option>
                  <option value="04:00 pm">04:00 pm</option>
                  <option value="04:30 pm">04:30 pm</option>
                  <option value="05:00 pm">05:00 pm</option>
                  <option value="05:30 pm">05:30 pm</option>
                  <option value="06:00 pm">06:00 pm</option>
                  <option value="06:30 pm">06:30 pm</option>
                  <option value="07:00 pm">07:00 pm</option>
                  </select>  
                </div>
                <div class="form-group">
                  <label for="message-text" class="col-form-label">Message:</label>
                    <textarea class="form-control" name="defmsg">I want to discuss more about the property( <?php echo $row['ad_title']; ?>)</textarea>
                </div>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-light" data-dismiss="modal">Close</button>
              <button type="submit" id="lbtn" class="btn btn-primary" name="apbtn">Request this time</button>
            </div>
            </form>
          </div>
        </div>
      </div>
      <br>
      <div class="row">
        <h4>Seller Details</h4>
      </div>
      <?php
      if($row['seller_email'] == "")
      {
        echo('
                <div class="row">    
                  <div class="card horizontal shadow round" style="width: 26rem;">
                        <div class="row">
                            <div class="col-w-25">
                                <div class="card-image pl-4 mt-2"><img src="../assets/images/agent.png" width="80px" class="rounded-lg" height="70px" style="border-radius: 55%;"></div>
                            </div>
                            <div class="col p-3">
                            <div class="card-stacked">
                              <div class="card-content">
                                <h5>'.$row['username'].'</h5>
                              </div>
                            </div>
                        </div>
                 </div>
           </div>
       </div>
          ');
      }
      else{
                echo('
                <div class="row">    
                  <div class="card horizontal shadow" style="width: 26rem;">
                        <div class="row">
                            <div class="col-w-25">
                                <div class="card-image pl-4 mt-2"><img src="../assets/images/agent.png" width="80px" class="rounded-lg" height="70px" style="border-radius: 55%;"></div>
                            </div>
                            <div class="col p-3">
                            <div class="card-stacked">
                              <div class="card-content">
                                <h5>'.$ro['name'].'</h5>
                                <p class="flow-text">Email ID: '.$ro['email'].'</p>
                                <p class="flow-text">Location: '.$ro['place'].'</p>
                              </div>
                            </div>
                        </div>
                 </div>
           </div>
       </div>
          ');
      }
      ?>
      <br>
      <div class="row">
        <h4>Ad Details</h4>
      </div>    
      <div class="row">
        <div class="card horizontal shadow" style="width: 26rem;">
          <div class="card-body">
            <p class="card-text"><b>Ad ID:</b> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $row['ad_id']; ?> </p>
            <p class="card-text"><b>Location:</b> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $row['ad_loc']; ?> </p>
            <p class="card-text"><b>Posted On:</b> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $row['createdDate']; ?> </p><br>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<script type="text/javascript">
  function addtofavourite(){
    var ad_id = <?php echo $row['ad_id']; ?>;
    $.ajax({
        method:"POST",
        url: "adviewController.php",
        data:{
            id: ad_id
        },
        success: function(data){
          var x = document.getElementById("snackbar");
          $("#snackbar").append("Added to favorites");
          $("#snackbar").css("background-color", "#28a745");
          x.className = "show";
          setTimeout(function(){ x.className = x.className.replace("show", ""); }, 3000);
          setTimeout(function(){
          window.location.reload(1);
        }, 800);
    }});
  }
  function removefromfavourite(){
    var ad_id = <?php echo $row['ad_id']; ?>;
    $.ajax({
        method:"POST",
        url: "adviewController.php",
        data:{
            aid: ad_id
        },
        success: function(data){
          var x = document.getElementById("snackbar");
          $("#snackbar").append("Removed from favorites!");
          $("#snackbar").css("background-color", "#dc3545");
          x.className = "show";
          setTimeout(function(){ x.className = x.className.replace("show", ""); }, 3000);
          setTimeout(function(){
          window.location.reload(1);
        }, 800);
    }});
  }
  var date = new Date();
  date.setDate(date.getDate());

  $('#date').datepicker({ 
      startDate: date
  });
</script>
<script type="text/javascript">
    const dis = document.querySelector('.success-msg');
    const btnSub = document.querySelector('#lbtn');
    btnSub.addEventListener("click",function(){
      dis.style.display="block";
    });
</script>
<?php
include 'footer.php';
if(isset($_POST['msg']))
{
  date_default_timezone_set("Asia/Kolkata");
  $date = date("d/m/Y")." ".date("h:i:sa");
  include '../config.php';
  $from = $email;
  if($row['seller_email'] == "")
  {
    $to = $row['username'];
  }
  else
  {
    $to = $ro['email'];
  }
  $ad_id = $row['ad_id'];
  $msg = $_POST['message'];
  $query = "INSERT INTO `tbl_enquiry` (`ad_id`, `m_from` , `m_to` , `message` , `date_from`) VALUES ('$ad_id','$from','$to','$msg','$date')";
  $res = mysqli_query($conn,$query);
  if($res)
  {
             echo("
            <script>
            window.location.href='myenquiry.php';
            </script>");
  }
  else
  {

  }
}
if(isset($_POST['apbtn']))
{
  $date = $_POST['date'];
  $time = $_POST['time'];
  $ad_id = $row['ad_id'];
  $defmsg = $_POST['defmsg'];
  $seller = $ro['email'];
  $query = "INSERT INTO `tbl_appointment` (`ad_id`, `user`, `date`, `time`, `message`,`seller_email`) VALUES ('$ad_id','$email','$date','$time','$defmsg','$seller')";
  $res = mysqli_query($conn,$query);
}
?>