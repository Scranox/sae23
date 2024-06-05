<?php 

    

    session_start();
    if(isset($_SESSION["authenticated"]) && $_SESSION["authenticated"]==FALSE){
        $username=$_SESSION["username"]
        header("Location: ./loginAdminProcessing.php")
    }

    echo "$username"

?>

