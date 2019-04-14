<?php
    session_start();
    if(!isset($_SESSION['loggedin'])){
        header('location: Signin.php');
    }

?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/fonts/font-awesome.min.css">
    <link rel="stylesheet" href="assets/fonts/ionicons.min.css">
    <link rel="stylesheet" href="assets/fonts/material-icons.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Titillium+Web:400,600,700">
    <link rel="stylesheet" href="assets/css/Animated-Scroll-Down-Mouse.css">
    <link rel="stylesheet" href="assets/css/Animated-Type-Heading-1.css">
    <link rel="stylesheet" href="assets/css/Animated-Type-Heading.css">
    <link rel="stylesheet" href="assets/css/Footer-Basic.css">
    <link rel="stylesheet" href="assets/css/Footer-Dark.css">
    <link rel="stylesheet" href="assets/css/Button-Change-Text-on-Hover.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.1.1/aos.css">
    <link rel="stylesheet" href="assets/css/News-Cards.css">
    <link rel="stylesheet" href="assets/css/ScrollStyle.css">
    <link rel="stylesheet" href="assets/css/styles.css">
    <link rel="stylesheet" href="assets/css/Xstyle.css">
    <script src="assets/js/jquery.min.js"></script>
    <link rel="stylesheet" href="memberShips/Dropdown.css">
           <style>



               .glass {
                   background-color: red;
                   width: 100%;
                   height: 661px;
                   position: absolute;
                   margin: 0px;
                   padding: 0px;
                   opacity: 0.8;
                   z-index: 10;
                   display: none;
               }

               .close {
                   position: relative;
                   float: right;
                   width: 100px;

               }

               .AJAX {
                   margin-top: 10%;


               }



        </style>
</head>

<body>
    <div style="height:5px;background-color:#ff0000;"></div>
    <?php
    if(isset($_SESSION['memberShip']))
    {
        if($_SESSION['memberShip']==0) {
            include "memberShips/User.html";
            include "memberShips/User.js";
        }else{
            include "memberShips/Admin.html";
            include "memberShips/Admin.js";
        }
    }
    else
    {
        include "memberShips/Guest.html";
    }
    ?>
    <div style="background-color:#b50707;margin-top:8px;">
        <h1 class="text-center" data-aos="zoom-in" id="startchange" style="color:rgb(255,255,255);padding-top:16px;padding-bottom:16px;font-family:'Titillium Web', sans-serif;">MAKE AN APPOINTMENT<br></h1>
    </div>
    <div style="margin-top:32px;">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h4 data-aos="zoom-in" style="color:rgb(255,0,0);"><strong>DONATION TYPE</strong><br></h4>
                </div>
            </div>
        </div>
    </div>
    <div style="margin-top:32px;">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-xl-3" data-aos="slide-right" data-aos-delay="150">
                    <div>
                        <div class="form-check"><input class="form-check-input" type="radio" id="formCheck-1"><label class="form-check-label" for="formCheck-1" style="font-size:24px;margin-bottom:16px;">Blood</label></div>
                        <div class="form-check"><input class="form-check-input" type="radio" id="formCheck-1"><label class="form-check-label" for="formCheck-1" style="font-size:24px;margin-bottom:15px;">Plasma</label></div>
                    </div>
                </div>
                <div class="col" data-aos="slide-left" data-aos-delay="150" style="background-color:#EEEEEE;border-radius:10px;">
                    <p style="font-family:'Alike Angular', serif;font-size:18px;"><strong>What is it?&nbsp;</strong><br>Blood collected straight from a donor, without anything taken out. After it's donated, we usually separate whole blood into red blood cells, plasma and platelets in our labs.<br><br><strong>How long does it take?&nbsp;</strong><br>15
                        minutes to donate, 45 minutes for the whole appointment.<br></p>
                </div>
            </div>
        </div>
    </div>
    <div>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <p data-aos="fade" data-aos-delay="200" style="font-size:24px;margin-top:16px;">A Whole Blood appointment can be made on or after today<br></p>
                </div>
            </div>
        </div>
    </div>
    <div style="margin-top:64px;">
        <div class="container">
            <div class="row">
                <div class="col-md-6"><a class="btn btn-dark btn-lg blackbtn" role="button" href="Home.php" data-aos="fade-right" data-aos-delay="500" style="width:40%;height:50px;"><strong>Back</strong></a></div>
                <div class="col-md-6"><a class="btn btn-danger btn-lg float-right redbtn" role="button" href="Appointment.php" data-aos="fade-right" data-aos-delay="500" style="width:40%;height:50px;"><strong>Continue</strong></a></div>
            </div>
        </div>
    </div>
    <?php
    include "memberShips/Fotter.html";
    ?>
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="assets/js/Animated-Type-Heading.js"></script>
    <script src="assets/js/bs-animation.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.1.1/aos.js"></script>
    <script src="assets/js/navbarScrolling.js"></script>
    

</body>

</html>