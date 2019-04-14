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
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
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
        <h1 class="text-center" data-aos="zoom-in" id="startchange" style="color:rgb(255,255,255);padding-top:16px;padding-bottom:16px;font-family:'Titillium Web', sans-serif;">APPOINTMENT RESERVATION<br></h1>
    </div>
<form action="reserveAppointment.php" method="post">
    <div class="container" style="margin-top:32px;">
        <div class="row">
            <div class="col">
                <h1 style="color:#e5053a;">Appointment Date&nbsp;</h1>
            </div>
        </div>
        <div class="row" style="margin-top:8px;">
            <div class="col"><input class="form-control-lg" value="2015-04-29" name="date" id="date" type="date" required=""></div>
        </div>
        <div class="row" style="margin-top:32px;">
            <div class="col">
                <h1 style="color:#e5053a;">Appointment Time</h1>
            </div>
        </div>
        <div class="row" style="margin-top:8px;">
            <div class="col">
                <div id="dateResult"></div>


            </div>
        </div>


        <div class="row" style="margin-top:32px;">
            <div class="col">
                <h1 style="color:#e5053a;">Appointment Location</h1>
            </div>
        </div>
        <div class="row">
            <div class="col">
            <?php
                 include_once "db-connect.php";
                 $conn=new DbConnect();
                 $conn=$conn->getDb();

                $sql = "SELECT Name FROM Hospitals";
                $result = mysqli_query($conn,$sql);

                echo "<select class='form-control-lg' name='Hospital'>";
                while ($row = mysqli_fetch_array($result)) {
                    echo "<option value='" . $row['Name'] ."'>" . $row['Name'] ."</option>";
                }
                echo "</select>";
            ?>
            </div>
        </div>

        <div class="row" style="margin-top:64px;">
            <div class="col"><a class="btn btn-dark btn-lg blackbtn" role="button" href="Make An Appointment.php" data-aos="fade-right" data-aos-delay="500" style="width:40%;height:50px;"><strong>Cancel</strong></a></div>
            <div class="col"><button class="btn btn-danger btn-lg float-right redbtn" type="submit" data-aos="fade-right" data-aos-delay="500" style="width:40%;height:50px;"><strong>Reserve</strong></button></div>
        </div>
    </div>
</form>
<?php
include "memberShips/Fotter.html";
?>
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="assets/js/Animated-Type-Heading.js"></script>
    <script src="assets/js/bs-animation.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.1.1/aos.js"></script>
    <script src="assets/js/navbarScrolling.js"></script>
    <script>

        $(document).ready(function(){

            load_data();

            function load_data(query)
            {
                $.ajax({
                    url:"fetchAvailableTime_AJAX.php",
                    method:"POST",
                    data:{query:query},
                    success:function(data)
                    {
                        $('#dateResult').html(data);
                    }
                });
            }


            $('#date').change(function(){
                var search = $(this).val();
                if(search != '')
                {
                    load_data(search);
                }
                else
                {
                    load_data();
                }
            });
        });
    </script>

</body>

</html>