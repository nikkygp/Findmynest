<?php
$servername="localhost";
$username="root";
$password="";
$dbname="db_findmynest";


//Sanitization
$dbServerNameClean=filter_var($servername, FILTER_SANITIZE_STRING, FILTER_FLAG_STRIP_HIGH);
$dbUserNameClean=filter_var($username, FILTER_SANITIZE_STRING, FILTER_FLAG_STRIP_HIGH);
$dbPasswordClean=filter_var($password, FILTER_SANITIZE_STRING, FILTER_FLAG_STRIP_HIGH);
$dbNameClean=filter_var($dbname, FILTER_SANITIZE_STRING, FILTER_FLAG_STRIP_HIGH);

$conn=new mysqli($dbServerNameClean,$dbUserNameClean,$dbPasswordClean,$dbNameClean);

if($conn->connect_error){
	die("Connection Failed".$conn->connect_error);
}else{
	//echo "connected";
}

?>