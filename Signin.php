<?php
session_start();
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign in Form</title>
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

<body>
<?php
include "memberShips/Guest.html";
?>
<div class="containerM">
    <center>
        <div class="rowM">
            <iframe src="logo.html" style="width: 150px;height: 150px;border: 0px;margin-top: 50px;margin-bottom: 32px"></iframe>
        </div>

    </center>
    <form action="Signin.php" method="POST">
        <div class="rowM">
            <h4 class="h4M">Sign in</h4>


            <div class="input-groupM input-group-iconM">
                <input name="Email" type="email" placeholder="Email Address">
                <div class="input-iconM"><i class="fa fa-envelope"></i></div>
            </div>
            <br>
            <div class="input-groupM input-group-iconM">
                <input name="Password" type="password" placeholder="Password">
                <div class="input-iconM"><i class="fa fa-key"></i></div>
            </div>

        </div>
        <br><br>

        <br>
        <input type="submit" class="registerButton" value="Sign in">

        <!--           PHP Login Action-->
        <?php

        include_once 'db-connect.php';
        $error="";
        $conn=new DbConnect();
        $conn=$conn->getDb();
        if(empty($_POST['Email'])||empty($_POST['Password']))
        {
        echo "<h3 style='color:red'>Invalid Details!</h3>";
        }
        else{
            $email=$_POST['Email'];
            $pass=$_POST['Password'];
            // To protect MySQL injection for Security purpose
            $email = stripslashes($email);
            $pass = stripslashes($pass);

            $stmt="select * from SBDA_Accounts WHERE Email='$email' AND Password='$pass'";
            $result=mysqli_query($conn,$stmt);
            $row = mysqli_fetch_array($result);
            if(mysqli_num_rows($result)==1 && $row['Valid']==1){
                $_SESSION['user_email']=$email; // Initializing Session
                $_SESSION['loggedin']=true;

                $_SESSION['Username']=$row['Username'];
                $_SESSION['memberShip']=$row['MemberShip'];
                echo'<script> window.location="Home.php"; </script> ';
//        header("location: Home.php"); // Redirecting To Other Page
            }
            else if (mysqli_num_rows($result)==1 && $row['Valid']==0){
                $_SESSION['Username']=$row['Username'];
                $_SESSION['user_email']=$email; // Initializing Session
                $_SESSION['memberShip']=$row['MemberShip'];

                $code=generateCode(6);
                $_SESSION['ValidationCode']=$code;
                mail($row['Email'],"SBDA Verification Code",$code);
                echo'<script> window.location="VerificationPage.php"; </script> ';
            }
            else{
                echo "<h3 style='color:red'>Invalid Details!</h3>";
            }
            mysqli_close($conn);
        }

        function generateCode($length = 6) {
            $characters = '0123456789ABCDEFGHIJKLMN0123456789OPQRSTUVWXYZ0123456789';
            $charactersLength = strlen($characters);
            $randomString = '';
            for ($i = 0; $i < $length; $i++) {
                $randomString .= $characters[rand(0, $charactersLength - 1)];
            }
            return $randomString;
        }
        ?>
    </form>
</div>
<script src="http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>



<script src="js/index1.js"></script>
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