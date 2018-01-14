<?php
/**
 * Created by PhpStorm.
 * User: Hitesh
 * Date: 19-Sep-17
 * Time: 10:58 PM
 */
include 'connect.php';
session_start();

$heading=$_POST['heading'];
$description=$_POST['description'];
$link=$_POST['link'];
$show_type=$_POST['show_type'];
$id='1';
$db=new PDO("mysql:host=localhost;dbname=uthaan","root","");

$target_dir = "../uploads/shows/";
$fi = new FilesystemIterator("../uploads/shows/", FilesystemIterator::SKIP_DOTS);
$var=iterator_count($fi)+1;

$total = count($_FILES['thumb']['name']);

//Get the temp file path
$tmpFilePath = $_FILES['thumb']['tmp_name'];

//Make sure we have a filepath
$extension = end(explode(".", $_FILES["thumb"]["name"]));
$newFilePath = "../uploads/shows/" . "img_show_".$var.".".$extension;
$filename="img_show_".$var.".".$extension;

//Upload the file into the temp dir
if(move_uploaded_file($tmpFilePath, $newFilePath)) {
    if($db)
    {
        $sql = "INSERT INTO
                    shows(heading,description,show_type,link,thumbnail,date,admin_id)
                VALUES(?,?,?,?,?,?,?)";
        $test=$db->prepare($sql);
        $test->bindParam(1,$heading);
        $test->bindParam(2,$description);
        $test->bindParam(3,$show_type);
        $test->bindParam(4,$link);
        $test->bindParam(5,$filename);
        $test->bindParam(6,date('y/m/d'));
        $test->bindParam(7,$id);
        if($test->execute())
        {
            $ok='1';
        }
        else
            $ok='0';
    }
}
$var++;
$cool='Your Content has been successfully uploaded';
$fail='Something went wrong. Please try again later.';
?>
<html>
<head>
    <style>
        #mask {
            position: absolute;
            left: 0;
            top: 0;
            z-index: 9000;
            background-color: #000;
            display: none;
        }

        #boxes .window {
            position: absolute;
            left: 0;
            top: 0;
            width: 440px;
            height: 100px;
            display: none;
            z-index: 9999;
            padding: 20px;
            border-radius: 15px;
            text-align: center;
        }

        #boxes #dialog {
            width: 750px;
            height: 100px;
            padding: 10px;
            background-color: #ffffff;
            font-family: 'Segoe UI Light', sans-serif;
            font-size: 20pt;
        }

        #popupfoot {
            font-size: 16pt;
            position: absolute;
            bottom: 0px;
            text-align: right;
            font-weight: bold;
        }
    </style>
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>
<div id="boxes">
    <div id="dialog" class="window">
        <?php
        if($ok=='1')
            echo $cool;
        else
            echo $fail;
        ?>
        <div id="popupfoot"><p style="font-weight: bold"><a href="../interviewsadmin.php" class="close agree" id="hits">Close</a></p></div>
    </div>
    <div id="mask"></div>
</div>
<script>
    $(document).ready(function() {

        var id = '#dialog';

//Get the screen height and width
        var maskHeight = $(document).height();
        var maskWidth = $(window).width();

//Set heigth and width to mask to fill up the whole screen
        $('#mask').css({'width':maskWidth,'height':maskHeight});

//transition effect
        $('#mask').fadeIn(500);
        $('#mask').fadeTo("slow",0.9);

//Get the window height and width
        var winH = $(window).height();
        var winW = $(window).width();

//Set the popup window to center
        $(id).css('top',  winH/2-$(id).height()/2);
        $(id).css('left', winW/2-$(id).width()/2);

//transition effect
        $(id).fadeIn(2000);

//if close button is clicked


//if mask is clicked


    });

    $('#hits').click(function(){
        var href=$("#hits").attr("href");
        window.location.replace(href);
    });
</script>
</body>

</html>