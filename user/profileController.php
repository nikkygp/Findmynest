<?php
session_start();
include "../config.php";
if(isset($_POST['id']))
{
 	 $id = $_POST['id'];
     $pic = $_POST['pic'];
     $fname = $_POST['name'];
     $phone = $_POST['phone'];
     $place = $_POST['place'];
     $address = $_POST['address'];
     echo $sql = "UPDATE `tbl_userdetails` SET `fname`='$fname',`address`='$address',`phone`='$phone',`place`='$place', `profile_pic` = '$pic' WHERE user_id = '$id'";
     $res = mysqli_query($conn,$sql);
 }

?>