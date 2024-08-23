<?php
include 'php/connect.php';
 session_start();
 $_user=$_SESSION['email'];

if ($_user==true) {

}
else{
	header("location:login.php");
}





  ?>
  <link rel="stylesheet" type="text/css" href="style.css">
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" type="text/css" href="style2.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css" type="text/css"/>
  <link href="https://fonts.googleapis.com/css?family=Vesper+Libre&display=swap" rel="stylesheet">
  <!-- Latest compiled and minified CSS -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">





<head>
  <title>Welcome</title>
  <meta charset="utf-8">
<link href="https://fonts.googleapis.com/css2?family=Karla&family=Open+Sans+Condensed:wght@300&display=swap" rel="stylesheet">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
  <style>
  /* Make the image fully responsive */
  .carousel-inner img {
    width: 100%;
    height: 100%;
  }

  body{
    font-family: 'Karla', sans-serif;


  }

  #progressg{
  background: #BF0F8F;
background: -moz-linear-gradient(left, #BF0F8F 0%, #7726A4 50%, #C563B7 100%);
background: -webkit-linear-gradient(left, #BF0F8F 0%, #7726A4 50%, #C563B7 100%);
background: linear-gradient(to right, #BF0F8F 0%, #7726A4 50%, #C563B7 100%);
position: relative;
width: 100%;
height:auto;
color: #AAA9A9;
}
#trainers{
  background: #1E2123;


  position: relative;
  height: 800px;
  width: 100%;
}
h1{
            font-size:35px;
            text-align:center;
            color: #AAA9A9;
            margin-top:5px;

        }
        .profile-card{

            margin-bottom:10px;
        }
        .profile-card .profile-img{
            position: relative;
            overflow: hidden;
        }
        .profile-card .profile-img::after{
            content:"";
            border: 1px solid #fff;
            position:absolute;
            width:100%;
            height:100%;
            left:0;
            top:0;
            opacity:0;
            transform: scale(1,1);
            transition: all 0.50s linear 0s;
        }
        .profile-card:hover .profile-img:after{
            transform:scale(0.9,0.9);
            opacity:1;
        }
        .profile-card .profile-img img{
            width:100%;
            height:auto;
            transform:scale(1,1);
            transition: all 0.50s linear 0s;
        }
        .profile-card:hover img{
            transform:scale(1.2,1.2);
        }
        .profile-card .profile-img .over-layer{
            position: absolute;
            width:100%;
            height:100%;
            top:0;
            left:0;
            opacity:0;
            padding:10% 9%;
            text-align:left;
            background:rgba(255,255,255,0.4);
            transform: scale(0,0);
            transition: all 0.50s ease 0.5s;
        }
        .profile-card:hover .over-layer{
            opacity:1;
            transform: scale(0.9,0.9);
        }
        .profile-card .profile-img .over-layer p{
            font-size:14px;
            color:black;
            text-transform:capitalize;
        }
        .profile-card .profile-img .over-layer-one .title > span{
            display: block;
            margin:5px 0;
        }
        .profile-card .profile-content{
            background:#FF3E78;
            text-align:center;
            padding:15px;
        }
        .profile-card .profile-content .title{
            font-size:20px;
            color:#fff;
            margin:0 0 10px;
            text-transform: uppercase;
        }
        .profile-card .profile-content .title > span{
            font-size:16px;
            color:#FFFFff;
            margin:0 7px;
            text-transform: capitalize;
        }
        .profile-card .profile-content .social-link{
            margin:0;
            padding:0;
        }
        .profile-card .profile-content .social-link li{
            display:inline-block;
            list-style:none;
            margin:0 5px;
        }
        .profile-card .profile-content .social-link li a{
            display:inline-block;
            width:30px;
            height:30px;
            color:#FF3E78;
            line-height:30px;
            text-align: center;
            background: rgba(255,255,255,0.5);
        }
        .profile-card .profile-content .social-link li a:hover{
            text-decoration:none;
        }
        html{
          scroll-behavior:smooth;
        }


  </style>
</head>








   <body>
   <h1>Welcome, <?php echo ($_SESSION['fullname']); ?>!</h1>
   <button href="php/logout.php">logout</button>

    </body>

    </html>
