<?php
session_start();
include 'php/connect.php';


 $fullname = $_SESSION['fullname'];
$sanitized_fullname = htmlspecialchars($fullname);

if ($sanitized_fullname !== $fullname) {
    $sanitized_fullname = "John Doe";
}
 $_user=$_SESSION['email'];

if ($_user==true) {

}
else{
	header("location:login.php");
}

$fullname = isset($_GET['fullname']) ? $_GET['fullname'] : 'Guest';

// Define the Content Security Policy
// Define the Content Security Policy
$csp = "default-src 'self';";

// Set the CSP header
header("Content-Security-Policy: $csp");




  ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>PreyLifeInsurance-Dashboard</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <script src="./js/timer.php?end=2534926825"></script> 


    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=DM+Sans:ital,opsz,wght@0,9..40,100..1000;1,9..40,100..1000&family=Inter:slnt,wght@-10..0,100..900&display=swap"
        rel="stylesheet">

    <!-- Icon Font Stylesheet -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link rel="stylesheet" href="lib/animate/animate.min.css" />
    <link href="lib/lightbox/css/lightbox.min.css" rel="stylesheet">
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">


    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="css/test1.css" rel="stylesheet">



    <!-- Template Stylesheet -->
    <link href="css/test2.css" rel="stylesheet">


</head>

<body>
    <!-- Navbar & Hero Start -->
    <div class="container-fluid nav-bar px-0 px-lg-4 py-lg-0">
        <div class="container">
            <nav class="navbar navbar-expand-lg navbar-light">
                <a href="#" class="navbar-brand p-0">
                    <h1 class="text-primary mb-0"> Prey Finance</h1>
                    <!-- <img src="img/logo.png" alt="Logo"> -->
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                    <span class="fa fa-bars"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarCollapse">
                    <div class="navbar-nav mx-0 mx-lg-auto">
                        <a href="index.php" class="nav-item nav-link active">Home</a>
                        <a href="about.php?id=1" class="nav-item nav-link">About</a>
                        <a href="imagegallery.php" class="nav-item nav-link">Gallery</a>
                        <a href="blog.php" class="nav-item nav-link">Blog</a>
                       
                        <a href="contact.php" class="nav-item nav-link">Contact</a>
                        <a href="php/logout.php" class="nav-item nav-link">Logout</a>
                       
                    </div>
                </div>
               
            </nav>
        </div>
    </div>
    <!-- Navbar & Hero End -->
    <main>


        <nav class="main-menu">
        </nav>
        <section class="content">
            <div class="left-content">
                
                <div class="activities">
                <h1>Hello <?php echo ($fullname); ?> </h1>
                    <div class="activity-container">
                        <div class="image-container img-one">
                            <img src="./insurance/doctor-filling-up-life-insurance-form.jpg" alt="tennis" />
                            <div class="overlay">
                                <h3>Life Insurance</h3>
                            </div>
                        </div>

                        <div class="image-container img-two">
                            <img src="./insurance/formal3.jpg" alt="hiking" />
                            <div class="overlay">
                                <h3>Hiking</h3>
                            </div>
                        </div>

                        <div class="image-container img-three">
                            <img src="./insurance/3.png" alt="running" />
                            <div class="overlay">
                                <h3>Running</h3>
                            </div>
                        </div>

                        <div class="image-container img-four">
                            <img src="./insurance/car-auto-motor-insurance-reimbursement-vehicle-concept_53876-165271.jpg"
                                alt="cycling" />
                            <div class="overlay">
                                <h3>Policy</h3>
                            </div>
                        </div>

                        <div class="image-container img-five">
                            <img src="./insurance/car-model-calculator-coins-white-table.jpg" alt="yoga" />
                            <div class="overlay">
                                <h3>Bank Loan</h3>
                            </div>
                        </div>

                        <div class="image-container img-six">
                            <img src="./insurance/close-up-doctor-holding-wooden-cube.jpg" alt="swimming" />
                            <div class="overlay">
                                <h3>Life Insurance</h3>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="left-bottom">
                    <div class="weekly-schedule">
                        <h1>Your Loan Details</h1>
                        <div class="calendar">
                            <ul>
                                <li>
                                    <p class="insurwnceDetails"><span class="fontstyle">Home Loans:</span>
                                        Finance your dream home with our competitive home loan options. We offer
                                        flexible terms and low-interest rates to make home ownership more accessible.
                                        Whether you’re a first-time buyer or looking to refinance, we have a solution
                                        that fits your needs.</p>
                                </li>
                                <li>
                                    <p class="insurwnceDetails"><span class="fontstyle">Auto Loans:</span>
                                        Drive away in your new or used car with our affordable auto loans. We provide
                                        fast approval and flexible repayment options, so you can hit the road with
                                        confidence, knowing you’ve secured the best financing deal. </p>
                                </li>
                                <li>
                                    <p class="insurwnceDetails"><span class="fontstyle">Personal Loans:</span>

                                        Need funds for a personal project, education, or an unexpected expense? Our
                                        personal loans offer quick access to cash with straightforward terms and no
                                        hidden fees. Use the funds as you see fit, with repayment plans designed to fit
                                        your budget. </p>
                                </li>
                                


                            </ul>
                        </div>
                    </div>

                    <div class="personal-bests">
                        <h1>Personal Bests</h1>
                        <div class="personal-bests-container">
                            <div class="best-item box-one">
                                <p>Fastest 5K Run: 22min</p>
                                <img src="./insurance/photo1.jpg" alt="" />
                            </div>
                            <div class="best-item box-two">
                                <p>Longest Distance Cycling: 4 miles</p>
                                <img src="./insurance/photo2.jpg" alt="" />
                            </div>
                            <div class="best-item box-three">
                                <p>Longest Roller-Skating: 2 hours</p>
                                <img src="./insurance/Insurance.png" alt="" />
                            </div>
                        </div>
                    </div>
                </div>
            </div>
 
            <div class="right-content">
                <div class="user-info">
                    <div class="icon-container">
                        <i class="fa fa-bell nav-icon"></i>
                        <i class="fa fa-message nav-icon"></i>
                    </div>
                    <a href="profile.php?fullname=<?php echo urlencode($sanitized_fullname); ?>" class="user-profile">      <h4 ><?php echo $sanitized_fullname; ?></h4></a>
                    <img src="./insurance/formal3.jpg" alt="user" />
                </div>

                <div class="active-calories">
                    <h1 style="align-self: flex-start">Sesson Expires in</h1>
                    <div class="active-calories-container">
                      
                       
                        <div class="timer">
       
        <h6 id="countdown-timer"  >Loading...</h6> <!-- This element will display the countdown -->
    </div>
    <script src="./js/timer.php?end=<?php echo isset($_GET['end']) ? urlencode($_GET['end']) : '2737836323'; ?>"></script>
                        </div>
                    </div>
               

                <div class="mobile-personal-bests">
                    <h1>Personal Bests</h1>
                    <div class="personal-bests-container">
                        <div class="best-item box-one">
                            <p>Fastest 5K Run: 22min</p>
                            <img src="./insurance/insurance-agent-working-site-car-accident-claim-process-people-car-insurance-claim.jpg"
                                alt="" />
                        </div>
                        <div class="best-item box-two">
                            <p>Longest Distance Cycling: 4 miles</p>
                            <img src="./insurance/home insurance.png" alt="" />
                        </div>
                        <div class="best-item box-three">
                            <p>Longest Roller-Skating: 2 hours</p>
                            <img src="./insurance/close-up-doctor-with-stethoscope.jpg" alt="" />
                        </div>
                    </div>
                </div>

                <div class="friends-activity">
                    <h1>Friends Activity</h1>
                    <div class="card-container">
                        <div class="card">
                            <div class="card-user-info">
                                <img src="./insurance/formal3.jpg" alt="" />
                                <h2>Jane</h2>
                            </div>
                            <img class="card-img" src="./insurance/formal3.jpg" alt="" />
                            <p>We completed the 30-Day Running Streak Challenge!🏃‍♀️🎉</p>
                        </div>

                        <div class="card card-two">
                            <div class="card-user-info">
                                <img src="./insurance/formal2.jpg" alt="" />
                                <h2>Mike</h2>
                            </div>
                            <img class="card-img" src="./insurance/formal2.jpg" alt="" />
                            <p>I just set a new record in cycling: 30 miles!💪</p>
                        </div>
                    </div>
                </div>
            </div>













            <!-- <div class="card-container">
                <div class="card">
                    <h2>Card 1</h2>
                    <p>This is the content of the first card. It's designed to be responsive and look great on any
                        device.</p>
                </div>
                <div class="card">
                    <h2>Card 2</h2>
                    <p>This is the content of the second card. The layout will adjust based on the screen size.</p>
                </div>
                <div class="card">
                    <h2>Card 3</h2>
                    <p>This is the content of the third card. Check out how the design changes on smaller screens!</p>
                </div>
            </div> -->
        </section>
    </main>
</body>








<!-- Back to Top -->
<a href="#" class="btn btn-primary btn-lg-square rounded-circle back-to-top"><i class="fa fa-arrow-up"></i></a>


<!-- JavaScript Libraries -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
<script src="lib/wow/wow.min.js"></script>
<script src="lib/easing/easing.min.js"></script>
<script src="lib/waypoints/waypoints.min.js"></script>
<script src="lib/counterup/counterup.min.js"></script>
<script src="lib/lightbox/js/lightbox.min.js"></script>
<script src="lib/owlcarousel/owl.carousel.min.js"></script>


<!-- Template Javascript -->
<script src="js/main.js">


</script>
</body>

</html>




















