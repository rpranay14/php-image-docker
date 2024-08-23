<?php 
session_start();
include 'php/connect.php';


$isLoggedIn = isset($_SESSION['fullname']);
    
    ?>
<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="UTF-8">
    <title>File Upload Form</title>
    <link href="css/style.css" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Jost:wght@500;600;700&family=Open+Sans:wght@400;500&display=swap"
        rel="stylesheet">

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="lib/animate/animate.min.css" rel="stylesheet">
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
</head>
<style>
    #labelform{
    color: purple!important;
}
#buttonsubmit{
    background-color: purple;
    color:white;
}
.alert-info{
    color:purple;
}

.custom-file-input::before {
            content: 'Select File';
            display: inline-block;
            background: purple;
            color: white;
            border-radius: 5px;
            padding:10px;
            outline: none;
            white-space: nowrap;
            cursor: pointer;
            font-weight: 700;
            font-size: 10pt;
            margin-right:10px;
            cursor: pointer!important;
        }

        .custom-file-input:hover::before {
            background: purple;
            cursor: pointer!important;
        }

        .custom-file-input:active::before {
            background: purple;
            cursor: pointer!important;
        }
        .custom-file-input::-webkit-file-upload-button {
            visibility: hidden;
            cursor: pointer;
        }
    </style>
<body>


 <!-- Navbar Start -->
 <div class="container-fluid fixed-top px-0 wow fadeIn" data-wow-delay="0.1s">
        <div class="top-bar row gx-0 align-items-center d-none d-lg-flex">
            <div class="col-lg-6 px-5 text-start">
                <small><i class="fa fa-map-marker-alt text-primary me-2"></i>123 Street, New York, USA</small>
                <small class="ms-4"><i class="fa fa-clock text-primary me-2"></i>9.00 am - 9.00 pm</small>
            </div>
            <div class="col-lg-6 px-5 text-end">
                <small><i class="fa fa-envelope text-primary me-2"></i>info@example.com</small>
                <small class="ms-4"><i class="fa fa-phone-alt text-primary me-2"></i>+012 345 6789</small>
            </div>
        </div>

        <nav class="navbar navbar-expand-lg navbar-light py-lg-0 px-lg-5 wow fadeIn" data-wow-delay="0.1s">
            <a href="index.php" class="navbar-brand ms-4 ms-lg-0">
                <h1 class="display-5 text-primary m-0">PreyFinance</h1>
            </a>
            <button type="button" class="navbar-toggler me-4" data-bs-toggle="collapse"
                data-bs-target="#navbarCollapse">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarCollapse">
                <div class="navbar-nav ms-auto p-4 p-lg-0">
                    <a href="index.php" class="nav-item nav-link active">Home</a>
                    <a href="about.php?id=1" class="nav-item nav-link">About</a>
                    <a href="blog.php" class="nav-item nav-link">Blogs</a>
                    <a href="contact.php" class="nav-item nav-link">Contact Us</a>
                    <a href="service.php" class="nav-item nav-link">Services</a>
                    <a href="upload.php" class="nav-item nav-link">Gallery</a>
                    <?php if ($isLoggedIn): ?>
                    <a href="dashboard.php" class="nav-item nav-link"><?php echo $_SESSION['fullname']; ?></a>
                <?php else: ?>
                    <a href="Login.php" class="nav-item nav-link">Signin</a>
                <?php endif; ?>
            
                </div>
                <div class="d-none d-lg-flex ms-2">
                    <a class="btn btn-light btn-sm-square rounded-circle ms-3" href="">
                        <small class="fab fa-facebook-f text-primary"></small>
                    </a>
                    <a class="btn btn-light btn-sm-square rounded-circle ms-3" href="">
                        <small class="fab fa-twitter text-primary"></small>
                    </a>
                    <a class="btn btn-light btn-sm-square rounded-circle ms-3" href="">
                        <small class="fab fa-linkedin-in text-primary"></small>
                    </a>
                </div>
            </div>
        </nav>
    </div>
    <!-- Navbar End -->


      <!-- Page Header Start -->
      <div class="container-fluid page-header mb-5 wow fadeIn" data-wow-delay="0.1s">
        <div class="container">
            <h1 class="display-3 mb-4 animated slideInDown">Add Review</h1>
          
        </div>
    </div>
    <!-- Page Header End -->


    <!-- About Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="row g-4 align-items-end mb-4">
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s">
                    <img class="img-fluid rounded" src="img/about.jpg">
                </div>
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.3s">
                    <p class="d-inline-block border rounded text-primary fw-semi-bold py-1 px-3">Add Review</p>
                    <h1 class="display-5 mb-4">We Help Our Clients To Grow Their Business</h1>
                    <p class="mb-4">Clients may express gratitude for the strategies or services your company provided
                        that directly contributed to an increase in their revenue or profitability.
                    </p>
                    <div class="border rounded p-4">
                        <nav>
                            <div class="nav nav-tabs mb-3" id="nav-tab" role="tablist">
                                <button class="nav-link fw-semi-bold active" id="nav-story-tab" data-bs-toggle="tab"
                                    data-bs-target="#nav-story" type="button" role="tab" aria-controls="nav-story"
                                    aria-selected="true">Story</button>
                                <button class="nav-link fw-semi-bold" id="nav-mission-tab" data-bs-toggle="tab"
                                    data-bs-target="#nav-mission" type="button" role="tab" aria-controls="nav-mission"
                                    aria-selected="false">Mission</button>
                                <button class="nav-link fw-semi-bold" id="nav-vision-tab" data-bs-toggle="tab"
                                    data-bs-target="#nav-vision" type="button" role="tab" aria-controls="nav-vision"
                                    aria-selected="false">Vision</button>
                            </div>
                        </nav>
                        <div class="tab-content" id="nav-tabContent">
                            <div class="tab-pane fade show active" id="nav-story" role="tabpanel"
                                aria-labelledby="nav-story-tab">
                                <p>Testimonials might highlight how your company helped clients reach new markets or
                                    demographics, expanding their customer base and driving business growth.</p>
                                <p class="mb-0">Diam dolor diam ipsum et tempor sit. Aliqu diam amet diam et eos labore.
                                    Clita erat ipsum et lorem et sit</p>
                            </div>
                            <div class="tab-pane fade" id="nav-mission" role="tabpanel"
                                aria-labelledby="nav-mission-tab">
                                <p>Clients may commend your company for streamlining their operations, implementing
                                    cost-saving measures, or introducing new technologies that improved their overall
                                    efficiency and productivity.</p>
                                <p class="mb-0">Clients might appreciate the strategic advice and insights your company
                                    offered, whether it's in marketing, product development, or business expansion,
                                    which ultimately led to tangible growth outcomes.</p>
                            </div>
                            <div class="tab-pane fade" id="nav-vision" role="tabpanel" aria-labelledby="nav-vision-tab">
                                <p> Positive testimonials could also emphasize the value of the ongoing partnership with
                                    your company, highlighting how your continued support and expertise have been
                                    instrumental in their sustained business growth over time.</p>
                                <p class="mb-0">Clients may express gratitude for the strategies or services your
                                    company provided that directly contributed to an increase in their revenue or
                                    profitability.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="border rounded p-4 wow fadeInUp" data-wow-delay="0.1s">
                <div class="row g-4">
                    <div class="col-lg-4 wow fadeIn" data-wow-delay="0.1s">
                        <div class="h-100">
                            <div class="d-flex">
                                <div class="flex-shrink-0 btn-lg-square rounded-circle bg-primary">
                                    <i class="fa fa-times text-white"></i>
                                </div>
                                <div class="ps-3">
                                    <h4>Image Gallery</h4>
                                    <span>Investment Management: Helping you build and manage a diversified investment
                                        portfolio that maximizes returns while minimizing risk.</span>

                                    </div>
                                    
                              
                            </div>
                            <div class="container mt-2">
                                    <div class="row justify-content-center">
                                        <div class="col-lg-10 col-md-10">
                                 <a href="imagegallery.php"><button class="btn  " id="buttonsubmit"> View Gallery</button></a>   
                                    </div>
                                    </div>
                                    </div>
                            <div class="border-bottom mt-4 d-block d-lg-none"></div>
                        </div>
                    </div>
                    <div class="col-lg-4 wow fadeIn" data-wow-delay="0.3s">
                        <div class="h-80">
                            <div class="d-flex">
                                <div class="flex-shrink-0 btn-lg-square rounded-circle bg-primary">
                                    <i class="fa fa-users text-white"></i>
                                </div>
                                <div class="ps-3">
                                    <h4>Upload Review</h4>
                               
                                    <form action="php/uploads.php" method="post" enctype="multipart/form-data" class="mt-2">

        <input type="file" name="file" class="form-control custom-file-input" id="file"><br><br>
        <input type="submit" name="submit" class="btn" id="buttonsubmit" value="Upload">
    </form>

    <?php
                        if (!empty($message)) {
                            echo '<div class="mt-3  alert-info">' . $message . '</div>';
                        }
                        ?>
                                </div>
                           
                            </div>
                            <div class="border-bottom mt-4 d-block d-lg-none"></div>
                        </div>
                    </div>
                    <div class="col-lg-4 wow fadeIn" data-wow-delay="0.5s">
                        <div class="h-100">
                            <div class="d-flex">
                                <div class="flex-shrink-0 btn-lg-square rounded-circle bg-primary">
                                    <i class="fa fa-phone text-white"></i>
                                </div>
                                <div class="ps-3">
                                    <h4>24/7 Available</h4>
                                    <span>Financial Planning and Analysis: Providing detailed financial planning and
                                        analysis to support strategic decision-making.</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- About End -->
  
   <!-- <form action="php/uploads.php" method="post" enctype="multipart/form-data">
        <label for="file">Select File:</label>
        <input type="file" name="file" id="file"><br><br>
        <input type="submit" name="submit" value="Upload">
    </form>-->

  <!-- Footer Start -->
  <div class="container-fluid bg-dark text-light footer mt-5 py-5 wow fadeIn" data-wow-delay="0.1s">
        <div class="container py-5">
            <div class="row g-5">
                <div class="col-lg-3 col-md-6">
                    <h4 class="text-white mb-4">Our Office</h4>
                    <p class="mb-2"><i class="fa fa-map-marker-alt me-3"></i>123 Street, New York, USA</p>
                    <p class="mb-2"><i class="fa fa-phone-alt me-3"></i>+012 345 67890</p>
                    <p class="mb-2"><i class="fa fa-envelope me-3"></i>info@example.com</p>
                    <div class="d-flex pt-2">
                        <a class="btn btn-square btn-outline-light rounded-circle me-2" href=""><i
                                class="fab fa-twitter"></i></a>
                        <a class="btn btn-square btn-outline-light rounded-circle me-2" href=""><i
                                class="fab fa-facebook-f"></i></a>
                        <a class="btn btn-square btn-outline-light rounded-circle me-2" href=""><i
                                class="fab fa-youtube"></i></a>
                        <a class="btn btn-square btn-outline-light rounded-circle me-2" href=""><i
                                class="fab fa-linkedin-in"></i></a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <h4 class="text-white mb-4">Services</h4>
                    <a class="btn btn-link" href="">Financial Planning</a>
                    <a class="btn btn-link" href="">Cash Investment</a>
                    <a class="btn btn-link" href="">Financial Consultancy</a>
                    <a class="btn btn-link" href="">Business Loans</a>
                    <a class="btn btn-link" href="">Business Analysis</a>
                </div>
                <div class="col-lg-3 col-md-6">
                    <h4 class="text-white mb-4">Quick Links</h4>
                    <a class="btn btn-link" href="">About Us</a>
                    <a class="btn btn-link" href="">Contact Us</a>
                    <a class="btn btn-link" href="">Our Services</a>
                    <a class="btn btn-link" href="">Terms & Condition</a>
                    <a class="btn btn-link" href="">Support</a>
                </div>
                <div class="col-lg-3 col-md-6">
                    <h4 class="text-white mb-4">Newsletter</h4>
                    <p>Ultimately, clients want to see results. Positive testimonials may highlight how your company's
                        financial strategies have helped them achieve their goals</p>
                    <div class="position-relative w-100">
                        <input class="form-control bg-white border-0 w-100 py-3 ps-4 pe-5" type="text"
                            placeholder="Your email">
                        <button type="button"
                            class="btn btn-primary py-2 position-absolute top-0 end-0 mt-2 me-2">SignUp</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Footer End -->



      <!-- Back to Top -->
      <a href="#" class="btn btn-lg btn-primary btn-lg-square rounded-circle back-to-top"><i
            class="bi bi-arrow-up"></i></a>


    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="lib/wow/wow.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/waypoints/waypoints.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>
    <script src="lib/counterup/counterup.min.js"></script>

    <!-- Template Javascript -->
    <script src="js/main.js"></script>
</body>
</html>
