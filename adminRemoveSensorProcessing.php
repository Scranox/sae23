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

    $sensorname = $_POST["sensorname"];

    include('mysql.php');
    mysqli_query($id_bd, 'DELETE FROM mesures WHERE ref_capteur = "'.$sensorname.'"');
    mysqli_query($id_bd, 'DELETE FROM capteurs WHERE nom_capteur = "'.$sensorname.'"');
    mysqli_close($id_bd);
    header('Location: adminPageOverview.php');
    die();
?>
