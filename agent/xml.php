<?php
require("../config.php");
session_start();
function parseToXML($htmlStr)
{
$xmlStr=str_replace('<','&lt;',$htmlStr);
$xmlStr=str_replace('>','&gt;',$xmlStr);
$xmlStr=str_replace('"','&quot;',$xmlStr);
$xmlStr=str_replace("'",'&#39;',$xmlStr);
$xmlStr=str_replace("&",'&amp;',$xmlStr);
return $xmlStr;
}


if(isset($_POST['fsearch']))
{
  $loc = $_SESSION['loc'];
  $query = "SELECT * FROM tbl_ads WHERE ad_loc = '$loc' and status = 2";
  $result = mysqli_query($conn,$query);
  if (!$result) {
  die('Invalid query: ' . mysqli_error());
}
}
else
{
$loc = $_SESSION['loc'];
$query = "SELECT * FROM tbl_ads WHERE ad_loc = '$loc' and status = 2";
$result = mysqli_query($conn,$query);
if (!$result) {
  die('Invalid query: ' . mysqli_error());
}
}


header("Content-type: text/xml");

// Start XML file, echo parent node
echo "<?xml version='1.0' ?>";
echo '<markers>';
$ind=0;
// Iterate through the rows, printing XML nodes for each
while ($row = @mysqli_fetch_array($result)){
  // Add to XML document node
  echo '<marker ';
  echo 'id="' . $row['ad_id'] . '" ';
  echo 'title="' . parseToXML($row['ad_title']) . '" ';
  echo 'lat="' . $row['lat'] . '" ';
  echo 'lng="' . $row['lng'] . '" ';
  echo 'type="' . $row['ad_type'] . '" ';
  echo '/>';
  $ind = $ind + 1;
}

// End XML file
echo '</markers>';
?>

