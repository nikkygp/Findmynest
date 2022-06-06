<?php
session_start();
error_reporting(0);
date_default_timezone_set("Asia/Kolkata");
$c_date = date("d/m/Y");
include 'header1.php';
?>
<div class="container1">
<div id="hide_div">
<section class="py-5 my-3">
        <center><h3 class="mb-3 mt-n4">Home Loan Application</h3></center>
        <div class="container">
            <div class="bg-white shadow rounded-lg d-block d-sm-flex">
                <div class="profile-tab-nav1">
                  <h4 class="mb-4 ml-5 mt-5">Applicant Details for applying loan</h4>
                            <center><img src="../assets/images/loan.png" alt="Image" width="420px" id="output" class=""></center>

                </div>
                <div class="tab-content p-4 p-md-5" id="v-pills-tabContent">
                    <div class="tab-pane fade show active" id="account" role="tabpanel" aria-labelledby="account-tab">
                      <form action="#" method="POST" class="row g-3" enctype="multipart/form-data" autocomplete="off">
                        <div class="row">
                            <div class="col-md-9">
                                <div class="form-group">
                                    <label>Name</label>
                                    <input type="text" id="fname" value="<?php echo $r['fname']; ?>" class="form-control" name="name" disabled>
                                </div>
                                <span id="name" class="er"><font size="2">Please enter a valid name, Numbers not allowed!!</font></span>

                            </div>
                            <div class="col-md-9">
                                <div class="form-group">
                                    <label>Address</label>
                                    <textarea class="form-control" id="des" name="address" rows="4"></textarea>
                                </div>
                            </div>
                             <div class="col-md-5">
                              <div class="form-group">
                              <label for="inputCity" class="form-label">State</label>
                              <select class="form-control" name="state" required>
                                            <option value="">Select</option>
                                            <option value="Kerala">Kerala</option>
                              </select>
                            </div>
                            </div>
                             <div class="col-md-4">
                              <div class="form-group">
                              <label for="inputState" class="form-label">District</label>
                                  <select class="form-control" name="district" required>
                                            <option value="">Select</option>
                                            <option value="Alappuzha">Alappuzha</option>
                                            <option value="Ernakulam">Ernakulam</option>
                                            <option value="Idukki">Idukki</option>
                                            <option value="Kannur">Kannur</option>
                                            <option value="Kasargod">Kasargod</option>
                                            <option value="Kollam">Kollam</option>
                                            <option value="Kottayam">Kottayam</option>
                                            <option value="Kozhikode">Kozhikode</option>
                                            <option value="Malappuram">Malappuram</option>
                                            <option value="Palakkad">Palakkad</option>
                                            <option value="Pathanamthitta">Pathanamthitta</option>
                                            <option value="Trivandrum">Trivandrum</option>
                                            <option value="Thrissur">Thrissur</option>
                                            <option value="Wayanad">Wayanad</option>
                                  </select>
                                </div>
                            </div>
                               <div class="col-md-9">
                                <div class="form-group">
                                <label for="inputCity" class="form-label">Mobile Number</label>
                                <input type="text" class="form-control" id="phone" maxlength="10" name="mobile" required="required">
                                </div>
                                <span id="ephone" class="er"><font size="2">Please enter a valid phone number!!</font></span>
                              </div>
                               <div class="col-9">
                                <div class="form-group">
                                <label for="inputAddress2" class="form-label">Email</label>
                                <input type="text" class="form-control" id="email" name="email" required="required">
                                </div>
                                <span id="error" class="er"><font size="2">Please enter a valid email!!</font></span>
                              </div>
                              <div class="col-md-9">
                                <div class="form-group">
                                <label for="inputCity" class="form-label">Age</label>
                                <input type="text" class="form-control" id="area" name="age" required="required">
                                </div>
                                <span id="earea" class="er"><font size="2">Letters not allowed!!</font></span>
                              </div>
                              <div class="col-9">
                                <div class="form-group">
                                <label for="inputAddress2" class="form-label">Occupation</label>
                                <input type="text" class="form-control" id="fname" name="occu" required="required">
                                  </div>
                                  <span id="name" class="er"><font size="2">Numbers not allowed!!</font></span>
                              </div>
                              <div class="col-9">
                                <div class="form-group">
                                <label for="inputAddress2" class="form-label">Loan Amount</label>
                                <input type="text" class="form-control" id="area" name="loan_amt" required="required" maxlength="8">
                                  </div>
                                  <span id="earea" class="er"><font size="2">Letters not allowed!!</font></span>
                              </div>
                              <div class="col-9 mt-3 mb-4">                    
                                <h4><b>Property Details</h4></b>
                              </div>
                                  <div class="col-md-9">
                                    <div class="form-group">
                                  <label for="inputCity" class="form-label">Please fill the complete address of the property</label>
                                  <textarea class="form-control" id="des" name="prop_des" rows="4"></textarea>
                                </div>
                                </div>
                                <div class="col-md-9">
                                  <div class="form-group">
                                  <label for="inputCity" class="form-label">Please select nearest bank</label>
                                  <select class="form-control" name="bank" required>
                                            <option value="">Select</option>
                                            <option value="Axis Bank">Axis Bank</option>
                                            <option value="Bank Of India">Bank Of India</option>
                                            <option value="Canara Bank">Canara Bank</option>
                                            <option value="Catholic Syrian Bank Ltd">Catholic Syrian Bank Ltd</option>
                                            <option value="Central Bank Of India">Central Bank Of India</option>
                                            <option value="Citibank">Citibank</option>
                                            <option value="City Union Bank Ltd">City Union Bank Ltd</option>
                                            <option value="Hdfc Bank Ltd">Hdfc Bank Ltd</option>
                                            <option value="Icici Bank Ltd">Icici Bank Ltd</option>
                                            <option value="Kotak Mahindra Bank">Kotak Mahindra Bank</option>
                                            <option value="South Indian Bank">South Indian Bank</option>
                                            <option value="State Bank Of India">State Bank Of India</option>
                                            <option value="The Federal Bank Ltd">The Federal Bank Ltd</option>
                                            <option value="Union Bank Of India">Union Bank Of India</option>
                                  </select>
                               </div>
                                </div>
                                <div class="col-9 mt-3 mb-4">                    
                                <h4><b>Income Details</h4></b>
                              </div>
                                <div class="col-md-9">
                                  <div class="form-group">
                                  <label for="inputCity" class="form-label">Net monthly income</label>
                                  <input type="text" class="form-control" id="area" name="income" maxlength="6" required="required">
                                </div>
                                <span id="earea" class="er"><font size="2">Letters not allowed!!</font></span>
                                </div>
                                <input type="text" name="feature" value="no" hidden>
                                <input type="text" name="createdDate" value="<?php echo $c_date; ?>" hidden>
                                <div class="col-12 mt-4">
                                  <button type="submit" name="loan_btn" id="lbtn" class="btn-primary">Submit Application</button>
                                  <button class="btn btn-light" onclick="goBack()">Cancel</button>
                                </div>
                              </form>
                    </div>       
                </div>
            </div>
        </div>
    </section>
</div>

<div id="show_div" style="display:none">
<div class="container">
  <div class="alert alert-success mx-5 w-75 p-4 my-3 mb-6 mt-5" role="alert">
    <h4 class="alert-heading">Success!</h4>
    <p>Your Loan Application has been submitted successfully</p>
  </div>
</div>
</div>
<div id="error_div" style="display:none">
<div class="container">
  <div class="alert alert-danger mx-5 w-75 p-4 my-3 mb-6 mt-5" role="alert">
    <h4 class="alert-heading">Alert!</h4>
    <p>You have already submitted a loan application, wait till the application been processed.</p>
  </div>
</div>
</div>
</div>
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
    window.location.href = "home.php";
  }
</script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/jquery-validation@1.19.3/dist/jquery.validate.js"></script>
<script src="../assets/js/jquery_validator.js"></script>
<?php
include 'userloanController.php';
include 'footer.php';

?> 