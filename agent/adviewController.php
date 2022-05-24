<?php 
session_start();
require "../config.php";
if(isset($_POST['id']))
{
  $id = $_POST['id'];
  $email = $_SESSION['email'];
  $query = "SELECT * FROM tbl_ads WHERE ad_id = '$id' and status = 2";
  $res = mysqli_query($conn,$query);
  $row = mysqli_fetch_array($res);
  $ad_id = $row['ad_id'];
  $title = $row['ad_title'];
  $description = $row['ad_description'];
  $category = $row['ad_cat'];
  $type = $row['ad_type'];
  $price = $row['ad_price'];
  $loc = $row['ad_loc'];
  $img1 = $row['image1'];
  $sql = "INSERT INTO `tbl_favourites`(`ad_id`,`ad_title`, `ad_description`, `ad_price`, `ad_type`, `ad_cat`, `image1`, `ad_loc`,`username`) VALUES ('$ad_id','$title','$description','$price','$type','$category','$img1','$loc','$email')";
    $result = mysqli_query($conn,$sql);
}
?>