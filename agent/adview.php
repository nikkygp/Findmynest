<?php
include 'header.php';
$id = $_SESSION['aid'];
$query = "SELECT * FROM tbl_ads WHERE ad_id = '$id' and status = 4";
$res = mysqli_query($conn,$query);
$row = mysqli_fetch_array($res);
$s_name = $row['seller_name'];
$q = "SELECT * FROM tbl_agents WHERE name = '$s_name'";
$s = mysqli_query($conn,$q);
$ro = mysqli_fetch_array($s);
?>
<div class="container mt-5">
</div>
<div class="container">
  <div class="row">
    <div class="col-md-5 mr-0 bg-white p-4 rounded-0">
      <div id="carouselExampleControls" class="carousel slide  mt-3" >
        <div class="carousel-inner">
          <div class="carousel-item active"> <img class="d-block w-100 rounded" src="../user/Property_images/<?php echo $row['image1']; ?>"> </div>
          <div class="carousel-item"> <img class="d-block w-100 rounded" src="../user/Property_images/<?php echo $row['image2']; ?>"> </div>
          <div class="carousel-item"> <img class="d-block w-100 rounded" src="../user/Property_images/<?php echo $row['image3']; ?>"> </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev"> <span class="carousel-control-prev-icon" aria-hidden="true"></span> <span class="sr-only">Previous</span> </a> <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next"> <span class="carousel-control-next-icon" aria-hidden="true"></span> <span class="sr-only">Next</span> </a> </div>
         <div class="col mt-5">
        </div>
    </div>
    <div class="col-md-7 bg-white p-4">
      <div class="row mt-3">
        <h2><font color="#006aff"><?php echo $row['ad_title']; ?></font></h2>
      </div>
      <div class="row">
        <h3>RS. <?php echo $row['ad_price']; ?></h3>
      </div>
      <div class="row">
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
      <br>
      <div class="row">
        <h4>Seller Details</h4>
      </div>
                <div class="row">    
                  <div class="card horizontal shadow round border-1-red" style="width: 26rem;border: 1px solid #006aff;">
                        <div class="row">
                            <div class="col-w-25">
                                <div class="card-image pl-4 mt-2"><img src="../assets/images/agent.png" width="80px" class="rounded-lg" height="70px" style="border-radius: 55%;"></div>
                            </div>
                            <div class="col p-3">
                            <div class="card-stacked">
                              <div class="card-content">
                                <h5><?php echo $ro['name']; ?></h5>
                                <p class="flow-text">Email ID: <?php echo $ro['email']; ?></p>
                                <p class="flow-text">Location: <?php echo $ro['place']; ?></p>
                              </div>
                            </div>
                        </div>
                 </div>
           </div>
       </div>
      <br>
      <form action="#" method="post">
        <button type="submit" name="post_ad_btn" id="lbtn" class="btn-primary">Post Ad</button>
         <button class="btn btn-light" type="button" onclick="goBack()">Cancel</button>
      </form>
    </div>
  </div>
</div>
<script type="text/javascript">
  function goBack()
  {
    window.location.href = "ad_requests.php";
  }
</script>
<?php
include 'footer.php';
if(isset($_POST['post_ad_btn']))
{
  $query = "UPDATE tbl_ads SET status = 2 WHERE ad_id = '$id'";
  $res = mysqli_query($conn,$query);
  if($res)
  {
    echo ("<script LANGUAGE='JavaScript'>
                window.location.href='approve_ads.php';
                </script>");
  }
  else
  {
    $query = "UPDATE tbl_ads SET status = 4 WHERE ad_id = '$id'";
    $res = mysqli_query($conn,$query);
    echo ("<script LANGUAGE='JavaScript'>
                window.location.href='adview.php';
                </script>");
  }
}
?>