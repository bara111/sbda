<?php
session_start();
include_once 'db-connect.php';
$conn=new DbConnect();
$conn=$conn->getDb();
if(isset($_SESSION['Username']))
$username=$_SESSION['Username'];
$stmt="SELECT * from SBDA_Accounts WHERE Username= '$username'";
$result=mysqli_query($conn,$stmt);
$row=mysqli_fetch_array($result);


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
                            
                        </div>
                        <?php
                    echo "<h4 class='name'>".$username."</h4>";
                   echo '<p class="info">Email:</p>';
                   echo '<p class="info">'.$row['Email'].'</p>';
                   echo  '<br>';
                   echo  '<p class="info">Bio:</p>';
                   echo '<p class="desc">Hi ! My name is '.$username.'. Im a Donot at Smart Blood Donor Company</p>';
?>
                            <div class="social">
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
                            <li id="editInfo">
                                <div><img src="assets/img/Edit.png" style="width: 32px;height: 32px;"></div>
                            </li>

                        </ul>


                        <div class="row gallery">
                            <form action="update.php" method="post">
                                <div class="row">
                                    <h4>Account</h4>

                                    
                                        <div class="input-group input-group-icon">
                                            <?php
                                        echo '<input name="Password" type="password" placeholder="Password" value="'.$row['Password']. '"/>';
                                                ?>
                                                <div class="input-icon"><i class="fa fa-key"></i></div>
                                        </div>
                                    
                                </div>



                                <div class="row">
                                    <div class="col-half">
                                        <h4>Date of Birth</h4>

                                        <div class="input-group">
                                            <?php
                                            $DOB=$row['Birthdate'];
                                          echo  '<input name="Birthdate" type="date" value="'.$DOB.'">';
?>
                                        </div>
                                    </div>


                                    <div class="col-half">
                                        <h4>Gender</h4>
                                        <div class="input-group">
                                            <?php
        if ($row['Gender'] == "male") {
            echo '<input type="radio" name="Gender" value="male" id="gender-male" checked  >';
            echo '<label for="gender-male" >Male</label>';
            echo '<input type="radio" name="Gender" value="female" id="gender-female" >';
            echo '<label for="gender-female">Female</label>';
        } else if ($row['Gender'] == "female") {
            echo '<input type="radio" name="Gender" value="male" id="gender-male"  >';
            echo '<label for="gender-male" >Male</label>';
            echo '<input type="radio" name="Gender" value="female" id="gender-female" checked  >';
            echo '<label for="gender-female">Female</label>';

        }
                                            ?>
                                        </div>
                                    </div>
                                </div>


                                <div class="row">
                                    <h4>Details</h4>

                                    <div class="input-group input-group-icon">
                                        <?php
        echo '<input name="PhoneNumber" type="text" size="10" placeholder="Mobile Number" value="' . $row['Mobile'] . '">';
                                        ?>
                                            <div class="input-icon"><i class="fa fa-user"></i></div>
                                    </div>

                                    <div class="col-half">
                                        <div class="input-group input-group-icon">
                                            <?php
        echo '<input name="Weight" type="number" placeholder="Weight" min="50" max="170" value="' . $row['Weight'] .'" >';
                                            ?>
                                                <div class="input-icon"><i class="fa fa-user"></i></div>
                                        </div>
                                    </div>

                                    <div class="col-half">
                                        <div class="input-group">

                                            <?php
        echo '<input name="diseases" type="text" placeholder="Diseases" value="' . $row['Diseases'] .'">';
                                            ?>
                                        </div>
                                    </div>

                                    <div class="col-half">
                                        <h4>City</h4>
                                        <div class="input-group">

                                            <?php
        echo '<input name="City" type="text" placeholder="City" value="' . $row['City'] .'">';
                                            ?>
                                        </div>
                                    </div>

                                    <div class="col-half">
                                        <h4>Last Donation Date</h4>
                                        <div class="input-group">

                                            <?php
                                            $LDD=$row['LBD'];
                                          echo  '<input name="LDD" type="date" value="'.$LDD.'">';
?>
                                        </div>
                                    </div>

                                </div>


                                <div class="s1">
                                    <h4>Blood Group</h4>

                                    <select name="BloodGroup">
                                    <?php
                                        $group=$row['BloodGroup'];
        echo '<option value="A+" '.(($group=="A+")? "selected='selected'":"").'>A+';
                                        
        echo '<option value="A-"'.(($group=="A-")? "selected='selected'":"").'>A-';
                                        
        echo '<option value="B+"'.(($group=="B+")? "selected='selected'":"").'>B+';
                                        
        echo '<option value="B-"'.(($group=="B-")? "selected='selected'":"").'>B-';
                                        
        echo '<option value="AB+"'.(($group=="AB+")? "selected='selected'":"").'>AB+';
                                        
        echo '<option value="AB-"'.(($group=="AB-")? "selected='selected'":"").'>AB-';
                                        
        echo '<option value="O-"'.(($group=="O-")? "selected='selected'":"").'>O-';
        
        echo '<option value="O-">O-';
        
                                        
                                        ?>

      </select>

                                </div>



                                <div class="s2"></div>
                                <div class="row">
                                    <br>

                                </div>
                                <br>
                                <input id="Update" name="Update" type="submit" class="registerButton" value="Update">


                            </form>
                        </div>
                    </div>
                </div>
            </main>
        </div>
        <script>
            var textfields = document.getElementsByTagName("input");
            for (var i = 0; i < textfields.length; i++) {
                textfields[i].readOnly = true;
            }

            document.getElementById("editInfo").addEventListener("click", function(event) {
                for (var i = 0; i < textfields.length; i++) {
                    textfields[i].readOnly = !textfields[i].readOnly;

                }
                document.ge
            });

            document.getElementById("Update").addEventListener("click", function(event) {
                if (!confirm("All of your information will be saved !"))
                    event.preventDefault();
            });

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


    </body>

    </html>
