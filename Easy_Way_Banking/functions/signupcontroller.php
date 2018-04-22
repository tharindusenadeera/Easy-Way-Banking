<?php

require_once '../config/dbconnection.php';


$username = '';
$email = '';
$password = '';


if(isset($_POST['submit'])){

    if (isset($_POST['username'])){

        $username = $_POST['username'];
    }

    if(isset($_POST['email'])){

        $email = $_POST['email'];
    }

    if (isset($_POST['password'])){

        $password = md5($_POST['password']);
    }



    $sql = "INSERT INTO users(username,email,password) VALUES ('$username','$email','$password')";
    $result = mysqli_query($conn,$sql);



}

header("Location: ../signing.php");

