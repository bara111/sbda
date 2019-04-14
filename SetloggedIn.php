<?php
session_start();
$_SESSION["loggedin"]=true;
include_once "db-connect.php";
$conn=new DbConnect();
$conn=$conn->getDb();
$email=$_SESSION['user_email'];
$stmt="UPDATE SBDA_Accounts SET Valid = '1' WHERE Email = '$email'";
$result=mysqli_query($conn,$stmt);
//echo $result;
//header("location:Home.php");
?>