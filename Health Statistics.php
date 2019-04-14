<?php
session_start();
include_once 'db-connect.php';
$conn=new DbConnect();
$conn=$conn->getDb();
if(isset($_SESSION['Username']))
    $username=$_SESSION['Username'];
if(isset($_SESSION['user_email']))
    $useremail=$_SESSION['user_email'];
$stmt="SELECT * from HEALTH_STATISTICS WHERE Email= '$useremail'";
$result=mysqli_query($conn,$stmt);


$row=mysqli_fetch_array($result);
echo mysqli_error($conn);
?>
    <html>

    <head>
        <title>Profile Page</title>

    </head>


    <body>
<?php
for($i=0;$i<5;$i++)
    echo '<br>';
?>
        <div class="container">
            <header>

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
         <link rel="stylesheet" href="assets/css/Profilestyle.css">
        <link rel="stylesheet" href="assets/css/UIProfilestyle.css">
                <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0-beta/css/bootstrap.min.css" type="text/css">
                <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" type="text/css">
                <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat:300,400,500,600" type="text/css">

            </header>
            <main>
        <div class="row">
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

            <div class="left col-lg-4">
                <div class="photo-left">
                    <img class="photo" src="https://www.bebinak.com/photos/2017/6/8/15348-1496915581file-6179.jpg" />
                    <div class="active"></div>
                </div>


<?php
echo "<h4 class='name'>".$username."</h4>";
echo '<p class="info">Email:</p>';
echo '<p class="info">'.$row['Email'].'</p>';
echo  '<br>';
echo  '<p class="info">Bio:</p>';
echo '<p class="desc">Hi ! My name is '.$username.'. Im a Donor at Smart Blood Donor Company</p>';
?>


<?php
                echo'<div class="social">
                    <i class="fa fa-facebook-square" aria-hidden="true"></i>
                    <i class="fa fa-twitter-square" aria-hidden="true"></i>
                    <i class="fa fa-pinterest-square" aria-hidden="true"></i>
                    <i class="fa fa-tumblr-square" aria-hidden="true"></i>
                </div>
            </div>
            <div class="right col-lg-8">
                <ul class="navX">
                            <li id="itemA">Details</li>
                            <li id="itemB">Doantion History</li>
                            <li id="itemC">HEALTH STATISTICS</li>
                </ul>


                <div class="row gallery">
';?>

<table class="table table-striped table-bordered table-hover">
    <thead>
        <tr>
            <th>Date</th>
            <th>Blood Pressure</th>
            <th>Haemoglobin (g/L)</th>
        </tr>
    </thead>
    <tbody>
                <?php
            $delay=0;
            while($row = mysqli_fetch_array($result)) {

                echo '<tr data-aos="flip-up"  data-aos-delay="$delay">';
                echo '<td>' . $row['Date'] . '</td>';
                echo ' <td>' . $row['Blood_Pressure'] . '</td>';
                echo '<td>' . $row['Haemoglobin'] . '</td>';
                $delay+=100;
                                   echo' </tr>';}
            echo' 
    </tbody>
    
</table>
                    <h5> <br>*Showing the last 3 years of history.</h5>



                </div>
            </div>
        </div>
    </main>
</div>

';?>


                echo '
</body>
      <script src="assets/js/jquery.min.js"></script>
        <script src="assets/bootstrap/js/bootstrap.min.js"></script>
        <script src="assets/js/Animated-Type-Heading.js"></script>
        <script src="assets/js/bs-animation.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.1.1/aos.js"></script>
        <script src="assets/js/navbarScrolling.js"></script>
<script>
            document.getElementById("itemA").addEventListener("click",function (event) {
               window.location="ProfilePage.php";
            });

            document.getElementById("itemB").addEventListener("click",function (event) {
                window.location="Donation History.php";
            });

            document.getElementById("itemC").addEventListener("click",function (event) {
                window.location="Health Statistics.php";
            });
</script>
</html>';

?>