<?php
include 'header1.php';
$user = $_SESSION['email'];
$query = "SELECT * FROM tbl_notifications WHERE username = '$user'";
$res = mysqli_query($conn,$query);
?>
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
                      <h5 class="card-header">'.$row['type'].'</h5>
                      <div class="card-body">
                        <p class="card-text">'.$row['notification'].'</p>
                        <p id="dt" class="card-text float-right">'.$row['date_time'].'</p>
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
    echo('<center><font color="red" size="3">No Notifications Available!!</font></center>');
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