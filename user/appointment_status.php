<?php
session_start();
error_reporting(0);
date_default_timezone_set("Asia/Kolkata");
$c_date = date("d/m/Y");
include 'header1.php';
?>
<div class="container1">
<div id="hide_div">
<section class="py-5 my-3">
        <center><h3 class="mb-3 mt-n4"><b>Appointment status</b></h3></center>
        <div class="container">
            <div class="bg-white shadow rounded-lg d-block d-sm-flex">
            <?php
                  $no = 1;
									$r = "SELECT * FROM `tbl_appointment` WHERE `user` = '$email' and status = 1";
									$s = mysqli_query($conn,$r);
									if(mysqli_num_rows($s))
									{
										echo '
										<table class="table table-bordered m-3">
										<thead>
											<tr>
											<th scope="col">#</th>
											<th scope="col">Date</th>
											<th scope="col">Time</th>
											<th scope="col">Message</th>
                      <th scope="col">Status</th>';
                      if($row['appointment_status'] == 'Request Send')
                      {
                          echo'
                          <th scope="col">Action</th>';
                      }
                      else
                      {

                      }
											echo '</tr>
										</thead>';
										while ($row = mysqli_fetch_array($s))
										{
										echo'<tbody>
											<tr>
											<td>'.$no.'</td>
											<td>'.$row['date'].'</td>
											<td>'.$row['time'].'</td>
											<td>'.$row['message'].'</td>
                      <td>'.$row['appointment_status'].'</td>
                      <td>';
                      if($row['appointment_status'] == 'Request Send')
                      {
                        echo '
                        <form action="#" method="post">
                        <button type="submit" value="'.$row['id'].'" name="delete" class="btn btn-danger btn-sm" id="mbtn">Delete <i class="fa fa-trash"></i></button>
                        </form>
                        </td>';
                      }
                      else
                      {
                        
                      }

											echo '</tr>';
                                        $no++;
										}
										echo '</tbody>
										</table>';
									}
									else
									{
										echo'<h6 class="m-3"><font color="red"><center>No Appointments yet</center></font></h6>';
									}
									?>
            </div>
        </div>
    </section>
</div>
<?php
if(isset($_POST['delete']))
{
  $id = $_POST['delete'];
  $query = "UPDATE tbl_appointment SET status = 0 WHERE id = '$id'";
  mysqli_query($conn,$query);
}
?>
<script>
  var loadFile1 = function(event) {
    var reader = new FileReader();
    reader.onload = function(){
      var output = document.getElementById('output1');
      output.src = reader.result;
    };
    reader.readAsDataURL(event.target.files[0]);
  };
  var loadFile2 = function(event) {
    var reader = new FileReader();
    reader.onload = function(){
      var output = document.getElementById('output2');
      output.src = reader.result;
    };
    reader.readAsDataURL(event.target.files[0]);
  };
  var loadFile3 = function(event) {
    var reader = new FileReader();
    reader.onload = function(){
      var output = document.getElementById('output3');
      output.src = reader.result;
    };
    reader.readAsDataURL(event.target.files[0]);
  };
</script>
<script type="text/javascript">
  function goBack()
  {
    window.location.href = "home.php";
  }
  $(document).ready(function(){
      $('#mbtn').click(function(){
         var uid = $(this).data('id');
         $.ajax({
          url: 'server.php',
          type: 'post',
          data: {uid:uid},
          success: function(response){
            $('.modal-body').html(response);
            $('#exampleModal').modal('show');
          }
        });
      });
  });
</script>
<script src="../assets/js/jquery_validator.js"></script>
<?php
include 'userloanController.php';
include 'footer.php';

?> 