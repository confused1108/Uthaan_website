<?php
/**
 * Created by PhpStorm.
 * User: Hitesh
 * Date: 20-Sep-17
 * Time: 3:35 PM
 */
include 'connect.php';
session_start();
$id=$_SESSION['id'];
$name=$_POST['name'];
$number=$_POST['number'];
$email=$_POST['email'];
$message=$_POST['message'];
$approved='0';
$db=new PDO("mysql:host=localhost;dbname=uthaan","root","");
if($db) {
    $sql = "INSERT INTO
                    message(name,number,email,message,date,approved)
                VALUES(?,?,?,?,?,?)";
    $test = $db->prepare($sql);
    $test->bindParam(1, $name);
    $test->bindParam(2, $number);
    $test->bindParam(3, $email);
    $test->bindParam(4, $message);
    $test->bindParam(5, date('y/m/d'));
    $test->bindParam(6, $approved);
    if ($test->execute()) {
        header("location:../../index.php");
    }
    else
        echo 'Something went wrong. Please try again later.';
}
else
    echo 'Something went wrong. Please try again later.';
?>