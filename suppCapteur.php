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
    <title>Supprimer un capteur</title>
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
        <br><hr><h1>Supprimer un capteur</h1><hr><br>
    </header>
    <form method="post" action="adminRemoveSensorProcessing.php" id="addNewBuilding">
        <label for="sensorname">Capteur à supprimer</label>
        <select id="sensorname" name="sensorname">
        <?php 
        	include('mysql.php');
            $result = mysqli_query($id_bd, 'SELECT * FROM capteurs');

            while ($row = mysqli_fetch_assoc($result)) {
            echo '<option value="'.$row['nom_capteur'].'">'.$row['nom_capteur'].'</option>';
            }
        	
        ?>
            
        </select>
        <button type="submit">Supprimer</button>
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

