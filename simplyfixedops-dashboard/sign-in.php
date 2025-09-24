<!DOCTYPE html>
<html lang="en">

<title> Sign In</title>
<?php include('./assets/commons/head.php')?>

<body>

    <div class="container-fluid p-0">

        <div class="dashboard">

            <div class="signInBox">
                <div class="row justify-content-center">
                    <div class="col-lg-5 col-md-12 col-sm-12">

                        <div class="signIn">
                            <div class="row">
                                <div class="col-lg-12 col-md-12 col-sm-12">
                                    <h1>Sign In</h1>
                                    <div class="account-settings password-form">
                                        <!-- <img src="./assets/images/logo.webp" alt=""></a> -->
                                        <form action="">
                                            <div class="row">
                                                <div class="col-lg-12 col-md-12 col-sm-12 position-relative">
                                                    <label for="">Enter Email Address</label>
                                                    <input type="email" class="signField mb-3" placeholder="Enter Email Address">
                                                </div>
                                                <div class="col-lg-12 col-md-12 col-sm-12 position-relative">
                                                    <label for="">Enter Password</label>
                                                    <input type="password" class="signField mb-3" id="new-password" placeholder="Enter Password">
                                                    <i class="fas fa-eye toggle-password" toggle="#new-password"></i>
                                                </div>

                                                <div class="col-lg-12 col-md-12 col-sm-12">
                                                    <div class="forget">
                                                        <div class="form-check">
                                                            <!-- <input class="form-check-input" type="checkbox" value="" id="rememberMe">
                                                            <label class="form-check-label" for="rememberMe">
                                                                Remember Me
                                                            </label> -->
                                                        </div>
                                                        <a href="forget-password.php">
                                                            <p>Forget Password?</p>
                                                        </a>
                                                    </div>
                                                </div>
                                                
                                                <div class="col-lg-12">
                                                    <div class="saveButton mt-3">
                                                        <a href="dashboard.php"><button class="getStarted" type="button">Sign In</button></a>
                                                        <p>Don't Have An Account? <a href="sign-up.php">Sign Up</a></p>
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
        $(".toggle-password").click(function () {
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