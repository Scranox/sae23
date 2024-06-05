<?php 

    session_start();
    if(isset($_SESSION["authenticated"]) && $_SESSION["authenticated"]==FALSE){
        header("Location: ./loginFormAdmin.php")
    }

    $username=$_SESSION["username"]
    echo "$username"

?>

