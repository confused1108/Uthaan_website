<?php
/**
 * Created by PhpStorm.
 * User: Hitesh
 * Date: 19-Sep-17
 * Time: 1:49 AM
 */
include 'files/connect.php';
session_start();
if($_SESSION['signed_in']!=true)
{
    header("location:login.php");
}
else
{
    header("location:interviewsadmin.php");
}
?>