<?php 
session_start();
require "../config.php";
{
	if(isset($_POST['post_ad_btn']))
  	{
      $email = $_SESSION['email'];
  		$title = ucwords($_POST['title']);
  		$description = ucwords($_POST['des']);
  		$createdDate = $_POST['createdDate'];
  		$category = $_POST['category'];
  		$type = $_POST['type'];
  		$price = $_POST['price'];
  		$location = ucwords($_POST['location']);
  		$area = $_POST['area'];
  		$rooms = $_POST['rooms'];
  		$bathrooms = $_POST['bathrooms'];
  		$bedrooms = $_POST['bedrooms'];
  		$feature = $_POST['feature'];
  		$img_name1 = $_FILES['ad_img1']['name'];
      $img_name2 = $_FILES['ad_img2']['name'];
      $img_name3 = $_FILES['ad_img3']['name'];
      move_uploaded_file($_FILES['ad_img1']['tmp_name'],'Property_images/'.$_FILES['ad_img1']['name']);
      move_uploaded_file($_FILES['ad_img2']['tmp_name'],'Property_images/'.$_FILES['ad_img2']['name']);
      move_uploaded_file($_FILES['ad_img3']['tmp_name'],'Property_images/'.$_FILES['ad_img3']['name']);
      $qu = "SELECT * FROM tbl_places WHERE name = '$location'";
        $re = mysqli_query($conn, $qu);
        $row = mysqli_fetch_array($re);
        $lat = $row['lat'];
        $lng = $row['lng'];
      if($feature == "yes")
      {
        $sql = "INSERT INTO `tbl_ads`(`ad_title`, `ad_description`, `ad_price`, `ad_cat`, `ad_type`, `ad_loc`, `lat`,`lng`, `createdDate`, `room`, `bathroom`, `bedroom`, `ad_feature`, `area`, `image1`,`image2`,`image3`,`username`,`status`) VALUES ('$title','$description','$price','$category','$type','$location','$lat','$lng','$createdDate','$rooms','$bathrooms','$bedrooms','$feature','$area','$img_name1','$img_name2','$img_name3','$email',4)";
            if(mysqli_query($conn, $sql))
              {
                echo ("<script LANGUAGE='JavaScript'>
                window.location.href='payment.php';
                </script>");
              }
              else
              {
                echo ("<script LANGUAGE='JavaScript'>
                window.alert('Error Occured');
                window.location.href='post_your_ad.php';
                </script>");
              }
      }
      else
      {

      $sql = "INSERT INTO `tbl_ads`(`ad_title`, `ad_description`, `ad_price`, `ad_cat`, `ad_type`, `ad_loc`, `lat`,`lng`, `createdDate`, `room`, `bathroom`, `bedroom`, `ad_feature`, `area`, `image1`,`image2`,`image3`,`username`) VALUES ('$title','$description','$price','$category','$type','$location','$lat','$lng','$createdDate','$rooms','$bathrooms','$bedrooms','$feature','$area','$img_name1','$img_name2','$img_name3','$email')";
      if(mysqli_query($conn, $sql))
              {
                echo ("<script LANGUAGE='JavaScript'>
                window.alert('Ad under review process');
                window.location.href='myads.php';
                </script>");
              }
              else
              {
                echo ("<script LANGUAGE='JavaScript'>
                window.alert('Error Occured');
                window.location.href='post_your_ad.php';
                </script>");
              }
      }

  	}
}
?>