<?php
/**
 * Created by PhpStorm.
 * User: Hitesh
 * Date: 18-Aug-17
 * Time: 11:56 AM
 */
include 'admin/files/connect.php';
include 'navbar.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Gallery | Welcome to Uthaan</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
        function hideURLbar(){ window.scrollTo(0,1); } </script>
    <!--// Meta tag Keywords -->
    <!-- css files -->
    <link rel="stylesheet" href="css/bootstrap.css"> <!-- Bootstrap-Core-CSS -->
    <link rel="stylesheet" href="css/gallery.css" type="text/css" media="all" /> <!-- Style-CSS -->
    <link rel="stylesheet" href="css/font-awesome.css"> <!-- Font-Awesome-Icons-CSS -->
    <link rel="stylesheet" href="css/flexslider.css" type="text/css" media="screen" /> <!-- Flexslider-CSS -->
    <link href="css/simpleLightbox.css" rel="stylesheet" type="text/css" />
    <!-- //css files -->
    <!-- online-fonts -->
    <link href="//fonts.googleapis.com/css?family=Philosopher:400,400i,700,700i" rel="stylesheet">
    <link href="//fonts.googleapis.com/css?family=Quicksand:300,400,500,700" rel="stylesheet">
    <!-- //online-fonts -->
    <style>
        .container{
            margin: 0;
            padding: 0;
            width: 100%;
        }
        .nav-pills > li.active > a,
        .nav-pills > li.active > a:hover,
        .nav-pills > li.active > a:focus {
            color: #000;
            background-color: #ce8483;
        }
        .nav-pills>li>a {
            font-size: 20px;
            color: #000;
            text-decoration: none;
        }
        .img-responsive{
        height:250px;
         }
    </style>

</head>
<body>
<div class="container">
<br><br><br><br><br>
    <ul class="nav nav-pills nav-justified" >
        <li class="active" style="10%" ><a data-toggle="pill" href="#images"><b>Images</b></a></li>


        <li><a data-toggle="pill" href="#videos"><b>Videos</b></a></li>
    </ul>
    <div class="tab-content">
        <div id="images" class="tab-pane fade in active">
<!-- pics -->
<br>
<div class="banner-bottom" id="gallery">
    <div class="container">


            <?php
            $query=mysqli_query($connection,"SELECT * FROM gallery_images");
            $num=mysqli_num_rows($query);
            $three='3';
            $minrows=$num%$three;
            $tmp=$num;
            $num=$num-$minrows;
            $num=$num/$three;
            while($num--)
            {
                $query=mysqli_query($connection,"SELECT * FROM gallery_images WHERE var='$tmp'");
                while($row = mysqli_fetch_array($query)){
                    $headingg1=$row['heading'];
                    $description1=$row['description'];
                    $image1=$row['image_name'];
                }
                $tmp--;

                $query=mysqli_query($connection,"SELECT * FROM gallery_images WHERE var='$tmp'");
                while($row = mysqli_fetch_array($query)){
                    $headingg2=$row['heading'];
                    $description2=$row['description'];
                    $image2=$row['image_name'];
                }
                $tmp--;

                $query=mysqli_query($connection,"SELECT * FROM gallery_images WHERE var='$tmp'");
                while($row = mysqli_fetch_array($query)){
                    $headingg3=$row['heading'];
                    $description3=$row['description'];
                    $image3=$row['image_name'];
                }
                $tmp--;

                echo "<div class=\"w3ls_gallery_grids\">
                         <div class=\"col-md-4 w3_agile_gallery_grid\">
                <div class=\"hits\">
                    <div class=\"agile_gallery_grid\">
                        <a  href=\"admin/uploads/gallery/photos/$image1\">

                            <div class=\"agile_gallery_grid1\" style=\"width: 90%; height: 250px; margin-left: 5%;\">
                                <img src=\"admin/uploads/gallery/photos/$image1\" alt=\" \" class=\"img-responsive\" />
                                <div class=\"w3layouts_gallery_grid1_pos\">
                                    <h3>$headingg1</h3>
                                    <p>$description1</p>
                                </div>
                            </div>
                        </a>
                    </div>
                    <br>
                </div>
            </div>
            <div class=\"col-md-4 w3_agile_gallery_grid\">
                <div class=\"hits\">
                    <div class=\"agile_gallery_grid\">
                        <a href=\"admin/uploads/gallery/photos/$image2\">
                            <div class=\"agile_gallery_grid1\" style=\"width: 90%; height: 250px; margin-left: 5%;\">
                                <img src=\"admin/uploads/gallery/photos/$image2\" alt=\" \" class=\"img-responsive\" />
                                <div class=\"w3layouts_gallery_grid1_pos\">
                                    <h3>$headingg2</h3>
                                    <p>$description2</p>
                                </div>
                            </div>
                        </a>
                    </div>
                    <br>

                </div>
            </div>
            <div class=\"col-md-4 w3_agile_gallery_grid\">
                <div class=\"hits\">
                    <div class=\"agile_gallery_grid\">
                        <a href=\"admin/uploads/gallery/photos/$image3\">
                            <div class=\"agile_gallery_grid1\" style=\"width: 90%; height: 250px; margin-left: 5%;\">
                                <img src=\"admin/uploads/gallery/photos/$image3\" alt=\" \" class=\"img-responsive\" />
                                <div class=\"w3layouts_gallery_grid1_pos\">
                                    <h3>$headingg3</h3>
                                    <p>$description3</p>
                                </div>
                            </div>
                        </a>
                    </div>
                    <br>

                </div>
            </div>
            <div class=\"clearfix\"></div>
        </div><br>";
            }

            if($minrows=='2')
            {
                $query=mysqli_query($connection,"SELECT * FROM gallery_images WHERE var='$tmp'");
                while($row = mysqli_fetch_array($query)){
                    $headingg1=$row['heading'];
                    $description1=$row['description'];
                    $image1=$row['image_name'];
                }
                $tmp--;

                $query=mysqli_query($connection,"SELECT * FROM gallery_images WHERE var='$tmp'");
                while($row = mysqli_fetch_array($query)){
                    $headingg2=$row['heading'];
                    $description2=$row['description'];
                    $image2=$row['image_name'];
                }
                $tmp--;


                echo "<div class=\"w3ls_gallery_grids\">
                         <div class=\"col-md-4 w3_agile_gallery_grid\">
                <div class=\"hits\">
                    <div class=\"agile_gallery_grid\">
                        <a  href=\"admin/uploads/gallery/photos/$image1\" >
                            <div class=\"agile_gallery_grid1\" style=\"width:90%; height:250px; margin-left:5%;\">
                                <img src=\"admin/uploads/gallery/photos/$image1\" alt=\" \" class=\"img-responsive\" />
                                <div class=\"w3layouts_gallery_grid1_pos\">
                                    <h3>$headingg1</h3>
                                    <p>$description1</p>
                                </div>
                            </div>
                        </a>
                    </div>
                    <br>
                </div>
            </div>
             <div class=\"col-md-4 w3_agile_gallery_grid\">
                <div class=\"hits\">
                    <div class=\"agile_gallery_grid\">
                        <a  href=\"admin/uploads/gallery/photos/$image2\" >
                            <div class=\"agile_gallery_grid1\" style=\"width:90%; height: 250px; margin-left:5%;\">
                                <img src=\"admin/uploads/gallery/photos/$image2\" alt=\" \" class=\"img-responsive\" />
                                <div class=\"w3layouts_gallery_grid1_pos\">
                                    <h3>$headingg2</h3>
                                    <p>$description2</p>
                                </div>
                            </div>
                        </a>
                    </div>
                    <br>
                </div>
            </div>
            <div class=\"clearfix\"></div>
        </div><br>";
            }

            else if($minrows=='1')
            {
                $query=mysqli_query($connection,"SELECT * FROM gallery_images WHERE var='$tmp'");
                while($row = mysqli_fetch_array($query)){
                    $headingg1=$row['heading'];
                    $description1=$row['description'];
                    $image1=$row['image_name'];
                }
                $tmp--;
                echo "<div class=\"w3ls_gallery_grids\">
                         <div class=\"col-md-4 w3_agile_gallery_grid\">
                <div class=\"hits\">
                    <div class=\"agile_gallery_grid\">
                        <a  href=\"admin/uploads/gallery/photos/$image1\" >
                            <div class=\"agile_gallery_grid1\" style=\"width:90%; height: 250px; margin-left:5%;\">
                                <img src=\"admin/uploads/gallery/photos/$image1\" alt=\" \" class=\"img-responsive\" />
                                <div class=\"w3layouts_gallery_grid1_pos\">
                                    <h3>$headingg1</h3>
                                    <p>$description1</p>
                                </div>
                            </div>
                        </a>
                    </div>
                    <br>
                </div>
            </div>
        
            <div class=\"clearfix\"></div>
        </div><br>";
            }
            ?>


    </div>
</div></div>
<!----------------------------Videos------------------------>

        <div id="videos" class="tab-pane fade">
            <br>
            <div class="banner-bottom" id="gallery">
                <div class="container">

                    <?php
                    $query=mysqli_query($connection,"SELECT * FROM gallery_videos");
                    $num=mysqli_num_rows($query);
                    $three='3';
                    $minrows=$num%$three;
                    $tmp=$num;
                    $num=$num-$minrows;
                    $num=$num/$three;
                    while($num--)
                    {
                        $query=mysqli_query($connection,"SELECT * FROM gallery_videos WHERE var='$tmp'");
                        while($row = mysqli_fetch_array($query)){
                            $description1=$row['description'];
                            $image1=$row['thumbnail'];
                            $video_id1=$row['video_id'];
                        }
                        $tmp--;

                        $query=mysqli_query($connection,"SELECT * FROM gallery_videos WHERE var='$tmp'");
                        while($row = mysqli_fetch_array($query)){
                            $description2=$row['description'];
                            $image2=$row['thumbnail'];
                            $video_id2=$row['video_id'];
                        }
                        $tmp--;

                        $query=mysqli_query($connection,"SELECT * FROM gallery_videos WHERE var='$tmp'");
                        while($row = mysqli_fetch_array($query)){
                            $description3=$row['description'];
                            $image3=$row['thumbnail'];
                            $video_id3=$row['video_id'];
                        }
                        $tmp--;

                        echo "<div class=\"w3ls_gallery_grids\">
                         <div class=\"col-md-4 w3_agile_gallery_grid\">
               
                    <div class=\"agile_gallery_grid\">
                        <a  href='player.php?id=$video_id1&type=2'>
                            <div class=\"agile_gallery_grid1\" style=\"width: 90%; height: 250px; margin-left: 5%;\">
                                <img src=\"admin/uploads/gallery/thumbnails/$image1\" alt=\" \" class=\"img-responsive\" />
                                <div class=\"w3layouts_gallery_grid1_pos\">
                                    <p>$description1</p>
                                </div>
                            </div>
                        </a>
                    </div>
                    <br>
                
            </div>
            <div class=\"col-md-4 w3_agile_gallery_grid\">
                    <div class=\"agile_gallery_grid\">
                        <a href='player.php?id=$video_id2&type=2'>
                            <div class=\"agile_gallery_grid1\" style=\"width: 90%; height: 250px; margin-left: 5%;\">
                                <img src=\"admin/uploads/gallery/thumbnails/$image2\" alt=\" \" class=\"img-responsive\" />
                                <div class=\"w3layouts_gallery_grid1_pos\">          
                                    <p>$description2</p>
                                </div>
                            </div>
                        </a>
                    </div>
                    <br>
            </div>
            <div class=\"col-md-4 w3_agile_gallery_grid\">
                    <div class=\"agile_gallery_grid\">
                        <a href='player.php?id=$video_id3&type=2'>
                            <div class=\"agile_gallery_grid1\" style=\"width: 90%; height: 250px; margin-left: 5%;\">
                                <img src=\"admin/uploads/gallery/thumbnails/$image3\" alt=\" \" class=\"img-responsive\" />
                                <div class=\"w3layouts_gallery_grid1_pos\">
                                    <p>$description3</p>
                                </div>
                            </div>
                        </a>
                    </div>
                    <br>
            </div>
            <div class=\"clearfix\"></div>
        </div><br>";
                    }

                    if($minrows=='2')
                    {
                        $query=mysqli_query($connection,"SELECT * FROM gallery_videos WHERE var='$tmp'");
                        while($row = mysqli_fetch_array($query)){
                            $description1=$row['description'];
                            $image1=$row['thumbnail'];
                            $video_id1=$row['video_id'];
                        }
                        $tmp--;

                        $query=mysqli_query($connection,"SELECT * FROM gallery_videos WHERE var='$tmp'");
                        while($row = mysqli_fetch_array($query)){
                            $description2=$row['description'];
                            $image2=$row['thumbnail'];
                            $video_id2=$row['video_id'];
                        }
                        $tmp--;


                        echo "<div class=\"w3ls_gallery_grids\">
                         <div class=\"col-md-4 w3_agile_gallery_grid\">
                    <div class=\"agile_gallery_grid\">
                        <a href='player.php?id=$video_id1&type=2' >
                            <div class=\"agile_gallery_grid1\" style=\"width:90%; height:250px; margin-left:5%;\">
                                <img src=\"admin/uploads/gallery/thumbnails/$image1\" alt=\" \" class=\"img-responsive\" />
                                <div class=\"w3layouts_gallery_grid1_pos\">
                                    <p>$description1</p>
                                </div>
                            </div>
                        </a>
                    </div>
                    <br>
            </div>
             <div class=\"col-md-4 w3_agile_gallery_grid\">
                    <div class=\"agile_gallery_grid\">
                        <a  href='player.php?id=$video_id2&type=2' >
                            <div class=\"agile_gallery_grid1\" style=\"width:90%; height: 250px; margin-left:5%;\">
                                <img src=\"admin/uploads/gallery/thumbnails/$image2\" alt=\" \" class=\"img-responsive\" />
                                <div class=\"w3layouts_gallery_grid1_pos\">
                                    <p>$description2</p>
                                </div>
                            </div>
                        </a>
                    </div>
                    <br>
            </div>
            <div class=\"clearfix\"></div>
        </div><br>";
                    }

                    else if($minrows=='1')
                    {
                        $query=mysqli_query($connection,"SELECT * FROM gallery_videos WHERE var='$tmp'");
                        while($row = mysqli_fetch_array($query)){
                            $description1=$row['description'];
                            $image1=$row['thumbnail'];
                            $video_id1=$row['video_id'];
                        }
                        $tmp--;
                        echo "<div class=\"w3ls_gallery_grids\">
                         <div class=\"col-md-4 w3_agile_gallery_grid\">
                    <div class=\"agile_gallery_grid\">
                        <a href='player.php?id=$video_id1&type=2'\" >
                            <div class=\"agile_gallery_grid1\" style=\"width:90%; height: 250px; margin-left:5%;\">
                                <img src=\"admin/uploads/gallery/thumbnails/$image1\" alt=\" \" class=\"img-responsive\" />
                                <div class=\"w3layouts_gallery_grid1_pos\">
                                    <p>$description1</p>
                                </div>
                            </div>
                        </a>
                    </div>
                    <br>
            </div>
        
            <div class=\"clearfix\"></div>
        </div><br>";
                    }
                    ?>

                </div>
            </div>
            <!-- //gallery -->
        </div>
    </div>

<!-- js-scripts -->

<!-- js -->
<script type="text/javascript" src="js/jquery-2.1.4.min.js"></script>
<script type="text/javascript" src="js/bootstrap.js"></script> <!-- Necessary-JavaScript-File-For-Bootstrap -->
<!-- //js -->

<!-- gallery -->
<script src="js/simpleLightbox.js"></script>
<script>
    $('.hits a').simpleLightbox();
</script>
<!-- //gallery -->

<!-- //js-scripts -->
</body>
</html>
