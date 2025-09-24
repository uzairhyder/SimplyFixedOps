<!DOCTYPE html>
<html lang="en">

<title>Details</title>
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
                            <h1>View  Details</h1>
                            <div class="row">
                                <div class="col-lg-6 col-md-12 col-sm-12">
                                    <div class="managementDetails">
                                        <ul>
                                            <li><strong>Product ID:</strong><br>1</li>
                                            <li><strong>Product Name:</strong><br>New Product</li>
                                            <li><strong>Total Amount:</strong><br> $100</li>
                                            <li><strong>Cash Back Amount:</strong><br> $1</li>
                                            <li><strong>Status:</strong><br> Pending</li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="col-lg-12 col-md-12 col-sm-12">
                                    <div class="addChildren mt-4">
                                        <a href="eligible.php" role="button"><button class="getStarted" type="button"><i class="fas fa-arrow-left"></i> </button></a>
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