<?php

require_once '../config/dbconnection.php';


$firstname = '';
$lastname = '';
$tele_number = '';
$mobile_number = '';
$email = '';
$ol = '';
$al = '';
$pro_qualification = '';


if (isset($_POST['submit'])){

    if (isset($_POST['first_name'])){

        $firstname = $_POST['first_name'];
    }

    if (isset($_POST['first_name'])){

        $lastname = $_POST['last_name'];
    }

    if (isset($_POST['tele_number'])){

        $tele_number = $_POST['tele_number'];
    }

    if (isset($_POST['mobile_number'])){

        $mobile_number = $_POST['mobile_number'];
    }

    if (isset($_POST['email'])){

        $email = $_POST['email'];
    }

    if (isset($_POST['ol'])){

        $ol = $_POST['ol'];
    }

    if (isset($_POST['al'])){

        $al = $_POST['al'];
    }

    if (isset($_POST['Pro_qualification'])){

        $pro_qualification = $_POST['Pro_qualification'];
    }


    $fileName = $_FILES['Filename']['name'];
    $target = "uploads/";
    $fileTarget = $target.$fileName;
    $tempFileName = $_FILES["Filename"]["tmp_name"];
    $result = move_uploaded_file($tempFileName,$fileTarget);


    $sql = "INSERT INTO careers(firstname,lastname,tele_no,mobi_no,email,ol,al,pro_qualification,file) VALUES 
            ('$firstname','$lastname','$tele_number','$mobile_number','$email','$ol','$al','$pro_qualification','$fileTarget')";

    $result = mysqli_query($conn,$sql);

    header("Location: ../careers.php");

}

