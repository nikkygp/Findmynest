<?php
include 'header1.php';
$user = $_SESSION['email'];
$query = "SELECT * FROM tbl_favourites WHERE username = '$user' and status = 1";
$res = mysqli_query($conn,$query);
?>
<div class="heading text-center mx-auto mt-5">
   <h3 class="head">My Favourites</h3>
</div>
<div id="snackbar"></div>
<section class="py-5 my-5 mt-n3">
  <div class="container">
  <div class="bg-white shadow rounded-lg">
  <?php
  if(mysqli_num_rows($res) > 0)
  {
  while($row = mysqli_fetch_array($res))
  {
    $simple_string = $row['ad_id'];
    $ciphering = "AES-128-CTR";
    $iv_length = openssl_cipher_iv_length($ciphering);
    $options = 0;
    $encryption_iv = '8191';
    $encryption_key = "adid";
    $encryption = openssl_encrypt($simple_string, $ciphering,
                $encryption_key, $options, $encryption_iv);
    echo('
        <div class="container-fluid">
            <div class="row">
                <div class="col-11 ml-5 mt-3">
                    <div class="card">
                        <div class="card-horizontal">
                            <div class="img-square-wrapper">
                               <img src="Property_images/'.$row['image1'].'" class="img-fluid rounded-start" alt="..." width="300px" height="180px">
                              </div>
                            <div class="card-body">
                                <h4 class="card-title"><a href="adview.php?ad_id='.$encryption.'">'.$row['ad_title'].'</a></h4>');
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
                                <a class="btn1 btn-primary1 text-light">For '.$row['ad_cat'].'</a>&nbsp;&nbsp;&nbsp;
                                <a class="btn1 btn-warning text-light">Open '.$row['ad_type'].'</a>
                                <form action="#" method="post">
                                    <input type="text" name="htext" value="'.$row['fav_id'].'" hidden>
                                    <button type="submit" name="ubtn" class="btn btn-danger float-right mt-n4">Remove from Favorites</button>
                                </form>
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
    echo('<center><font color="red" size="3">Favorites list is empty!!</font></center>');
  }
if(isset($_POST['ubtn']))
{
    $id = $_POST['htext'];
    $update = "UPDATE tbl_favourites SET status = 0 WHERE fav_id = '$id'";
    $run = mysqli_query($conn,$update);
    if($run)
    {
        echo("
            <script>
            var x = document.getElementById('snackbar');
            $('#snackbar').append('Ad Removed from favorites!');
            $('#snackbar').css('background-color', '#dc3545');
            x.className = 'show';
            setTimeout(function(){ x.className = x.className.replace('show', ''); }, 3000);
            setTimeout(function(){
            window.location.reload(1);
          }, 800);
            </script>");
    }
    else
    {
          echo("
            <script>
            window.location.href='favourites.php';
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