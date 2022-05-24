<?php
include 'header1.php';
$email = $_SESSION['email'];
$query = "SELECT * FROM tbl_usercredentials WHERE email = '$email' and status = 1";
$res = mysqli_query($conn,$query);
$row = mysqli_fetch_array($res);
$id = $row['user_id'];
$query2 = "SELECT * FROM tbl_userdetails WHERE user_id = '$id'";
$res1 = mysqli_query($conn,$query2);
$row1 = mysqli_fetch_array($res1);
$_SESSION['email'] = $row['email'];
$_SESSION['name'] = $row1['fname'];
$_SESSION['phone'] = $row1['phone'];
$_SESSION['place'] = $row1['place'];
$_SESSION['address'] = $row1['address'];
$_SESSION['profile_pic'] = $row1['profile_pic'];
?>
    <section class="py-5 my-3">
        <div class="container">
            <div class="bg-white shadow rounded-lg d-block d-sm-flex">
                <div class="profile-tab-nav border-right">
                    <div class="p-4">
                        <form action="#" method="post" enctype="multipart/form-data">
                        <div class="img-circle text-center mb-3">
                        <img class='img_u' src='../assets/images/user_img.jpg' width='35px' height='35px' style='border-radius: 55%;' alt='Avatar'>
                        </div>
                        <center><input type="hidden" id="upload" accept="image/*" name="profile_pic" onchange="loadFile1(event)" hidden disabled/><label for="upload" class="btn-primary3"><i class="fa fa-camera"></i>&nbsp;&nbsp;Change picture</label></center><br>
                        <h3 class="text-center"><?php echo $_SESSION['email']; ?></h3>
                    </div>
                    <div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                        <a class="nav-link active" id="account-tab" data-toggle="pill" href="#account" role="tab" aria-controls="account" aria-selected="true">
                            <i class="fa fa-home1 text-center mr-1"></i> 
                            Account
                        </a>
                        <a class="nav-link" id="password-tab" data-toggle="pill" href="#password" role="tab" aria-controls="password" aria-selected="false">
                            <i class="fa fa-key text-center mr-1"></i> 
                            Password
                        </a>
                    </div>
                </div>
                <div class="tab-content p-2 p-md-5" id="v-pills-tabContent">
                    <div class="tab-pane fade show active" id="account" role="tabpanel" aria-labelledby="account-tab">
                        <h3 class="mb-4">Account Settings</h3>
                        <button class="btn btn-primary2 float-right mt-n5" type="button" onclick="unlock()">Edit</button>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Email</label>
                                    <input type="text" class="form-control" value="<?php echo $_SESSION['email']; ?>" id="txt1" disabled>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Name</label>
                                    <input type="text" class="form-control" name="fname" value="<?php echo $_SESSION['name']; ?>" id="fname" disabled>
                                </div>
                                <span id="name" class="er"><font size="2">Please enter a valid name!!</font></span>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Phone number</label>
                                    <input type="text" class="form-control" id="phone" name="phone" value="<?php echo $_SESSION['phone']; ?>" disabled maxlength="10">
                                </div>
                                <span id="ephone" class="er"><font size="2">Please enter a valid phone number!!</font></span>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Place</label>
                                    <input type="text" class="form-control" name="place" value="<?php echo $_SESSION['place']; ?>" id="place" disabled>
                                </div>
                                <span id="loc" class="er"><font size="2">Numbers not allowed!!</font></span>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label>Address</label>
                                    <textarea class="form-control" name="address" rows="4" id="des" disabled><?php echo $_SESSION['address']; ?></textarea>
                                </div>
                                <span id="name1" class="er"><font size="2">Numbers not allowed!!</font></span>
                            </div>
                        </div>
                        <div>
                            <input class="btn btn-primary" type="submit" name="ubtn" id="lbtn" value="Update" disabled>
                            <button class="btn btn-light">Cancel</button>
                        </div>
                    </div>
                    <?php
                      include "../config.php";
                        if(isset($_POST['ubtn']))
                        {
                            $_SESSION['profile_pic1'] = $_FILES['profile_pic']['name'];
                            $_SESSION['fname'] = $_POST['fname'];
                            $_SESSION['phone1'] = $_POST['phone'];
                            $_SESSION['place1'] = $_POST['place'];
                            $_SESSION['address1'] = $_POST['address'];
                            move_uploaded_file($_FILES['profile_pic']['tmp_name'],'Profile_images/'.$_FILES['profile_pic']['name']);
                            $sql = "UPDATE `tbl_userdetails` SET `address`='".$_SESSION['address1']."',`phone`='".$_SESSION['phone1']."',`place`='".$_SESSION['place1']."',`profile_pic`='".$_SESSION['profile_pic1']."' WHERE user_id = '$id'";
                            $res = mysqli_query($conn,$sql);
                            if($res)
                            {
                                echo ("<script LANGUAGE='JavaScript'>
                                    window.location.href='userprofile.php';
                                    </script>");
                            }
                            else
                            {
                                echo ("<script LANGUAGE='JavaScript'>
                                    window.location.href='userprofile.php';
                                    </script>");
                            }
                        }
                        if(isset($_POST['pbtn']))
                        {
                              $errors = array();
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
                              if($npass_encrypt != $cpass_encrypt)
                              {
                                echo ("<script LANGUAGE='JavaScript'>
                                    window.alert('Passwords doesn't match!!');
                                    </script>");
                              }
                             if(($npass == "")||($cpass == ""))
                              {
                                echo ("<script LANGUAGE='JavaScript'>
                                    window.alert('Fill all fields!!');
                                    </script>");
                              }
                              else
                              {
                                $sql = "UPDATE tbl_usercredentials SET pass = '$npass_encrypt' WHERE user_id = '$id'";
                                $res = mysqli_query($conn,$sql);
                                if($res)
                                {
                                    echo ("<script LANGUAGE='JavaScript'>
                                        window.alert('Password Updated');
                                        window.location.href='userprofile.php';
                                        </script>");
                                }
                                else
                                {
                                    echo ("<script LANGUAGE='JavaScript'>
                                        window.alert('Something went wrong!!');
                                        window.location.href='userprofile.php';
                                        </script>");
                                }
                              }
                            
                        }
                    ?>
                    <br>
                    <div class="tab-pane fade" id="password" role="tabpanel" aria-labelledby="password-tab">
                        <h3 class="mb-4">Password Settings</h3>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>New password</label>
                                    <input type="password" id="pass" name="npass" class="form-control">
                                </div>
                                <span id="error1" class="er"><font size="2">Password should have atleast 6 characters!</font></span>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Confirm new password</label>
                                    <input type="password" id="npass" name="cpass" class="form-control">
                                </div>
                                <span id="errorc" class="er"><font size="2">Passwords doesn't match!</font></span>
                            </div>
                             <div class="col-md-6">
                                <br>
                                <br>
                            </div>
                        </div>
                        <div>
                            <button class="btn btn-primary" name="pbtn">Change Password</button>
                            <button class="btn btn-light">Cancel</button>
                        </div>
                    </div>
                </form>
                </div>
            </div>
        </div>
    </section>
    <script type="text/javascript">
        function unlock(){
            document.getElementById("phone").disabled=false;
            document.getElementById("place").disabled=false;
            document.getElementById("des").disabled=false;
            document.getElementById("ubtn").disabled=false;
            document.getElementById("upload").disabled=false;
            document.getElementById("phone").focus();
        }
          var loadFile1 = function(event) {
          var reader = new FileReader();
          reader.onload = function(){
          var output = document.getElementById('output');
          output.src = reader.result;
          };
          reader.readAsDataURL(event.target.files[0]);
          };
    </script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/jquery-validation@1.19.3/dist/jquery.validate.js"></script>
<script src="../assets/js/jquery_validator.js"></script>
<?php
include 'footer.php';
?>