<html>
  <head>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
  <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
  <script>
    $(document).ready(function(){
      $("#myModal").modal('show');
    });
  </script>
</head>
<body>
<div id="myModal" class="modal fade">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Notification</h5>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>
            <div class="modal-body">
            <p>Payment Success!!</p>
            <p>Ad under review process and will be active when approved.</p>
                <form>
                    <button type="button" class="btn btn-primary" onclick="redirect();" style="float:right;">Ok</button>
                </form>
            </div>
        </div>
    </div>
</div>
<script>
  function redirect()
  {
    window.location.href="home.php";
  }
  </script>
</body>
</html>
<?php
session_start();
include('../config.php');
$email = $_SESSION['email'];
$query1 = "SELECT `fname` FROM tbl_userdetails WHERE `user_id` IN (SELECT `user_id` FROM tbl_usercredentials WHERE email = '$email' and status = 1)";
$res1 = mysqli_query($conn,$query1);
$r = mysqli_fetch_array($res1);
$name=$r['fname'];
$payment_status="Completed";
$amt = 600;
$added_on=date('Y-m-d h:i:s');
$res = mysqli_query($conn,"insert into tbl_payments(name,amount,payment_status,added_on) values('$name','$amt','$payment_status','$added_on')");
if($re = mysqli_num_rows($res) > 0)
{
$email = $_SESSION['email'];
$query1 = "UPDATE tbl_ads SET status = 4 WHERE username = '$email' and status = 5";
$res1 = mysqli_query($conn,$query1);
}
?>