<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>Signup Form</title>
    <!--- Custom CSS File --->
    <link rel="stylesheet" href="./css/auth.css" />
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
    <?php include 'php/connect.php';

session_start();
$isLoggedIn = isset($_SESSION['fullname']);
    
    ?>
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
    <!-- Signup Image -->

        <img src="./img/signup.png" class="imgesss" />
  

    <!-- PHP Signup Logic -->
    <?php
    include 'php/connect.php';
    $error_message = ''; // Initialize error message variable

    if (isset($_POST['done'])) {
        $_name = $_POST['fullname'];
        $_email = $_POST['email'];
        $_password = $_POST['password'];

        // Basic validation
        if (empty($_name) || empty($_email) || empty($_password)) {
            $error_message = 'All fields are required.';
        } else {
            $insertquery = "INSERT INTO users(fullname, email, password) VALUES('$_name', '$_email', '$_password')";
            $res = mysqli_query($con, $insertquery);

            if ($res) {
                $error_message = 'Registration successful.';
                //header("Location: login.php"); // Redirect to login page after successful registration
                //exit();
            } else {
                $error_message = 'Registration failed. Please try again.';
            }
        }
    }
    ?>

    <!-- Signup Form Section -->
    <section class="container mt-5">
        <header>Signup</header>
        <form action="" method="POST" class="form">
            <div class="input-box">
                <label>Full Name</label>
                <input type="text" name="fullname" placeholder="Enter full name" required>
            </div>

            <div class="input-box">
                <label>Email Address</label>
                <input type="email" name="email" placeholder="Enter email address" required>
            </div>

            <div class="input-box">
                <label>Password</label>
                <input type="password" name="password" placeholder="Enter password" required>
            </div>

            <?php if ($error_message): ?>
            <p id="message" style="text-align: center; color: red;"><?php echo $error_message; ?></p>
            <?php endif; ?>

            <div style="display: flex; justify-content: center;">
                <button type="submit" name="done">Submit</button>
            </div>

            <p style="text-align: center;">Already have an account? <a href="login.php" style="color: #000;">Login here</a></p>
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
