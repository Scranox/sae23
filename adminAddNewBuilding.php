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
    <title>Créer un nouveau bâtiment</title>
    <link rel="stylesheet" type="text/css" href="./styles/main.css">
    <link rel="stylesheet" type="text/css" href="./styles/admin.css?id=1">
</head>
<body>
    <header>
        <button id="changeFontBtn">Changer la police vers OpenDyslexic</button>
        <?php 
            if(isset($_SESSION["authenticated"]) || isset($_SESSION["authenticatedManager"])){
                echo '<button onclick="location.href = '.'`/logout.php`'.'" id="logoutBtn">Se déconnecter</button>';
            }
        ?>
        <br><hr><h1>Ajouter un nouveau bâtiment</h1><hr><br>
    </header>
    <form method="post" action="adminAddNewBuildingProcessing.php" id="addNewBuilding">
        <label for="batletter">Lettre du bâtiment</label>
        <input type="text" name="batletter" maxlength="1" required>
        <label for="batname">Nom complet du bâtiment</label>
        <input type="text" name="batname" maxlength="100" required>
        <label for="batuser">Utilisateur gestionnaire</label>
        <input type="text" name="batuser" maxlength="30" required>
        <label for="batpassword">Mot de passe gestionnaire</label>
        <input type="password" name="batpassword" maxlength="30" required>
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

