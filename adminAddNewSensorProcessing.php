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
    $sensortype = $_POST["sensortype"];
    $sensorunit = $_POST["sensorunit"];
    $room = $_POST["room"];

    $id_bd = mysqli_connect("127.0.0.1", "proc", "prod", "sae23");
    mysqli_query($id_bd, "SET NAMES 'utf8'");
    mysqli_query($id_bd, "INSERT INTO capteurs (nom_capteur, type, unite, ref_salle) VALUES ('".$_POST['sensorname']."' , '".$_POST['sensortype']."' ,'".$_POST['sensorunit']."', '".$room."')");
    mysqli_close($id_bd);
    exec("(crontab -l; echo '*/10 * * * * /var/www/html/fetchMQTTbyRoom.sh $room $sensortype $sensorname') | crontab -");
    header('Location: adminPageOverview.php');
    die();
?>
