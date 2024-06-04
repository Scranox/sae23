<?php 


session_start();
$_SESSION["password"]=$_REQUEST["password"];  // Récupération du mot de passe
$motdepasse=$_SESSION["password"];
$_SESSION["auth"]=FALSE;

if (!isset($motdepasse)){
    echo "cool"
} else {
    echo "nein"
}

?>