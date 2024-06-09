<?php 

    session_start();
    if(!isset($_SESSION["authenticated"])){
        //echo "<script type='text/javascript'>document.location.replace('loginFormAdmin.php');</script>";
        header('Location: loginFormAdmin.php');
        die();
    }
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>SAÉ 23</title>
    <link rel="stylesheet" type="text/css" href="./styles/main.css">
    <link rel="stylesheet" type="text/css" href="./styles/admin.css">
</head>
<body>
    <header>
        <br><hr><h1>SAÉ 23</h1><hr><br>
    </header>
    <section class="buildings">
        <h1>Bâtiments</h1>
        <ul>
            <li>
                <h2>E</h2>
                <h3>Bâtiment E</h3>
            </li>
            <li>
                <h2>G</h2>
                <h3>Bâtiment G</h3>
            </li>
            <li>
                <h2>E</h2>
                <h3>Bâtiment E</h3>
            </li>
            <li>
                <h2>G</h2>
                <h3>Bâtiment G</h3>
            </li>
            <li>
                <h2>E</h2>
                <h3>Bâtiment E</h3>
            </li>
            <li>
                <h2>G</h2>
                <h3>Bâtiment G</h3>
            </li>
            <li id="addbutton">
                <a href="index.html">
                    <h2>+</h2>
                    <h3>Ajouter un nouveau bâtiment</h3>
                </a>
            </li>
        </ul>
    </section>
    <ul>
        
    </ul>
    <footer>
        <hr>
        <ul>
            <li id="footerleft"><p><a href="./projet.php">Gestion de projet</a></p></li>
            <li id="footercenter"><p><a href="./adminPageOverview.php">Accès administrateur</a></p></li>
            <li id="footerright"><p><a href="./loginGestionnaire.html">Accès gestionnaire</a></p></li>
        </ul>
    </footer>

    <script src="./js/fonts.js"></script>
</body>
</html>

