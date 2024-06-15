<?php 

    session_start();
    error_reporting(E_ALL);
    ini_set('display_errors', '1');
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
    <title>Créer une nouvelle salle</title>
    <link rel="stylesheet" type="text/css" href="./styles/main.css">
    <link rel="stylesheet" type="text/css" href="./styles/admin.css?id=1">
</head>
<body>
    <header>
    <?php 
            if(isset($_SESSION["authenticated"]) || isset($_SESSION["authenticatedManager"])){
                echo '<button onclick="location.href = '.'`/logout.php`'.'" id="logoutBtn">Se déconnecter</button>';
            }
        ?>
        <br><hr><h1>Créer un nouveau capteur</h1><hr><br>
    </header>
    <form method="post" action="adminAddNewSensorProcessing.php" id="addNewBuilding">
        <label for="sensorname">Nom du capteur</label>
        <input type="text" name="sensorname" maxlength="8" required>
        <label for="sensortype">Type de capteur</label>
        <select id="sensortype" name="sensortype">
            <option value="temperature">Température</option>
            <option value="humidity">Humidité</option>
            <option value="co2">CO2</option>
            <option value="illumination">Luminosité</option>
            <option value="pressure">Pression</option>
        </select>
        <label for="sensorunit">Unité</label>
        <input type="text" name="sensorunit" maxlength="3" required>
        <?php 
            echo '<input type="hidden" name="room" value="'.$_GET["room"].'" />';      
        ?>
        <button type="submit">Créer</button>
    </form>
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

