<?php 

    session_start();
    error_reporting(E_ALL);
    ini_set('display_errors', '1');

    if(!isset($_SESSION["authenticated"])){
        //echo "<script type='text/javascript'>document.location.replace('loginFormAdmin.php');</script>";
        header('Location: loginFormAdmin.php');
        die();
    }

    if(!isset($_POST["sensorname"]) && !isset($_POST["sensortype"]) && !isset($_POST["sensorunit"])){
        //echo "<script type='text/javascript'>document.location.replace('loginFormAdmin.php');</script>";
        header('Location: adminPageOverview.php');
        die();
    }

    $batname = $_POST["batname"];

    include('mysql.php');
    mysqli_query($id_bd, 'DELETE FROM batiments WHERE nom_salle = "'.$batname.'"');
    mysqli_close($id_bd);
    header('Location: adminPageOverview.php');
    die();
?>
