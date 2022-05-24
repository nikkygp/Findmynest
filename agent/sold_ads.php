<?php
include 'header.php';
$user = $_SESSION['email'];
$query = "SELECT * FROM tbl_ads WHERE seller_email = '$user' and status = 1";
$res = mysqli_query($conn,$query);
?>
<div class="heading text-center mx-auto mt-5">
   <h3 class="head">Sold Properties</h3>
</div>
<section class="py-5 my-5 mt-n3">
  <div class="container">
  <div class="bg-white shadow rounded-lg">
  <?php
  if(mysqli_num_rows($res) > 0)
  {
  while($row = mysqli_fetch_array($res))
  {
    echo('
        <div class="container-fluid">
            <div class="row">
                <div class="col-11 ml-5 mt-3">
                    <div class="card">
                        <div class="card-horizontal">
                            <div class="img-square-wrapper">
                               <img src="../user/Property_images/'.$row['image1'].'" class="img-fluid rounded-start" alt="..." width="200px" height="200px">
                              </div>
                            <div class="card-body">
                                <h4 class="card-title mt-n3">'.$row['ad_title'].'</h4>
                                <h4 class="card-title1">Rs.&nbsp;'.$row['ad_price'].'</h4>
                                <p class="card-text mb-3">'.$row['ad_description'].'</p>
                                <p class="card-text mb-3"><span class="fa fa-bed"></span>&nbsp;&nbsp;'.$row['bedroom'].' Beds
                                    &nbsp;&nbsp;<span class="fa fa-bath"></span>&nbsp;&nbsp; '.$row['bathroom'].' Baths
                                    &nbsp;&nbsp;<span class="fa fa-share-square-o"></span>&nbsp;&nbsp; '.$row['area'].' sq ft</p>
                                <a class="btn1 btn-primary1 text-light">For '.$row['ad_cat'].'</a>&nbsp;&nbsp;&nbsp;
                                <a class="btn1 btn-warning text-light">'.$row['ad_type'].'</a>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
      ');
  }
}
else
{
    echo('<center><font color="red" size="3">No Properties Sold yet!!</font></center>');
}
?>

<br><br>
</div>
    </div>
</section>
    <br>
<br> <br>
<br> <br>
<br> 
<?php
include 'footer.php';
?>