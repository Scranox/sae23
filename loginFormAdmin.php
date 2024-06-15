<?php

session_start();

?>

<!DOCTYPE html>
<html>
    <head>
        <title>Authentification admin</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" type="text/css" href="./styles/main.css">
    </head>
    <body>
        <header>
            <button id="changeFontBtn">Changer la police vers OpenDyslexic</button>
            <?php 
            if(isset($_SESSION["authenticated"]) || isset($_SESSION["authenticatedManager"])){
                echo '<button onclick="location.href = '.'`/logout.php`'.'" id="logoutBtn">Se déconnecter</button>';
            }
        ?>
            <br><hr><h1>Authentification Administrateur</h1><hr><br>
        </header>
        <section id="formAdmin">
            <h2>Veuillez remplir vos informations de connexion.</h2>
            <form method="post" action="loginAdminProcessing.php">
                <label for="username">Nom d'utilisateur</label>
                <input type="text" name="username" required><br>
                <label for="password">Mot de passe</label>
                <input type="password" name="password" required><br>
                <button type="submit">Envoi</button>
            </form>
        </section>
        <footer>
        <hr>
        <ul>
            <li><p><a href="./projet.php">Gestion de projet</a></p></li>
            <li><p><a href="./adminPageOverview.php">Accès administrateur</a></p></li>
            <li><p><a href="./gestionnairePageOverview.php">Accès gestionnaire</a></p></li>
            <li><p><a href="./index.php">Accueil</a></p></li>
            <li><p><a href="./publicViewData.php">Mesures publiques</a></p></li>
        </ul>
    </footer>
    </body>
    <script src="./js/error.js"></script>
    <script src="./js/fonts.js"></script>
</html>
