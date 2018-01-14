<?php
/**
 * Created by PhpStorm.
 * User: Hitesh
 * Date: 22-Aug-17
 * Time: 1:27 AM
 */
?>
<html>
<head>

    <link href='../css/navbar.css' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <link href='https://fonts.googleapis.com/css?family=Raleway:400,100,100italic,900italic,900,800italic,800,700italic,700,600italic,600,500italic,500,400italic,300italic,300,200italic,200' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Voltaire' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Lobster' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Lobster+Two:700,700italic' rel='stylesheet' type='text/css'>
    <script>
        //fade in-out the page
        $(document).ready(function(){
            $(".fd_pg").click(function(){
                $("html").fadeOut().fadeIn()
            });
        });
        //Hamburger menu
        function myFunction() {
            document.getElementsByClassName("topnav")[0].classList.toggle("responsive");
        }
    </script>
</head>
<body>

<div class="nav" id="top" style="position:fixed;">
    <ul class="topnav">
        <div class="left_logo" style=" background-color: transparent"></div>
        <li><a class="fd_pg" href="interviewsadmin.php" >Interviews</a></li>
        <li><a href="articlesadmin.php">Articles</a></li>
        <li><a href="photosadmin.php">Photos</a></li>
        <li><a href="videosadmin.php">Videos</a></li>
        <li><a href="showsadmin.php">Shows</a></li>
        <li><a href="messagesadmin.php">Messages</a></li>
        <li><a href="updatesadmin.php">Updates</a></li>
        <li><a href="eventsadmin.php">Events</a></li>
        <li><a href="files/logout.php">LogOut</a></li>
        <li><a href="../index.php">Website</a></li>
        <li class="icon">
            <a href="javascript:void(0);" onclick="myFunction()">&#9776;</a>
        </li>
    </ul>
</div>
</body>
</html>