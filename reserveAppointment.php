<?php
session_start();
include_once "db-connect.php";
$conn=new DbConnect();
$conn=$conn->getDb();
$date=$_POST['date'];
$time=$_POST['Time'];
$Hospital=$_POST['Hospital'];
$email=$_SESSION['user_email'];
$stmt="INSERT INTO `Appointments` (`ID`, `Date`, `Time`, `Location`, `Email`,`Done`) VALUES (NULL, '$date', '$time', '$Hospital', '$email','0')";
$result=mysqli_query($conn,$stmt);
if($result){
    header("Location:Make An Appointment.php");
}
else{
    die("An error occured while inserting date");
}





?>