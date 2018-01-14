<?php
/**
 * Created by PhpStorm.
 * User: Hitesh
 * Date: 19-Sep-17
 * Time: 1:39 AM
 */
include 'connect.php';
session_start();
$username = $_POST['admin_username'];
$password = sha1($_POST['admin_password']);
$query = mysqli_query($connection,"SELECT * FROM admin WHERE admin_username='$username'");
$numrows = mysqli_num_rows($query);
if ($numrows!=0) {
    while ($row = mysqli_fetch_array($query)) {
        if ($password == $row['admin_password']) {
            $_SESSION['id'] = $row['admin_id'];
            $_SESSION['signed_in'] = true;
            header("location:../index.php");
        } else {
            echo "<br><br><p style='font-size:34px; text-align:center; font-weight:bold;'>You have supplied a wrong user/password combination. Please try again.</p>";
            echo '<p style="text-align:center; font-size:19px; font-weight:bold; font-decoration:none;"><a href="../login.php">Sign In again</a></p>';
        }
    }
}
else {
    echo "<br><br><p style='font-size:34px; text-align:center; font-weight:bold;'>You have supplied a wrong user/password combination. Please try again..</p>";
    echo '<p style="text-align:center; font-size:19px; font-weight:bold; font-decoration:none;"><a href="../login.php">Sign In again</a></p>';
}
?>