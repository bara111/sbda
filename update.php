<?php
session_start();
if(isset($_SESSION['Username']))
$username=$_SESSION['Username'];
$pass;
$bd;
$sex;
$mobile;
$weight;
$city;
$LBD;
$bloodgroup;
$diseases;

include_once 'db-connect.php';
$error="";
$conn=new DbConnect();
$conn=$conn->getDb();


    if(isset($_POST['Password']))
        $pass=$_POST['Password'];
    if(isset($_POST['Birthdate']))
        $bd=$_POST['Birthdate'];
    if(isset($_POST['Gender']))
        $sex=$_POST['Gender'];
    if(isset($_POST['PhoneNumber']))
        $mobile=$_POST['PhoneNumber'];
    if(isset($_POST['Weight']))
        $weight=(double) $_POST['Weight'];


    if(isset($_POST['City']))
        $city=$_POST['City'];
    if(isset($_POST['LDD']))
        $LBD=$_POST['LDD'];
    if(isset($_POST['BloodGroup']))
        $bloodgroup=$_POST['BloodGroup'];
    if(isset($_POST['diseases']))
        $diseases=$_POST['diseases'];

    $stmt="UPDATE `SBDA_Accounts` SET `Password` = '$pass', `Birthdate` = '$bd', `Gender` = '$sex', `Mobile` = '$mobile', `Weight` = '$weight', `Diseases` = '$diseases', `City` = '$city', `LBD` = '$LBD', `BloodGroup` = '$bloodgroup' WHERE `SBDA_Accounts`.`Username` = '$username'";

    $result=mysqli_query($conn,$stmt);
echo'<script> window.location="ProfilePage.php"; </script> ';

    ?>

