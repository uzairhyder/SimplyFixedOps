<!DOCTYPE html>
<html lang="en">

<title>Change Password</title>
<?php include('./assets/commons/head.php')?>

<body>

    <div class="container-fluid p-0">

        <div class="dashboard">

            <?php include('./assets/commons/sidebar.php')?>

            <div class="page">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12">

                        <div class="row-for-logo-and-ham-burger">
                        <div class="logo-for-lap"><a href="dashboard.php"><img src="./assets/images/logo.webp" alt=""></a></div>
                            <div class="p-container">
                                <div class="profile-container">
                                <a data-bs-toggle="modal" href="#addwalletamount" role="button"><img src="https://cdn-icons-png.flaticon.com/512/1682/1682308.png" width="32" height="32" class="img-fluid"><span>$20.00</span></a>
                                </div>
                                <div class="profile-container">
                                    <div class="profile-icon">John Smith <i class="fas fa-chevron-down"></i></div>
                                    <div class="dropdown-content">
                                        <a href="dashboard.php">Edit Profile</a>
                                        <a href="change-password.php">Change Password</a>
                                        <a href="sign-in.php">Log Out</a>
                                    </div>
                                </div>
                            </div>
                            <div class="ham-burger">
                                <div class="ham-open"><i class="fas fa-bars"></i></div>
                            </div>
                        </div>

                        <div class="page-content">
                            <h1>Change Password</h1>
                            <div class="row">
                                <div class="col-lg-6 col-md-12 col-sm-12">
                                    <div class="account-settings password-form">
                                        <form action="">
                                        <div class="row">
                                            <div class="col-lg-12 col-md-12 col-sm-12 position-relative">
                                                <label for="">Password</label>
                                                <input type="password" class="signField mb-3" id="old-password" placeholder="Password">
                                                <i class="fas fa-eye toggle-password" toggle="#old-password"></i>
                                            </div>
                                            <div class="col-lg-12 col-md-12 col-sm-12 position-relative">
                                                <label for="">New Password</label>
                                                <input type="password" class="signField mb-3" id="new-password" placeholder="New Password">
                                                <i class="fas fa-eye toggle-password" toggle="#new-password"></i>
                                            </div>
                                            <div class="col-lg-12 col-md-12 col-sm-12 position-relative">
                                                <label for="">Confirm Password</label>
                                                <input type="password" class="signField mb-3" id="confirm-password" placeholder="Confirm Password">
                                                <i class="fas fa-eye toggle-password" toggle="#confirm-password"></i>
                                            </div>
                                            
                                            <div class="col-lg-12">
                                                <div class="saveButton mt-3">
                                                    <a href="javascript:void(0)"><button class="getStarted" type="button">Save Changes</button></a>
                                                </div>
                                            </div>
                                        </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                    </div>
                </div>
            </div>

        </div>
        
    </div>

    <script src="./assets/js/main.js"></script>

</body>
</html>