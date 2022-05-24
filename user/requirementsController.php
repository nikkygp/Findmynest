<?php 
session_start();
require "../config.php";
$user_id = $_SESSION['email'];
if(isset($_POST['post_req_btn1']))
{
$_SESSION['createdDate1'] = $_POST['createdDate'];
$_SESSION['type1'] = $_POST['type'];
$_SESSION['price1'] = $_POST['price'];
$_SESSION['location1'] = $_POST['location'];
$_SESSION['car1'] = $_POST['car'];
$_SESSION['rooms1'] = $_POST['rooms'];
$_SESSION['area1'] = $_POST['area'];
$_SESSION['bathrooms1'] = $_POST['bathrooms'];
$_SESSION['bedrooms1'] = $_POST['bedrooms'];
$_SESSION['furnish1'] = $_POST['furnish'];
$sql = "UPDATE `tbl_requirements` SET `req_price` = '".$_SESSION['price1']."' , `req_loc` = '".$_SESSION['location1']."' , `furnish_status` = '".$_SESSION['furnish1']."',`parkspaces` = '".$_SESSION['car1']."' , `createdDate` = '".$_SESSION['createdDate1']."' , `room` = '".$_SESSION['rooms1']."', `bathroom` = '".$_SESSION['bathrooms1']."', `bedroom` = '".$_SESSION['bedrooms1']."', `area` = '".$_SESSION['area1']."' WHERE `user_mail` = '$user_id'";
$res = mysqli_query($conn, $sql);
if($res)
{
    echo ("
    <script>
    window.location.href='post_your_requirements.php';
    </script>
    ");
}
}
if(isset($_POST['post_req_btn']))
{
$createdDate1 = $_POST['createdDate'];
$type1 = $_POST['type'];
$price1 = $_POST['price'];
$location1 = $_POST['location'];
$car1 = $_POST['car'];
$rooms1 = $_POST['rooms'];
$area1 = $_POST['area'];
$bathrooms1 = $_POST['bathrooms'];
$bedrooms1 = $_POST['bedrooms'];
$furnish1 = $_POST['furnish'];
$sql = "INSERT INTO `tbl_requirements`(`req_price`, `req_type`, `req_loc`, `furnish_status`, `parkspaces`, `createdDate`, `room`, `bathroom`, `bedroom`, `area`, `user_mail`) VALUES 
('$price1','$type1','$location1','$furnish1','$car1','$createdDate1','$rooms1','$bathrooms1','$bedrooms1','$area1','$user_id')";
$res = mysqli_query($conn, $sql);
if($res)
{
    echo ("
    <script>
    window.location.href='post_your_requirements.php';
    </script>
    ");
}
}
?>