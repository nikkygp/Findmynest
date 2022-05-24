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
  		$area = $_POST['area'];
  		$rooms = $_POST['rooms'];
  		$bathrooms = $_POST['bathrooms'];
  		$bedrooms = $_POST['bedrooms'];
  		$feature = $_POST['feature'];
      $name = $row_res['name'];
      $s_email = $row_res['email'];
  		$img_name1 = $_FILES['ad_img1']['name'];
      $img_name2 = $_FILES['ad_img2']['name'];
      $img_name3 = $_FILES['ad_img3']['name'];
      move_uploaded_file($_FILES['ad_img1']['tmp_name'],'Property_images/'.$_FILES['ad_img1']['name']);
      move_uploaded_file($_FILES['ad_img2']['tmp_name'],'Property_images/'.$_FILES['ad_img2']['name']);
      move_uploaded_file($_FILES['ad_img3']['tmp_name'],'Property_images/'.$_FILES['ad_img3']['name']);
      $feature1 = $_POST['ef1'];
      $feature2 = $_POST['ef2'];
      $feature3 = $_POST['ef3'];
      $feature4 = $_POST['ef4'];
      $feature5 = $_POST['ef5'];
      $feature6 = $_POST['ef6'];
      $feature7 = $_POST['land'];
      $qu = "SELECT * FROM tbl_places WHERE name = '$loca'";
        $re = mysqli_query($conn, $qu);
        $row = mysqli_fetch_array($re);
        $lat = $row['lat'];
        $lng = $row['lng'];
        $loc = $row['name'];
        $sql = "INSERT INTO `tbl_ads`(`ad_title`, `ad_description`, `ad_price`, `ad_cat`, `ad_type`, `ad_loc`, `lat`,`lng`, `createdDate`, `room`, `bathroom`, `bedroom`, `ad_feature`, `area`, `image1`,`image2`,`image3`,`feature1`,`feature2`,`feature3`,`feature4`,`feature5`,`feature6`,`feature7`,`username`,`seller_name`,`seller_email`,`status`) 
        VALUES ('$title','$description','$price','$category','$type','$loc','$lat','$lng','$createdDate','$rooms','$bathrooms','$bedrooms','$feature','$area','$img_name1','$img_name2','$img_name3','$feature1','$feature2','$feature3','$feature4','$feature5','$feature6','$feature7','$email','$name','$s_email',5)";
            if(mysqli_query($conn, $sql))
              {
                echo ("<script LANGUAGE='JavaScript'>
                window.location.href='payment.php';
                </script>");
              }
              else
              {
                echo ("<script LANGUAGE='JavaScript'>
                window.location.href='post_your_ad_feature.php';
                </script>");
              }

  	}
}
?>