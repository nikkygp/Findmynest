<?php
session_start();
error_reporting(0);
date_default_timezone_set("Asia/Kolkata");
$c_date = date("d/m/Y");
include 'header1.php';
$query = "SELECT * FROM tbl_places";
$r = mysqli_query($conn,$query);
$email = $_SESSION['email'];
$query1 = "SELECT `req_price`, `req_type`, `req_loc`, `furnish_status`, `parkspaces`, `createdDate`, `room`, `bathroom`, `bedroom`, `area`, `user_mail` FROM `tbl_requirements` WHERE `user_mail` = '$email'";
$r1 = mysqli_query($conn,$query1);
$row1 = mysqli_fetch_array($r1);
?>
<section class="py-5 my-2" id="hide_div">
        <div class="container">
            <div class="bg-white shadow rounded-lg d-block d-sm-flex">
                <div class="profile-tab-nav1">
                  <h3 class="mb-4 ml-5 mt-5">Tell us about your Requirements</h3>
                            <center><img src="../assets/images/req.png" alt="Image" height="350px" width="380px" id="output" class=""></center>
                </div>
                <?php 
                if(mysqli_num_rows($r1) > 0)
                {
                  echo ('
                  <div class="tab-content p-4 p-md-5" id="v-pills-tabContent">
                  <div class="tab-pane fade show active" id="account" role="tabpanel" aria-labelledby="account-tab">
                    <form action="#" method="POST" class="row g-3" enctype="multipart/form-data" autocomplete="off">
                      <div class="row">
                          <div class="col-md-6">
                              <div class="form-group">
                              <label for="inputState" class="form-label">Property Type</label>
                                <select class="form-control" id="type" name="type" disabled>
                                          <option value="'.$row1['req_type'].'">'.$row1['req_type'].'</option>
                                          <option value="House">House</option>
                                          <option value="Villa">Villa</option>
                                          <option value="Apartment">Apartment</option>
                                </select>
                              </div>
                          </div>
                          <div class="col-md-6">
                          <div class="form-group">
                              <label for="inputAddress2" class="form-label">Car Parking spaces</label>
                                 <select class="form-control" id="car" name="car" disabled>
                                            <option value="'.$row1['parkspaces'].'">'.$row1['parkspaces'].'</option>
                                            <option value="1">1</option>
                                            <option value="2">2</option>
                                            <option value="3">3</option>
                                  </select>
                                </div>
                              </div>
                              <div class="col-6">
                              <div class="form-group">
                              <label for="inputAddress2" class="form-label">Furnished status</label>
                                  <select class="form-control" id="furnish" name="furnish" disabled>
                                            <option value="'.$row1['furnish_status'].'">'.$row1['furnish_status'].'</option>
                                            <option value="Semi-furnished">Semi-furnished</option>
                                            <option value="Fully-Furnished">Fully-Furnished</option>
                                  </select>
                                </div>
                            </div>
                             <div class="col-md-6">
                              <div class="form-group">
                              <label for="inputCity" class="form-label">Budget Amount</label>
                              <input type="text" class="form-control" value="'.$row1['req_price'].'" id="price" name="price" disabled>
                              </div>
                              <span id="eprice" class="er"><font size="2">Letters not allowed!!</font></span>
                            </div>
                            <div class="col-md-6">
                              <div class="form-group">
                              <label for="inputCity" class="form-label">Prefered Location</label>
                              <select class="form-control" id="location" name="location" disabled>
                                            <option value="'.$row1['req_loc'].'">'.$row1['req_loc'].'</option>');
                                            while($row = mysqli_fetch_array($r))
                                            {
                                              echo('<option value='.$row['name'].'>'.$row['name'].'</option>');
                                            }
                              echo('</select>
                              </div>
                            </div>
                            <div class="col-md-6">
                              <div class="form-group">
                              <label for="inputCity" class="form-label">Area Sq.ft</label>
                              <input type="text" class="form-control" value="'.$row1['area'].'" id="area" name="area" disabled>
                              </div>
                              <span id="earea" class="er"><font size="2">Letters not allowed!!</font></span>
                            </div>
                            <div class="col-4">
                              <div class="form-group">
                              <label for="inputAddress2" class="form-label">Rooms</label>
                                  <select class="form-control" id="rooms" name="rooms" disabled>
                                            <option value="'.$row1['room'].'">'.$row1['room'].'</option>
                                            <option value="1">1</option>
                                            <option value="2">2</option>
                                            <option value="3">3</option>
                                            <option value="4">4</option>
                                            <option value="5">5</option>
                                            <option value="6">6</option>
                                            <option value="7">7</option>
                                  </select>
                                </div>
                            </div>
                            <div class="col-4">
                              <div class="form-group">
                              <label for="inputAddress2" class="form-label">Bathrooms</label>
                                 <select class="form-control" id="bathrooms" name="bathrooms" disabled>
                                            <option value="'.$row1['bathroom'].'">'.$row1['bathroom'].'</option>
                                            <option value="1">1</option>
                                            <option value="2">2</option>
                                            <option value="3">3</option>
                                            <option value="4">4</option>
                                            <option value="5">5</option>
                                            <option value="6">6</option>
                                            <option value="7">7</option>
                                  </select>
                                </div>
                            </div>
                            <div class="col-4">
                              <div class="form-group">
                              <label for="inputAddress2" class="form-label">Bed Rooms</label>
                               <select class="form-control" id="bedrooms" name="bedrooms" disabled>
                                            <option value="'.$row1['bedroom'].'">'.$row1['bedroom'].'</option>
                                            <option value="1">1</option>
                                            <option value="2">2</option>
                                            <option value="3">3</option>
                                            <option value="4">4</option>
                                            <option value="5">5</option>
                                            <option value="6">6</option>
                                            <option value="7">7</option>
                                  </select>
                                </div>
                            </div>
                              <input type="text" name="createdDate" value="'.$row1['createdDate'].'" hidden>
                              <div class="col-12 mt-4">
                                <button type="submit" name="post_req_btn1" id="lbtn1" class="btn-primary">Update Requirements</button>
                                <button type="button" style="border:1px solid #e9ecef;" id="editbtn" class="btn btn-light">Edit</button>
                              </div>
                            </form>
                  </div>');
                }
                else
                {
                  echo('
                  <div class="tab-content p-4 p-md-5" id="v-pills-tabContent">
                    <div class="tab-pane fade show active" id="account" role="tabpanel" aria-labelledby="account-tab">
                      <form action="#" method="POST" class="row g-3" enctype="multipart/form-data" autocomplete="off">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                <label for="inputState" class="form-label">Property Type</label>
                                  <select class="form-control" id="type" name="type" required>
                                            <option value="">Select Type  </option>
                                            <option value="House">House</option>
                                            <option value="Villa">Villa</option>
                                            <option value="Apartment">Apartment</option>
                                  </select>
                                </div>
                            </div>
                            <div class="col-md-6">
                            <div class="form-group">
                                <label for="inputAddress2" class="form-label">Car Parking spaces</label>
                                   <select class="form-control" id="car" name="car" required>
                                              <option value="">Select One  </option>
                                              <option value="1">1</option>
                                              <option value="2">2</option>
                                              <option value="3">3</option>
                                    </select>
                                  </div>
                                </div>
                                <div class="col-6">
                                <div class="form-group">
                                <label for="inputAddress2" class="form-label">Furnished status</label>
                                    <select class="form-control" id="furnish" name="furnish" required>
                                              <option value="">Select One  </option>
                                              <option value="Semi-furnished">Semi-furnished</option>
                                              <option value="Fully-Furnished">Fully-Furnished</option>
                                    </select>
                                  </div>
                              </div>
                               <div class="col-md-6">
                                <div class="form-group">
                                <label for="inputCity" class="form-label">Budget Amount</label>
                                <input type="text" class="form-control" id="price" name="price" required="required">
                                </div>
                                <span id="eprice" class="er"><font size="2">Letters not allowed!!</font></span>
                              </div>
                              <div class="col-md-6">
                                <div class="form-group">
                                <label for="inputCity" class="form-label">Prefered Location</label>
                                <select class="form-control" name="location" required>
                                              <option value="">Select One  </option>');
                                              while($row = mysqli_fetch_array($r))
                                              {
                                                echo('<option value='.$row['name'].'>'.$row['name'].'</option>');
                                              }
                                echo('</select>
                                </div>
                              </div>
                              <div class="col-md-6">
                                <div class="form-group">
                                <label for="inputCity" class="form-label">Area Sq.ft</label>
                                <input type="text" class="form-control" id="area" name="area" required="required">
                                </div>
                                <span id="earea" class="er"><font size="2">Letters not allowed!!</font></span>
                              </div>
                              <div class="col-4">
                                <div class="form-group">
                                <label for="inputAddress2" class="form-label">Rooms</label>
                                    <select class="form-control" id="rooms" name="rooms" required>
                                              <option value="">Select One  </option>
                                              <option value="1">1</option>
                                              <option value="2">2</option>
                                              <option value="3">3</option>
                                              <option value="4">4</option>
                                              <option value="5">5</option>
                                              <option value="6">6</option>
                                              <option value="7">7</option>
                                    </select>
                                  </div>
                              </div>
                              <div class="col-4">
                                <div class="form-group">
                                <label for="inputAddress2" class="form-label">Bathrooms</label>
                                   <select class="form-control" id="bathrooms" name="bathrooms" required>
                                              <option value="">Select One  </option>
                                              <option value="1">1</option>
                                              <option value="2">2</option>
                                              <option value="3">3</option>
                                              <option value="4">4</option>
                                              <option value="5">5</option>
                                              <option value="6">6</option>
                                              <option value="7">7</option>
                                    </select>
                                  </div>
                              </div>
                              <div class="col-4">
                                <div class="form-group">
                                <label for="inputAddress2" class="form-label">Bed Rooms</label>
                                 <select class="form-control" id="bedrooms" name="bedrooms" required>
                                              <option value="">Select One  </option>
                                              <option value="1">1</option>
                                              <option value="2">2</option>
                                              <option value="3">3</option>
                                              <option value="4">4</option>
                                              <option value="5">5</option>
                                              <option value="6">6</option>
                                              <option value="7">7</option>
                                    </select>
                                  </div>
                              </div>
                                <input type="text" name="createdDate" value="'.$c_date.'" hidden>
                                <div class="col-12 mt-4">
                                  <button type="submit" name="post_req_btn" id="lbtn" class="btn-primary">Post Your Requirements</button>
                                </div>
                              </form>
                    </div>      
                  ');
                }
                 ?>
                </div>
            </div>
        </div>
    </section>
    <div id="show_div" style="display:none">
    <div class="container">
      <div class="alert alert-success mx-5 w-75 p-4 my-3 mb-6 mt-5" role="alert">
        <h4 class="alert-heading">Success!</h4>
        <p>Your Requirements have been saved successfully</p>
      </div>
    </div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/jquery-validation@1.19.3/dist/jquery.validate.js"></script>
    <script src="../assets/js/jquery_validator.js"></script>
    <script>
      $(document).ready(function() {
        $("#lbtn1").prop('disabled', true);
        $('#lbtn1').css('background-color', '#8dbcff');
      $('#editbtn').click(function() {
              $("#type").prop('disabled', false);
              $("#car").prop('disabled', false);
              $("#furnish").prop('disabled', false);
              $("#price").prop('disabled', false);
              $("#area").prop('disabled', false);
              $("#location").prop('disabled', false);
              $("#rooms").prop('disabled', false);
              $("#bathrooms").prop('disabled', false);
              $("#bedrooms").prop('disabled', false);
              $("#lbtn1").prop('disabled', false);
              $('#lbtn1').css('background-color', '#006aff');
      })
      });
      </script>

<?php
include 'requirementsController.php';
include 'footer.php';
?> 