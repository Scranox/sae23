<?php 

    session_start();
    if(!isset($_SESSION["authenticated"])){
        echo "<script type='text/javascript'>document.location.replace('loginFormAdmin.php');</script>";
    } else {
        $username=$_SESSION["username"];
        echo "$username";
    }
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>SAÉ 23</title>
    <link rel="stylesheet" type="text/css" href="./styles/main.css">
</head>
<body>
    <header>
        <br><hr><h1>SAÉ 23</h1><hr><br>
    </header>
    <div>
        
    </div>
    <footer>
        <hr>
        <ul>
            <li id="footerleft"><p><a href="./projet.php">Gestion de projet</a></p></li>
            <li id="footercenter"><p><a href="./adminPageOverview.php">Accès administrateur</a></p></li>
            <li id="footerright"><p><a href="./loginGestionnaire.html">Accès gestionnaire</a></p></li>
        </ul>
    </footer>

    <script src="./scripts/fonts.js"></script>
</body>
</html>

