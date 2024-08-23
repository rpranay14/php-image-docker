<?php
 session_start();
  require_once './php/connect.php';
  ini_set('display_errors', 1);
    ini_set('display_startup_errors', 1);
   error_reporting(E_ALL);
  $isLoggedIn = isset($_SESSION['fullname']);
$uploadDir = '/var/www/html/uploads/'; // Directory where images are stored
$webUploadDir = '/uploads/'; // Relative path to the upload directory from the web server root

// Check if directory exists
if (is_dir($uploadDir)) {
    // Get array of all files in the directory
    $images = array_diff(scandir($uploadDir), array('..', '.')); // Exclude '.' and '..' entries
} else {
    echo "Directory does not exist.";
    exit();
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Image Gallery</title>
    <link href="./css/blog.css" rel="stylesheet">
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
    <style>
        .gallery {
            display: flex;
            flex-wrap: wrap;
            gap: 60px;
            margin-left:80px;

        }
        
        .gallery img {
            width: 250px;
            height: auto;
            border: 1px solid #ccc;
            padding: 2px;
            box-shadow: 2px 2px 5px (90, 34, 139,.2);
            background: #000B1C;
            padding: 1rem;
            border-radius:2px;
            margin-top:20px;
            margin-left:35px;
        
        }
    </style>


</head>
<body>






 <!-- Navbar Start -->
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
    <!-- Navbar End -->
       


    <!-- Page Header Start -->
    <div class="container-fluid page-header mb-5 wow fadeIn" data-wow-delay="0.1s">
        <div class="container">
            <h1 class="display-3 mb-4 animated slideInDown">Gallery</h1>
           
        </div>
    </div>
    <!-- Page Header End -->
    <h2 class="text-center mb-5">Image Gallery</h2>
  
    <div class="gallery mt-5">
  
        <?php
        // Loop through the images and display them
        foreach ($images as $image) {
            // Check if the file is an image
            $filePath = $uploadDir . $image;
            
            if (exif_imagetype($filePath)) {
                echo '<div class="col-md-3 mb-3 ml-5">';
                echo '<div class="card">';
                echo '<img src="' . $webUploadDir . $image . '" alt="' . htmlspecialchars($image) . '" class="card-img-top img-thumbnail">';
                echo '<div class="card-body text-center">'; // Centering the button
                echo '<a href="view_image.php?file=' . urlencode($image) . '">';
                echo '<button type="button" class="btn btn-primary">View Image</button>';
                echo '</a>';
                echo '</div>';
                echo '</div>';
                echo '</div>';
            }
        }
        ?>
    
    </div>
 




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
