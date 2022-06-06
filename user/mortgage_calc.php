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
        <center><h3 class="mb-3 mt-n4"><b>Mortgage Calculator</b></h3></center>
        <div class="container">
            <div class="bg-white shadow rounded-lg d-block d-sm-flex">
                <div class="profile-tab-nav1">
                  <h4 class="mb-4 ml-5 mt-5">Calculate your Monthly Payment</h4>
                            <center><img src="../assets/images/mortgage.png" alt="Image" width="420px" id="output" class=""></center>

                </div>
                <div class="tab-content p-4 p-md-5" id="v-pills-tabContent">
                    <div class="tab-pane fade show active" id="account" role="tabpanel" aria-labelledby="account-tab">
                      <form action="#" method="POST" class="row g-3" enctype="multipart/form-data" autocomplete="off">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Loan Amount</label>
                                    <input type="number" id="inCost" maxlength="8" class="form-control" required="required">
                                </div>
                            </div>
                               <div class="col-md-6">
                                <div class="form-group">
                                <label for="inputCity" class="form-label">Down Payment</label>
                                <input type="number" class="form-control" id="inDown" maxlength="7" required="required">
                                </div>
                              </div>
                               <div class="col-6">
                                <div class="form-group">
                                <label for="inputAddress2" class="form-label">Interest</label>
                                <input type="text" class="form-control" id="inInterest" required="required">
                                </div>
                              </div>
                              <div class="col-md-6">
                                <div class="form-group">
                                <label for="inputCity" class="form-label">Length of Loan (in years)</label>
                                <input type="text" class="form-control" id="inTerm" required="required">
                                </div>
                                <span id="earea" class="er"><font size="2">Letters not allowed!!</font></span>
                              </div>
                              <div class="col-12 mb-4">
                                </div>
                              <div class="col-6">
                                  <button type="button" id="btnCalculate"  class="btn-primary">Calculate</button>
                                </div>
                                <div class="col-12 mb-4">
                                </div>
                                <div class="col-12">
                                <h3 style="color:#006aff"><b><p id="demo"></p></b></h3>
                              </div>
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
  function calculateMortgage(p, r, n) {
  r = percentToDecimal(r);
  n = yearsToMonths(n);
  var pmt = (r * p) / (1 - (Math.pow((1 + r), (-n))));
  return parseFloat(pmt.toFixed(2));
}

function percentToDecimal(percent) {
  return (percent / 12) / 100;
}

function yearsToMonths(year) {
  return year * 12;
}
var htmlEl = document.getElementById("demo");

function postPayments(pmt) {
  htmlEl.innerText = "Total Monthly Payment: ₹" + pmt;
}
var btn = document.getElementById("btnCalculate");
btn.onclick = function() {
  var cost = document.getElementById("inCost").value.replace('₹', '');
  var downPayment = document.getElementById("inDown").value.replace('₹', '');
  var interest = document.getElementById("inInterest").value.replace('%', '');
  var term = document.getElementById("inTerm").value.replace(' years', '');
  var amountBorrowed = cost - downPayment;
  var pmt = calculateMortgage(amountBorrowed, interest, term);
  postPayments(pmt);
};
</script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/jquery-validation@1.19.3/dist/jquery.validate.js"></script>
<script src="../assets/js/jquery_validator.js"></script>
<?php
include 'userloanController.php';
include 'footer.php';

?> 