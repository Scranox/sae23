<?php 

    session_start();
    error_reporting(E_ALL);
    ini_set('display_errors', '1');

    if(!isset($_SESSION["authenticated"])){
        //echo "<script type='text/javascript'>document.location.replace('loginFormAdmin.php');</script>";
        header('Location: loginFormAdmin.php');
        die();
    }

    if(!isset($_POST["roomname"]) && !isset($_POST["roomtype"]) && !isset($_POST["roomcapacity"]) && !isset($_POST["batiment"])){
        //echo "<script type='text/javascript'>document.location.replace('loginFormAdmin.php');</script>";
        header('Location: adminPageOverview.php');
        die();
    }

    $roomname = $_POST["roomname"];
    $roomtype = $_POST["roomtype"];
    $roomcapacity = $_POST["roomcapacity"];
    $building = $_POST["building"];

    include('mysql.php');
    mysqli_query($id_bd, "INSERT INTO salles (nom_salle, type, capacite, ref_batiment) VALUES ('".$_POST['roomname']."' , '".$_POST['roomtype']."' ,'".$_POST['roomcapacity']."', '".$building."')");
    mysqli_close($id_bd);  
    header('Location: adminPageOverview.php');
    die();
?>
