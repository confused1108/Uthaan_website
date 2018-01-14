<?php
/**
 * Created by PhpStorm.
 * User: Hitesh
 * Date: 19-Sep-17
 * Time: 1:22 AM
 */
$server = 'localhost';
$username   = 'root';
$password   = '';
$database   = 'uthaan';
if(!$connection = mysqli_connect($server, $username, $password, $database))
{
    exit('Error: could not establish database connection');
    echo "error";
}
if(!mysqli_select_db($connection,$database))
{
    exit('Error: could not select the database');
    echo "error";
}
?>