<?php
include 'header.php';
$user = $_SESSION['email'];
$query = "SELECT * FROM tbl_enquiry WHERE m_from = '$user' and status = 1";
$res = mysqli_query($conn,$query);
?>
<style type="text/css">
    @import url(https://fonts.googleapis.com/css?family=Poppins:300,400);
.message-blue {
    position: relative;
    margin-left: 20px;
    margin-bottom: 10px;
    padding: 10px;
    background-color: #daf1ff;
    width: 400px;
    height: 80px;
    text-align: left;
    font: 400 .9em 'Poppins', sans-serif;
    border: 1px solid #97C6E3;
    border-radius: 10px;
}
.message-white {
    position: relative;
    margin-bottom: 10px;
    margin-left: calc(100% - 440px);
    padding: 10px;
    background-color: white;
    width: 400px;
    height: 80px;
    text-align: left;
    font: 400 .9em 'Poppins', sans-serif;
    border-radius: 10px;
    border-right: 1px solid #D1D1D1;
    border-left: 1px solid #D1D1D1;
    border-bottom: 1px solid #D1D1D1;
    border-radius: 0px 0px 10px 10px;
}
.message-orange {
    position: relative;
    margin-bottom: 10px;
    margin-left: calc(100% - 440px);
    padding: 10px;
    background-color: #fff6c6;
    width: 400px;
    height: 80px;
    text-align: left;
    font: 400 .9em 'Poppins', sans-serif;
    border: 1px solid #dfd087;
    border-radius: 10px;
}

.message-content {
    padding: 0;
    margin: 0;
}

.message-timestamp-right {
    position: absolute;
    font: 400 .7em 'Poppins', sans-serif;
    bottom: 5px;
    right: 10px;
}

.message-timestamp-left {
    position: absolute;
    font: 400 .7em 'Poppins', sans-serif;
    bottom: 5px;
    left: 10px;
}

.message-blue:after {
    content: '';
    position: absolute;
    width: 0;
    height: 0;
    border-top: 15px solid #daf1ff;
    border-left: 15px solid transparent;
    border-right: 15px solid transparent;
    top: 0;
    left: -15px;
}

.message-blue:before {
    content: '';
    position: absolute;
    width: 0;
    height: 0;
    border-top: 17px solid #97C6E3;
    border-left: 16px solid transparent;
    border-right: 16px solid transparent;
    top: -1px;
    left: -17px;
}

.message-orange:after {
    content: '';
    position: absolute;
    width: 0;
    height: 0;
    border-bottom: 15px solid #fff6c6;
    border-left: 15px solid transparent;
    border-right: 15px solid transparent;
    bottom: 0;
    right: -15px;
}

.message-orange:before {
    content: '';
    position: absolute;
    width: 0;
    height: 0;
    border-bottom: 17px solid #dfd087;
    border-left: 16px solid transparent;
    border-right: 16px solid transparent;
    bottom: -1px;
    right: -17px;
}
</style>
<div class="heading text-center mx-auto mt-5">
   <h3 class="head">My Enquiries</h3>
</div>
<section class="py-5 my-5 mt-n3">
  <div class="container">
    <div class="bg-white shadow rounded-lg p-4">
  <?php
  if(mysqli_num_rows($res) > 0)
  {
    while($row = mysqli_fetch_array($res))
    {
        $id = $row['ad_id'];
        $query = "SELECT * FROM tbl_ads WHERE ad_id = '$id'";
        $re = mysqli_query($conn,$query);
        $r = mysqli_fetch_array($re);
        echo('
                <div class="container">
                <div class="message-orange">
                <p class="message-content"><b>To: @'.$row['m_to'].'</b></p>
                    <p class="message-content">'.$row['message'].'</p>
                    <div class="message-timestamp-right">'.$row['date_from'].'</div>
                </div>
                <div class="message-white">
                <div class="row">
                    <div class="col">
                    <div class="img-square-wrapper">
                       <img src="../user/Property_images/'.$r['image1'].'" class="img-fluid rounded-start" alt="..." width="100px" height="60px">
                    </div>
                    </div
                    <div class="col">
                    <div class="card-body mt-n3">
                      <p>'.$r['ad_title'].'</p>
                      <p>'.$r['ad_description'].'</p>
                      <p>Rs: '.$r['ad_price'].'</p>
                    </div>
                </div>
                </div>');
                if($row['reply'] == "")
                {

                }
                else
                {
                     echo('<div class="message-blue">
                    <p class="message-content"><b>Reply From: @'.$row['m_to'].'</b></p>
                    <p class="message-content">'.$row['reply'].'</p>
                    <div class="message-timestamp-left">'.$row['date_to'].'</div>
                </div>');
                }
                echo('
              </div>
            ');
    }
  }
?>
</div>
    </div>
</section>
    <br>
<br> <br>
<br> <br>
<br> 
<?php
include 'footer.php';
?>