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
    <script>
			CKEDITOR.replace( 'content' );
	</script>
</head>
<body>
<br><br><br><br><br>
<h3 style="text-align: center; font-size: 40px">Upload an Article</h3>
<div class="wpcf7" id="wpcf7-f156-p143-o1 formwrap">
    <form action="files/articles_upload.php" method="post" class="wpcf7-form" enctype="multipart/form-data">

        <p>
           <span class="wpcf7-form-control-wrap Name">
             <input type="text" name="heading" value="" size="40" class="nameinput wpcf7-form-control wpcf7-text wpcf7-validates-as-required" aria-required="true" aria-invalid="false" placeholder="Heading" required>
          </span>

        <h4 style="text-align: left; color: black"><b>Content:</b> </h4>
            <span class="wpcf7-form-control-wrap Message">
            <textarea class="ckeditor" name="content" cols="10" rows="10" aria-invalid="false" placeholder="Content" required></textarea>
          </span>
        <span class="wpcf7-form-control-wrap Name">
             <input type="text" name="writer" value="" size="40" class="nameinput wpcf7-form-control wpcf7-text wpcf7-validates-as-required" aria-required="true" aria-invalid="false" placeholder="Writer" required>
          </span>

        <span>
                <h4 style="text-align: left; color: black">Select Cover Image</h4>
                <input type="file" name="cover"  style="font-size: large; background-color: grey" required>
                <br>
                <h4 style="text-align: left; color: black">Select more Images</h4>
                <input type="file" name="pictures[]"  multiple style="font-size: large; background-color: grey">
        </span>
        <br><br><br><br>
            <input type="submit" value="Upload" class="wpcf7-form-control wpcf7-submit btn" >
        </p>
    </form>
        </div>

</div>
</body>
</html>
