
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up Form</title>
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
</head>

<body id="startchange">
<?php
//if(isset($_SESSION['memberShip']))
//{
//    $_SESSION['$memberShip']==0? include "memberShips/User.html":include "memberShips/Admin.html";
//}
//else
//{
include "memberShips/Guest.html";
//}
//?>
       <div class="containerM">
        <form action="Register.php" method="POST">
            <div class="rowM">
                <h4 class="h4M">Account</h4>
                <div class="input-groupM input-group-iconM">
                    <input name="FullName" type="text" size="10" placeholder="Full Name">
                    <div class="input-iconM"><i class="fa fa-user"></i></div>
                </div>

                <div class="input-groupM input-group-iconM">
                    <input name="Email" type="email" placeholder="Email Address">
                    <div class="input-iconM"><i class="fa fa-envelope"></i></div>
                </div>

                <div class="input-groupM input-group-iconM">
                    <input name="Password" type="password" placeholder="Password">
                    <div class="input-iconM"><i class="fa fa-key"></i></div>
                </div>

            </div>



            <div class="rowM">
                <div class="col-halfM">
                    <h4 class="h4M">Date of Birth</h4>

                    <div class="input-groupM">

                        <input name="Birthdate" type="date">

                    </div>
                </div>


                <div class="col-halfM">
                    <h4 class="h4M">Gender</h4>
                    <div class="input-groupM">
                        <input type="radio" name="Gender" value="male" id="gender-male">
                        <label for="gender-male">Male</label>
                        <input type="radio" name="Gender" value="female" id="gender-female">
                        <label for="gender-female">Female</label>
                    </div>
                </div>
            </div>


            <div class="rowM">
                <h4 class="h4M">Details</h4>

                <div class="input-groupM input-group-iconM">
                    <input name="PhoneNumber" type="text" size="10" placeholder="Mobile Number">
                    <div class="input-iconM"><i class="fa fa-user"></i></div>
                </div>

                <div class="col-halfM">
                    <div class="input-groupM input-group-iconM">
                        <input name="Weight" type="number" placeholder="Weight" min="50" max="170">
                        <div class="input-iconM"><i class="fa fa-user"></i></div>
                    </div>
                </div>

                <div class="col-halfM">
                    <div class="input-groupM input-group-iconM">
                        <input name="height" type="number" placeholder="height" min="150" max="220">
                        <div class="input-iconM"><i class="fa fa-user"></i></div>
                    </div>
                </div>

                <div class="col-halfM">
                   <h4 class="h4M">City</h4>
                    <div class="input-groupM">

                        <input name="City" type="text" placeholder="City">
                    </div>
                </div>

                <div class="col-halfM">
                   <h4 class="h4M">Last Donation Date</h4>
                    <div class="input-groupM">

                        <input name="LDD" type="date" placeholder="Last Donation Date">
                    </div>
                </div>

            </div>

<div class="rowM">
            <div class="s1">
                <h4 class="h4M">Blood Group</h4>
<div class="col-halfM">
                <select name="BloodGroup">
        <option value="A+">A+
        </option><option value="A-">A-
        </option><option value="B+">B+
        </option><option value="B-">B-
        </option><option value="AB+">AB+
        </option><option value="AB-">AB-
        </option><option value="O-">O-
      </option></select>
                           </div>

                           <div class="col-halfM">
                    <div class="input-groupM">

                        <input name="diseases" type="text" placeholder="diseases">
                    </div>
                </div>
            </div>
               
</div>

            <div class="s2"></div>
            <div class="rowM">
                <br>
                <h4 class="h4M">Terms and Conditions</h4>
                <div class="input-groupM">
                    <input type="checkbox" id="terms">
                    <label for="terms">I accept the terms and conditions for signing up to this service, and hereby confirm I have read the privacy policy.</label>
                </div>
            </div>
            <br>
            <input name="Register" id="Register" type="submit" class="registerButton" value="Register">
        </form>
    </div>
    <script src="http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>



    <script src="js/index1.js"></script>

    <script>
        var acceptTerms = document.getElementById("terms");
        var registerBtn = document.getElementById("Register");
        document.getElementById("Register").addEventListener("click", function(event) {
            if(!acceptTerms.checked){
                alert("Oops are you sure you've done everything ?!!");
            event.preventDefault();
            }
            // while(!verificationCode())
            //     event.preventDefault();

        });

        // function verificationCode(){
        //     var person = prompt("Please enter the verification code which sent to your mobile:");
        //     if (person == null || person == "") {
        //         alert("Wrong Verification Code");
        //     } else {
        //         txt = "Hello " + person + "! How are you today?";
        //     }

        }
        // function makeid() {
        //     var text = "";
        //     var possible = "0123456789ABCDEFGHIJK0123456789LMNOPQRSTUVWXYZ0123456789";
        //
        //     for (var i = 0; i < 6; i++)
        //         text += possible.charAt(Math.floor(Math.random() * possible.length));
        //
        //     return text;
        // }
    </script>
<?php
include_once "memberShips/Fotter.html";
?>
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="assets/js/Animated-Type-Heading.js"></script>
    <script src="assets/js/bs-animation.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.1.1/aos.js"></script>
    <script src="assets/js/navbarScrolling.js"></script>
</body>

</html>