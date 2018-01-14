<?php
/**
 * Created by PhpStorm.
 * User: Hitesh
 * Date: 19-Sep-17
 * Time: 10:53 PM
 */
include 'adminbar.php';
?>
<html>
<head>
    <link rel="stylesheet" href="../css/adminform.css">
</head>
<body>
<br><br><br><br><br>
<h3 style="text-align: center; font-size: 40px">Upload Shows</h3>
<div class="wpcf7" id="wpcf7-f156-p143-o1 formwrap">
    <form action="files/shows_upload.php" method="post" class="wpcf7-form" enctype="multipart/form-data">

        <p>
           <span class="wpcf7-form-control-wrap Name">
             <input type="text" name="heading" value="" size="40" class="nameinput wpcf7-form-control wpcf7-text wpcf7-validates-as-required" aria-required="true" aria-invalid="false" placeholder="Heading " required>
          </span>
            <span class="wpcf7-form-control-wrap Message">
            <textarea name="description" cols="10" rows="10" class="wpcf7-form-control wpcf7-textarea" aria-invalid="false" placeholder="Description " required></textarea>
          </span>
            <span class="wpcf7-form-control-wrap Name">
             <input type="text" name="show_type" value="" size="40" class="nameinput wpcf7-form-control wpcf7-text wpcf7-validates-as-required" aria-required="true" aria-invalid="false" placeholder="Show ID" required>
          </span>
        <h4 style="text-align: left; color: black">Show IDs...<br> BMG S1 : 1<br> Big Debate : 2</h4>
        <span class="wpcf7-form-control-wrap Name">
             <input type="text" name="link" value="" size="40" class="nameinput wpcf7-form-control wpcf7-text wpcf7-validates-as-required" aria-required="true" aria-invalid="false" placeholder="Embeded link " required>
          </span>

            <span>
                <h4 style="text-align: left; color: black">Select Thumbnail</h4>
                <input type="file" name="thumb"  style="font-size: large; background-color: grey" required>
        </span>
            <br><br><br><br>
            <input type="submit" value="Upload" class="wpcf7-form-control wpcf7-submit btn" >
        </p>
    </form>
</div>


</body>
</html>