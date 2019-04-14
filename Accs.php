<?php
session_start();
$conn = new mysqli("localhost","id5132637_jamal_alkelani","123456","id5132637_testdb");
$stmt="select * from SBDA_Accounts";
$result=mysqli_query($conn,$stmt);


?>


    <html>

    <head>
        <title>Control Panel</title>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
<!--        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />-->
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
        <script src="Accs Manager/jquery.tabledit.min.js"></script>
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
<!--        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css">-->
<!--        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.1.1/aos.css">-->
        <link rel="stylesheet" href="assets/css/News-Cards.css">
        <link rel="stylesheet" href="assets/css/ScrollStyle.css">
        <link rel="stylesheet" href="assets/css/styles.css">
        <link rel="stylesheet" href="assets/css/Xstyle.css">
<!--        <script src="assets/js/jquery.min.js"></script>-->
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
        <h1 class="text-center" data-aos="zoom-in" data-duration="1200" id="startchange" style="color:rgb(255,255,255);padding-top:16px;padding-bottom:16px;font-family:'Titillium Web', sans-serif;">SBDA USER ACCOUNTS<br></h1>
    </div>

<!--        <div class="container">-->
<!--    <div class="row">-->
            <br><br><br>
            <div class="table-responsive">
                <table id="editable_table"  class="table table-striped table-bordered table-hover">
                    <thead >
                        <tr>

                            <th>ID</th>
                            <th>Username</th>
                            <th>Email</th>
                            <!--                            <th>Password</th>-->
                            <th>Birthdate</th>
                            <th>Gender</th>
                            <th>Mobile</th>
                            <th> Weight</th>
                            <th>Height</th>
                            <th> Diseases</th>
                            <th> City</th>
                            <th> LBD</th>
                            <th> BloodGroup</th>
                            <!--                           <th> Image</th>-->
                            <!--                           <th>  MemberShip</th>-->

                        </tr>
                    </thead>

                    <tbody>
                        <?php
                        $delay=0;
                        while($row=mysqli_fetch_array($result)){
                          echo '
                          <tr >
                           <td>'.$row["ID"].'</td>
                           <td>'.$row["Username"].'</td>
                           <td>'.$row["Email"].'</td>
                           <td>'.$row["Birthdate"].'</td>
                           <td>'.$row["Gender"].'</td>
                           <td>'.$row["Mobile"].'</td>
                           <td>'.$row["Weight"].'</td>
                           <td>'.$row["Height"].'</td>
                           <td>'.$row["Diseases"].'</td>
                           <td>'.$row["City"].'</td>
                           <td>'.$row["LBD"].'</td>
                           <td>'.$row["BloodGroup"].'</td>
                          </tr>
                          ';
                            $delay+=100;
                            
                        }
                    ?>

                    </tbody>

                </table>

            </div>
<!--        </div>-->

<!--    --><?php
//
//    $dir=dirname(dirname(__FILE__));
//    include "memberShips/Fotter.html";
//    ?>

    </body>


    <script>
        $(document).ready(function() {
            $('#editable_table').Tabledit({
                url: 'Accs Manager/action.php',
                eventType: 'dblclick',
               // editButton: false,
                buttons: {
                    delete: {
                        class: 'btn btn-sm btn-danger',
                        html: '<span class="fa fa-trash"></span> &nbsp DELETE',
                        action: 'delete'
                    },
                    confirm: {
                        class: 'btn btn-sm btn-default',
                        html: 'Are you sure?'
                    },
                    edit: {
                        class: 'btn btn-sm btn-primary',
                        html: '<span class="fa fa-edit"></span> &nbsp EDIT',
                        action: 'edit'
                    }
                },
                columns: {

                    identifier: [0, "ID"],
                    editable: [
                        [1, 'Username'],
                        [2, 'Email'],
                        [3, 'Birthdate'],
                        [4, 'Gender'],
                        [5, 'Mobile'],
                        [6, 'Weight'],
                        [7, 'Height'],
                        [8, 'Diseases'],
                        [9, 'City'],
                        [10, 'LBD'],
                        [11, 'BloodGroup']
                    ]
                },
                restoreButton: false,
                onSuccess: function(data, textStatus, jqXHR) {
                    if (data.action == 'delete') {
                        $('#' + data.ID).remove();
                    }
                }
            });

        });

    </script>

    </html>





