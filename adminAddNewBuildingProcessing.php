<?php 

    session_start();
    error_reporting(E_ALL);
    ini_set('display_errors', '1');

    if(!isset($_SESSION["authenticated"])){
        //echo "<script type='text/javascript'>document.location.replace('loginFormAdmin.php');</script>";
        header('Location: loginFormAdmin.php');
        die();
    }

    if(!isset($_POST["batletter"]) && !isset($_POST["batname"]) && !isset($_POST["batuser"]) && !isset($_POST["batpassword"])){
        //echo "<script type='text/javascript'>document.location.replace('loginFormAdmin.php');</script>";
        header('Location: adminPageOverview.php');
        die();
    }

    $letter = $_POST["batletter"];
    $batname = $_POST["batname"];
    $batuser = $_POST["batuser"];
    $batpassword = $_POST["batpassword"];

    $id_bd = mysqli_connect("127.0.0.1", "proc", "prod", "sae23");
    mysqli_query($id_bd, "SET NAMES 'utf8'");
    mysqli_query($id_bd, "INSERT INTO batiments (lettre_bat, nom, utilisateur, mdp) VALUES ('".$_POST['batletter']."' , '".$_POST['batname']."' ,'".$_POST['batuser']."' , '".$_POST['batpassword']."')");
    mysqli_close($id_bd);  
    header('Location: adminPageOverview.php');
    die();
?>
