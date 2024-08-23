<?php
session_start();
// Include db_connect.php to establish database connection
require_once './php/connect.php';

$isLoggedIn = isset($_SESSION['fullname']);


?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="css/blog.css" rel="stylesheet">
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

        .greeting-message{
            display: flex;
    flex-direction: column;
    justify-content: center;
    align-items: center;
    padding: 20px;
   color:red;
   box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    border-radius: 10px;
    
        }
        .search-container {
    display: flex;
    flex-direction: column;
    justify-content: center;
    align-items: center;
    padding: 20px;
    background: white;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    border-radius: 10px;
}

.search-container form {
    display: flex;
    flex-direction: column;
    align-items: center;
}

.search-container input[type="text"] {
    padding: 10px;
    margin-bottom: 10px;
    border: 1px solid #ddd;
    border-radius: 5px;
    width: 100%;
    max-width: 300px;
}

.search-container button {
    padding: 10px 20px;
    border: none;
    border-radius: 5px;
    background-color: #007bff;
    color: white;
    cursor: pointer;
    font-size: 16px;
}

.search-container button:hover {
    background-color: #0056b3;
}
        </style>
</head>

<body>
    <!-- Spinner Start -->
    <div id="spinner"
        class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
        <div class="spinner-border text-primary" role="status" style="width: 3rem; height: 3rem;"></div>
    </div>
    <!-- Spinner End -->

   



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
            <h1 class="display-3 mb-4 animated slideInDown">Blogs</h1>
           
        </div>
    </div>
    <!-- Page Header End -->

 <!-- Search Form -->
 <div class="search-container">
        <form method="POST" action="<?php echo $_SERVER['PHP_SELF']; ?>">
            <input type="text" name="search" placeholder="Search something" value="<?php echo isset($_POST['search']) ? $_POST['search'] : ''; ?>">
            <button type="submit">Search</button>
        </form>
    </div>
    <form method="POST" action="/preyfinance/blog.php/jsadhjs">
    <!-- Greeting Message -->
    <div class="greeting-message">
        <?php if (isset($_POST['search']) && !empty($_POST['search'])): ?>
            <p>Hello, <?php echo $_POST['search']; ?></p>
        <?php endif; ?>
    </div>

    <div class="band">
        <!-- Your existing blog items -->
        <div class="item-1">
            <a href="#" class="card">
                <div class="thumb"
                    style="background-image: url(https://s3-us-west-2.amazonaws.com/s.cdpn.io/210284/flex-1.jpg);">
                </div>
                <article>
                    <h1>International Artist Feature: Malaysia</h1>
                    <span>Mary Winkler</span>
                </article>
            </a>
        </div>
        <div class="item-2">
            <a href="#" class="card">
                <div class="thumb"
                    style="background-image: url(https://s3-us-west-2.amazonaws.com/s.cdpn.io/210284/users-2.png);">
                </div>
                <article>
                    <h1>How to Conduct Remote Usability Testing</h1>
                    <span>Harry Brignull</span>
                </article>
            </a>
        </div>
        <div class="item-3">
            <a href="#" class="card">
                <div class="thumb"
                    style="background-image: url(https://s3-us-west-2.amazonaws.com/s.cdpn.io/210284/flex-5.jpg);">
                </div>
                <article>
                    <h1>Created by You, July Edition</h1>
                    <p>Welcome to our monthly feature of fantastic tutorial results created by you, the Envato Tuts+
                        community!</p>
                    <span>Melody Nieves</span>
                </article>
            </a>
        </div>
        <div class="item-4">
            <a href="#" class="card">
                <div class="thumb"
                    style="background-image: url(https://s3-us-west-2.amazonaws.com/s.cdpn.io/210284/landing.png);">
                </div>
                <article>
                    <h1>How to Code a Scrolling “Alien Lander” Website</h1>
                    <p>We’ll be putting things together so that as you scroll down from the top of the page you’ll see
                        an “Alien Lander” making its way to touch down.</p>
                    <span>Kezz Bracey</span>
                </article>
            </a>
        </div>
        <div class="item-5">
            <a href="#" class="card">
                <div class="thumb"
                    style="background-image: url(https://s3-us-west-2.amazonaws.com/s.cdpn.io/210284/strange.jpg);">
                </div>
                <article>
                    <h1>How to Create a “Stranger Things” Text Effect in Adobe Photoshop</h1>
                    <span>Rose</span>
                </article>
            </a>
        </div>
        <div class="item-6">
            <a href="#" class="card">
                <div class="thumb"
                    style="background-image: url(https://s3-us-west-2.amazonaws.com/s.cdpn.io/210284/flor.jpg);"></div>
                <article>
                    <h1>5 Inspirational Business Portraits and How to Make Your Own</h1>
                    <span>Marie Gardiner</span>
                </article>
            </a>
        </div>
        <div class="item-7">
            <a href="#" class="card">
                <div class="thumb"
                    style="background-image: url(https://s3-us-west-2.amazonaws.com/s.cdpn.io/210284/china.png);"></div>
                <article>
                    <h1>Notes From Behind the Firewall: The State of Web Design in China</h1>
                    <span>Kendra Schaefer</span>
                </article>
            </a>
        </div>
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
