<?php
include 'header1.php';
$user = $_SESSION['email'];
$query = "SELECT * FROM tbl_ads WHERE username = '$user' and seller_name = ''";
$res = mysqli_query($conn,$query);
?>
<div class="heading text-center mx-auto mt-5">
   <h3 class="head">My Ads</h3>
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
                               <img src="Property_images/'.$row['image1'].'" class="img-fluid rounded-start" alt="..." width="200px" height="200px">
                              </div>
                            <div class="card-body">
                                <h4 class="card-title mt-n3">'.$row['ad_title'].'</h4>');
                                if($row['ad_cat']=='Sale')
                                {
                                  echo('
                                  <h4 class="card-title1">Rs. '.$row['ad_price'].'</h4>
                                  ');
                                }
                                if($row['ad_cat']=='Rent')
                                {
                                  echo('
                                  <h4 class="card-title1">Rs. '.$row['ad_price'].'/month</h4>
                                  ');
                                }
                                echo ('<p class="card-text mb-3">'.$row['ad_description'].'</p>
                                <p class="card-text mb-3"><span class="fa fa-bed"></span>&nbsp;&nbsp;'.$row['bedroom'].' Beds
                                    &nbsp;&nbsp;<span class="fa fa-bath"></span>&nbsp;&nbsp; '.$row['bathroom'].' Baths
                                    &nbsp;&nbsp;<span class="fa fa-share-square-o"></span>&nbsp;&nbsp; '.$row['area'].' sq ft</p>
                                <a class="btn1 btn-primary1 text-light">For '.$row['ad_cat'].'</a>&nbsp;&nbsp;&nbsp;
                                <a class="btn1 btn-warning text-light">'.$row['ad_type'].'</a>');
                                if($row['status'] == 3)
                                {
                                    echo('&nbsp;&nbsp;Status: <span class="label bg-warning1">Under Review</span>');
                                }
                                else if($row['status'] == 2)
                                {
                                    echo('&nbsp;&nbsp;&nbsp;Status: <span class="label bg-success">Active</span>');
                                }
                                else
                                {
                                    echo('&nbsp;&nbsp;&nbsp;Status: <span class="label bg-danger">Ad Removed</span>');
                                }
                                if($row['status'] == 3)
                                {
      
                                }
                                else if($row['status'] == 2)
                                {
                                    echo('<form action="#" method="post">
                                    <input type="text" name="htext" value="'.$row['ad_id'].'" hidden>
                                    <button type="submit" name="ubtn" class="btn btn-danger float-right mt-n4 p-2 shadow">Delete Ad</button>
                                        </form>');
                                }
                                echo('
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
    echo('<center><font color="red" size="3">No Ads Available!!</font></center>');
}
if(isset($_POST['ubtn']))
{
    $id = $_POST['htext'];
    $update = "UPDATE tbl_ads SET status = 1 WHERE ad_id = '$id'";
    $run = mysqli_query($conn,$update);
    if($run)
    {
        echo("
            <script>
            window.location.href='myads.php';
            </script>");
    }
    else
    {
          echo("
            <script>
            window.location.href='myads.php';
            </script>");
    }
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