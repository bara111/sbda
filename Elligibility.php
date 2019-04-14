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
	<style>
		body{
		overflow-x:hidden;
		}

        .dropdown {

            position: relative;
            display: inline-block;
            filter: none;
        }

        .dropdown-content {
            display: none;
            position: absolute;
            background-color: #f9f9f9;
            min-width: 120px;
            box-shadow: 0px 8px 16px 0px rgba(0, 0, 0, 0.2);
            padding-left: 10px;
            z-index: 1;
            filter: none;
            right: 0;

        }


        .dropdown:hover .dropdown-content {
            display: block;
            filter: none;
        }


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
    <div data-bs-parallax-bg="true" style="height:776px;background-position:center;background-size:cover;background-image:url(assets/img/eyes.jpeg);">
        <?php
        if(isset($_SESSION['memberShip']))
        {
            $_SESSION['$memberShip']==0? include "memberShips/User.html":include "memberShips/Admin.html";
        }
        else
        {
            include "memberShips/Guest.html";
        }
        ?>
    <div class="container">
        <div class="row">
            <div class="col" style="margin-top:128px;"><img class="rounded-circle d-flex m-auto roundedIcon" src="assets/img/thumb-up (1).png" data-aos="fade-up-right" data-aos-duration="500" data-aos-once="true" id="startchange" style="width:128px;padding:16px;background-color:#e8112d;"></div>
        </div>
        <div class="row">
            <div class="col-12">				<div class="caption v-middle text-center">
					<h1 class="cd-headline clip">
			            <span class="blc">ELIGIBILITY | </span>
			            <span class="cd-words-wrapper">
			              <b class="is-visible">How it works.</b>
			              <b>Are You Eligable?.</b>
			              <b>Let's findout that :) .</b>
			            </span>
	          		</h1>
				</div></div>
        </div>
        <div class="row" style="margin-top:32px;">
            <div class="col-md-11 col-lg-8 col-xl-7 d-flex m-auto">
                <h3 class=" gsap text-center d-flex justify-content-center m-auto" data-aos="fade-up-left" data-aos-duration="1000" data-aos-once="true" style="color:rgb(255,255,255);"><br></h3>
            </div>
        </div>
        <div class="row" style="margin-top:32px;">
            <div class="col">
                <div class="d-flex m-auto containerX">
                    <div class="chevron"></div>
                    <div class="chevron"></div>
                    <div class="chevron"></div>
                </div><span class="d-flex justify-content-center textX" style="font-size:24px;margin-top:43px;margin-left:0;">Scroll down</span></div>
        </div>
    </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col" style="margin-top:48px;">
                <h1 class="d-flex justify-content-center" data-aos="zoom-in" data-aos-duration="700" data-aos-once="true" style="color:rgb(255,3,3);margin-top:32px;"><strong>CURRENT DONORS</strong><br></h1>
            </div>
        </div>
        <div class="row" style="margin-top:32px;">
            <div class="col-md-11 col-lg-11 col-xl-11 d-flex m-auto">
                <h3 class="text-center d-flex justify-content-center m-auto" data-aos="slide-right" data-aos-duration="1000" data-aos-once="true" style="color:rgb(0,0,0);">Your donations make an amazing difference to those people who receive them.<br></h3>
            </div>
        </div>
        <div class="row">
            <div class="col-xl-10 d-flex justify-content-center m-auto">
                <h6 class="text-center d-flex justify-content-center" data-aos="slide-left" data-aos-duration="1600" data-aos-once="true" style="margin-top:16px;color:rgb(0,0,0);">We know sometimes life can get in the way of donating. It doesn't matter how long ago your last donations was –&nbsp;we'd love you to come back and see us.<br></h6>
            </div>
        </div>
        <div class="row" style="margin-bottom:34px;">
            <div class="col-md-12 col-lg-12 col-xl-12 d-flex justify-content-center" style="margin-top:32px;">
                <div class="card-group">
                    <div class="card" data-aos="flip-left" data-aos-duration="2200" data-aos-delay="250" data-aos-once="true" style="border-radius:10px;box-shadow:2px 2px 25px 1px;margin:16px;"><img class="card-img-top w-100 d-block" src="assets/img/colors.jpeg">
                        <div class="card-body">
                            <h4 class="card-title"><strong>Check your eligibility</strong><br></h4>
                            <p class="card-text"><br><br>Find a donor centre that is nearest to your home or work.<br></p><a class="card-link text-uppercase text-danger d-flex justify-content-center" href="#"><br>Read FAQs<br><br></a></div>
                    </div>
                    <div class="card" data-aos="flip-up" data-aos-duration="2500" data-aos-delay="250" data-aos-once="true" style="border-radius:10px;margin:16px;box-shadow:2px 2px 25px 1px;"><img class="card-img-top w-100 d-block" src="assets/img/window.jpeg">
                        <div class="card-body">
                            <h4 class="card-title"><strong>Ask a question</strong><br></h4>
                            <p class="card-text"><br><br>Can't find an answer to a specific eligibility question?<br></p><a class="card-link text-uppercase text-danger d-flex justify-content-center" href="#"><br>Ask us a question<br><br></a></div>
                    </div>
                    <div class="card" data-aos="flip-right" data-aos-duration="2200" data-aos-delay="250" data-aos-once="true" style="border-radius:10px;margin:16px;box-shadow:2px 2px 25px 1px;"><img class="card-img-top w-100 d-block" src="assets/img/lost.jpeg">
                        <div class="card-body">
                            <h4 class="card-title"><strong>Find a donor centre</strong><br></h4>
                            <p class="card-text"><br><br>Find a donor centre that is nearest to your home or work.<br></p><a class="card-link text-uppercase text-danger d-flex justify-content-center" href="#"><br>Find a centre<br><br></a></div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div data-bs-parallax-bg="true" style="height:595px;background-image:url(assets/img/hands.jpeg);background-position:center;background-size:cover;">
        <div class="container">
            <div class="row">
                <div class="col" style="margin-top:48px;">
                    <h1 class="d-flex justify-content-center" data-aos="zoom-in" data-aos-duration="700" data-aos-once="true" style="color:rgb(255,3,3);margin-top:32px;"><strong>FREQUENTLY ASKED QUESTIONS</strong><br></h1>
                </div>
            </div>
            <div class="row" style="margin-top:32px;">
                <div class="col-md-11 col-lg-11 col-xl-11 d-flex m-auto">
                    <h5 class="text-center d-flex justify-content-center m-auto" data-aos="slide-up" data-aos-duration="1000" data-aos-once="true" style="color:rgb(255,255,255);"><br><strong>Health conditions, medication, lifestyle or recent travel can affect whether, and when, you can give blood.</strong><br><br><br></h5>
                </div>
            </div>
            <div class="row">
                <div class="col-xl-12 d-flex justify-content-center m-auto" style="margin-top:32px;">
                    <div class="card-group">
                        <div class="card" data-aos="flip-left" data-aos-duration="2200" data-aos-delay="250" data-aos-once="true" style="border-radius:10px;box-shadow:2px 2px 25px 1px;margin:16px;"><img class="card-img-top w-100 d-block">
                            <div class="card-body">
                                <h4 class="card-title">Eligibility search<br></h4>
                                <p class="card-text"><br>Want to check something specific?<br><br></p><a class="card-link text-uppercase text-danger d-flex justify-content-center" href="#"><br>Search here<br><br></a></div>
                        </div>
                        <div class="card" data-aos="flip-up" data-aos-duration="2500" data-aos-delay="250" data-aos-once="true" style="border-radius:10px;margin:16px;box-shadow:2px 2px 25px 1px;"><img class="card-img-top w-100 d-block">
                            <div class="card-body">
                                <h4 class="card-title">Read the full FAQ list<br></h4>
                                <p class="card-text"><br>Trouble finding your answer?<br><br></p><a class="card-link text-uppercase text-danger d-flex justify-content-center" href="#"><br>See out full faqs list<br><br></a></div>
                        </div>
                        <div class="card" data-aos="flip-right" data-aos-duration="2200" data-aos-delay="250" data-aos-once="true" style="border-radius:10px;margin:16px;box-shadow:2px 2px 25px 1px;"><img class="card-img-top w-100 d-block">
                            <div class="card-body">
                                <h4 class="card-title">Ask us a question<br></h4>
                                <p class="card-text" style="margin-top:10px;">Still can't find what you're looking for?<br><br></p><a class="card-link text-uppercase text-danger d-flex justify-content-center" href="#"><br>call 0597266408</a></div>
                        </div>
                    </div>
                </div>
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
        <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/1.20.4/TweenLite.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/1.20.4/plugins/CSSPlugin.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/1.20.4/plugins/TextPlugin.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/1.20.4/TweenMax.min.js"></script>




<script>
    
   
    TweenLite.to(".gsap", 4, {text:"ARE YOU 18-70 YEARS OLD, HEALTHY AND WEIGH OVER 50KG? YOU MAY BE ABLE TO GIVE BLOOD.", ease:Linear.easeNone});
    

    
    </script>
</body>

</html>