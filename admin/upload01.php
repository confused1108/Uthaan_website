<?php
$target_dir = "uploads/";

/*foreach ($_FILES["fileToUpload"]["error"] as $key => $error) {
    if ($error == UPLOAD_ERR_OK) {
$tmp="Hitesh";
$extension = end(explode(".", $_FILES["fileToUpload"]["name"][$key]));
$target_file = $target_dir .$tmp.".".$extension;
$uploadOk = 1;
$imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
// Check if image file is a actual image or fake image
if(isset($_POST["submit"])) {
    $check = getimagesize($_FILES["fileToUpload"]["tmp_name"][$key]);
    if($check !== false) {
        echo "File is an image - " . $check["mime"] . ".";
        $uploadOk = 1;
    } else {
        echo "File is not an image.";
        $uploadOk = 0;
    }
}*/
$fi = new FilesystemIterator("uploads/", FilesystemIterator::SKIP_DOTS);
$var=iterator_count($fi)+1;
$total = count($_FILES['pictures']['name']);

// Loop through each file
for($i=0; $i<$total; $i++) {
  //Get the temp file path
  $tmpFilePath = $_FILES['pictures']['tmp_name'][$i];

  //Make sure we have a filepath
    $extension = end(explode(".", $_FILES["pictures"]["name"][$i]));
    $newFilePath = "./uploads/" . "img_".$var.".".$extension;

    //Upload the file into the temp dir
    if(move_uploaded_file($tmpFilePath, $newFilePath)) {

      //Handle other code here

    }
    $var++;
}

// Allow certain file formats
/*if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
&& $imageFileType != "gif" ) {
    echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
    $uploadOk = 0;
}
// Check if $uploadOk is set to 0 by an error
if ($uploadOk == 0) {
    echo "Sorry, your file was not uploaded.";
// if everything is ok, try to upload file
} else {
    if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"][$key], $target_file)) {
        echo "The file ". basename( $_FILES["fileToUpload"]["name"][$key]). " has been uploaded.";
    } else {
        echo "Sorry, there was an error uploading your file.";
    }
}
}
}*/
?>