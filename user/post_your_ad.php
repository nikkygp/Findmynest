<?php
session_start();
error_reporting(0);
date_default_timezone_set("Asia/Kolkata");
$c_date = date("d/m/Y");
include 'header1.php';
include 'connect.php';
$query = "SELECT * FROM tbl_places";
$r = mysqli_query($conn,$query);
?>
<section class="py-5 my-2">
        <div class="container">
            <div class="bg-white shadow rounded-lg d-block d-sm-flex">
                <div class="profile-tab-nav1">
                  <h3 class="mb-4 ml-5 mt-5">Tell us about your Ad</h3>
                            <center><img src="../assets/images/ads.png" alt="Image" width="420px" id="output" class=""></center>
                  <div class="col-md-12 ml-2 mt-2 mr-1">
                      <h4>Free ADS:-</h4>
                      <h6><i class="fa fa-check-square"></i>&nbsp;&nbsp;No extra charges.</h6>
                      <h6><i class="fa fa-check-square"></i>&nbsp;&nbsp;3 months validity.</h6>
                      <h6><i class="fa fa-minus-square"></i>&nbsp;&nbsp;24x7 Support.</h6>
                      <h6><i class="fa fa-minus-square"></i>&nbsp;&nbsp;Free Maintenance.</h6><br>
                      <h4>Featured ADS:-</h4>
                      <h6><i class="fa fa-check-square"></i>&nbsp;&nbsp;Cost Applicable.</h6>
                      <h6><i class="fa fa-check-square"></i>&nbsp;&nbsp;Lifetime validity.</h6>
                      <h6><i class="fa fa-check-square"></i>&nbsp;&nbsp;24x7 Support.</h6>
                      <h6><i class="fa fa-check-square"></i>&nbsp;&nbsp;Free Maintenance.</h6><br>
                      
                  </div>
                </div>
                <div class="tab-content p-4 p-md-5" id="v-pills-tabContent">
                    <div class="tab-pane fade show active" id="account" role="tabpanel" aria-labelledby="account-tab">
                      <form action="#" method="POST" class="row g-3" enctype="multipart/form-data" autocomplete="off">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label>Title</label>
                                    <input type="text" id="fname" class="form-control" name="title" >
                                </div>
                                <span id="name" class="er"><font size="2">Please enter a valid title, Numbers not allowed!!</font></span>

                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label>Description</label>
                                    <textarea class="form-control" id="des" name="des" placeholder="Describe about your ad" rows="4"></textarea>
                                </div>
                                <span id="name1" class="er"><font size="2">Please enter a valid Description, Numbers not allowed!!</font></span>
                            </div>
                             <div class="col-md-4">
                              <div class="form-group">
                              <label for="inputCity" class="form-label">Category</label>
                              <select class="form-control" name="category" required>
                                            <option value="">Select Category  </option>
                                            <option value="Rent">Rent</option>
                                            <option value="Sale">Sale</option>
                              </select>
                            </div>
                            </div>
                             <div class="col-md-4">
                              <div class="form-group">
                              <label for="inputState" class="form-label">Property Type</label>
                                  <select class="form-control" name="type" required>
                                            <option value="">Select Type  </option>
                                            <option value="House">House</option>
                                            <option value="Villa">Villa</option>
                                            <option value="Apartment">Apartment</option>
                                  </select>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                <label for="inputCity" class="form-label">Land Area( in cent)</label>
                                <input type="text" class="form-control" id="land" name="land" required="required">
                                </div>
                                <span id="eprice" class="er"><font size="2">Letters not allowed!!</font></span>
                              </div>
                               <div class="col-md-4">
                                <div class="form-group">
                                <label for="inputCity" class="form-label">Price</label>
                                <input type="number" class="form-control" id="price" name="price" required="required">
                                </div>
                              </div>
                               <div class="col-4">
                                <div class="form-group">
                                <label for="inputAddress2" class="form-label">Location</label>
                                    <select class="form-control" name="location" required>
                                              <option value="">Select One  </option>
                                              <?php
                                              while($row = mysqli_fetch_array($r))
                                              {
                                                echo('<option value='.$row['name'].'>'.$row['name'].'</option>');
                                              }
                                              ?>
                                    </select>
                                  </div>
                              </div>
                              <div class="col-md-4">
                                <div class="form-group">
                                <label for="inputCity" class="form-label">Area Sq.ft</label>
                                <input type="text" class="form-control" id="area" name="area" required="required">
                                </div>
                                <span id="earea" class="er"><font size="2">Letters not allowed!!</font></span>
                              </div>
                              <div class="col-4">
                                <div class="form-group">
                                <label for="inputAddress2" class="form-label">Rooms</label>
                                    <select class="form-control" name="rooms" required>
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
                                   <select class="form-control" name="bathrooms" required>
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
                                 <select class="form-control" name="bedrooms" required>
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
                                  <div class="col-md-4">
                                    <div class="form-group">
                                  <label for="inputCity" class="form-label">Image 1</label>
                                  <input type="file" accept="image/*" onchange="loadFile1(event)" class="form-control" name="ad_img1" id="inputEmail4" required="required">
                                </div>
                                </div>
                                <div class="col-md-4">
                                  <div class="form-group">
                                  <label for="inputCity" class="form-label">Image 2</label>
                                  <input type="file" accept="image/*" onchange="loadFile2(event)" class="form-control" name="ad_img2" id="inputEmail4" required="required">
                                </div>
                                </div>
                                <div class="col-md-4">
                                  <div class="form-group">
                                  <label for="inputCity" class="form-label">Image 3</label>
                                  <input type="file" accept="image/*" onchange="loadFile3(event)" class="form-control" name="ad_img3" id="inputEmail4" required="required">
                                </div>
                                </div>
                                <div class="col-md-4">
                                  <img id="output1" width="120px" height="100px" />
                                </div>
                                <div class="col-md-4">
                                  <img id="output2" width="120px" height="100px" />
                                </div>
                                <div class="col-md-4">
                                  <img id="output3" width="120px" height="100px" />
                                </div>
                                </div>
                                <div class="col-12 pl-0 mt-5 mb-3">                    
                                <h4><b>Features about the property</h4></b>
                              </div>
                              <div class="col-4">
                                <div class="form-group">
                                <label for="inputAddress2" class="form-label">Furnished status</label>
                                    <select class="form-control" name="ef1" required>
                                              <option value="">Select One  </option>
                                              <option value="Semi-furnished">Semi-furnished</option>
                                              <option value="Fully-Furnished">Fully-Furnished</option>
                                    </select>
                                  </div>
                              </div>
                              <div class="col-4">
                                <div class="form-group">
                                <label for="inputAddress2" class="form-label">Car Parking spaces</label>
                                   <select class="form-control" name="ef2" required>
                                              <option value="">Select One  </option>
                                              <option value="Not available">Not available</option>
                                              <option value="1">1</option>
                                              <option value="2">2</option>
                                              <option value="3">3</option>
                                    </select>
                                  </div>
                              </div>
                              <div class="col-4">
                                <div class="form-group">
                                <label for="inputAddress2" class="form-label">School</label>
                                 <select class="form-control" name="ef3" required>
                                              <option value="">Select One  </option>
                                              <option value="Less than 1 KM">Less than 1 KM</option>
                                              <option value="Less than 5 KM">Less than 5 KM</option>
                                              <option value="Less than 10 KM">Less than 10 KM</option>
                                    </select>
                                  </div>
                              </div>
                              <div class="col-4">
                                <div class="form-group">
                                <label for="inputAddress2" class="form-label">Hospital</label>
                                    <select class="form-control" name="ef4" required>
                                              <option value="">Select One  </option>
                                              <option value="Less than 1 KM">Less than 1 KM</option>
                                              <option value="Less than 3 KM">Less than 3 KM</option>
                                              <option value="Less than 5 KM">Less than 5 KM</option>
                                    </select>
                                  </div>
                              </div>
                              <div class="col-4">
                                <div class="form-group">
                                <label for="inputAddress2" class="form-label">Bus station</label>
                                   <select class="form-control" name="ef5" required>
                                              <option value="">Select One  </option>
                                              <option value="Less than 1 KM">Less than 1 KM</option>
                                              <option value="Less than 2 KM">Less than 2 KM</option>
                                              <option value="Less than 5 KM">Less than 5 KM</option>
                                    </select>
                                  </div>
                              </div>
                              <div class="col-4">
                                <div class="form-group">
                                <label for="inputAddress2" class="form-label">Railway station</label>
                                 <select class="form-control" name="ef6" required>
                                              <option value="">Select One  </option>
                                              <option value="Less than 1 KM">Less than 1 KM</option>
                                              <option value="Less than 5 KM">Less than 5 KM</option>
                                              <option value="Less than 8 KM">Less than 8 KM</option>
                                    </select>
                                  </div>
                              </div>
                                <input type="text" name="feature" value="no" hidden>
                                <input type="text" name="createdDate" value="<?php echo $c_date; ?>" hidden>
                                <div class="col-12 mt-4">
                                  <button type="submit" name="post_ad_btn" id="lbtn" class="btn-primary">Post Your Ad</button>
                                  <button class="btn btn-light" onclick="goBack()">Cancel</button>
                                </div>
                              </form>
                    </div>       
                </div>
            </div>
        </div>
    </section>
<script>
  var loadFile1 = function(event) {
    var reader = new FileReader();
    reader.onload = function(){
      var output = document.getElementById('output1');
      output.src = reader.result;
    };
    reader.readAsDataURL(event.target.files[0]);
  };
  var loadFile2 = function(event) {
    var reader = new FileReader();
    reader.onload = function(){
      var output = document.getElementById('output2');
      output.src = reader.result;
    };
    reader.readAsDataURL(event.target.files[0]);
  };
  var loadFile3 = function(event) {
    var reader = new FileReader();
    reader.onload = function(){
      var output = document.getElementById('output3');
      output.src = reader.result;
    };
    reader.readAsDataURL(event.target.files[0]);
  };
</script>
<script type="text/javascript">
  function goBack()
  {
    window.location.href = "ad_requests.php";
  }
</script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/jquery-validation@1.19.3/dist/jquery.validate.js"></script>
<script src="../assets/js/jquery_validator.js"></script>
<?php
include 'useradController.php';
include 'footer.php';
?> 