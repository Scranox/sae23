<?php 


session_start();
$_SESSION["mdp"]=$_REQUEST["mdp"];  // Récupération du mot de passe
$motdepasse=$_SESSION["mdp"];
$_SESSION["auth"]=FALSE;

if (!isset($motdepasse)){
    echo "cool"
} else {
    echo "nein"
}

?>