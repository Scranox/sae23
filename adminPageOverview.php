<?php 

    session_start();
    if(!isset($_SESSION["authenticated"])){
        echo "<script type='text/javascript'>document.location.replace('loginFormAdmin.php');</script>";
    } else {
        $username=$_SESSION["username"];
        echo "$username";
    }
?>

