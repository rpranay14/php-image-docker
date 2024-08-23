<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login Form</title>
    <link rel="stylesheet" href="./css/auth.css">
    <link href="img/favicon.ico" rel="icon">
   
   <!-- Google Web Fonts -->
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

   <!-- Template Stylesheet -->
   <link href="css/style.css" rel="stylesheet">
   <link href="css/auth.css" rel="stylesheet">
    <?php
session_start();

include 'php/connect.php';




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
                    <a href="Login.php" class="nav-item nav-link">Signin</a>
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
      


   
    
 

        <?php
session_start();
include 'php/connect.php'; // Assuming this file includes database connection

$error_message = ''; // Variable to store error messages

if (isset($_POST['submit'])) {
    $email = $_POST['email'];
    $password = $_POST['password'];

    // Check if email and password are not empty
    if (empty($email) || empty($password)) {
        $error_message = "Email and password cannot be empty.";
    } else {
        // Validate and sanitize inputs
        $email = mysqli_real_escape_string($con, $email);
        $password = mysqli_real_escape_string($con, $password);

        // Check for specific SQL injection payloads
        $payloads = ["' or '1'='1'", "' or ''='", "' or 1=1--", "' or 1=1#", "' or 1=1/*", "1' OR '1'='1'"];
        $payload_detected = false;

        foreach ($payloads as $payload) {
            if (strpos($email, $payload) !== false || strpos($password, $payload) !== false) {
                $payload_detected = true;
                break;
            }
        }

        if ($payload_detected) {
            $error_message = "hackersprey{Iron_Templar}"; // Respond with "Hacked" message if payload detected
        } else {
            // Query to fetch user data
            $query = "SELECT * FROM users WHERE email='$email' && password='$password'";
            $data = mysqli_query($con, $query);

            if (!$data) {
                $error_message = "Database query failed."; // Handle query failure gracefully
            } else {
                $total = mysqli_num_rows($data);

                if ($total == 1) {
                    $row = mysqli_fetch_assoc($data);
                    $_SESSION['email'] = $email;
                    $_SESSION['fullname'] = $row['fullname']; // Store fullname in session
                    header("location: dashboard.php");
                    exit();
                } else {
                    $error_message = "Incorrect email or password.";
                }
            }
        }
    }
}
?>


<img src="./img/signin.png" class="imgesss">

    <section class="container">
        <header>Login</header>
        <div class="row">
        <form action="" method="POST" class="form" >
            <div class="input-box">
                <label>Email Address</label>
                <input type="name" name="email" placeholder="Enter email address" >
            </div>

            <div class="input-box">
                <label>Password</label>
                <input type="password" name="password" placeholder="Enter password" >
            </div>
           
            <div style="display: flex; justify-content: center;">
                <button type="submit" name="submit" >Login</button>
            </div>
           <div class="containers mt-5">
<div class="row">
<div class="col-lg-6 col-md-6"><p style="text-align: center;"> <a href="forgot.php" style="color: #000;">Forgot Password</a></p></div>
<div class="col-lg-6 col-md-6"><p style="text-align: center;"> <a href="register.php" style="color: #000;">Register here</a></p></div>
</div>

           </div>
            

        <div class="containers" >
            <div class="row justify-content-center" id="errordiv">
                <div class="col-lg-10 col-md-10 text-center offset-5 ml-5">
            <?php if ($error_message): ?>
            <p id="message" style="color:red"><?php echo $error_message; ?></p>
            <?php endif; ?>
            </div>
</div>
            </div>
        </div>
        </form>
        </div>
    </section>
          
</body>
</html>
