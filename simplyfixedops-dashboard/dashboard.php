<!DOCTYPE html>
<html lang="en">

<title>Dashboard</title>
<?php include('./assets/commons/head.php') ?>

<body>

    <div class="container-fluid p-0">

        <div class="dashboard">

            <?php include('./assets/commons/sidebar.php') ?>

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
                            <!-- <div class="headingButton t-c-width">
                                <h1>Profile</h1>
                                <div class="chatId">
                                    <span>Chat ID</span>
                                    <div class="chatNumber">
                                        <input type="text" value="12345" id="myInput" readonly>
                                        <button id="copyButton"><i class="far fa-copy"></i></button>
                                    </div>
                                </div>
                            </div> -->
                            <div class="row">
                                <div class="col-lg-3 col-md-12 col-sm-12">
                                    <div class="avatar-upload">
                                        <div class="avatar-edit">
                                            <input type='file' id="imageUpload" accept=".png, .jpg, .jpeg" />
                                            <label for="imageUpload"><i class="fas fa-camera"></i></label>
                                        </div>
                                        <div class="avatar-preview">
                                            <div id="imagePreview"
                                                style="background-image: url('./assets/images/smith.webp');">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="profileName">
                                        <a href="javascript:void(0)"><button class="profileNameBtn" type="button">Mike Henry</button></a>
                                    </div>
                                </div>
                                <div class="col-lg-8 col-md-12 col-sm-12">
                                    <div class="account-settings">
                                        <h2>Account Settings</h2>
                                        <div class="row">
                                            <!--   <div class="col-lg-6 col-md-12 col-sm-12">-->
                                            <!--    <label for="">Chat ID</label>-->
                                            <!--    <input type="text" class="signField mb-3" placeholder="12345">-->
                                            <!--</div>-->

                                            <div class="col-lg-12 col-md-12 col-sm-12">
                                                <label for="">Type</label>
                                                <select class="form-select formSelect c-height mb-3"
                                                    aria-label="Default select example">
                                                    <option selected="">Select</option>
                                                    <option value="1">1</option>
                                                    <option value="2">2</option>
                                                    <option value="3">3</option>
                                                    <option value="4">4</option>
                                                    <!-- <option value="6">Physician/nurse</option> -->
                                                    <!-- <option value="7">other</option> -->
                                                </select>
                                            </div>

                                            <div class="col-lg-6 col-md-12 col-sm-12">
                                                <label for="">Name</label>
                                                <input type="text" class="signField mb-3" placeholder="Name">
                                            </div>
                                            <div class="col-lg-6 col-md-12 col-sm-12">
                                                <label for="">Email</label>
                                                <input type="text" class="signField mb-3" placeholder="Last Name">
                                            </div>
                                            <div class="col-lg-6 col-md-12 col-sm-12">
                                                <label for="">Phone No</label>
                                                <input type="tel" class="signField mb-3" placeholder="Phone No">
                                            </div>
                                            <div class="col-lg-6 col-md-12 col-sm-12 position-relative">
                                                <label for="">Bank Name</label>
                                                <input type="text" class="signField mb-3" id="old-password" placeholder="Enter bank name">
                                            </div>

                                            <div class="col-lg-6 col-md-12 col-sm-12 position-relative">
                                                <label for="">IBAN</label>
                                                <input type="text" class="signField mb-3" id="old-password" placeholder="Enter IBAN">
                                            </div>
                                            <div class="col-lg-6 col-md-12 col-sm-12 position-relative">
                                                <label for="">Sort Code</label>
                                                <input type="text" class="signField mb-3" id="old-password" placeholder="Enter Sort Code">
                                            </div>
                                            <div class="col-lg-6 col-md-12 col-sm-12">
                                                <label for="">Account Number</label>
                                                <input type="text" class="signField mb-3" placeholder="Enter Account Number">
                                            </div>
                                            <!-- <div class="col-lg-6 col-md-12 col-sm-12">
                                                <label for="">City</label>
                                                <select class="form-select formSelect mb-3"
                                                    aria-label="Default select example">
                                                    <option selected="">City</option>
                                                    <option value="4">Leeds</option>
                                                    <option value="1">Bradford</option>
                                                    <option value="3">Cambridge</option>
                                                    <option value="2">Birmingham</option>
                                                </select>
                                            </div>
                                            <div class="col-lg-6 col-md-12 col-sm-12">
                                                <label for="">State</label>
                                                <select class="form-select formSelect mb-3"
                                                    aria-label="Default select example">
                                                    <option selected="">State</option>
                                                    <option value="1">One</option>
                                                    <option value="2">Two</option>
                                                    <option value="3">Three</option>
                                                </select>
                                            </div>
                                            <div class="col-lg-6 col-md-12 col-sm-12">
                                                <label for="">Country</label>
                                                <select class="form-select formSelect mb-3"
                                                    aria-label="Default select example">
                                                    <option selected="">Country</option>
                                                    <option value="1">One</option>
                                                    <option value="2">Two</option>
                                                    <option value="3">Three</option>
                                                </select>
                                            </div> -->
                                            <div class="col-lg-12">
                                                <div class="saveButton mt-3">
                                                    <a href="javascript:void(0)"><button class="getStarted"
                                                            type="button">Save Changes</button></a>
                                                </div>
                                            </div>
                                        </div>
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
    <script>
        document.getElementById('copyButton').addEventListener('click', function() {
            var textToCopy = document.getElementById('myInput').value;
            navigator.clipboard.writeText(textToCopy)
        });
    </script>

</body>

</html>