<?php
/**
 * Created by PhpStorm.
 * User: Hitesh
 * Date: 20-Sep-17
 * Time: 11:22 PM
 */
include 'adminbar.php';
include 'files/connect.php';
?>
<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <title></title>
    <style>
        body {
            background-color: #ffe0b3;
            -webkit-background-size: auto;
            -moz-background-size: auto;
            -o-background-size: auto;
            background-size: auto;
            padding-top: 0;
        }
        h5,p{
            display: inline;
        }
        .col-md-3{
            margin-left: auto;
            margin-right: auto;
            display: block;
        }
    </style>
</head>
<body>
<br><br><br><br><br>
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-2"></div>
            <div class="col-md-8">
                <?php
                $query=mysqli_query($connection,"SELECT * FROM message ORDER BY message_id DESC ");
                while($row = mysqli_fetch_array($query)) {
                    $name = $row['name'];
                    $number = $row['number'];
                    $email = $row['email'];
                    $message=$row['message'];
                    $approved=$row['approved'];
                    echo "<div class=\"row\">
                    <div class=\"col-md-8\">
                        <div>
                            <h5><b>Name : </b></h5>
                            <p>$name</p>
                            <br>
                            <h5><b>Number : </b></h5>
                            <p>$number</p>
                            <br>
                            <h5><b>Email : </b></h5>
                            <p>$email</p>
                            <br>
                            <h5><b>Message : </b></h5>
                            <p>$message</p>
                            <br>                          
                        </div>
                        <br>
                    </div>
                    </div>
                    <hr style=\"background-color: black\">";
                }
                ?>

            </div>
        </div>
    </div>
</body>
</html>
