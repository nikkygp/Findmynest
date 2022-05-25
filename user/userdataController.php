
<?php 
session_start();
require "../config.php";
$c_date = date("d/m/Y");
error_reporting(0);
$errors = array();
//if user sign up

  if(isset($_POST['submit']))
  {

  $fname = $_POST['fname'];
  $email = $_POST['email'];
  $phone = $_POST['phone'];
  $place = $_POST['place'];
  $u_type = $_POST['u_type'];
  $pass = $_POST['password'];

  //Sanitization
  $fname = trim($fname); 
  $fname=mysqli_real_escape_string($conn,$fname);
  $fname=filter_var($fname, FILTER_SANITIZE_STRING, FILTER_FLAG_STRIP_HIGH);

  $email = trim($email);
  $email=mysqli_real_escape_string($conn,$email);
  $email=filter_var($email, FILTER_SANITIZE_EMAIL, FILTER_FLAG_STRIP_HIGH);

  $phone = trim($phone);
  $phone=mysqli_real_escape_string($conn,$phone);
  $phone=filter_var($phone, FILTER_SANITIZE_NUMBER_INT, FILTER_FLAG_STRIP_HIGH);

  $place = trim($place);
  $place=mysqli_real_escape_string($conn,$place);
  $place=filter_var($place, FILTER_SANITIZE_STRING, FILTER_FLAG_STRIP_HIGH);

  $pass = trim($pass);
  $pass=mysqli_real_escape_string($conn,$pass);

  $ciphering = "AES-128-CTR";
  $iv_length = openssl_cipher_iv_length($ciphering);
  $options = 0;
  $encryption_iv = '1234567891011121';
  $encryption_key = "password";
  $pass_encrypt = openssl_encrypt($pass, $ciphering,
                                $encryption_key, $options, $encryption_iv);
  $query = "SELECT email,user_id FROM tbl_usercredentials WHERE email = '$email' and status = 1 and user_id IN (SELECT user_id FROM tbl_userdetails)";
  $res = mysqli_query($conn, $query);
  $query1 = "SELECT email FROM tbl_agents WHERE email = '$email' and status = 1";
  $res1 = mysqli_query($conn, $query1);
  if(($fname=="")||($email=="")||($phone=="")||($pass=="")||($u_type==""))
  {
    $errors['email'] = "Please fill all fields!";
  }
  if((mysqli_num_rows($res) > 0)||(mysqli_num_rows($res1) > 0))
  {
    $errors['email'] = "Email you entered already exists!";
  }
  else 
  {
      if($u_type == "user")
      {
      echo $sql = "INSERT INTO tbl_userdetails (`fname`, `phone`,`place`,`createdDate`) VALUES ('$fname','$phone', '$place','$c_date')";
      echo $sql2 = "INSERT INTO tbl_usercredentials (`email`, `pass`,`createdDate`) VALUES ('$email','$pass_encrypt','$c_date')";
              if(mysqli_query($conn, $sql) && mysqli_query($conn, $sql2))
              {
                $_SESSION['loginMessage'] = "Register Success";
                header("Location: login.php");
              }
              else
              {
                $errors['signup-error'] = "Registration Failed, Internal error!";
              }
      }
      if($u_type == "agent")
      {
        $sql = "INSERT INTO tbl_agents (`name`, `phone`, `place`,`createdDate`,`email`, `password`) VALUES ('$fname','$phone', '$place','$c_date','$email','$pass_encrypt')";
             if(mysqli_query($conn, $sql))
              {
                $_SESSION['loginMessage'] = "Register Success";
                header("Location: login.php");
              }
              else
              {
                $errors['signup-error'] = "Registration Failed, Internal error!";
              }
      }
  }
  }

  //when user clicks login button

 if(isset($_POST['lbtn']))
  {
    $email = $_POST['email'];
    $pass = $_POST['pass'];
    //Input Sanitization
    $email = trim($email);
    $email=mysqli_real_escape_string($conn,$email);
    $email=$_SESSION['email']=filter_var($email, FILTER_SANITIZE_EMAIL, FILTER_FLAG_STRIP_HIGH);
    
    $pass = trim($pass);
    $pass=mysqli_real_escape_string($conn,$pass);

    if(($email=="admin@gmail.com")||($pass=="admin"))
    {
      echo("<script>
        window.location.href='../admin/index.php';
        </script>");
    }
    $ciphering = "AES-128-CTR";
    $iv_length = openssl_cipher_iv_length($ciphering);
    $options = 0;
    $decryption_iv = '1234567891011121';
    $decryption_key = "password";
    $pass_decrypt = openssl_encrypt($pass, $ciphering,
                                  $decryption_key, $options, $decryption_iv);
    $query = "SELECT `email`, `pass`,`role` FROM tbl_usercredentials WHERE  email = '$email' and pass = '$pass_decrypt' and status = 1";
    $res = mysqli_query($conn,$query);
    $row = mysqli_fetch_array($res);
    $u_type = $row['role'];
    $query1 = "SELECT email, `password`,`role` FROM tbl_agents WHERE email = '$email' and password = '$pass_decrypt' and status = 1";
    $res1 = mysqli_query($conn, $query1);
    $row1 = mysqli_fetch_array($res1);
    $u_role = $row1['role'];
    if(($email=="")||($pass==""))
    {
      $errors['email-error'] = "Please fill all fields!";
    }
    else if(($u_type == "user") && (mysqli_num_rows($res)))
        {
            echo ("<script LANGUAGE='JavaScript'>
          window.location.href='home.php';
          </script>"); 
          $_SESSION['userlogin'] = "Loggedin";
        }
    else if(($u_role == "agent") && (mysqli_num_rows($res1)))
        {
            echo ("<script LANGUAGE='JavaScript'>
          window.location.href='../agent/home.php';
          </script>"); 
          $_SESSION['userlogin'] = "Loggedin";
        }
    else
    {
      $errors['email-error'] = "Incorrect email or password!";
    }
    }

   //when user clicks reset button

  if(isset($_POST['rbtn']))
  {
    $email =$_POST['email'];

    $email = trim($email);
    $email=mysqli_real_escape_string($conn,$email);
    $email=$_SESSION['email']=filter_var($email, FILTER_SANITIZE_EMAIL, FILTER_FLAG_STRIP_HIGH);
    
    $query = "SELECT * FROM tbl_usercredentials WHERE  email = '$email' and status = 1";
    $res = mysqli_query($conn,$query);
    $row = mysqli_fetch_array($res);
    $u_type = $row['role'];
    $query1 = "SELECT * FROM tbl_agents WHERE  email = '$email' and status = 1";
    $res1 = mysqli_query($conn,$query1);
    $row1 = mysqli_fetch_array($res1);
    $u_role = $row1['role'];
    if(($u_type == "user") && (mysqli_num_rows($res)))
    {
      $_SESSION['msg'] = 1;
      $email = $_SESSION['email']=$_POST['email'];
      $rand = $_SESSION['rand'] = rand(100000,900000);
      $subject = "[Findmynest] OTP to Reset Password";
      $body = "Hi, \nYour One Time Password (OTP) to reset your password is: \n\n$rand \n\n\n\n\n\nThanks,\nFindmynest Team";
      $sender_email = "From: FindmynestSupportTeam";
      if(mail($email, $subject, $body, $sender_email))
      {
      echo ("<script LANGUAGE='JavaScript'>
          window.location.href='verify.php';
      </script>");
      }
      else
      {
      $errors['email'] = "Email sending failed!";
      }
    }
    else if(($u_role == "agent") && (mysqli_num_rows($res1)))
    {
      $email =$_POST['email'];
      $email = trim($email);
      $email=mysqli_real_escape_string($conn,$email);
      $email=$_SESSION['email']=filter_var($email, FILTER_SANITIZE_EMAIL, FILTER_FLAG_STRIP_HIGH);

      $rand = $_SESSION['rand'] = rand(100000,900000);
      $subject = "[Findmynest] OTP to Reset Password";
      $body = "Hi, \nYour One Time Password (OTP) to reset your password is: \n\n$rand \n\n\n\n\n\nThanks,\nFindmynest Team";
      $sender_email = "From: FindmynestSupportTeam";
      if(mail($email, $subject, $body, $sender_email))
      {
        echo ("<script LANGUAGE='JavaScript'>
        window.location.href='verify.php';
       </script>");
      }
      else
      {
      $errors['email-error'] = "Email sending failed";
      }
    }
    else
    {
      $errors['email-error'] = "Seems like this Email is not registered with us!";
    }
  }

    //when user clicks code submit button

  if(isset($_POST['vbtn']))
  {
    $code = $_POST['code'];
    $rand = $_SESSION['rand'];
    if($code == $rand)
    {
      echo ("<script LANGUAGE='JavaScript'>
        window.location.href='reset.php';
        </script>");  
    }
    else 
    {
      $errors['email-error'] = "Incorrect otp!";
    }
  }

  if(isset($_POST['sbtn']))
  {
    $email = $_SESSION['email'];
    $email = trim($email);
    $email=mysqli_real_escape_string($conn,$email);
    $email=$_SESSION['email']=filter_var($email, FILTER_SANITIZE_EMAIL, FILTER_FLAG_STRIP_HIGH);
    $npass = $_POST['npass'];
    $cpass = $_POST['cpass'];
    $ciphering = "AES-128-CTR";
    $iv_length = openssl_cipher_iv_length($ciphering);
    $options = 0;
    $encryption_iv = '1234567891011121';
    $encryption_key = "password";
    $npass_encrypt = openssl_encrypt($npass, $ciphering,
                                  $encryption_key, $options, $encryption_iv);
    $cpass_encrypt = openssl_encrypt($cpass, $ciphering,
                                  $encryption_key, $options, $encryption_iv);
    if(($npass=="")||($cpass==""))
    {
      $errors['otp-error'] = "Please fill all the fields!";
    }
    else if($npass != $cpass){
               $errors['otp-error'] = "Passwords doesn't match!";
            }else{
                    $query = "UPDATE tbl_usercredentials SET pass='$npass_encrypt' WHERE email = '$email' and status = 1";
                    $query1 = "UPDATE tbl_agents SET `password`='$npass_encrypt' WHERE email = '$email' and status = 1";
                    if(mysqli_query($conn,$query))
                    {
                      echo ("<script LANGUAGE='JavaScript'>
                      alert('Password Updated');
                      window.location.href='login.php';
                      </script>");  
                    }
                    else if(mysqli_query($conn,$query1))
                    {
                      echo ("<script LANGUAGE='JavaScript'>
                      alert('Password Updated');
                      window.location.href='login.php';
                      </script>");  
                    }
                    else
                    {
                      $errors['otp-error'] = "Internal Error Occured!";
                    }
                
            }
  }
?>