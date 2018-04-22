<?php

require_once '../config/dbconnection.php';


$username = '';
$password = '';


if(isset($_POST['submit'])) {

    session_start();

    if (isset($_POST['username'])) {
        $username = $_POST['username'];
    }


    if (isset($_POST['password'])) {
        $password = md5($_POST['password']);
    }


    $sql = "SELECT username,password from users where username='$username' and password='$password'";
    $result = mysqli_query($conn, $sql);

    //echo $result;

    header("Location: ../index.php");


}



