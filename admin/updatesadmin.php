<?php
/**
 * Created by PhpStorm.
 * User: Hitesh
 * Date: 20-Sep-17
 * Time: 3:22 PM
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
<br><br><br>
<h3 style="text-align: center; font-size: 40px">New Update</h3>
<div class="wpcf7" id="wpcf7-f156-p143-o1 formwrap">
    <form action="files/updates_upload.php" method="post" class="wpcf7-form" enctype="multipart/form-data">

        <p>

        <h4 style="text-align: left; color: black"><b>Update:</b> </h4>

          <span class="wpcf7-form-control-wrap Message">
            <textarea name="content" cols="10" rows="10" class="ckeditor" aria-invalid="false" placeholder="Update" required></textarea>
          </span>

        <br><br>
        <input type="submit" value="Upload" class="wpcf7-form-control wpcf7-submit btn" >
        </p>
    </form>
</div>

</div>
</body>
</html>
