<?php
/**
 * Created by PhpStorm.
 * User: Hitesh
 * Date: 18-Sep-17
 * Time: 4:43 PM
 */
include 'navbar.php';
include "admin/files/connect.php";
?>
<html>
<head>
    <title>Events | Welcome to Uthaan</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.0.2/jquery.min.js"></script>
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <style>
        body{
            background-color: #000000;
            padding: 0px;
            margin: 0px;
        }

        #gradient
        {
            width: 100%;
            height: auto;
            padding: 0px;
            margin: 0px;
        }
    </style>
    <style>
        #modal_image{
            max-width: 300px;
            height:200px;
        }
        .modal-title{
            text-align: center;
            font-weight: bold;
        }
        #organisers ,#winners{
            font-weight: bold;
            display: inline;
        }
        p{
            display: inline;
        }
        body.modal-open {
            overflow: visible;
        }
    </style>
</head>
<body>
<div id="gradient">
<br><br><br><br><br><br>
    <div class="container-fluid">
    <?php
    $query=mysqli_query($connection,"SELECT * FROM events");
    $num=mysqli_num_rows($query);
    $three='3';
    $minrows=$num%$three;
    $tmp=$num;
    $num=$num-$minrows;
    $num=$num/$three;
    while($num--)
    {
        $query=mysqli_query($connection,"SELECT * FROM events WHERE var='$tmp'");
        while($row = mysqli_fetch_array($query)){
            $thumbnail1=$row['thumbnail'];
            $var1=$row['var'];
        }
        $tmp--;

        $query=mysqli_query($connection,"SELECT * FROM events WHERE var='$tmp'");
        while($row = mysqli_fetch_array($query)){
            $thumbnail2=$row['thumbnail'];
            $var2=$row['var'];
        }
        $tmp--;

        $query=mysqli_query($connection,"SELECT * FROM events WHERE var='$tmp'");
        while($row = mysqli_fetch_array($query)){
            $thumbnail3=$row['thumbnail'];
            $var3=$row['var'];
        }
        $tmp--;

        echo "<div class=\"row\">
        <div class=\"col-md-4\">
            <div  style=\"width:90%; margin-left: 5%\">
                <img src=\"admin/uploads/events/$thumbnail1\" data-toggle=\"modal\" data-target=\"#myModal$var1\" style=\"cursor: pointer\" id=\"modal_image\"/ >
            </div>
            <br>
        </div>
        <div class=\"col-md-4\">
            <div style=\"width:90%; margin-left: 5%\">
             <img src=\"admin/uploads/events/$thumbnail2\" data-toggle=\"modal\" data-target=\"#myModal$var2\" style=\"cursor: pointer\" id=\"modal_image\"/>
            </div>
            <br>
        </div>
        <div class=\"col-md-4\">
            <div style=\"width:90%; margin-left: 5%\">
                <img src=\"admin/uploads/events/$thumbnail3\" data-toggle=\"modal\" data-target=\"#myModal$var3\" style=\"cursor: pointer\" id=\"modal_image\"/>
            </div>
            <br>
        </div>
    </div><br><br>";
    }

    if($minrows=='2')
    {
        $query=mysqli_query($connection,"SELECT * FROM events WHERE var='$tmp'");
        while($row = mysqli_fetch_array($query)){
            $thumbnail1=$row['thumbnail'];
            $var1=$row['var'];
        }
        $tmp--;

        $query=mysqli_query($connection,"SELECT * FROM events WHERE var='$tmp'");
        while($row = mysqli_fetch_array($query)){
            $thumbnail2=$row['thumbnail'];
            $var2=$row['var'];
        }
        $tmp--;

        echo "<div class=\"row\">
        <div class=\"col-md-4\">
            <div style=\"width:90%; margin-left: 5%\">
                <img src=\"admin/uploads/events/$thumbnail1\" data-toggle=\"modal\" data-target=\"#myModal$var1\" style=\"cursor: pointer\" id=\"modal_image\"/>
            </div>
            <br>
        </div>
        <div class=\"col-md-4\">
            <div style=\"width:90%; margin-left: 5%\">
             <img src=\"admin/uploads/events/$thumbnail2\" data-toggle=\"modal\" data-target=\"#myModal$var2\" style=\"cursor: pointer\" id=\"modal_image\"/>
            </div>
            <br>
        </div>
    </div><br><br>";
    }

    else if($minrows=='1')
    {
        $query=mysqli_query($connection,"SELECT * FROM events WHERE var='$tmp'");
        while($row = mysqli_fetch_array($query)){
            $thumbnail1=$row['thumbnail'];
            $var1=$row['var'];
        }
        $tmp--;
        echo "<div class=\"row\">
        <div class=\"col-md-4\">
            <div  style=\"width:90%; margin-left: 5%\">
                <img src=\"admin/uploads/events/$thumbnail1\" data-toggle=\"modal\" data-target=\"#myModal$var1\" style=\"cursor: pointer\" id='modal_image'/>
            </div>
            <br>
        </div>
    </div><br><br>";
    }
    ?>
    </div>
    <br><br><br><br>  <br><br><br><br>  <br><br><br><br>
</div>
<div>
    <?php
    $query=mysqli_query($connection,"SELECT * FROM events ORDER BY event_id");
    while($row = mysqli_fetch_array($query)){
        $var=$row['var'];
        $heading=$row['heading'];
        $description=$row['description'];
        $organisers=$row['organisers'];
        $winners=$row['winners'];

        echo " <div class=\"modal fade\" id=\"myModal$var\" role=\"dialog\" >
        <div class=\"modal-dialog\">
            <div class=\"modal-content\">
                <div class=\"modal-header\">
                    <button type=\"button\" class=\"close\" data-dismiss=\"modal\">&times;</button>
                    <h4 class=\"modal-title\">$heading</h4>
                </div>
                <div class=\"modal-body\">
                    <p>$description</p>
                    <br><br>
                    <h6 id=\"organisers\">Organisers : </h6><p>$organisers</p>
                    <br><br>
                    <h6 id=\"winners\">Winners : </h6><p>$winners</p>
                </div>
                <div class=\"modal-footer\">
                    <button type=\"button\" class=\"btn btn-default\" data-dismiss=\"modal\">Close</button>
                </div>
            </div>

        </div>
    </div>";
    }
    ?>

</div>


</body>
<script>

    var colors = new Array(
        [62,35,255],
        [60,255,60],
        [255,35,98],
        [45,175,230],
        [255,0,255],
        [255,128,0]);

    var step = 0;
    //color table indices for:
    // current color left
    // next color left
    // current color right
    // next color right
    var colorIndices = [0,1,2,3];

    //transition speed
    var gradientSpeed = 0.002;

    function updateGradient()
    {

        if ( $===undefined ) return;

        var c0_0 = colors[colorIndices[0]];
        var c0_1 = colors[colorIndices[1]];
        var c1_0 = colors[colorIndices[2]];
        var c1_1 = colors[colorIndices[3]];

        var istep = 1 - step;
        var r1 = Math.round(istep * c0_0[0] + step * c0_1[0]);
        var g1 = Math.round(istep * c0_0[1] + step * c0_1[1]);
        var b1 = Math.round(istep * c0_0[2] + step * c0_1[2]);
        var color1 = "rgb("+r1+","+g1+","+b1+")";

        var r2 = Math.round(istep * c1_0[0] + step * c1_1[0]);
        var g2 = Math.round(istep * c1_0[1] + step * c1_1[1]);
        var b2 = Math.round(istep * c1_0[2] + step * c1_1[2]);
        var color2 = "rgb("+r2+","+g2+","+b2+")";

        $('#gradient').css({
            background: "-webkit-gradient(linear, left top, right top, from("+color1+"), to("+color2+"))"}).css({
            background: "-moz-linear-gradient(left, "+color1+" 0%, "+color2+" 100%)"});

        step += gradientSpeed;
        if ( step >= 1 )
        {
            step %= 1;
            colorIndices[0] = colorIndices[1];
            colorIndices[2] = colorIndices[3];

            //pick two new target color indices
            //do not pick the same as the current one
            colorIndices[1] = ( colorIndices[1] + Math.floor( 1 + Math.random() * (colors.length - 1))) % colors.length;
            colorIndices[3] = ( colorIndices[3] + Math.floor( 1 + Math.random() * (colors.length - 1))) % colors.length;

        }
    }

    setInterval(updateGradient,10);
</script>
</html>

