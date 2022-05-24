<?php
include 'header.php';
$email = $_SESSION['email'];
$query = "SELECT * FROM tbl_usercredentials WHERE email = '$email' and status = 1";
$res = mysqli_query($conn,$query);
$row = mysqli_fetch_array($res);
$id = $row['user_id'];
$query2 = "SELECT * FROM tbl_userdetails WHERE user_id = '$id'";
$res1 = mysqli_query($conn,$query2);
$row1 = mysqli_fetch_array($res1);
$_SESSION['name'] = $row1['fname'];
$_SESSION['profile_pic'] = $row1['profile_pic'];
?>
<section class="py-5 my-5">
        <div class="container">
            <div class="bg-white shadow rounded-lg d-block d-sm-flex">
                <div class="profile-tab-nav border-right">
                    <div class="p-4">
                        <form action="#" method="post" enctype="multipart/form-data">
                        <div class="img-circle text-center mb-3">
                            <img src="Profile_images/<?php echo $_SESSION['profile_pic']; ?>" alt="Image" id="output" class="shadow">
                        </div>
                        <center><input type="file" id="upload" accept="image/*" name="profile_pic" onchange="loadFile1(event)" hidden disabled/><label for="upload" class="btn-primary3"><i class="fa fa-camera"></i>&nbsp;&nbsp;Change picture</label></center><br>
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
                                    <input type="text" class="form-control" name="fname" value="<?php echo $_SESSION['name']; ?>" id="txt2" disabled>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Phone number</label>
                                    <input type="text" class="form-control" name="phone" value="<?php echo $_SESSION['phone']; ?>" id="txt3" disabled maxlength="10">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Place</label>
                                    <input type="text" class="form-control" name="place" value="<?php echo $_SESSION['place']; ?>" id="txt4" disabled>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label>Address</label>
                                    <textarea class="form-control" name="address" rows="4" id="txt5" disabled><?php echo $_SESSION['address']; ?></textarea>
                                </div>
                            </div>
                        </div>
                        <div>
                            <input class="btn btn-primary" type="submit" name="ubtn" value="Update">
                            <button class="btn btn-light">Cancel</button>
                        </div>
                    </form>
                    </div>
                    <?php
                      include "../config.php";
                        if(isset($_POST['ubtn']))
                        {
                            $pic = $_FILES['profile_pic']['name'];
                            $fname = $_POST['fname'];
                            $phone = $_POST['phone'];
                            $place = $_POST['place'];
                            $address = $_POST['address'];
                            move_uploaded_file($_FILES['profile_pic']['tmp_name'],'Profile_images/'.$_FILES['profile_pic']['name']);
                            $sql = "UPDATE `tbl_userdetails` SET `fname`='$fname',`address`='$address',`phone`='$phone',`place`='$place',`profile_pic`='$pic' WHERE user_id = '$id'";
                            $res = mysqli_query($conn,$sql);
                            if($res)
                            {
                                echo ("<script LANGUAGE='JavaScript'>
                                    window.alert('Profile Updated');
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
                    ?>
                    <div class="tab-pane fade" id="password" role="tabpanel" aria-labelledby="password-tab">
                        <h3 class="mb-4">Password Settings</h3>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Old password</label>
                                    <input type="password" class="form-control">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>New password</label>
                                    <input type="password" class="form-control">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Confirm new password</label>
                                    <input type="password" class="form-control">
                                </div>
                            </div>
                        </div>
                        <div>
                            <button class="btn btn-primary">Update</button>
                            <button class="btn btn-light">Cancel</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>