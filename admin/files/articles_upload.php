<?php
/**
 * Created by PhpStorm.
 * User: Hitesh
 * Date: 19-Sep-17
 * Time: 1:26 AM
 */
include 'connect.php';
session_start();

$heading=$_POST['heading'];
$content=$_POST['content'];
$writer=$_POST['writer'];
$id=$_SESSION['id'];
$ok='1';
$db=new PDO("mysql:host=localhost;dbname=uthaan","root","");
if($db)
{
    $sql = "INSERT INTO
                    articles(heading,content,writer,date,admin_id)
                VALUES(?,?,?,?,?)";
    $test=$db->prepare($sql);
    $test->bindParam(1,$heading);
    $test->bindParam(2,$content);
    $test->bindParam(3,$writer);
    $test->bindParam(4,date('y/m/d'));
    $test->bindParam(5,$id);
    if($test->execute())
    {
        $query='select * from articles order by article_id DESC;';
        $stm=$db->prepare($query);
        $stm->execute();
        $res=$stm->fetchAll(PDO::FETCH_OBJ);
        $article_id= $res[0]->article_id;
    }
    else
    echo 'Something went wrong. Please try again later.';
}
$target_dir = "../uploads/articles/";
$fi = new FilesystemIterator("../uploads/articles/", FilesystemIterator::SKIP_DOTS);
$var=iterator_count($fi)+1;

$total = count($_FILES['cover']['name']);

// Loop through each file
    $tmpFilePath = $_FILES['cover']['tmp_name'];

    //Make sure we have a filepath
    $extension = end(explode(".", $_FILES["cover"]["name"]));
    $newFilePath = "../uploads/articles/" . "img_art_".$var.".".$extension;
    $filename="img_art_".$var.".".$extension;
    //Upload the file into the temp dir
    if(move_uploaded_file($tmpFilePath, $newFilePath)) {
        if($db)
        {
            $sql = "INSERT INTO
                    article_images(article_id,image_name,admin_id)
                VALUES(?,?,?)";
            $test=$db->prepare($sql);
            $test->bindParam(1,$article_id);
            $test->bindParam(2,$filename);
            $test->bindParam(3,$id);
            if($test->execute())
            {
            }
            else
            {
                echo 'Something went wrong. Please try again later.';
                $ok='0';
            }
        }
    }
    $var++;

$total = count($_FILES['pictures']['name']);

// Loop through each file
for($i=0; $i<$total; $i++) {
    //Get the temp file path
    $tmpFilePath = $_FILES['pictures']['tmp_name'][$i];

    //Make sure we have a filepath
    $extension = end(explode(".", $_FILES["pictures"]["name"][$i]));
    $newFilePath = "../uploads/articles/" . "img_art_".$var.".".$extension;
    $filename="img_art_".$var.".".$extension;

    //Upload the file into the temp dir
    if(move_uploaded_file($tmpFilePath, $newFilePath)) {
        if($db)
        {
            $sql = "INSERT INTO
                    article_images(article_id,image_name,admin_id)
                VALUES(?,?,?)";
            $test=$db->prepare($sql);
            $test->bindParam(1,$article_id);
            $test->bindParam(2,$filename);
            $test->bindParam(3,$id);
            if($test->execute())
            {
            }
            else
            {
                $ok='0';
                echo 'Something went wrong. Please try again later.';
            }
        }
    }
    $var++;
}
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
