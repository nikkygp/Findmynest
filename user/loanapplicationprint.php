<?php
session_start();
$email = $_SESSION['email'];
include "../config.php";
$r = "SELECT * FROM `tbl_loanapplication` WHERE `user_id` = '$email' AND status = 1";
$s = mysqli_query($conn,$r);
$row = mysqli_fetch_array($s);
?>
<html>
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title>Findmynest - Kerala's No.1 Real Estate portal</title>
    <!-- web fonts -->
    <link href="//fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800,900&display=swap" rel="stylesheet">
    <link href="//fonts.googleapis.com/css?family=Hind&display=swap" rel="stylesheet">
    <link rel="icon" href="../assets/images/head-logo.png" type="image/x-icon" />
        <link rel="stylesheet" href="../assets/css/style-starter.css">
        <link rel="stylesheet" href="../assets/js/bootstrap.min.css">
        <script>
        window.print();
        window.onafterprint = function(event) {
            window.location.href = 'loan_status.php'
        };
        </script>
<body>
<a href="home.php"><img class="m-1" height="60px" width="150px" class="logo" src="../assets/images/main-logo.svg"></a>
<div class="container1">
<section class="py-5 my-3">
        <center><h3 class="mb-3 mt-n4"><b>Home Loan Application</b></h3></center><br><br>
        <div class="container">
            <center>
            <div class="bg-white shadow rounded-lg d-block d-sm-flex" style="width:80%;">
            <table class="table" style="outline:none;">
            <tbody>
            <tr>
            <td>Name</td>
            <td><?php echo $row['name']; ?></td>
            </tr>
            <tr>
            <td>Address</td>
            <td><?php echo $row['address']; ?></td>
            </tr>
            <tr>
            <td>State</td>
            <td><?php echo $row['state']; ?></td>
            </tr>
            <tr>
            <td>District</td>
            <td><?php echo $row['district']; ?></td>
            </tr>
            <tr>
            <td>Mobile</td>
            <td><?php echo $row['mobile']; ?></td>
            </tr>
            <tr>
            <td>Email</td>
            <td><?php echo $row['email']; ?></td>
            </tr>
            <tr>
            <td>Age</td>
            <td><?php echo $row['age']; ?></td>
            </tr>
            <tr>
            <td>Occupation</td>
            <td><?php echo $row['occupation']; ?></td>
            </tr>
            <tr>
            <td>Loan amount</td>
            <td><?php echo $row['loan_amt']; ?></td>
            </tr>
            <tr>
            <td>Property Description</td>
            <td><?php echo $row['prop_des']; ?></td>
            </tr>
            <tr>
            <td>Bank</td>
            <td><?php echo $row['bank']; ?></td>
            </tr>
            <tr>
            <td>Income</td>
            <td><?php echo $row['income']; ?></td>
            </tr>
            <tr>
            <td>Applied date</td>
            <td><?php echo $row['date']; ?></td>
            </tr>
            </tbody>
            </table>
        </center>
        </div>
        </div>
    </section>
</div>
</body>
</html>