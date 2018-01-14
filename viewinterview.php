<?php
/**
 * Created by PhpStorm.
 * User: Hitesh
 * Date: 22-Sep-17
 * Time: 11:05 PM
 */
include 'admin/files/connect.php';
include 'navbar.php';
?>

<!DOCTYPE HTML>
<html>
<head>
    <title>Interviews | Welcome to Uthaan</title>
    <link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all">
    <link href="css/content.css" rel="stylesheet" type="text/css" media="all" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:400italic,400,800,700' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Pacifico' rel='stylesheet' type='text/css'>
    <script src="js/jquery.min.js"></script>
</head>
<body style="background-color: #EBE3E0">
<!-- header -->
<div class="banner" style="	background: url(images/Performance-Review.jpg) no-repeat center top;">
    <div class="container">
        <div class="logo">
            <a href="#"><img src="images/interviews.png" class="img-responsive" alt="" /></a>
        </div>
    </div>
</div><br>
<!-- header -->
<!-- content -->
<div class="container">
    <div class="content">

        <!------------------->
        <?php
        $id=$_GET['id'];
        $query=mysqli_query($connection,"SELECT * FROM interviews WHERE interview_id='$id' ");
        while($row = mysqli_fetch_array($query)){
            $heading=$row['heading'];
            $content=$row['content'];
            $reporters=$row['reporters'];
            $photographer=$row['photographer'];
            $date=$row['date'];

            $query2=mysqli_query($connection,"SELECT image_name FROM interview_images WHERE interview_id='$id' ORDER BY image_id ASC LIMIT 1 ");
            while($row2 = mysqli_fetch_array($query2)){
                $cover=$row2['image_name'];
            }

            echo "<a href=\"#\"><img src=\"admin/uploads/interviews/$cover\" class=\"img-responsive\" alt=\"\" /></a>
        <i class=\"aeroplane\"> </i>
        <div class=\"travelling\">
            <div class=\"col-md-10 travelling1\">
                <h3><a href=\"#\">$heading</a></h3>
                <h5>Reported by <a href=\"#\">$reporters ,</a> Photographer : <a href=\"#\">$photographer ,</a>$date</h5>
                </div>
            <div class=\"clearfix\"> </div>
            <p>$content</p>
        </div><br><br>";
        }

        $query=mysqli_query($connection,"SELECT image_name FROM interview_images WHERE interview_id='$id' ORDER BY image_id");
        $numrows=mysqli_num_rows($query);
        if($numrows>'1')
        {
            $numrows--;
            $query=mysqli_query($connection,"SELECT image_name FROM interview_images WHERE interview_id='$id' ORDER BY image_id DESC LIMIT $numrows ");
            while($row = mysqli_fetch_array($query)){
                $image=$row['image_name'];
                echo "<a href=\"#\"><img src=\"admin/uploads/interviews/$image\" class=\"img-responsive\" alt=\"\" /></a><br>";
            }
        }
        ?>
        <!------------------->

    </div>
</div>
<!-- content -->
</body>
</html>
