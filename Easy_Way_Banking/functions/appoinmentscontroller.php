<?php
require_once '../config/dbconnection.php';



$firstname = '';
$lastname = '';
$contact_number = '';
$email = '';
$reason = '';
$data = '';
$time ='';


if (isset($_POST['submit'])){

    if (isset($_POST['firstname'])){

        $firstname = $_POST['firstname'];
    }

    if (isset($_POST['lastname'])){

        $lastname = $_POST['lastname'];
    }

    if (isset($_POST['contact_number'])){

        $contact_number = $_POST['contact_number'];
    }

    if (isset($_POST['email'])){

        $email = $_POST['email'];
    }

    if (isset($_POST['reason'])){

        $reason = $_POST['reason'];
    }

    if (isset($_POST['date'])){

        $date = $_POST['date'];
    }

    if (isset($_POST['time'])){

        $time = $_POST['time'];
    }


    $sql = "INSERT INTO appoinmnets(firstname,lastname,contact_number,email,reason,date,time) VALUES ('$firstname','$lastname','$contact_number','$email','$reason','$date','$time')";
    $result = mysqli_query($conn,$sql);
}

header("Location: ../index.php");