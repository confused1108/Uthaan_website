<?php
/**
 * Created by PhpStorm.
 * User: Hitesh
 * Date: 22-Aug-17
 * Time: 1:55 AM
 */
include 'adminbar.php';
?>
<html>
<head>
    <link rel="stylesheet" href="../css/adminform.css">
</head>
<body>
<br><br><br><br><br>
<h3 style="text-align: center; font-size: 40px">Upload Images</h3>
<div class="wpcf7" id="wpcf7-f156-p143-o1 formwrap">
    <form action="files/photos_upload.php" method="post" class="wpcf7-form" enctype="multipart/form-data">

        <p>
           <span class="wpcf7-form-control-wrap Name">
             <input type="text" name="heading" value="" size="40" class="nameinput wpcf7-form-control wpcf7-text wpcf7-validates-as-required" aria-required="true" aria-invalid="false" placeholder="Heading (1-2 words)" required>
          </span>
        <span class="wpcf7-form-control-wrap Message">
            <textarea name="description" cols="10" rows="10" class="wpcf7-form-control wpcf7-textarea" aria-invalid="false" placeholder="Description (5-6 words)" required></textarea>
          </span>

        <span>
                <h4 style="text-align: left; color: black">Select Images (max 15)</h4>
                <input type="file" name="pictures[]"  multiple style="font-size: large; background-color: grey" required>
        </span>
        <br><br><br><br>
        <input type="submit" value="Upload" class="wpcf7-form-control wpcf7-submit btn" >
        </p>
    </form>
</div>


</body>
</html>