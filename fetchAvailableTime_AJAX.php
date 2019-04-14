<?php
ini_set( "display_errors", 0);
include_once "db-connect.php";
$connect=new DbConnect();
$connect=$connect->getDb();
$output = '';

if(isset($_POST["query"]))
{
    $search = mysqli_real_escape_string($connect, $_POST["query"]);
    $query = "SELECT Time FROM Appointments WHERE Date='$search'";
}
else
{
   
}
$result = mysqli_query($connect, $query);

if(mysqli_num_rows($result) > 0)
{

    $output .= "<select class='form-control-lg' name='Time'>";
    $reservedTimes="";

    while ($row = mysqli_fetch_array($result)) {
        $reservedTimes.=$row['Time']."@";
    }
    
    $HR=8;
    $Min=00;
    for($i=0;$i<=24;$i++){
        $optionTime=$HR.":".$Min;
        if(strpos($reservedTimes,$optionTime)!==false){
            $output .= '<option disabled value="'.$optionTime.'">'.$optionTime." [Reserved]".'</option>';
        }else{
            $output .= '<option  value="'.$optionTime.'">'.$optionTime.'</option>';
        }

        if(($Min+15)%60==0)
            $HR++;
        $Min=($Min+15)%60;

    }

    $output .="</select>";


    echo $output;
}
else
{
    $output .= "<select class='form-control-lg' name='Time'>";
    $HR=8;
    $Min=00;
    for($i=0;$i<=24;$i++){
        $optionTime=$HR.":".$Min;
            $output .= '<option value="'.$optionTime.'">'.$optionTime.'</option>';
        if(($Min+15)%60==0)
            $HR++;
        $Min=($Min+15)%60;

        }
    $output .="</select>";



    echo $output;
}

?>