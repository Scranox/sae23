<?php 

session_start();
$_SESSION["username"]=$_REQUEST["username"]; 
$username=$_SESSION["username"];
$_SESSION["password"]=$_REQUEST["password"];
$password=$_SESSION["password"];
$_SESSION["building"]=$_REQUEST["building"];
$building=$_SESSION["building"];
$_SESSION["authenticatedManager"]=FALSE;

error_reporting(E_ALL);
ini_set('display_errors', '1');


if (empty($password) || empty($username)){
    echo "<script type='text/javascript'>document.location.replace('loginGestionnaire.php?error=1');</script>";
    $_SESSION = array();
    session_destroy();
    unset($_SESSION); 
} else {
    include('mysql.php');
    $requete = 'SELECT `utilisateur`, `mdp` FROM `batiments` WHERE lettre_bat = "'.$building.'"';
	$resultat = mysqli_query($id_bd, $requete)
		or die("Execution de la requete impossible : $requete");
    $ligne = mysqli_fetch_assoc($resultat);
    if ($username==$ligne['utilisateur'] && $password==$ligne['mdp'])
	{
        $_SESSION["authenticatedManager"]=TRUE;		
        mysqli_close($id_bd);
        echo "<script type='text/javascript'>document.location.replace('./gestionnairePageOverview.php');</script>";
    } else {
        $_SESSION = array();
        session_destroy();
        unset($_SESSION); 
        mysqli_close($id_bd);
        echo "<script type='text/javascript'>document.location.replace('loginGestionnaire.php?error=1');</script>";
    }
}

?>
