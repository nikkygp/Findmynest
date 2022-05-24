<?php 
session_start();
error_reporting(0);
$email = $_SESSION['email'];
include "../config.php";
include "header1.php"; 
$query2 = "SELECT * FROM tbl_agents WHERE status = 1";
$res2 = mysqli_query($conn,$query2);
$query1 = "SELECT * FROM tbl_places WHERE status = 1";
$res1 = mysqli_query($conn,$query1);
$row1 = mysqli_fetch_array($res1);
?>
<form action="#" method="post">
<div class="container bg-white shadow round px-3 py-3 mt-5">
<h3><font color="#006aff"><b>Find Agents Nearest to you</b></font></h3>
  <div class="row">
    <div class="col-sm">
    <h6>Location</h6>
    </div>
    <div class="col-sm">
    <h6>Rating</h6>
    </div>
    <div class="col-sm">
    </div>
  </div>
  <div class="row">
    <div class="col-sm">
    <select class="form-control" name="loc">
      <option value="">Select One</option>
    <?php 
        while($row1 = mysqli_fetch_array($res1))
        {
            echo('<option value="'.$row1['name'].'">'.$row1['name'].'</option>');
        }
    ?>
     </select>
    </div>
    <div class="col-sm">
    <select class="form-control" name="rate">
        <option value="">Select one</option>
        <option value="4.5">> 4.5</option>
        <option value="4">> 4.0</option>
        <option value="3.5">> 3.5</option>
        <option value="3">> 3.0</option>
        <option value="2.5">> 2.5</option>
        <option value="2">> 2.0</option>
        <option value="1.5">> 1.5</option>
        <option value="1">> 1.0</option>
     </select>
    </div>
    <div class="col-sm">
    <input type="submit" class="btn btn-primary px-5" name="fsearch" value="Search">
    </div>
    </div>
</div>
</form>
<section class="grids-4" id="properties" tabindex="0" style="outline:none;">
<div id="grids4-block" class="py-3">
<div class="container py-md-3">
  <div class="row col-12">
<?php
    if(isset($_POST['fsearch']))
    {
        $loc = $_POST['loc'];
        $rating = $_POST['rate'];
        $query = "SELECT * FROM tbl_agents WHERE place = '$loc' AND avg_rating > '$rating' AND status = 1";
        $res = mysqli_query($conn,$query);
        if(mysqli_num_rows($res)>0)
        {
        while($row = mysqli_fetch_array($res))
        {
            $query3 = "SELECT * FROM tbl_reviews WHERE agent_id = ".$row['agent_id']."";
            $query4 = "SELECT avg(rating) as avg_rating FROM tbl_reviews WHERE agent_id = ".$row['agent_id']."";
                $res3 = mysqli_query($conn,$query3);
                $res4 = mysqli_query($conn,$query4);
                $ro = mysqli_fetch_array($res4);
                $r = mysqli_num_rows($res3);
            echo('
                    <div class="col-4 mt-2">
                      <div class="card horizontal shadow round border-1-red">
                        <div class="row">
                            <div class="col-w-25">
                                <div class="card-image pl-4 mt-2"><img src="../assets/images/agent.png" width="80px" class="rounded-lg" height="70px" style="border-radius: 55%;"></div>
                            </div>
                            <div class="col p-3">
                            <div class="card-stacked">
                              <div class="card-content">
                                <h5>'.$row['name'].'</h5>
                                <p class="flow-text">Email ID: '.$row['email'].'</p>
                                <p class="flow-text">Location: '.$row['place'].'</p>
                                <p class="flow-text"><font color="#006aff">'.$r.' Reviews</font></p>
                              </div>');
                              if(($ro['avg_rating'] > 0) && ($ro['avg_rating'] < 1))
                              {
                                echo'
                                <fieldset class="rating1">
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
                                </fieldset>';
                              }
                              else if(($ro['avg_rating'] >=1) && ($ro['avg_rating'] < 1.5))
                              {
                                echo'
                                <fieldset class="rating1">
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
                                </fieldset>';
                              }
                              else if(($ro['avg_rating'] >=1.5) && ($ro['avg_rating'] < 2))
                              {
                                echo'
                                <fieldset class="rating1">
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
                                </fieldset>';
                              }
                              else if(($ro['avg_rating'] >=2) && ($ro['avg_rating'] < 2.5))
                              {
                                echo'
                                <fieldset class="rating1">
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
                                </fieldset>';
                              }
                              else if(($ro['avg_rating'] >=2.5) && ($ro['avg_rating'] < 3))
                              {
                                echo'
                                <fieldset class="rating1">
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
                                </fieldset>';
                              }
                              else if(($ro['avg_rating'] >=3) && ($ro['avg_rating'] < 3.5))
                              {
                                echo'
                                <fieldset class="rating1">
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
                                </fieldset>';
                              }
                              else if(($ro['avg_rating'] >=3.5) && ($ro['avg_rating'] < 4))
                              {
                                echo'
                                <fieldset class="rating1">
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
                                </fieldset>';
                              }
                              else if(($ro['avg_rating'] >=4) && ($ro['avg_rating'] < 4.5))
                              {
                                echo'
                                <fieldset class="rating1">
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
                                </fieldset>';
                              }
                              else if(($ro['avg_rating'] >=4.5) && ($ro['avg_rating'] < 5))
                              {
                                echo'
                                <fieldset class="rating1">
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
                                </fieldset>';
                              }
                              else if($ro['avg_rating'] >=5)
                              {
                                echo'
                                <fieldset class="rating1">
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
                                </fieldset>';
                              }
                              else
                              {
                                echo'
                                <fieldset class="rating1">
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
                                </fieldset>';
                              }
                              echo('<div class="card-action float-right mr-2"><a href="agent_profile.php?id='.$row['agent_id'].'" class="btn btn-primary mx-1 p-1">View Profile</a></div>
                            </div>
                            </div>
                        </div>
                      </div>
                    </div>
                ');

        }
      }
      else
      {
        echo('<center><font color="red" size="3"><p class="mx-30">No Agents Available!!</p></font></center>');
      }
    }
    else
    {
        while ($row2 = mysqli_fetch_array($res2)) {
                $query3 = "SELECT * FROM tbl_reviews WHERE agent_id = ".$row2['agent_id']."";
                $query4 = "SELECT avg(rating) as avg_rating FROM tbl_reviews WHERE agent_id = ".$row2['agent_id']."";
                $res3 = mysqli_query($conn,$query3);
                $res4 = mysqli_query($conn,$query4);
                $ro = mysqli_fetch_array($res4);
                $r = mysqli_num_rows($res3);
               echo('
                    <div class="col-4 mt-2">
                      <div class="card horizontal shadow round border-1-red">
                        <div class="row">
                            <div class="col-w-25">
                                <div class="card-image pl-4 mt-2"><img src="../assets/images/agent.png" width="80px" class="rounded-lg" height="70px" style="border-radius: 55%;"></div>
                            </div>
                            <div class="col p-3">
                            <div class="card-stacked">
                              <div class="card-content">
                                <h5>'.$row2['name'].'</h5>
                                <p class="flow-text">Email ID: '.$row2['email'].'</p>
                                <p class="flow-text">Location: '.$row2['place'].'</p>
                                <p class="flow-text"><font color="#006aff">'.$r.' Reviews</font></p>
                              </div>
                              ');
                              if(($ro['avg_rating'] > 0) && ($ro['avg_rating'] < 1))
                              {
                                echo'
                                <fieldset class="rating1">
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
                                </fieldset>';
                              }
                              else if(($ro['avg_rating'] >=1) && ($ro['avg_rating'] < 1.5))
                              {
                                echo'
                                <fieldset class="rating1">
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
                                </fieldset>';
                              }
                              else if(($ro['avg_rating'] >=1.5) && ($ro['avg_rating'] < 2))
                              {
                                echo'
                                <fieldset class="rating1">
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
                                </fieldset>';
                              }
                              else if(($ro['avg_rating'] >=2) && ($ro['avg_rating'] < 2.5))
                              {
                                echo'
                                <fieldset class="rating1">
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
                                </fieldset>';
                              }
                              else if(($ro['avg_rating'] >=2.5) && ($ro['avg_rating'] < 3))
                              {
                                echo'
                                <fieldset class="rating1">
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
                                </fieldset>';
                              }
                              else if(($ro['avg_rating'] >=3) && ($ro['avg_rating'] < 3.5))
                              {
                                echo'
                                <fieldset class="rating1">
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
                                </fieldset>';
                              }
                              else if(($ro['avg_rating'] >=3.5) && ($ro['avg_rating'] < 4))
                              {
                                echo'
                                <fieldset class="rating1">
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
                                </fieldset>';
                              }
                              else if(($ro['avg_rating'] >=4) && ($ro['avg_rating'] < 4.5))
                              {
                                echo'
                                <fieldset class="rating1">
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
                                </fieldset>';
                              }
                              else if(($ro['avg_rating'] >=4.5) && ($ro['avg_rating'] < 5))
                              {
                                echo'
                                <fieldset class="rating1">
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
                                </fieldset>';
                              }
                              else if($ro['avg_rating'] >=5)
                              {
                                echo'
                                <fieldset class="rating1">
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
                                </fieldset>';
                              }
                              else
                              {
                                echo'
                                <fieldset class="rating1">
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
                                </fieldset>';
                              }
                             echo'
                              <div class="card-action float-right mr-2"><a href="agent_profile.php?id='.$row2['agent_id'].'" class="btn btn-primary mx-1 p-1">View Profile</a></div>
                            </div>
                            </div>
                        </div>
                      </div>
                    </div>

                ';

        }
    }

?>
    </div>
  </div>
</div>
</section>
<?php
include 'footer.php';
?>