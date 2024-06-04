<?php 


session_start();
$_SESSION["password"]=$_REQUEST["password"];
$password=$_SESSION["password"];
$_SESSION["username"]=$_REQUEST["username"]; 
$username=$_SESSION["username"];
$_SESSION["auth"]=FALSE;

if (!empty($motdepasse)){
    echo "<script type='text/javascript'>document.location.replace('erreur.php');</script>";
} else {
    echo "test";
    include ("mysql.php");

	$requete = "SELECT `login`, `mdp` FROM `administration`";
	$resultat = mysqli_query($id_bd, $requete)
		or die("Execution de la requete impossible : $requete");

	$ligne = mysqli_fetch_row($resultat);
    
	if ($username==$ligne[0])
	{
        if ($password==$ligne[1]){
            $_SESSION["auth"]=TRUE;		
            mysqli_close($id_bd);
		    echo "<script type='text/javascript'>document.location.replace('index.php');</script>";
        }	
	}
	else
	{
		$_SESSION = array();
        session_destroy();
        unset($_SESSION); 
        mysqli_close($id_bd);
    }
}

?>