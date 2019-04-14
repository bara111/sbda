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
    <div data-bs-parallax-bg="true" style="height:776px;background-position:center;background-size:cover;background-image:url(assets/img/lamp.jpg);">
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
            <div class="col" style="margin-top:128px;"><img class="rounded-circle d-flex m-auto roundedIcon" src="assets/img/brain-and-head (2).png" data-aos="fade-up-right" data-aos-duration="500" data-aos-once="true" id="startchange" style="width:128px;padding:12px;background-color:#e8112d;"></div>
        </div>
        <div class="row">
            <div class="col-12">				<div class="caption v-middle text-center">
					<h1 class="cd-headline clip">
			            <span class="blc">Learn | </span>
			            <span class="cd-words-wrapper">
			              <b class="is-visible">How it works.</b>
			              <b>How blood is used.</b>
			              <b>It's very simple :) .</b>
			            </span>
	          		</h1>
				</div></div>
        </div>
        <div class="row" style="margin-top:32px;">
            <div class="col-md-11 col-lg-8 col-xl-7 d-flex m-auto">
                <h3 class=" gsap text-center d-flex justify-content-center m-auto" data-aos="fade-up-left" data-aos-duration="1000" data-aos-once="true" style="color:rgb(255,255,255);"> <br></h3>
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
                <h1 class="d-flex justify-content-center" data-aos="zoom-in" data-aos-duration="700" data-aos-once="true" style="color:rgb(255,3,3);margin-top:32px;"><strong class="gsapHOW"></strong><br></h1>
            </div>
        </div>
        <div class="row" style="margin-top:32px;">
            <div class="col-md-11 col-lg-8 col-xl-7 d-flex m-auto">
                <h3 class="text-center d-flex justify-content-center m-auto" data-aos="slide-right" data-aos-duration="1000" data-aos-once="true" style="color:rgb(0,0,0);">ONE THIRD OF BLOOD DONATIONS&nbsp;HELP TREAT PEOPLE WITH CANCER<br></h3>
            </div>
        </div>
        <div class="row">
            <div class="col">
                <h6 class="d-flex justify-content-center" data-aos="slide-left" data-aos-duration="1600" data-aos-once="true" style="margin-top:16px;color:rgb(0,0,0);">Blood is surprisingly versatile. The blood you donate can be made into 22 different medical treatments.<br></h6>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12 col-lg-12 col-xl-12 d-flex justify-content-center" style="margin-top:32px;"><img class="img-fluid" src="assets/img/learn.gif" data-aos="flip-down" data-aos-duration="2000" data-aos-once="true"></div>
        </div>
    </div>
    <div data-bs-parallax-bg="true" style="height:883px;background-image:url(assets/img/balloon.jpg);background-position:center;background-size:cover;">
        <div class="container">
            <div class="row">
                <div class="col" style="margin-top:48px;">
                    <h1 class="d-flex justify-content-center" data-aos="zoom-in" data-aos-duration="700" data-aos-once="true" style="color:rgb(255,3,3);margin-top:32px;"><strong>HOSPITALS IN NABLUS</strong><br></h1>
                </div>
            </div>
            <div class="row" style="margin-top:32px;">
                <div class="col-md-11 col-lg-11 col-xl-11 d-flex m-auto">
                    <h3 class=" gsap2 text-center d-flex justify-content-center m-auto" data-aos="slide-up" data-aos-duration="1000" data-aos-once="true" style="color:rgb(255,255,255);">
                        <br></h3>
                </div>
            </div>
            <div class="row">
                <div class="col d-flex justify-content-center m-auto" style="margin-top:32px;">
                    <div class="carousel slide" data-ride="carousel" data-aos="flip-up" data-aos-duration="1600" data-aos-once="true" id="carousel-1" style="width:850px;margin-top:32px;">
                        <div class="carousel-inner" role="listbox">
                            <div class="carousel-item active"><img class="w-100 d-block" src="assets/img/14omS.jpg" alt="Slide Image" style="width:500px;"></div>
                            <div class="carousel-item"><img class="w-100 d-block" src="assets/img/9998786536.jpg" alt="Slide Image"></div>
                            <div class="carousel-item"><img class="w-100 d-block" src="assets/img/fba009bf-1850-4730-9e33-d0c379a3f6dc.jpg" alt="Slide Image"></div>
                        </div>
                        <div><a class="carousel-control-prev" href="#carousel-1" role="button" data-slide="prev"><span class="carousel-control-prev-icon"></span><span class="sr-only">Previous</span></a><a class="carousel-control-next" href="#carousel-1" role="button"
                                data-slide="next"><span class="carousel-control-next-icon" style="color:rgba(255,255,255,0);background-color:rgba(89,89,89,0);"></span><span class="sr-only">Next</span></a></div>
                        <ol class="carousel-indicators">
                            <li data-target="#carousel-1" data-slide-to="0" class="active"></li>
                            <li data-target="#carousel-1" data-slide-to="1"></li>
                            <li data-target="#carousel-1" data-slide-to="2"></li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container">

        <div class="row" style="margin-top:32px;">
            <div class="col-md-11 col-lg-11 col-xl-11 d-flex m-auto">
                <h3 class="text-center d-flex justify-content-center m-auto" data-aos="flip-up" data-aos-duration="1250" data-aos-once="true" style="color:rgb(255,255,255);">Crooooooooooosal<br></h3>
            </div>
        </div>
        <div class="row">
            <div class="col">
                <h1 class="d-flex justify-content-center" data-aos="zoom-in-left" data-aos-once="true" style="color:rgb(255,3,3);margin-top:32px;"><strong>Thinking of giving blood?</strong><br></h1>
            </div>
        </div>
<div class="row" style="margin-top:32px;">
    <div class="col" data-aos="zoom-in-up" data-aos-duration="2000"  data-aos-once="true">
        <figure class="snip1527">
            <div class="image"><img src="assets/img/light-bulb.jpg" height="400px" width="509px" alt="pr-sample23" /></div>
            <figcaption>
                <h3>Check your eligibility</h3>
                <p>Most people can donate blood, but some can&#39;t for health or lifestyle reasons.</p>
            </figcaption><a href="#"></a></figure>
    </div>
    <div class="col" data-aos="zoom-in-up" data-aos-duration="2000" data-aos-delay="200" data-aos-once="true">
        <figure class="snip1527">
            <div class="image"><img src="assets/img/touch.jpg" height="400px" width="509px" alt="pr-sample24" /></div>
            <figcaption>
                <h3>Make an appointment</h3>
                <p>Many of our blood donor centres are open after office hours and on weekends.</p>
            </figcaption><a href="#"></a></figure>
    </div>
    <div class="col" data-aos="zoom-in-up" data-aos-duration="2000" data-aos-delay="400" data-aos-once="true">
        <figure class="snip1527">
            <div class="image"><img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/331810/pr-sample24.jpg" alt="pr-sample24" /></div>
            <figcaption>
                <h3>Donate and help people</h3>
                <p>Our friendly specialist donor centre team will be with you throughout the process.</p>
            </figcaption><a href="#"></a></figure>
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
    
   
    TweenLite.to(".gsap", 4, {text:"IT ONLY TAKES AN HOUR TO DONATE BLOOD, BUT IT COULD CHANGE SOMEONE'S LIFE", ease:Linear.easeNone});
    TweenLite.to(".gsap2", 4, {text:"People of all walks of life need blood products. Some need it to get them through a serious event in their lives, like cancer or a difficult pregnancy. Others have medical conditions which mean they need blood products regularly to stay alive or be healthy.", ease:Linear.easeNone});
    

    
    </script>
</body>

</html>