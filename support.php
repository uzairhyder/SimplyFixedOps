 <!DOCTYPE html>
 <html lang="en">

 <!-- Start Head -->

 <title>Simply Fixed Ops - Support</title>
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
                        <h1>Support</h1>
                        <nav style="--bs-breadcrumb-divider: '●';" aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Support</li>
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
                <div class="col-lg-6 col-md-12 col-sm-12">
                    <div class="need-support-details">
                        <h2>Need Support?<br /> We're Here to Help</h2>
                        <div class="social-details">
                            <div class="social-box">
                                <div class="social-icon">
                                    <i class="fa-solid fa-envelope"></i>
                                </div>
                                <div class="social-info">
                                    <p><span>Email Address<span></p>
                                    <p><a href="mailto:info@simplyfixedops.com">info@simplyfixedops.com</a></p>
                                </div>
                            </div>
                            <div class="social-box">
                                <div class="social-icon">
                                    <i class="fa-solid fa-phone"></i>
                                </div>
                                <div class="social-info">
                                    <p><span>Phone Number<span></p>
                                    <p><a href="tel:5733564245">573-356-4245</a></p>
                                </div>
                            </div>
                            <div class="social-box">
                                <div class="social-icon">
                                    <i class="fa-solid fa-location-dot"></i>
                                </div>
                                <div class="social-info">
                                    <p><span>Address<span></p>
                                    <p><a href="http://maps.google.com/maps" target="_blank">Hallsville, Missouri 65255</a></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-12 col-sm-12">
                    <div class="need-support-form">
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
     </section>

     <section class="faqs">
        <div class="container">
            <div class="c-heading">
                <h3>FAQS</h3>
                <button class="btn-subscribe" type="button">Still Need Help?</button>
            </div>
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12">
                    <div class="faqs-details">
                        <div class="accordion" id="faqAccordion">
                            <div class="accordion-item">
                            <h2 class="accordion-header">
                                <button class="accordion-button faq-header" type="button" data-bs-toggle="collapse" data-bs-target="#faq1" aria-expanded="true">
                                How do I purchase your products?
                                <span class="faq-icon"></span>
                                </button>
                            </h2>
                            <div id="faq1" class="accordion-collapse collapse show" data-bs-parent="#faqAccordion">
                                <div class="accordion-body">
                                    <p>If you are not satisfied with our products, please contact us.</p>
                                </div>
                            </div>
                            </div>
                            <div class="accordion-item">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed faq-header" type="button" data-bs-toggle="collapse" data-bs-target="#faq2" aria-expanded="false">
                                What is your return policy?
                                <span class="faq-icon"></span>
                                </button>
                            </h2>
                            <div id="faq2" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                                <div class="accordion-body">
                                    <p>If you are not satisfied with our products, please contact us.</p>
                                </div>
                            </div>
                            </div>
                            <div class="accordion-item">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed faq-header" type="button" data-bs-toggle="collapse" data-bs-target="#faq3" aria-expanded="false">
                                Do you ship your products?
                                <span class="faq-icon"></span>
                                </button>
                            </h2>
                            <div id="faq3" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                                <div class="accordion-body">
                                    <p>If you are not satisfied with our products, please contact us.</p>
                                </div>
                            </div>
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