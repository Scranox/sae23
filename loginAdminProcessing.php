<?php 

session_start();
$_SESSION["username"]=$_REQUEST["username"]; 
$username=$_SESSION["username"];
$_SESSION["password"]=$_REQUEST["password"];
$password=$_SESSION["password"];
$_SESSION["authenticated"]=FALSE;

error_reporting(E_ALL);
ini_set('display_errors', '1');


if (empty($password) || empty($username)){
    echo "<script type='text/javascript'>document.location.replace('loginFormAdmin.php?error=1');</script>";
    $_SESSION = array();
    session_destroy();
    unset($_SESSION); 
} else {
    include('mysql.php');
    $requete = "SELECT `login`, `mdp` FROM `administration`";
	$resultat = mysqli_query($id_bd, $requete)
		or die("Execution de la requete impossible : $requete");
    $ligne = mysqli_fetch_row($resultat);
    if ($username==$ligne[0] && $password==$ligne[1])
	{
        $_SESSION["authenticated"]=TRUE;		
        mysqli_close($id_bd);
        echo "<script type='text/javascript'>document.location.replace('./adminPageOverview.php');</script>";
    } else {
        $_SESSION = array();
        session_destroy();
        unset($_SESSION); 
        mysqli_close($id_bd);
        echo "<script type='text/javascript'>document.location.replace('loginFormAdmin.php?error=1');</script>";
    }
}

?>
