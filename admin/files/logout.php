<?php
/**
 * Created by PhpStorm.
 * User: Hitesh
 * Date: 19-Sep-17
 * Time: 1:53 AM
 */
include 'connect.php';
session_start();
unset($_SESSION['signed_in']);
session_destroy();
header("Location:../../index.php");
exit;
?>