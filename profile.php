<?php
session_start(); // Start the session at the beginning of the script

// Check if the user is logged in by verifying the session variable
if (!isset($_SESSION['email'])) {
    // If the session variable is not set, redirect to the login page
    header("Location: login.php");
    exit();
}

// Retrieve the fullname from the session
$fullname = $_SESSION['fullname'];
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>PreyFinance - Financial Services Website Template</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicon -->
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
    <link href="css/style1.css" rel="stylesheet">

</head>

<body>
    <!-- Spinner Start -->
   
    <!-- Spinner End -->


    <!-- Navbar Start -->
    <div class="container-fluid fixed-top px-0 wow fadeIn" data-wow-delay="0.1s">
        <div class="top-bar row gx-0 align-items-center d-none d-lg-flex">
            <div class="col-lg-6 px-5 text-start">
                <small></small>
                <small class="ms-4"></small>
            </div>
            <div class="col-lg-6 px-5 text-end">
                <small></small>
                <small class="ms-4"></small>
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
                    <a href="php/logout.php" class="nav-item nav-link active">Logout</a>

                    
                   
                  

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


    <div style="margin-top: 4rem;">
     
        <!-- End -->
     
        <!-- Sidenav -->
        <div class="sidenav">
            <div class="profile">
                <img src="https://imdezcode.files.wordpress.com/2020/02/imdezcode-logo.png" alt="" width="100"
                    height="100">

                <div class="name">
               <span> <?php echo ($_SESSION['fullname']); ?></span>

              
                </div>
                <div class="job">
               Welcome <script>document.write(decodeURIComponent(location.hash.substring(1)));</script>
            </span>
                </div>
            </div>

            <div class="sidenav-url">
                <div class="url">
                    <a href="#profile" class="active">Profile</a>
                    <hr align="center">
                </div>

                <div class="url">
                    <a href="dashboard.php" class="active">Dashboard</a>
                    <hr align="center">
                </div>


                <div class="url">
                    <a href="<?php echo htmlentities($_SERVER['PHP_SELF']) ?>?fullname=hacker" class="active">Settings</a>
                    <hr align="center">
                </div>
            </div>
        </div>
        <!-- End -->

        <!-- Main -->
        <div class="main">
            <h2>Profile</h2>
            <div class="card">
                <div class="card-body">
                    <i class="fa fa-pen fa-xs edit"></i>
                    <table>
                        <tbody>
                            <tr>
                                <td>Name</td>
                                <td>:</td>
                                <td>               <span><?php echo ($_SESSION['fullname']); ?></span></td>
                                <td></span>
                </div>
                <div class="job">
                <span><?php if(isset($_GET['fullname'])){?>
            <script>
                var $a="<?php echo $_GET["fullname"]; ?>";
                </script>
                <?php } ?></td>
                            </tr>
                            <tr>
                                <td>Email</td>
                                <td>:</td>
                                <td><?php echo $_SESSION["email"]; ?></td>
                            </tr>
                            <tr>
                                <td>Address</td>
                                <td>:</td>
                                <td>Bali, Indonesia</td>
                            </tr>
                            <tr>
                                <td>Hobbies</td>
                                <td>:</td>
                                <td>Diving, Reading Book</td>
                            </tr>
                            <tr>
                                <td>Job</td>
                                <td>:</td>
                                <td>Web Developer</td>
                            </tr>
                            <tr>
                                <td>Skill</td>
                                <td>:</td>
                                <td>PHP, HTML, CSS, Java</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>


        </div>
    </div>

    <!-- End -->


    <!-- Back to Top -->

            <div id="user-info"></div>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        fetch('php/data.php')
            .then(response => response.json())
            .then(data => {
                console.log(data);
                
                console.log("api hit"); // For debugging, check the console
                const userInfo = `Fullname: ${data.fullname}, Phone: ${data.phonno}`;
             
            })
            .catch(error => console.error('Error fetching data:', error));
    });
</script>


    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="lib/wow/wow.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/waypoints/waypoints.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>
    <script src="lib/counterup/counterup.min.js"></script>

    <!-- Template Javascript -->
    <script src="js/main.js">




    </script>
</body>

</html>