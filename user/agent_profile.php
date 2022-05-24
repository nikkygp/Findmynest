<?php 
session_start();
error_reporting(0);
$email = $_SESSION['email'];
include "../config.php";
include "header1.php";
date_default_timezone_set("Asia/Kolkata");
$c_date = date("d/m/Y"); 
$id = $_GET['id'];
$query = "SELECT * FROM tbl_agents WHERE agent_id = '$id' and status = 1";
$res = mysqli_query($conn,$query);
$row = mysqli_fetch_array($res);
$query1 = "SELECT `r_id`, `name`, `email`, `c_date`, `review`,`rating`, `agent_id`, `status` FROM tbl_reviews WHERE agent_id = '$id' and status = 1";
$query2 = "SELECT avg(rating) as avg_rating FROM tbl_reviews WHERE agent_id = '$id' and status = 1";
$query3 = "SELECT `fname` FROM tbl_userdetails WHERE `user_id` IN (SELECT `user_id` FROM tbl_usercredentials WHERE email = '$email' and status = 1)";
$res1 =mysqli_query($conn,$query1);
$res2 =mysqli_query($conn,$query2);
$res3 =mysqli_query($conn,$query3);
$ro = mysqli_fetch_array($res2);
$ro1 = mysqli_fetch_array($res3);
?>
<div class="container mt-5">
	<center><h3><b>Post your Ad through Us</b></h3></center>
		<div class="main-body mt-3">
			<div class="row">
				<div class="col-lg-4">
					<div class="card">
						<div class="card-body">
							<div class="d-flex flex-column align-items-center text-center">
								<img src="../assets/images/agent.png" alt="Admin" class="rounded-circle p-1" width="110">
								<div class="mt-3 mw-100">
									<h4><?php echo $row['name']; ?></h4>
									<?php
									if(($ro['avg_rating'] > 0) && ($ro['avg_rating'] < 1))
									{
										echo'
										<fieldset class="rating11 ml-2">
										<input type="radio" id="star5" name="rating" value="5" /><label class = "full" for="star5" title="Awesome - 5 stars"></label>
										<input type="radio" id="star4half" name="rating" value="4 and a half" /><label class="half" for="star4half" title="Pretty good - 4.5 stars"></label>
										<input type="radio" id="star4" name="rating" value="4" /><label class = "full" for="star4" title="Pretty good - 4 stars"></label>
										<input type="radio" id="star3half" name="rating" value="3 and a half" /><label class="half" for="star3half" title="Meh - 3.5 stars"></label>
										<input type="radio" id="star3" name="rating" value="3" /><label class = "full" for="star3" title="Meh - 3 stars"></label>
										<input type="radio" id="star2half" name="rating" value="2 and a half" /><label class="half" for="star2half" title="Kinda bad - 2.5 stars"></label>
										<input type="radio" id="star2" name="rating" value="2" /><label class = "full" for="star2" title="Kinda bad - 2 stars"></label>
										<input type="radio" id="star1half" name="rating" value="1 and a half" /><label class="half" for="star1half" title="Meh - 1.5 stars"></label>
										<input type="radio" id="star1" name="rating" value="1" /><label class = "full" for="star1" title="Sucks big time - 1 star"></label>
										<input type="radio" id="starhalf" name="rating" value="half" checked/><label class="half" style="color: #FFD700;" for="starhalf" title="Sucks big time - 0.5 stars"></label>
										</fieldset><br><br>';
									}
									else if(($ro['avg_rating'] >=1) && ($ro['avg_rating'] < 1.5))
									{
										echo'
										<fieldset class="rating11 ml-2">
										<input type="radio" id="star5" name="rating" value="5" /><label class = "full" for="star5" title="Awesome - 5 stars"></label>
										<input type="radio" id="star4half" name="rating" value="4 and a half" /><label class="half" for="star4half" title="Pretty good - 4.5 stars"></label>
										<input type="radio" id="star4" name="rating" value="4" /><label class = "full" for="star4" title="Pretty good - 4 stars"></label>
										<input type="radio" id="star3half" name="rating" value="3 and a half" /><label class="half" for="star3half" title="Meh - 3.5 stars"></label>
										<input type="radio" id="star3" name="rating" value="3" /><label class = "full" for="star3" title="Meh - 3 stars"></label>
										<input type="radio" id="star2half" name="rating" value="2 and a half" /><label class="half" for="star2half" title="Kinda bad - 2.5 stars"></label>
										<input type="radio" id="star2" name="rating" value="2" /><label class = "full" for="star2" title="Kinda bad - 2 stars"></label>
										<input type="radio" id="star1half" name="rating" value="1 and a half" /><label class="half" for="star1half" title="Meh - 1.5 stars"></label>
										<input type="radio" id="star1" name="rating" value="1" checked/><label class = "full" style="color: #FFD700;" for="star1" title="Sucks big time - 1 star"></label>
										<input type="radio" id="starhalf" name="rating" value="half" checked/><label class="half" style="color: #FFD700;" for="starhalf" title="Sucks big time - 0.5 stars"></label>
										</fieldset><br><br>';
									}
									else if(($ro['avg_rating'] >=1.5) && ($ro['avg_rating'] < 2))
									{
										echo'
										<fieldset class="rating11 ml-2">
										<input type="radio" id="star5" name="rating" value="5" /><label class = "full" for="star5" title="Awesome - 5 stars"></label>
										<input type="radio" id="star4half" name="rating" value="4 and a half" /><label class="half" for="star4half" title="Pretty good - 4.5 stars"></label>
										<input type="radio" id="star4" name="rating" value="4" /><label class = "full" for="star4" title="Pretty good - 4 stars"></label>
										<input type="radio" id="star3half" name="rating" value="3 and a half" /><label class="half" for="star3half" title="Meh - 3.5 stars"></label>
										<input type="radio" id="star3" name="rating" value="3" /><label class = "full" for="star3" title="Meh - 3 stars"></label>
										<input type="radio" id="star2half" name="rating" value="2 and a half" /><label class="half" for="star2half" title="Kinda bad - 2.5 stars"></label>
										<input type="radio" id="star2" name="rating" value="2" /><label class = "full" for="star2" title="Kinda bad - 2 stars"></label>
										<input type="radio" id="star1half" name="rating" value="1 and a half" checked/><label class="half" style="color: #FFD700;" for="star1half" title="Meh - 1.5 stars"></label>
										<input type="radio" id="star1" name="rating" value="1" checked/><label class = "full" style="color: #FFD700;" for="star1" title="Sucks big time - 1 star"></label>
										<input type="radio" id="starhalf" name="rating" value="half" checked/><label class="half" style="color: #FFD700;" for="starhalf" title="Sucks big time - 0.5 stars"></label>
										</fieldset><br><br>';
									}
									else if(($ro['avg_rating'] >=2) && ($ro['avg_rating'] < 2.5))
									{
										echo'
										<fieldset class="rating11 ml-2">
										<input type="radio" id="star5" name="rating" value="5" /><label class = "full" for="star5" title="Awesome - 5 stars"></label>
										<input type="radio" id="star4half" name="rating" value="4 and a half" /><label class="half" for="star4half" title="Pretty good - 4.5 stars"></label>
										<input type="radio" id="star4" name="rating" value="4" /><label class = "full" for="star4" title="Pretty good - 4 stars"></label>
										<input type="radio" id="star3half" name="rating" value="3 and a half" /><label class="half" for="star3half" title="Meh - 3.5 stars"></label>
										<input type="radio" id="star3" name="rating" value="3" /><label class = "full" for="star3" title="Meh - 3 stars"></label>
										<input type="radio" id="star2half" name="rating" value="2 and a half" /><label class="half" for="star2half" title="Kinda bad - 2.5 stars"></label>
										<input type="radio" id="star2" name="rating" value="2" checked/><label class = "full" style="color: #FFD700;" for="star2" title="Kinda bad - 2 stars"></label>
										<input type="radio" id="star1half" name="rating" value="1 and a half" checked/><label class="half" style="color: #FFD700;" for="star1half" title="Meh - 1.5 stars"></label>
										<input type="radio" id="star1" name="rating" value="1" checked/><label class = "full" style="color: #FFD700;" for="star1" title="Sucks big time - 1 star"></label>
										<input type="radio" id="starhalf" name="rating" value="half" checked/><label class="half" style="color: #FFD700;" for="starhalf" title="Sucks big time - 0.5 stars"></label>
										</fieldset><br><br>';
									}
									else if(($ro['avg_rating'] >=2.5) && ($ro['avg_rating'] < 3))
									{
										echo'
										<fieldset class="rating11 ml-2">
										<input type="radio" id="star5" name="rating" value="5" /><label class = "full" for="star5" title="Awesome - 5 stars"></label>
										<input type="radio" id="star4half" name="rating" value="4 and a half" /><label class="half" for="star4half" title="Pretty good - 4.5 stars"></label>
										<input type="radio" id="star4" name="rating" value="4" /><label class = "full" for="star4" title="Pretty good - 4 stars"></label>
										<input type="radio" id="star3half" name="rating" value="3 and a half" /><label class="half" for="star3half" title="Meh - 3.5 stars"></label>
										<input type="radio" id="star3" name="rating" value="3" /><label class = "full" for="star3" title="Meh - 3 stars"></label>
										<input type="radio" id="star2half" name="rating" value="2 and a half" checked/><label class="half" style="color: #FFD700;" for="star2half" title="Kinda bad - 2.5 stars"></label>
										<input type="radio" id="star2" name="rating" value="2" checked/><label class = "full" style="color: #FFD700;" for="star2" title="Kinda bad - 2 stars"></label>
										<input type="radio" id="star1half" name="rating" value="1 and a half" checked/><label class="half" style="color: #FFD700;" for="star1half" title="Meh - 1.5 stars"></label>
										<input type="radio" id="star1" name="rating" value="1" checked/><label class = "full" style="color: #FFD700;" for="star1" title="Sucks big time - 1 star"></label>
										<input type="radio" id="starhalf" name="rating" value="half" checked/><label class="half" style="color: #FFD700;" for="starhalf" title="Sucks big time - 0.5 stars"></label>
										</fieldset><br><br>';
									}
									else if(($ro['avg_rating'] >=3) && ($ro['avg_rating'] < 3.5))
									{
										echo'
										<fieldset class="rating11 ml-2">
										<input type="radio" id="star5" name="rating" value="5" /><label class = "full" for="star5" title="Awesome - 5 stars"></label>
										<input type="radio" id="star4half" name="rating" value="4 and a half" /><label class="half" for="star4half" title="Pretty good - 4.5 stars"></label>
										<input type="radio" id="star4" name="rating" value="4" /><label class = "full" for="star4" title="Pretty good - 4 stars"></label>
										<input type="radio" id="star3half" name="rating" value="3 and a half" /><label class="half" for="star3half" title="Meh - 3.5 stars"></label>
										<input type="radio" id="star3" name="rating" value="3" checked/><label class = "full" style="color: #FFD700;" for="star3" title="Meh - 3 stars"></label>
										<input type="radio" id="star2half" name="rating" value="2 and a half" checked/><label class="half" style="color: #FFD700;" for="star2half" title="Kinda bad - 2.5 stars"></label>
										<input type="radio" id="star2" name="rating" value="2" checked/><label class = "full" style="color: #FFD700;" for="star2" title="Kinda bad - 2 stars"></label>
										<input type="radio" id="star1half" name="rating" value="1 and a half" checked/><label class="half" style="color: #FFD700;" for="star1half" title="Meh - 1.5 stars"></label>
										<input type="radio" id="star1" name="rating" value="1" checked/><label class = "full" style="color: #FFD700;" for="star1" title="Sucks big time - 1 star"></label>
										<input type="radio" id="starhalf" name="rating" value="half" checked/><label class="half" style="color: #FFD700;" for="starhalf" title="Sucks big time - 0.5 stars"></label>
										</fieldset><br><br>';
									}
									else if(($ro['avg_rating'] >=3.5) && ($ro['avg_rating'] < 4))
									{
										echo'
										<fieldset class="rating11 ml-2">
										<input type="radio" id="star5" name="rating" value="5" /><label class = "full" for="star5" title="Awesome - 5 stars"></label>
										<input type="radio" id="star4half" name="rating" value="4 and a half" /><label class="half" for="star4half" title="Pretty good - 4.5 stars"></label>
										<input type="radio" id="star4" name="rating" value="4" /><label class = "full" for="star4" title="Pretty good - 4 stars"></label>
										<input type="radio" id="star3half" name="rating" value="3 and a half" checked/><label class="half" style="color: #FFD700;" for="star3half" title="Meh - 3.5 stars"></label>
										<input type="radio" id="star3" name="rating" value="3" checked/><label class = "full" style="color: #FFD700;" for="star3" title="Meh - 3 stars"></label>
										<input type="radio" id="star2half" name="rating" value="2 and a half" checked/><label class="half" style="color: #FFD700;" for="star2half" title="Kinda bad - 2.5 stars"></label>
										<input type="radio" id="star2" name="rating" value="2" checked/><label class = "full" style="color: #FFD700;" for="star2" title="Kinda bad - 2 stars"></label>
										<input type="radio" id="star1half" name="rating" value="1 and a half" checked/><label class="half" style="color: #FFD700;" for="star1half" title="Meh - 1.5 stars"></label>
										<input type="radio" id="star1" name="rating" value="1" checked/><label class = "full" style="color: #FFD700;" for="star1" title="Sucks big time - 1 star"></label>
										<input type="radio" id="starhalf" name="rating" value="half" checked/><label class="half" style="color: #FFD700;" for="starhalf" title="Sucks big time - 0.5 stars"></label>
										</fieldset><br><br>';
									}
									else if(($ro['avg_rating'] >=4) && ($ro['avg_rating'] < 4.5))
									{
										echo'
										<fieldset class="rating11 ml-2">
										<input type="radio" id="star5" name="rating" value="5" /><label class = "full" for="star5" title="Awesome - 5 stars"></label>
										<input type="radio" id="star4half" name="rating" value="4 and a half" /><label class="half" for="star4half" title="Pretty good - 4.5 stars"></label>
										<input type="radio" id="star4" name="rating" value="4" checked/><label class = "full" style="color: #FFD700;" for="star4" title="Pretty good - 4 stars"></label>
										<input type="radio" id="star3half" name="rating" value="3 and a half" checked/><label class="half" style="color: #FFD700;" for="star3half" title="Meh - 3.5 stars"></label>
										<input type="radio" id="star3" name="rating" value="3" checked/><label class = "full" style="color: #FFD700;" for="star3" title="Meh - 3 stars"></label>
										<input type="radio" id="star2half" name="rating" value="2 and a half" checked/><label class="half" style="color: #FFD700;" for="star2half" title="Kinda bad - 2.5 stars"></label>
										<input type="radio" id="star2" name="rating" value="2" checked/><label class = "full" style="color: #FFD700;" for="star2" title="Kinda bad - 2 stars"></label>
										<input type="radio" id="star1half" name="rating" value="1 and a half" checked/><label class="half" style="color: #FFD700;" for="star1half" title="Meh - 1.5 stars"></label>
										<input type="radio" id="star1" name="rating" value="1" checked/><label class = "full" style="color: #FFD700;" for="star1" title="Sucks big time - 1 star"></label>
										<input type="radio" id="starhalf" name="rating" value="half" checked/><label class="half" style="color: #FFD700;" for="starhalf" title="Sucks big time - 0.5 stars"></label>
										</fieldset><br><br>';
									}
									else if(($ro['avg_rating'] >=4.5) && ($ro['avg_rating'] < 5))
									{
										echo'
										<fieldset class="rating11 ml-2">
										<input type="radio" id="star5" name="rating" value="5" /><label class = "full" for="star5" title="Awesome - 5 stars"></label>
										<input type="radio" id="star4half" name="rating" value="4 and a half" checked/><label class="half" style="color: #FFD700;" for="star4half" title="Pretty good - 4.5 stars"></label>
										<input type="radio" id="star4" name="rating" value="4" checked/><label class = "full" style="color: #FFD700;" for="star4" title="Pretty good - 4 stars"></label>
										<input type="radio" id="star3half" name="rating" value="3 and a half" checked/><label class="half" style="color: #FFD700;" for="star3half" title="Meh - 3.5 stars"></label>
										<input type="radio" id="star3" name="rating" value="3" checked/><label class = "full" style="color: #FFD700;" for="star3" title="Meh - 3 stars"></label>
										<input type="radio" id="star2half" name="rating" value="2 and a half" checked/><label class="half" style="color: #FFD700;" for="star2half" title="Kinda bad - 2.5 stars"></label>
										<input type="radio" id="star2" name="rating" value="2" checked/><label class = "full" style="color: #FFD700;" for="star2" title="Kinda bad - 2 stars"></label>
										<input type="radio" id="star1half" name="rating" value="1 and a half" checked/><label class="half" style="color: #FFD700;" for="star1half" title="Meh - 1.5 stars"></label>
										<input type="radio" id="star1" name="rating" value="1" checked/><label class = "full" style="color: #FFD700;" for="star1" title="Sucks big time - 1 star"></label>
										<input type="radio" id="starhalf" name="rating" value="half" checked/><label class="half" style="color: #FFD700;" for="starhalf" title="Sucks big time - 0.5 stars"></label>
										</fieldset><br><br>';
									}
									else if($ro['avg_rating'] >=5)
									{
										echo'
										<fieldset class="rating11 ml-2">
										<input type="radio" id="star5" name="rating" value="5" checked/><label class = "full" style="color: #FFD700;" for="star5" title="Awesome - 5 stars"></label>
										<input type="radio" id="star4half" name="rating" value="4 and a half" checked/><label class="half" style="color: #FFD700;" for="star4half" title="Pretty good - 4.5 stars"></label>
										<input type="radio" id="star4" name="rating" value="4" checked/><label class = "full" style="color: #FFD700;" for="star4" title="Pretty good - 4 stars"></label>
										<input type="radio" id="star3half" name="rating" value="3 and a half" checked/><label class="half" style="color: #FFD700;" for="star3half" title="Meh - 3.5 stars"></label>
										<input type="radio" id="star3" name="rating" value="3" checked/><label class = "full" style="color: #FFD700;" for="star3" title="Meh - 3 stars"></label>
										<input type="radio" id="star2half" name="rating" value="2 and a half" checked/><label class="half" style="color: #FFD700;" for="star2half" title="Kinda bad - 2.5 stars"></label>
										<input type="radio" id="star2" name="rating" value="2" checked/><label class = "full" style="color: #FFD700;" for="star2" title="Kinda bad - 2 stars"></label>
										<input type="radio" id="star1half" name="rating" value="1 and a half" checked/><label class="half" style="color: #FFD700;" for="star1half" title="Meh - 1.5 stars"></label>
										<input type="radio" id="star1" name="rating" value="1" checked/><label class = "full" style="color: #FFD700;" for="star1" title="Sucks big time - 1 star"></label>
										<input type="radio" id="starhalf" name="rating" value="half" checked/><label class="half" style="color: #FFD700;" for="starhalf" title="Sucks big time - 0.5 stars"></label>
										</fieldset><br><br>';
									}
									else
									{
										echo'
										<fieldset class="rating11 ml-2">
										<input type="radio" id="star5" name="rating" value="5" /><label class = "full" for="star5" title="Awesome - 5 stars"></label>
										<input type="radio" id="star4half" name="rating" value="4 and a half" /><label class="half" for="star4half" title="Pretty good - 4.5 stars"></label>
										<input type="radio" id="star4" name="rating" value="4" /><label class = "full" for="star4" title="Pretty good - 4 stars"></label>
										<input type="radio" id="star3half" name="rating" value="3 and a half" /><label class="half" for="star3half" title="Meh - 3.5 stars"></label>
										<input type="radio" id="star3" name="rating" value="3" /><label class = "full" for="star3" title="Meh - 3 stars"></label>
										<input type="radio" id="star2half" name="rating" value="2 and a half" /><label class="half" for="star2half" title="Kinda bad - 2.5 stars"></label>
										<input type="radio" id="star2" name="rating" value="2" /><label class = "full" for="star2" title="Kinda bad - 2 stars"></label>
										<input type="radio" id="star1half" name="rating" value="1 and a half" /><label class="half" for="star1half" title="Meh - 1.5 stars"></label>
										<input type="radio" id="star1" name="rating" value="1" /><label class = "full" for="star1" title="Sucks big time - 1 star"></label>
										<input type="radio" id="starhalf" name="rating" value="half" /><label class="half" for="starhalf" title="Sucks big time - 0.5 stars"></label>
										</fieldset><br><br>';
									}
									?>
									<p class="font-size-sm" style="color: #006aff"><?php echo $row['address']; ?></p>
									<a href="post_your_ad_feature.php?s_id=<?php echo $id; ?>" class="btn btn-primary px-4 mt-2">Add as my agent</a>
								</div>
							</div>
							<hr class="my-4">
						</div>
					</div>
					<div class="card mt-3">
					<div class="card-body">
					<h5>Reviews</h5>
					<?php
					while($row1 = mysqli_fetch_array($res1))
					{
						echo('
							<div class="card horizontal round border-1 mt-2">
	                        <div class="row">
	                            <div class="col-w-25">
	                                <div class="card-image1 pl-3 m-2"><img src="../assets/images/user_img.jpg" width="50px" height="50px" style="border-radius: 55%;"></div>
	                            </div>
	                            <div class="col p-3">
	                            <div class="card-stacked">
	                              <div class="card-content">
	                                <h6>'.$row1['name'].'</h6>
	                                <p class="flow-text"><i>"'.$row1['review'].'"</i></p>
	                                ');
									if(($row1['rating'] > 0) && ($row1['rating'] < 1))
									{
										echo'
										<fieldset class="rating1 ">
										<input type="radio" id="star5" name="rating" value="5" /><label class = "full" for="star5" title="Awesome - 5 stars"></label>
										<input type="radio" id="star4half" name="rating" value="4 and a half" /><label class="half" for="star4half" title="Pretty good - 4.5 stars"></label>
										<input type="radio" id="star4" name="rating" value="4" /><label class = "full" for="star4" title="Pretty good - 4 stars"></label>
										<input type="radio" id="star3half" name="rating" value="3 and a half" /><label class="half" for="star3half" title="Meh - 3.5 stars"></label>
										<input type="radio" id="star3" name="rating" value="3" /><label class = "full" for="star3" title="Meh - 3 stars"></label>
										<input type="radio" id="star2half" name="rating" value="2 and a half" /><label class="half" for="star2half" title="Kinda bad - 2.5 stars"></label>
										<input type="radio" id="star2" name="rating" value="2" /><label class = "full" for="star2" title="Kinda bad - 2 stars"></label>
										<input type="radio" id="star1half" name="rating" value="1 and a half" /><label class="half" for="star1half" title="Meh - 1.5 stars"></label>
										<input type="radio" id="star1" name="rating" value="1" /><label class = "full" for="star1" title="Sucks big time - 1 star"></label>
										<input type="radio" id="starhalf" name="rating" value="half" checked/><label class="half" style="color: #FFD700;" for="starhalf" title="Sucks big time - 0.5 stars"></label>
										</fieldset><br><br>';
									}
									else if(($row1['rating'] >=1) && ($row1['rating'] < 1.5))
									{
										echo'
										<fieldset class="rating1 ">
										<input type="radio" id="star5" name="rating" value="5" /><label class = "full" for="star5" title="Awesome - 5 stars"></label>
										<input type="radio" id="star4half" name="rating" value="4 and a half" /><label class="half" for="star4half" title="Pretty good - 4.5 stars"></label>
										<input type="radio" id="star4" name="rating" value="4" /><label class = "full" for="star4" title="Pretty good - 4 stars"></label>
										<input type="radio" id="star3half" name="rating" value="3 and a half" /><label class="half" for="star3half" title="Meh - 3.5 stars"></label>
										<input type="radio" id="star3" name="rating" value="3" /><label class = "full" for="star3" title="Meh - 3 stars"></label>
										<input type="radio" id="star2half" name="rating" value="2 and a half" /><label class="half" for="star2half" title="Kinda bad - 2.5 stars"></label>
										<input type="radio" id="star2" name="rating" value="2" /><label class = "full" for="star2" title="Kinda bad - 2 stars"></label>
										<input type="radio" id="star1half" name="rating" value="1 and a half" /><label class="half" for="star1half" title="Meh - 1.5 stars"></label>
										<input type="radio" id="star1" name="rating" value="1" checked/><label class = "full" style="color: #FFD700;" for="star1" title="Sucks big time - 1 star"></label>
										<input type="radio" id="starhalf" name="rating" value="half" checked/><label class="half" style="color: #FFD700;" for="starhalf" title="Sucks big time - 0.5 stars"></label>
										</fieldset><br><br>';
									}
									else if(($row1['rating'] >=1.5) && ($row1['rating'] < 2))
									{
										echo'
										<fieldset class="rating1 ">
										<input type="radio" id="star5" name="rating" value="5" /><label class = "full" for="star5" title="Awesome - 5 stars"></label>
										<input type="radio" id="star4half" name="rating" value="4 and a half" /><label class="half" for="star4half" title="Pretty good - 4.5 stars"></label>
										<input type="radio" id="star4" name="rating" value="4" /><label class = "full" for="star4" title="Pretty good - 4 stars"></label>
										<input type="radio" id="star3half" name="rating" value="3 and a half" /><label class="half" for="star3half" title="Meh - 3.5 stars"></label>
										<input type="radio" id="star3" name="rating" value="3" /><label class = "full" for="star3" title="Meh - 3 stars"></label>
										<input type="radio" id="star2half" name="rating" value="2 and a half" /><label class="half" for="star2half" title="Kinda bad - 2.5 stars"></label>
										<input type="radio" id="star2" name="rating" value="2" /><label class = "full" for="star2" title="Kinda bad - 2 stars"></label>
										<input type="radio" id="star1half" name="rating" value="1 and a half" checked/><label class="half" style="color: #FFD700;" for="star1half" title="Meh - 1.5 stars"></label>
										<input type="radio" id="star1" name="rating" value="1" checked/><label class = "full" style="color: #FFD700;" for="star1" title="Sucks big time - 1 star"></label>
										<input type="radio" id="starhalf" name="rating" value="half" checked/><label class="half" style="color: #FFD700;" for="starhalf" title="Sucks big time - 0.5 stars"></label>
										</fieldset><br><br>';
									}
									else if(($row1['rating'] >=2) && ($row1['rating'] < 2.5))
									{
										echo'
										<fieldset class="rating1 ">
										<input type="radio" id="star5" name="rating" value="5" /><label class = "full" for="star5" title="Awesome - 5 stars"></label>
										<input type="radio" id="star4half" name="rating" value="4 and a half" /><label class="half" for="star4half" title="Pretty good - 4.5 stars"></label>
										<input type="radio" id="star4" name="rating" value="4" /><label class = "full" for="star4" title="Pretty good - 4 stars"></label>
										<input type="radio" id="star3half" name="rating" value="3 and a half" /><label class="half" for="star3half" title="Meh - 3.5 stars"></label>
										<input type="radio" id="star3" name="rating" value="3" /><label class = "full" for="star3" title="Meh - 3 stars"></label>
										<input type="radio" id="star2half" name="rating" value="2 and a half" /><label class="half" for="star2half" title="Kinda bad - 2.5 stars"></label>
										<input type="radio" id="star2" name="rating" value="2" checked/><label class = "full" style="color: #FFD700;" for="star2" title="Kinda bad - 2 stars"></label>
										<input type="radio" id="star1half" name="rating" value="1 and a half" checked/><label class="half" style="color: #FFD700;" for="star1half" title="Meh - 1.5 stars"></label>
										<input type="radio" id="star1" name="rating" value="1" checked/><label class = "full" style="color: #FFD700;" for="star1" title="Sucks big time - 1 star"></label>
										<input type="radio" id="starhalf" name="rating" value="half" checked/><label class="half" style="color: #FFD700;" for="starhalf" title="Sucks big time - 0.5 stars"></label>
										</fieldset><br><br>';
									}
									else if(($row1['rating'] >=2.5) && ($row1['rating'] < 3))
									{
										echo'
										<fieldset class="rating1 ">
										<input type="radio" id="star5" name="rating" value="5" /><label class = "full" for="star5" title="Awesome - 5 stars"></label>
										<input type="radio" id="star4half" name="rating" value="4 and a half" /><label class="half" for="star4half" title="Pretty good - 4.5 stars"></label>
										<input type="radio" id="star4" name="rating" value="4" /><label class = "full" for="star4" title="Pretty good - 4 stars"></label>
										<input type="radio" id="star3half" name="rating" value="3 and a half" /><label class="half" for="star3half" title="Meh - 3.5 stars"></label>
										<input type="radio" id="star3" name="rating" value="3" /><label class = "full" for="star3" title="Meh - 3 stars"></label>
										<input type="radio" id="star2half" name="rating" value="2 and a half" checked/><label class="half" style="color: #FFD700;" for="star2half" title="Kinda bad - 2.5 stars"></label>
										<input type="radio" id="star2" name="rating" value="2" checked/><label class = "full" style="color: #FFD700;" for="star2" title="Kinda bad - 2 stars"></label>
										<input type="radio" id="star1half" name="rating" value="1 and a half" checked/><label class="half" style="color: #FFD700;" for="star1half" title="Meh - 1.5 stars"></label>
										<input type="radio" id="star1" name="rating" value="1" checked/><label class = "full" style="color: #FFD700;" for="star1" title="Sucks big time - 1 star"></label>
										<input type="radio" id="starhalf" name="rating" value="half" checked/><label class="half" style="color: #FFD700;" for="starhalf" title="Sucks big time - 0.5 stars"></label>
										</fieldset><br><br>';
									}
									else if(($row1['rating'] >=3) && ($row1['rating'] < 3.5))
									{
										echo'
										<fieldset class="rating1 ">
										<input type="radio" id="star5" name="rating" value="5" /><label class = "full" for="star5" title="Awesome - 5 stars"></label>
										<input type="radio" id="star4half" name="rating" value="4 and a half" /><label class="half" for="star4half" title="Pretty good - 4.5 stars"></label>
										<input type="radio" id="star4" name="rating" value="4" /><label class = "full" for="star4" title="Pretty good - 4 stars"></label>
										<input type="radio" id="star3half" name="rating" value="3 and a half" /><label class="half" for="star3half" title="Meh - 3.5 stars"></label>
										<input type="radio" id="star3" name="rating" value="3" checked/><label class = "full" style="color: #FFD700;" for="star3" title="Meh - 3 stars"></label>
										<input type="radio" id="star2half" name="rating" value="2 and a half" checked/><label class="half" style="color: #FFD700;" for="star2half" title="Kinda bad - 2.5 stars"></label>
										<input type="radio" id="star2" name="rating" value="2" checked/><label class = "full" style="color: #FFD700;" for="star2" title="Kinda bad - 2 stars"></label>
										<input type="radio" id="star1half" name="rating" value="1 and a half" checked/><label class="half" style="color: #FFD700;" for="star1half" title="Meh - 1.5 stars"></label>
										<input type="radio" id="star1" name="rating" value="1" checked/><label class = "full" style="color: #FFD700;" for="star1" title="Sucks big time - 1 star"></label>
										<input type="radio" id="starhalf" name="rating" value="half" checked/><label class="half" style="color: #FFD700;" for="starhalf" title="Sucks big time - 0.5 stars"></label>
										</fieldset><br><br>';
									}
									else if(($row1['rating'] >=3.5) && ($row1['rating'] < 4))
									{
										echo'
										<fieldset class="rating1 ">
										<input type="radio" id="star5" name="rating" value="5" /><label class = "full" for="star5" title="Awesome - 5 stars"></label>
										<input type="radio" id="star4half" name="rating" value="4 and a half" /><label class="half" for="star4half" title="Pretty good - 4.5 stars"></label>
										<input type="radio" id="star4" name="rating" value="4" /><label class = "full" for="star4" title="Pretty good - 4 stars"></label>
										<input type="radio" id="star3half" name="rating" value="3 and a half" checked/><label class="half" style="color: #FFD700;" for="star3half" title="Meh - 3.5 stars"></label>
										<input type="radio" id="star3" name="rating" value="3" checked/><label class = "full" style="color: #FFD700;" for="star3" title="Meh - 3 stars"></label>
										<input type="radio" id="star2half" name="rating" value="2 and a half" checked/><label class="half" style="color: #FFD700;" for="star2half" title="Kinda bad - 2.5 stars"></label>
										<input type="radio" id="star2" name="rating" value="2" checked/><label class = "full" style="color: #FFD700;" for="star2" title="Kinda bad - 2 stars"></label>
										<input type="radio" id="star1half" name="rating" value="1 and a half" checked/><label class="half" style="color: #FFD700;" for="star1half" title="Meh - 1.5 stars"></label>
										<input type="radio" id="star1" name="rating" value="1" checked/><label class = "full" style="color: #FFD700;" for="star1" title="Sucks big time - 1 star"></label>
										<input type="radio" id="starhalf" name="rating" value="half" checked/><label class="half" style="color: #FFD700;" for="starhalf" title="Sucks big time - 0.5 stars"></label>
										</fieldset><br><br>';
									}
									else if(($row1['rating'] >=4) && ($row1['rating'] < 4.5))
									{
										echo'
										<fieldset class="rating1 ">
										<input type="radio" id="star5" name="rating" value="5" /><label class = "full" for="star5" title="Awesome - 5 stars"></label>
										<input type="radio" id="star4half" name="rating" value="4 and a half" /><label class="half" for="star4half" title="Pretty good - 4.5 stars"></label>
										<input type="radio" id="star4" name="rating" value="4" checked/><label class = "full" style="color: #FFD700;" for="star4" title="Pretty good - 4 stars"></label>
										<input type="radio" id="star3half" name="rating" value="3 and a half" checked/><label class="half" style="color: #FFD700;" for="star3half" title="Meh - 3.5 stars"></label>
										<input type="radio" id="star3" name="rating" value="3" checked/><label class = "full" style="color: #FFD700;" for="star3" title="Meh - 3 stars"></label>
										<input type="radio" id="star2half" name="rating" value="2 and a half" checked/><label class="half" style="color: #FFD700;" for="star2half" title="Kinda bad - 2.5 stars"></label>
										<input type="radio" id="star2" name="rating" value="2" checked/><label class = "full" style="color: #FFD700;" for="star2" title="Kinda bad - 2 stars"></label>
										<input type="radio" id="star1half" name="rating" value="1 and a half" checked/><label class="half" style="color: #FFD700;" for="star1half" title="Meh - 1.5 stars"></label>
										<input type="radio" id="star1" name="rating" value="1" checked/><label class = "full" style="color: #FFD700;" for="star1" title="Sucks big time - 1 star"></label>
										<input type="radio" id="starhalf" name="rating" value="half" checked/><label class="half" style="color: #FFD700;" for="starhalf" title="Sucks big time - 0.5 stars"></label>
										</fieldset><br><br>';
									}
									else if(($row1['rating'] >=4.5) && ($row1['rating'] < 5))
									{
										echo'
										<fieldset class="rating1 ">
										<input type="radio" id="star5" name="rating" value="5" /><label class = "full" for="star5" title="Awesome - 5 stars"></label>
										<input type="radio" id="star4half" name="rating" value="4 and a half" checked/><label class="half" style="color: #FFD700;" for="star4half" title="Pretty good - 4.5 stars"></label>
										<input type="radio" id="star4" name="rating" value="4" checked/><label class = "full" style="color: #FFD700;" for="star4" title="Pretty good - 4 stars"></label>
										<input type="radio" id="star3half" name="rating" value="3 and a half" checked/><label class="half" style="color: #FFD700;" for="star3half" title="Meh - 3.5 stars"></label>
										<input type="radio" id="star3" name="rating" value="3" checked/><label class = "full" style="color: #FFD700;" for="star3" title="Meh - 3 stars"></label>
										<input type="radio" id="star2half" name="rating" value="2 and a half" checked/><label class="half" style="color: #FFD700;" for="star2half" title="Kinda bad - 2.5 stars"></label>
										<input type="radio" id="star2" name="rating" value="2" checked/><label class = "full" style="color: #FFD700;" for="star2" title="Kinda bad - 2 stars"></label>
										<input type="radio" id="star1half" name="rating" value="1 and a half" checked/><label class="half" style="color: #FFD700;" for="star1half" title="Meh - 1.5 stars"></label>
										<input type="radio" id="star1" name="rating" value="1" checked/><label class = "full" style="color: #FFD700;" for="star1" title="Sucks big time - 1 star"></label>
										<input type="radio" id="starhalf" name="rating" value="half" checked/><label class="half" style="color: #FFD700;" for="starhalf" title="Sucks big time - 0.5 stars"></label>
										</fieldset><br><br>';
									}
									else if($row1['rating'] >=5)
									{
										echo'
										<fieldset class="rating1 ">
										<input type="radio" id="star5" name="rating" value="5" checked/><label class = "full" style="color: #FFD700;" for="star5" title="Awesome - 5 stars"></label>
										<input type="radio" id="star4half" name="rating" value="4 and a half" checked/><label class="half" style="color: #FFD700;" for="star4half" title="Pretty good - 4.5 stars"></label>
										<input type="radio" id="star4" name="rating" value="4" checked/><label class = "full" style="color: #FFD700;" for="star4" title="Pretty good - 4 stars"></label>
										<input type="radio" id="star3half" name="rating" value="3 and a half" checked/><label class="half" style="color: #FFD700;" for="star3half" title="Meh - 3.5 stars"></label>
										<input type="radio" id="star3" name="rating" value="3" checked/><label class = "full" style="color: #FFD700;" for="star3" title="Meh - 3 stars"></label>
										<input type="radio" id="star2half" name="rating" value="2 and a half" checked/><label class="half" style="color: #FFD700;" for="star2half" title="Kinda bad - 2.5 stars"></label>
										<input type="radio" id="star2" name="rating" value="2" checked/><label class = "full" style="color: #FFD700;" for="star2" title="Kinda bad - 2 stars"></label>
										<input type="radio" id="star1half" name="rating" value="1 and a half" checked/><label class="half" style="color: #FFD700;" for="star1half" title="Meh - 1.5 stars"></label>
										<input type="radio" id="star1" name="rating" value="1" checked/><label class = "full" style="color: #FFD700;" for="star1" title="Sucks big time - 1 star"></label>
										<input type="radio" id="starhalf" name="rating" value="half" checked/><label class="half" style="color: #FFD700;" for="starhalf" title="Sucks big time - 0.5 stars"></label>
										</fieldset><br><br>';
									}
									else
									{
										echo'
										';
									}
									
									echo('<p class="float-right fs-sm" style="font-size: 10px;">Posted on: '.$row1['c_date'].'</p>
	                              </div>
	                            </div>
	                            </div>
	                        </div>
	                      </div>
								');
					}
					?>
						</div>
					</div>
				</div>
				<div class="col-lg-8">
					<div class="card">
						<div class="card-body">
							<div class="row mb-3">
								<div class="col-sm-3">
									<h6 class="mb-0">Full Name</h6>
								</div>
								<div class="col-sm-9" style="color: #006aff">
									<?php echo $row['name']; ?>
								</div>
							</div>
							<div class="row mb-3">
								<div class="col-sm-3">
									<h6 class="mb-0">Email</h6>
								</div>
								<div class="col-sm-9" style="color: #006aff">
									<?php echo $row['email']; ?>
								</div>
							</div>
							<div class="row mb-3">
								<div class="col-sm-3">
									<h6 class="mb-0">Phone</h6>
								</div>
								<div class="col-sm-9" style="color: #006aff">
									<?php echo $row['phone']; ?>
								</div>
							</div>
							<div class="row mb-3">
								<div class="col-sm-3">
									<h6 class="mb-0">Location</h6>
								</div>
								<div class="col-sm-9" style="color: #006aff">
									<?php echo $row['place']; ?>
								</div>
							</div>
							<div class="row mb-3">
								<div class="col-sm-3">
									<h6 class="mb-0">Office Address</h6>
								</div>
								<div class="col-sm-9" style="color: #006aff">
									<?php echo $row['address']; ?>
								</div>
							</div>
							<div class="row mb-3">
								<div class="col-sm-3">
									<h6 class="mb-0">Commission</h6>
								</div>
								<div class="col-sm-9" style="color: #006aff"><b>
									<?php echo $row['commission']; 
									if($row['commission'] == '')
									{
									
									}
									else
									{
										echo '%';
									}
									?> 

								</b>
								</div>
							</div>
						</div>
					</div>
						<div class="row mt-3">
						<div class="col-sm-12">
							<div class="card">
								<div class="card-body">
									<h5 class="d-flex align-items-center mb-3">Sold Properties</h5>
									<?php
									$no = 1;
									$ag = $row['email'];
									$r = "SELECT * FROM `tbl_sold_properties` WHERE `agent` = '$ag'";
									$s = mysqli_query($conn,$r);
									if(mysqli_num_rows($s))
									{
										echo '
										<table class="table table-bordered">
										<thead>
											<tr>
											<th scope="col">#</th>
											<th scope="col">Image</th>
											<th scope="col">Details</th>
											<th scope="col">Sold Amount</th>
											<th scope="col">Sold date</th>
											</tr>
										</thead>';
										while ($row = mysqli_fetch_array($s))
										{
										
										echo'<tbody>
											<tr>
											<th scope="row">'.$no.'</th>
											<td><img src="Property_images/'.$row['image'].'"  class="img-fluid" height="50px" width="70px" alt="">
											</td>
											<td>'.$row['title'].'</td>
											<td>'.$row['price'].'</td>
											<td>'.$row['sold_date'].'</td>
											</tr>';
											$no++;
										}
										echo '</tbody>
										</table>';
									}
									else
									{
										echo'<h6><center><font color="red">No properties sold yet</font></center></h6>';
									}
									?>
								</div>
							</div>
						</div>
					</div>
					<div id="snackbar"></div>
					<?php
					if(isset($_POST['lbtn']))
					{
						$name = $ro1['fname'];
						$review = $_POST['review'];
						$rating = $_POST['rating'];
						$run = "INSERT INTO tbl_reviews (`name`,email,c_date,review,rating,agent_id) VALUES ('$name','$email','$c_date','$review','$rating','$id')";
						$re = mysqli_query($conn,$run);
						if(mysqli_num_rows($re) == 0)
						{
							$run = "SELECT avg(rating) as avg_rating FROM tbl_reviews WHERE agent_id = '$id'";
							$qr = mysqli_query($conn,$run);
							$row = mysqli_fetch_array($qr);
							$avg_rating = $row['avg_rating'];
							$run1 = "UPDATE tbl_agents SET avg_rating = '$avg_rating' WHERE agent_id = '$id'";
							$qr1 = mysqli_query($conn,$run1);
							echo("<script>
							var x = document.getElementById('snackbar');
							$('#snackbar').append('Review Posted!');
							$('#snackbar').css('background-color', '#28a745');
							x.className = 'show';
							setTimeout(function(){ x.className = x.className.replace('show', ''); }, 3000);
							setTimeout(function(){
							window.location.reload(1);
						  }, 800);
							</script>
									");

						}
						else
						{
							echo("<script>
							var x = document.getElementById('snackbar');
							$('#snackbar').append('Review can't be posted right now!');
							$('#snackbar').css('background-color', '#dc3545');
							x.className = 'show';
							setTimeout(function(){ x.className = x.className.replace('show', ''); }, 3000);
							setTimeout(function(){
							window.location.reload(1);
						  }, 800);
							</script>
									");
						}
						
					}
					$q = "SELECT * FROM tbl_reviews WHERE agent_id = '$id' and email = '$email' and status = 1";
					$r =mysqli_query($conn,$q);
					$ro = mysqli_fetch_array($r);
					if($ro['email'] == $email)
					{

					}
					else
					{
						echo('
							<div class="row mt-3">
						<div class="col-sm-12">
							<div class="card">
								<div class="card-body">
									<h5 class="d-flex align-items-center mb-3">Post your Review and Rating</h5>
									<form action="#" method="post" autocomplete="off">
									  <div class="form-group">
									    <label for="exampleInputPassword1">Review</label>
									    <textarea class="form-control" rows="5" name="review" required></textarea>
									  </div>
									  <div class="form-group">
									  <div class="ratingg">
									  <input type="radio" id="id10" name="rating" value="5" required/><label class = "full" for="id10" title="Awesome - 5 stars"></label>
									  <input type="radio" id="id9" name="rating" value="4.5" required/><label class="half" for="id9" title="Pretty good - 4.5 stars"></label>
									  <input type="radio" id="id8" name="rating" value="4" required/><label class = "full" for="id8" title="Pretty good - 4 stars"></label>
									  <input type="radio" id="id7" name="rating" value="3.5" required/><label class="half" for="id7" title="Meh - 3.5 stars"></label>
									  <input type="radio" id="id6" name="rating" value="3" required/><label class = "full" for="id6" title="Meh - 3 stars"></label>
									  <input type="radio" id="id5" name="rating" value="2.5" required/><label class="half" for="id5" title="Kinda bad - 2.5 stars"></label>
									  <input type="radio" id="id4" name="rating" value="2" required/><label class = "full" for="id4" title="Kinda bad - 2 stars"></label>
									  <input type="radio" id="id3" name="rating" value="1.5" required/><label class="half" for="id3" title="Meh - 1.5 stars"></label>
									  <input type="radio" id="id2" name="rating" value="1" required/><label class = "full" for="id2" title="Sucks big time - 1 star"></label>
									  <input type="radio" id="id1" name="rating" value="0.5" required/><label class="half" for="id1" title="Sucks big time - 0.5 stars"></label>
								  	</div>
									  </div>
									<br>
									  <button type="submit" name="lbtn" id="lbtn" class="btn btn-primary float-right">Post review</button>
									</form>
								</div>
							</div>
						</div>
					</div>
							');
					}
?>
				</div>
			</div>
		</div>
	</div>
<?php
include 'footer.php';
$_SESSION['s_loc'] = $row['place'];
?>