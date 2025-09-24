<!DOCTYPE html>
<html lang="en">

<title>Pending Amount</title>
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
                            <div class="headingButton">
                                <h1>Pending Amount</h1>
                                <!-- <div class="addChildren">
                                    <a data-bs-toggle="modal" href="#addwalletamount" role="button"><button class="getStarted" type="button"><i class="fas fa-plus"></i></button></a>
                                </div> -->
                            </div>

                            <div class="table-responsive">
                                <table id="purchaseTable" class="display purchaseTable" style="width:100%">
                                    <thead>
                                        <tr>
                                            <th>Product ID</th>
                                            <th>Product Name</th>
                                            <th>Total Amount</th>
                                            <th>Cash Back Amount</th>
                                            <!-- <th>Age</th> -->
                                            <th>Status</th>
                                            <th>Actions</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>01</td>
                                            <td>Product Name</td>
                                            <td>$100</td>
                                            <td>$3</td>
                                            <td>Pending</td>
                                            <td>
                                                <a href="purchase-tracking-details.php"><button class="cardViewButton"><i class="fas fa-eye"></i></button></a>
                                                <!-- <a data-bs-toggle="modal" href="#editChildren" role="button"><button class="cardEditButton"><i class="far fa-edit"></i></button></a> -->
                                                <!-- <a href="chat-list.php"><button  class="cardEditButton" ><i class="fas fa-comment-dots"></i></button></a> -->
                                                <!-- <a href="javascript:void(0)"><button  class="cardEditButton" ><i class="fas fa-trash-alt"></i></button></a> -->
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                            <!-- <div class="row">
                                <div class="col-lg-4 col-md-6 col-sm-12">
                                    <div class="childrenCard">
                                        <img src="./assets/images/smith.webp" alt="">
                                        <div class="cardDetails">
                                            <h6><span>Name:</span> Children 1</h6>
                                            <h6><span>Age:</span> 14</h6>
                                            <h6><span>Gender:</span> Male</h6>
                                        </div>
                                        <div class="cardButton">
                                            <a href="view-children-details.php"><button class="cardViewButton" type="button"><i class="fas fa-eye"></i></button></a>
                                            <a data-bs-toggle="modal" href="#editChildren" role="button"><button class="cardEditButton" type="button"><i class="far fa-edit"></i></button></a>
                                            <a  href="chat-list.php"><button class="cardEditButton" type="button"><i class="fas fa-comment-dots"></i></button></a>
                                            <a  href="javascript:void(0)"><button class="cardEditButton" type="button"><i class="fas fa-trash-alt"></i></button></a>
                                        </div>
                                    </div>
                                </div>
                            </div> -->
                        </div>

                    </div>
                </div>
            </div>

        </div>

    </div>


    <!-- Add Children Modal -->

    <div class="modal fade" id="addwalletamount" aria-hidden="true" aria-labelledby="addwalletamountLabel" tabindex="-1">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="addwalletamountLabel">Add Withdrawal Request:</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="addChildrenForm">
                        <div class="row">
                            <div class="col-lg-12 col-md-12 col-sm-12">
                                <label for="">Enter Amount (Partial/Full)</label>
                                <input type="text" class="signField mb-2" placeholder="Amount">
                            </div>

                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button class="getButton"><i class="fas fa-check-double"></i></button>
                </div>
            </div>
        </div>
    </div>

    <!-- Edit Children Modal -->

    <!-- <div class="modal fade" id="editChildren" aria-hidden="true" aria-labelledby="editChildrenLabel" tabindex="-1">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="editChildrenLabel">Edit Children:</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="addChildrenForm">
                    <div class="row">
                        <div class="col-lg-6 col-md-12 col-sm-12">
                            <label for="">First Name</label>
                            <input type="text" class="signField mb-2" placeholder="First Name">
                        </div>
                        <div class="col-lg-6 col-md-12 col-sm-12">
                            <label for="">Last Name</label>
                            <input type="text" class="signField mb-2" placeholder="Last Name">
                        </div>
                        <div class="col-lg-6 col-md-12 col-sm-12">
                            <label for="">Age</label>
                            <input type="number" class="signField mb-2" placeholder="Age">
                        </div>
                        <div class="col-lg-6 col-md-12 col-sm-12">
                            <label for="">Gender</label>
                            <select class="form-select formSelect mb-2" aria-label="Default select example">
                                <option selected="">Gender</option>
                                <option value="1">Male</option>
                                <option value="2">Female</option>
                                <option value="3">Other</option>
                            </select>
                        </div>
                        <div class="col-lg-6 col-md-12 col-sm-12">
                            <label for="">Phone No</label>
                            <input type="tel" class="signField mb-2" placeholder="Phone No">
                        </div>
                        <div class="col-lg-6 col-md-12 col-sm-12">
                            <label for="">Email</label>
                            <input type="email" class="signField mb-2" placeholder="Email">
                        </div>
                        <div class="col-lg-12 col-md-12 col-sm-12">
                            <label for="">Address</label>
                            <input type="text" class="signField mb-2" placeholder="Address">
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button class="getButton"><i class="fas fa-check-double"></i></button>
            </div>
            </div>
        </div>
    </div> -->

    <script src="./assets/js/main.js"></script>

</body>

</html>