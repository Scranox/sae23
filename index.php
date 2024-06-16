<?php

session_start();

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
        <button id="changeFontBtn">Changer la police vers OpenDyslexic</button>
        <?php 
            if(isset($_SESSION["authenticated"]) || isset($_SESSION["authenticatedManager"])){
                echo '<button onclick="location.href = '.'`/logout.php`'.'" id="logoutBtn">Se déconnecter</button>';
            }
        ?>
        <br><hr><h1>SAÉ 23</h1><hr><br>
    </header>
    <p>
        Ce site est créé dans le cadre de la SAÉ 23 et à pour but de mettre en avant les compétences acquises dans de nombreuses ressources depuis le début de la première année de ce BUT R&T.<br>
        Il a pour but de lister les différentes mesures prises par plusieurs capteurs dans les salles de l'IUT, comme il pourrait être implémenté dans un site réel, avec plusieurs accès à différentes pages, telles que la page d'un administrateur "tout-puissant" et des gestionnaires de bâtiments qui ont le pouvoir de créer des salles et des capteurs dans leur bâtiment seulement.<br>
        Nous avons pu le réaliser à l'aide de nombreux services, tels que l'utilisation d'une base de données MariaDB utilisée conjointement avec le gestionnaire <a href="./phpmyadmin">PHPMyAdmin</a>, mais aussi le langage de scripting PHP utilisé dans cette même page.<br>
        La gestion de projet est aussi essentielle dans ce genre de projets à plusieurs, c'est pourquoi nous avons utilisé conjointement Git et Github, Google Drive, pour le partage de fichiers, et Trello et Gantt pour gérer notre temps et nos ressources.
    </p>

    Bâtiments gérés :
    <ul>
    <?php

            include('mysql.php');
            $result = mysqli_query($id_bd, "SELECT * FROM batiments");


            while ($row = mysqli_fetch_assoc($result)) {
                echo "<li>";
                echo "<h2>".$row['lettre_bat']."</h2>";
                echo "<h3>".$row['nom']."</h3>";
                echo "</li>";
            }

            mysqli_close($id_bd);
            ?>
    </ul>

    Salles gérées :
    <ul>
    <?php

            include('mysql.php');
            $result = mysqli_query($id_bd, "SELECT * FROM salles");


            while ($row = mysqli_fetch_assoc($result)) {
                echo "<li>";
                echo "<h2>".$row['nom_salle']."</h2>";
                echo "<h3>".$row['type']."</h3>";
                echo "</li>";
            }

            mysqli_close($id_bd);
            ?>
    </ul>
    Réalisé par :
    <ul>
        <li>Samuel ALLIZARD</li>
        <li>Adrien CAPDEVILLE</li>
        <li>Mathys CASTELLA</li>
        <li>Quentin ROYO</li>
    </ul>

    <a href="./legal.html">Mentions légales</a>
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
    <script src="./js/fonts.js"></script>
</body>
</html>
