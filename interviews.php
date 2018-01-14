<?php
/**
 * Created by PhpStorm.
 * User: Hitesh
 * Date: 31-Aug-17
 * Time: 12:13 AM
 */
?>
<?php
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
</div>
<br>
<!-- header -->
<!-- content -->
<div class="container">
    <div class="content">

        <!-------------------->
        <?php
        $query=mysqli_query($connection,"SELECT * FROM interviews ORDER BY interview_id DESC ");
        while($row = mysqli_fetch_array($query)){
            $heading=$row['heading'];
            $content=$row['content'];
            $reporters=$row['reporters'];
            $photographer=$row['photographer'];
            $date=$row['date'];
            $id=$row['interview_id'];

            $query2=mysqli_query($connection,"SELECT image_name FROM interview_images WHERE interview_id='$id' ORDER BY image_id ASC LIMIT 1 ");
            while($row2 = mysqli_fetch_array($query2)){
                $cover=$row2['image_name'];
            }

            echo "<a href=\"viewinterview.php?id=$id\"><img src=\"admin/uploads/interviews/$cover\" class=\"img-responsive\" alt=\"\" /></a>
        <div class=\"travelling\">
            <div class=\"col-md-10 travelling1\">
                <h3><a href=\"viewinterview.php?id=$id\">$heading</a></h3>
                <h5>Reported by <a href=\"#\">$reporters ,</a> Photographer : <a href=\"#\">$photographer ,</a>$date</h5>
                <p>";

            echo implode(' ', array_slice(explode(' ', $content), 0, 50));

            echo "......</p>
            </div>
            <div class=\"clearfix\"> </div>

            <a class=\"more\" href=\"viewinterview.php?id=$id\" style=\"float: right\">Read More</a><br><br><br>
        </div><hr>";
        }

        ?>
        <!------------------------>


    </div>
</div>
<!-- content -->
</body>
</html>

