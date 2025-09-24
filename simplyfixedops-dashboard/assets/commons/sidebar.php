<div class="side-bar">
    <div class="logo-and-ham-burger">
        <div class="logo">
            <a href="dashboard.php"><img src="./assets/images/logo.webp" alt=""></a>
        </div>
        <div class="ham-burger">
            <div class="ham-close"><i class="fas fa-times"></i></div>
        </div>
    </div>
    <div class="pages-names">
        <ul>
            <li><a href="dashboard.php" class="page-name"><i class="fas fa-user"></i> Profile</a></li>
            <li><a href="eligible.php" class="page-name mc-link"><i class="fas fa-list-ul"></i>Eligible</a></li>
            <li><a href="paid.php" class="page-name mc-link"><i class="fas fa-list-ul"></i>Paid</a></li>
            <li><a href="pending.php" class="page-name mc-link"><i class="fas fa-list-ul"></i>Pending</a></li>
            <li><a href="https://onlyfixedops.com/index.php" class="page-name"><i class="fas fa-globe"></i> Visit Website</a></li>
            <!-- <li><a href="wallet.php" class="page-name ls-link"><i class="fas fa-wallet"></i>Wallet</a></li> -->
            <!--<li><a href="chat-list.php" class="page-name c-link"><i class="fas fa-comment-dots"></i> Chat</a></li>-->
            <!--<li><a href="reports.php" class="page-name"><i class="far fa-chart-bar"></i> Reports</a></li>-->
            <!--<li><a href="pdf.php" class="page-name"><i class="fas fa-download fa-fw"></i> PDF</a></li>-->
            <!-- <li><a href="change-password.php" class="page-name"><i class="fas fa-lock"></i> Change Password</a></li> -->
            <!-- <li><a href="http://localhost/affiliate-dashboard/sign-in.php" class="page-name"><i class="fas fa-sign-out-alt"></i> Logout</a></li> -->
        </ul>
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