<?php
/**
 * Created by PhpStorm.
 * User: Hitesh
 * Date: 19-Sep-17
 * Time: 6:30 PM
 */
include 'admin/files/connect.php';
include 'navbar.php';
?>
<html>
<head>
    <title>Shows | Welcome to Uthaan</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href='icon.ico' rel='icon' type='image/x-icon'/>
    <meta name="keywords" content="uthaan,uthan,iiitmg,abv-iiitmg,journalism club,utan,utaan,article,articles,Pictionary,uthaaan,ABV-IIITM,club of IIITMG">
    <meta name="description" content="Uthaan is journalism and recreational forum of ABV-IIITMG. This forum has been formed in order to enable all round development of the students in all facets of life. We are the eyes and ears of the institute, when it comes to any event occurring inside it, We cover the events through all forms of media.">
    <meta name="author" content="Hitesh Ahuja">
    <meta property="og:image" content="http://example.com/logo.jpg">
    <meta property="og:image:type" content="image/jpg">
    <meta property="og:image:width" content="1024">
    <meta property="og:image:height" content="1024">
    <meta property="og:description" content="Uthaan is journalism and recreational forum of ABV-IIITMG."/>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <title>Uthaan | Shows</title>
    <style type="text/css">
        h1{
            margin: 0;
            padding: 0;
        }
        body{
            margin: 0;
            padding: 0;
            width: auto;
        }
        #photos {
            margin: 0 auto;
            max-width: 100%;
            position: relative;

        }

        #photos a {
            margin: 0 auto;
            padding: 0;
            text-decoration: none;
        }

        #photos img {
            position: relative;
            float: left;
            width: 100%;
        }

        #photos p {
            padding: 40% 0 0 5%;
            position: absolute;
            max-width: 60%;
            font-family: 'Dancing Script', cursive;
            color: #fff;
            font-size: 1.2em;
            text-align: center;
        }
        #photos h1 {
            padding: 35% 0 0 10%;
            position: absolute;
            max-width: 60%;
            font-family: 'Dancing Script', cursive;
            color: #fff;
            font-size: 2.2em;
            text-align: center;
        }
        /*--responsive design--*/
        @media (max-width:768px) {
            #photos h1 {
                padding: 35% 0 0 10%;
                position: absolute;
                max-width: 100%;
                font-family: 'Dancing Script', cursive;
                color: #fff;
                font-size: 1.8em;
                text-align: center;
            }
            #photos p {
                padding: 40% 5% 0 5%;
                position: absolute;
                max-width: 100%;
                font-family: 'Dancing Script', cursive;
                color: #fff;
                font-size: 1em;
                text-align: center;
            }
        }
            @media (max-width:640px){
            #photos h1 {
                padding: 35% 0 0 10%;
                position: absolute;
                max-width: 100%;
                font-family: 'Dancing Script', cursive;
                color: #fff;
                font-size: 1.8em;
                text-align: center;
            }
            #photos p {
                padding: 40% 5% 0 5%;
                position: absolute;
                max-width: 100%;
                font-family: 'Dancing Script', cursive;
                color: #fff;
                font-size: 1em;
                text-align: center;
            }
        }
        .nav-pills > li.active > a,
        .nav-pills > li.active > a:hover,
        .nav-pills > li.active > a:focus {
            color: #fff;
            background-color: #ffdb4d;
        }
        .nav-pills>li>a {
            color: #ffffff;
            text-decoration: none;
        }
        @media (max-width:480px){
            #photos h1 {
                padding: 35% 0 0 10%;
                position: absolute;
                max-width: 100%;
                font-family: 'Dancing Script', cursive;
                color: #fff;
                font-size: 1.2em;
                text-align: center;
            }
            #photos p {
                padding: 40% 5% 0 5%;
                position: absolute;
                max-width: 100%;
                font-family: 'Dancing Script', cursive;
                color: #fff;
                font-size: .8em;
                text-align: center;
            }
        }
    </style>
</head>
<body style="background-color: #0f0f0a">
<div class="main-content">
    <section id="photos">
        <?php
        $query=mysqli_query($connection,"SELECT * FROM shows ORDER BY show_id DESC LIMIT 1");
        while($row = mysqli_fetch_array($query)){
            $thumb=$row['thumbnail'];
            $title=$row['heading'];
            $description=$row['description'];
            $id=$row['show_id'];
        }
        ?>
        <a href='player.php?id=<?php echo "$id"; ?>&type=1' class="letitbe">
            <img src='admin/uploads/shows/<?php echo "$thumb"; ?>' style="max-height: 700px;">
            <h1><?php echo "$title "; ?></h1>
            <p><?php echo "$description"; ?></p>
        </a>
    </section>
</div>

<div class="container-fluid">
    <div class="row">
        <div class="col-md-1">
        </div>
        <div class="col-md-10">
            <br><br>
            <ul class="nav nav-pills" >
                <li class="active" ><a data-toggle="pill" href="#bmg1">Be My Guest S1</a></li>


                <li><a data-toggle="pill" href="#bd">Big Debate</a></li>
            </ul>
            <div class="tab-content">
                <div id="bmg1" class="tab-pane fade in active">
                    <br><br>

                    <!-------------------------->
                    <?php
                    $query=mysqli_query($connection,"SELECT * FROM shows WHERE show_type='1' ORDER BY show_id DESC ");
                    while($row = mysqli_fetch_array($query)){
                        $title=$row['heading'];
                        $description=$row['description'];
                        $thumb=$row['thumbnail'];
                        $id=$row['show_id'];
                        echo "<div class=\"row\">
                        <div class=\"col-sm-3 col-md-4 col-lg-3\" style=\"margin-left: 5%\">
                            <a href='player.php?id=$id&type=1' style=\"cursor: pointer\">
                                <img src=\"admin/uploads/shows/$thumb\" style=\"width: 90%; height: auto\">
                            </a>
                        </div>
                        <div class=\"col-sm-6 col-md-5 col-lg-7\">
                            <a href='player.php?id=$id&type=1' style=\"text-decoration: none\"><h3 style=\"color: white; text-align: center; text-decoration: none; cursor: pointer\">$title</h3></a>
                            <br>
                            <p style=\"color: white; text-align: center\">$description</p>
                        </div>
                    </div>

                    <br><br>";
                    }
                    ?>
                    <!------------------------>

                </div>
                <div id="bd" class="tab-pane fade">

                    <br><br>

                    <!-------------------------->
                    <?php
                    $query=mysqli_query($connection,"SELECT * FROM shows WHERE show_type='2' ORDER BY show_id DESC ");
                    while($row = mysqli_fetch_array($query)){
                        $title=$row['heading'];
                        $description=$row['description'];
                        $thumb=$row['thumbnail'];
                        $id=$row['show_id'];
                        echo "<div class=\"row\">
                        <div class=\"col-sm-3 col-md-4 col-lg-3\" style=\"margin-left: 5%\">
                            <a href='player.php?id=$id&type=1' style=\"cursor: pointer\">
                                <img src=\"admin/uploads/shows/$thumb\" style=\"width: 90%; height: auto\">
                            </a>
                        </div>
                        <div class=\"col-sm-6 col-md-5 col-lg-7\">
                            <a href='player.php?id=$id&type=1' style=\"text-decoration: none\"><h3 style=\"color: white; text-align: center; text-decoration: none; cursor: pointer\">$title</h3></a>
                            <br>
                            <p style=\"color: white; text-align: center\">$description</p>
                        </div>
                    </div>
                    
                    <br><br>";
                    }
                    ?>
                    <!------------------------>

                </div>
            </div>
        </div>
    </div>


</div>
</body>
</html>