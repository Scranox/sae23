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
        <br><hr><h1>Créer une nouvelle salle</h1><hr><br>
    </header>
    <form method="post" action="adminAddNewRoomProcessing.php" id="addNewBuilding">
        <label for="roomname">Nom de la salle</label>
        <input type="text" name="roomname" maxlength="4" required>
        <label for="roomtype">Type de salle</label>
        <input type="text" name="roomtype" maxlength="20" required>
        <label for="roomcapacity">Capacité de la salle</label>
        <input type="text" name="roomcapacity" maxlength="11" required>
        <?php 
            echo '<input type="hidden" name="building" value="'.$_GET["building"].'" />';      
        ?>
        <button type="submit">Créer</button>
    </form>
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

