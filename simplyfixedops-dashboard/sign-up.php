<!DOCTYPE html>
<html lang="en">

<title>Sign Up</title>
<?php include('./assets/commons/head.php') ?>

<body>

    <div class="container-fluid p-0">

        <div class="dashboard">

            <div class="signInBox">
                <div class="row justify-content-center">
                    <div class="col-lg-5 col-md-12 col-sm-12">

                        <div class="signIn">
                            <div class="row">
                                <div class="col-lg-12 col-md-12 col-sm-12">
                                    <h1>Sign Up</h1>
                                    <div class="account-settings password-form">
                                        <!-- <img src="./assets/images/logo.jpg" alt=""></a> -->
                                        <form action="">
                                            <div class="row">
                                                <div class="col-lg-12 col-md-12 col-sm-12 ">
                                                    <label for="">User Type</label>
                                                    <select class=" form-select formSelect c-height mb-3"
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
                                                <div class="col-lg-6 col-md-12 col-sm-12 position-relative">
                                                    <label for="">Name</label>
                                                    <input type="text" class="signField mb-3" placeholder="Enter Name">
                                                </div>
                                                <div class="col-lg-6 col-md-12 col-sm-12 position-relative">
                                                    <label for="">Email</label>
                                                    <input type="email" class="signField mb-3" placeholder="Enter Email">
                                                </div>
                                                <div class="col-lg-6 col-md-12 col-sm-12">
                                                    <label for="">Phone No</label>
                                                    <input type="tel" class="signField mb-3" placeholder="Enter Phone No">
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
                                                <div class="col-lg-6 col-md-12 col-sm-12 position-relative">
                                                    <label for="">Account Number</label>
                                                    <input type="text" class="signField mb-3" id="old-password" placeholder="Enter Account Number">
                                                </div>

                                                <div class="col-lg-6 col-md-12 col-sm-12 position-relative">
                                                    <label for="">User Image</label>
                                                    <input type="file" class="signField mb-3" id="new-password" placeholder="Enter Password">
                                                    
                                                </div>

                                                <div class="col-lg-6 col-md-12 col-sm-12 position-relative">
                                                    <label for="">Enter Password</label>
                                                    <input type="password" class="signField mb-3" id="new-password" placeholder="Enter Password">
                                                    <i class="fas fa-eye toggle-password" toggle="#new-password"></i>
                                                </div>

                                                <div class="col-lg-12">
                                                    <div class="saveButton">
                                                        <a href="dashboard.php"><button class="getStarted" type="button">Sign Up</button></a>
                                                        <p>Already Have An Account? <a href="sign-in.php">Sign In</a></p>
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

    <script>
        $(".toggle-password").click(function() {
            $(this).toggleClass("fa-eye fa-eye-slash");
            var input = $($(this).attr("toggle"));
            if (input.attr("type") == "password") {
                input.attr("type", "text");
            } else {
                input.attr("type", "password");
            }
        });
    </script>

</body>

</html>