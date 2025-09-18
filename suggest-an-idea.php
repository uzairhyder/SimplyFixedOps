 <!DOCTYPE html>
 <html lang="en">

 <!-- Start Head -->

 <title>Simply Fixed Ops - Suggest An Idea</title>
 <?php include('./assets/commons/head.php') ?>

 <!-- End Head -->

 <body>

     <!-- Start Navbar -->

     <?php include('./assets/commons/navbar.php') ?>

     <!-- End Navbar -->

     <!-- Start Header -->

     <header class="support-banner">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-12 col-sm-12">
                    <div class="support-heading">
                        <h1>Suggest An Idea</h1>
                        <nav style="--bs-breadcrumb-divider: '●';" aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Suggest an Idea</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
     </header>

     <!-- End Header -->

     <!-- Start Section -->

     <section class="need-support">
        <div class="container">
            <div class="row">
                <div class="col-lg-10 col-md-12 col-sm-12 mx-auto">
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12">
                            <div class="need-support-form">
                                <h3>Brainstorming Ideas</h3>
                                <form action="">
                                    <div class="row">
                                        <div class="col-lg-6 col-md-12 col-sm-12 mb-4">
                                            <label for="">Name</label>
                                            <input type="name" class="c-input-field" placeholder="Enter Your Name Here">
                                        </div>
                                        <div class="col-lg-6 col-md-12 col-sm-12 mb-4">
                                            <label for="">Email</label>
                                            <input type="email" class="c-input-field" placeholder="Enter Your Email Here">
                                        </div>
                                        <div class="col-lg-6 col-md-12 col-sm-12 mb-2">
                                            <label for="">Phone Number</label>
                                            <input type="tel" class="c-input-field" placeholder="Enter Phone Number Here">
                                        </div>
                                        <div class="col-lg-6 col-md-12 col-sm-12 mb-2">
                                            <label for="">File Upload</label>
                                            <input type="file" class="c-input-field" placeholder="choose File">
                                            <p class="n-text">Max. file size: 512 MB.</p>
                                        </div>
                                        <div class="col-lg-12 col-md-12 col-sm-12 mb-4">
                                            <label for="">Suggest Your Idea</label>
                                            <textarea type="text" class="c-input-message" placeholder="Your Message Here"></textarea>
                                        </div>
                                        <div class="col-lg-12 col-md-12 col-sm-12">
                                            <button class="btn-subscribe" type="submit">Submit</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
     </section>

     <!-- End Section -->

     <!-- Start Footer -->

     <?php include('./assets/commons/footer.php') ?>

     <!-- End Footer -->

     <!-- Swiper JS -->
     <script src="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.js"></script>
     <!-- Main JS -->
     <script src="assets/js/main.js"></script>

 </body>
 </html>