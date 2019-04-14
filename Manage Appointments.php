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
</head>

<body>
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
    <h1 class="text-center" data-aos="zoom-in" data-aos-duration="900" id="startchange" style="color:rgb(255,255,255);padding-top:16px;padding-bottom:16px;font-family:'Titillium Web', sans-serif;">CURRENT SCHEDULED APPOINTMENTS<br></h1>
</div>
<div class="container" style="margin-top:32px;">
    <div class="row">
        <div class="col"><a class="btn btn-danger btn-lg float-right redbtn" href="Make An Appointment.php"  data-aos="fade-left" data-aos-duration="2000" style="width:300px;height:64px;box-shadow:0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);font-size:24px;padding-top: 12px;"><strong>Make An Apppointment</strong></a></div>
    </div>
</div>
<div>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1 data-aos="fade-right" data-aos-duration="2700" style="color:red;margin-bottom:16px;margin-top:32px;">Current Scheduled Appointments:<br></h1>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="table-responsive" data-aos="fade-up" data-aos-duration="2500">
                    <table class="table table-striped table-bordered table-hover">
                        <thead>
                        <tr>
                            <th><strong>Date</strong><br></th>
                            <th><strong>Time</strong><br></th>
                            <th>Location</th>
                        </tr>
                        </thead>
                        <tbody>

                        <?php
                        $conn=include_once "db-connect.php";
                        $conn=new DbConnect();
                        $conn=$conn->getDb();

                        if(isset($_SESSION['user_email']))
                            $email=$_SESSION['user_email'];
                        $sql = "SELECT * FROM Appointments where Email='$email' ";
                        $result = mysqli_query($conn,$sql);
                        $currentDate= date('Y-m-d')."";

                        $delay=0;
                        while ($row = mysqli_fetch_array($result)) {
                            if($row['Done']==1)
                                echo '<tr style="background-color:rgba(60, 179, 113, 0.6);" data-aos="slide-right"  data-aos-delay="$delay">';
                            else if($currentDate>$row['Date'])
                                echo '<tr style="background-color:rgba(255, 99, 71, 0.6);" data-aos="slide-right"  data-aos-delay="$delay">';
                            else
                                echo '<tr data-aos="slide-right"  data-aos-delay="$delay">';
                            echo "<td>" . $row['Date'] ."</td>";
                            echo "<td>" . $row['Time'] ."</td>";
                            echo "<td>" . $row['Location'] ."</td>";
                            echo "</tr>";
                            $delay+=100;
                        }

                        ?>

                        </tbody>
                    </table>
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


</body>

</html>