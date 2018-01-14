<?php
include 'admin/files/connect.php';
include 'navbar.php';
?>
<!DOCTYPE HTML>
<html>
<head>
    <title>Articles | Welcome to Uthaan</title>
    <link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all">
    <link href='icon.ico' rel='icon' type='image/x-icon'/>
    <link href="css/content.css" rel="stylesheet" type="text/css" media="all" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="keywords" content="uthaan,uthan,iiitmg,abv-iiitmg,journalism club,utan,club of ABV-IIITMG,utaan,article,articles,uthaaan,ABV-IIITM">
    <meta name="description" content="Uthaan is journalism and recreational forum of ABV-IIITMG. This forum has been formed in order to enable all round development of the students in all facets of life. We are the eyes and ears of the institute, when it comes to any event occurring inside it, We cover the events through all forms of media.">
    <meta name="author" content="Hitesh Ahuja">
    <meta property="og:image" content="http://example.com/logo.jpg">
    <meta property="og:image:type" content="image/jpg">
    <meta property="og:image:width" content="1024">
    <meta property="og:image:height" content="1024">
    <meta property="og:description" content="Uthaan is journalism and recreational forum of ABV-IIITMG."/>
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
            <a href="#"><img src="images/articles.png" class="img-responsive" alt="" /></a>
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
        $query=mysqli_query($connection,"SELECT * FROM articles ORDER BY article_id DESC ");
        while($row = mysqli_fetch_array($query)){
            $heading=$row['heading'];
            $content=$row['content'];
            $writer=$row['writer'];
            $date=$row['date'];
            $id=$row['article_id'];

        $query2=mysqli_query($connection,"SELECT image_name FROM article_images WHERE article_id='$id' ORDER BY image_id ASC LIMIT 1 ");
        while($row2 = mysqli_fetch_array($query2)){
            $cover=$row2['image_name'];
        }

        echo "<a href=\"viewarticle.php?id=$id\"><img src=\"admin/uploads/articles/$cover\" class=\"img-responsive\" alt=\"\" /></a>
        <div class=\"travelling\">
            <div class=\"col-md-10 travelling1\">
                <h3><a href=\"viewarticle.php?id=$id\">$heading</a></h3>
                <h5>by <a href=\"#\">$writer ,</a>$date</h5>
                <p>";

            echo implode(' ', array_slice(explode(' ', $content), 0, 50));

            echo ".......</p>
            </div>
            <div class=\"clearfix\"> </div>

            <a class=\"more\" href=\"viewarticle.php?id=$id\" style=\"float: right\">Read More</a><br><br><br>
        </div><hr>";
        }

        ?>
        <!------------------------>

    </div>
</div>
<!-- content -->
</body>
</html>
