<?php
    session_start();
    include 'php/connect.php';
    $isLoggedIn = isset($_SESSION['fullname']);
    ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/auth.css">
    <title>Forgot Password</title>
    <link href="img/favicon.ico" rel="icon">
   
    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Jost:wght@500;600;700&family=Open+Sans:wght@400;500&display=swap" rel="stylesheet">

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="lib/animate/animate.min.css" rel="stylesheet">
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="css/style.css" rel="stylesheet">
  
</head>
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
    <!-- Navbar End -->

    <!-- Forgot Password Image -->
    <img src="./img/signin.png" class="imgesss">

    <?php
    $error_message = ''; // Initialize error message variable
    $success_message = ''; // Initialize success message variable

    if (isset($_GET['submit'])) {
        if (empty($_GET['module'])) {
            $error_message = "Please enter your email.";
        } else {
            $module = $_GET['module'];
            // Simulate email sending functionality
            $success_message = "Email sent to: $module";
        }
    }
    ?>

    <!-- Forgot Password Form Section -->
    <section class="container">
        <header>Forgot Password</header>
        <form action="" method="GET" class="form">
            <input type="hidden" name="action" value="forgotpass">

            <div class="input-box">
                <label>Email Address</label>
                <input type="email" name="module" placeholder="Enter email address" required>
            </div>

            <?php if ($error_message): ?>
            <p id="message" style="text-align: center; color: red;" class="mt-5"><?php echo $error_message; ?></p>
            <?php endif; ?>

            <?php if ($success_message): ?>
            <p id="message" style="text-align: center; color: green;" class="mt-5"><?php echo $success_message; ?></p>
            <?php endif; ?>

            <div style="display: flex; justify-content: center;">
                <button type="submit" name="submit">Forgot</button>
            </div>
        </form>
    </section>

    <!-- Scripts for Bootstrap and Wow Animations -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="lib/wow/wow.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>
    <script src="js/bootstrap.bundle.min.js"></script>
    <script src="js/main.js"></script>
</body>
</html>
