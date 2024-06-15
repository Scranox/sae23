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
    Réalisé par :
    <ul>
        <li>Samuel ALLIZARD</li>
        <li>Adrien CAPDEVILLE</li>
        <li>Mathys CASTELLA</li>
        <li>Quentin ROYO</li>
    </ul>
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
