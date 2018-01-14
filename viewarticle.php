<?php
/**
 * Created by PhpStorm.
 * User: Hitesh
 * Date: 15-Aug-17
 * Time: 10:09 PM
 */
include 'admin/files/connect.php';
include 'navbar.php';
?>

<!DOCTYPE HTML>
<html>
<head>
    <title>Articles | Welcome to Uthaan</title>
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
<div class="banner">
    <div class="container">
        <div class="logo">
            <a href="index.html"><img src="images/logo1.png" class="img-responsive" alt="" /></a>
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
        $query=mysqli_query($connection,"SELECT * FROM articles WHERE article_id='$id' ");
        while($row = mysqli_fetch_array($query)){
            $heading=$row['heading'];
            $content=$row['content'];
            $writer=$row['writer'];
            $date=$row['date'];

            $query2=mysqli_query($connection,"SELECT image_name FROM article_images WHERE article_id='$id' ORDER BY image_id ASC LIMIT 1 ");
            while($row2 = mysqli_fetch_array($query2)){
                $cover=$row2['image_name'];
            }

            echo "<a href=\"#\"><img src=\"admin/uploads/articles/$cover\" class=\"img-responsive\" alt=\"\" /></a>
        <i class=\"aeroplane\"> </i>
        <div class=\"travelling\">
            <div class=\"col-md-10 travelling1\">
                <h3><a href=\"#\">$heading</a></h3>
                <h5>by <a href=\"#\">$writer ,</a> $date</h5>
            </div>
            <div class=\"clearfix\"> </div>
            <p>$content</p>
        </div><br><br>";
        }

        $query=mysqli_query($connection,"SELECT image_name FROM article_images WHERE article_id='$id' ORDER BY image_id");
        $numrows=mysqli_num_rows($query);
        if($numrows>'1')
        {
            $numrows--;
            $query=mysqli_query($connection,"SELECT image_name FROM article_images WHERE article_id='$id' ORDER BY image_id DESC LIMIT $numrows ");
            while($row = mysqli_fetch_array($query)){
                $image=$row['image_name'];
                echo "<a href=\"#\"><img src=\"admin/uploads/articles/$image\" class=\"img-responsive\" alt=\"\" /></a><br>";
        }
        }
        ?>
        <!------------------->

    </div>
</div>
<!-- content -->
</body>
</html>
