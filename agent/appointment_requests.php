<?php
include 'header.php';
$email = $_SESSION['email'];
?>
<div class="container1">
<div id="hide_div">
<section class="py-5 my-3">
        <center><h3 class="mb-3 mt-n4"><b>Appointment status</b></h3></center>
        <div class="container">
            <div class="bg-white shadow rounded-lg d-block d-sm-flex">
            <?php
                  $no = 1;
									$r = "SELECT * FROM `tbl_appointment` WHERE `seller_email` = '$email' and status = 1";
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
                                                echo'<th scope="col" colspan="2">Action</th>
                                                ';
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
                                            <td>
                                            <form action="#" method="post">';
                                            if($row['appointment_status'] == 'Request Send')
                                            {
                                                echo'
                                                <button type="submit" value="'.$row['id'].'" name="decline" class="btn btn-danger btn-sm" id="mbtn">Decline <i class="fa fa-times"></i></button>
                                                <button type="submit" value="'.$row['id'].'" name="approve" class="btn btn-success btn-sm" id="mbtn">Approve <i class="fa fa-check"></i></button>';
                                            }
                                            else
                                            {
                                            }
                                            echo '</form>
                                            </td>
                                            ';
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
if(isset($_POST['decline']))
{
  $id = $_POST['decline'];
  $query = "UPDATE tbl_appointment SET appointment_status = 'Declined' WHERE id = '$id'";
  $res = mysqli_query($conn,$query);
  if(mysqli_num_rows($res) > 0)
  {
      header("Location: appointment_requests.php");
  }
}
if(isset($_POST['approve']))
{
  $id = $_POST['approve'];
  $query = "UPDATE tbl_appointment SET appointment_status = 'Approved' WHERE id = '$id'";
  mysqli_query($conn,$query);  
  if(mysqli_num_rows($res) > 0)
  {
  header("Location: appointment_requests.php");
  }
}
include 'footer.php';

?> 