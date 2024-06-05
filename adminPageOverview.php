<?php 

    session_start();
    if(isset($_SESSION["authenticated"]) == TRUE && $_SESSION["authenticated"] == FALSE){
        header("Location: ./loginFormAdmin.php");
        echo "non connecté";
    }

    $username=$_SESSION["username"];
    echo "$username";

?>

