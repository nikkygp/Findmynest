<?php 
session_start();
require "../config.php";
{
	if(isset($_POST['loan_btn']))
  	{
        $user_id = $_SESSION['email'];
        $name = ucwords($_POST['name']);
        $address = $_POST['address'];
        $state = $_POST['state'];
        $district = $_POST['district'];
        $mobile = $_POST['mobile'];
        $email = $_POST['email'];
        $age = $_POST['age'];
        $occu = $_POST['occu'];
        $loan_amt = $_POST['loan_amt'];
        $prop_des = ucwords($_POST['prop_des']);
        $bank = $_POST['bank'];
        $income = $_POST['income'];
        $date = $_POST['createdDate'];
        $query = "INSERT INTO `tbl_loanapplication`(`name`, `address`, `state`, `district`, `mobile`, `email`, `age`, `occupation`, `loan_amt`, `prop_des`, `bank`, `income`, `date`, `user_id`) VALUES (
            '$name','$address','$state','$district','$mobile','$email','$age','$occu','$loan_amt','$prop_des','$bank','$income','$date','$user_id'
        )";
        $query1 = "SELECT `user_id` , `loan_status` FROM `tbl_loanapplication` WHERE `user_id` = '$user_id' AND `loan_status` = 'Applied'";
        $run = mysqli_query($conn, $query1);
        if(mysqli_num_rows($run) > 0)
        {
          echo ('<script LANGUAGE="JavaScript">
          const targetDiv = document.getElementById("error_div");
          const targetDiv2 = document.getElementById("hide_div");
            targetDiv.style.display = "block";
            targetDiv2.style.display = "none";
          </script>');
        }
        else if(mysqli_query($conn, $query))
        {
          echo ('<script LANGUAGE="JavaScript">
          const targetDiv = document.getElementById("hide_div");
          const targetDiv2 = document.getElementById("show_div");
            targetDiv.style.display = "none";
            targetDiv2.style.display = "block";
          </script>');
        }
        else
        {
          echo ("<script LANGUAGE='JavaScript'>
          </script>");
        }
    }
}
