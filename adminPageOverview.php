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
        <button id="changeFontBtn">Changer la police vers OpenDyslexic</button>
        <br><hr><h1>SAÉ 23</h1><hr><br>
    </header>
    <section class="buildings">
        <h1>Bâtiments</h1>
        <ul>
            <?php 
            
            $id_bd = mysqli_connect("127.0.0.1", "proc", "prod", "sae23");
            mysqli_query($id_bd, "SET NAMES 'utf8'");
            $result = mysqli_query($id_bd, "SELECT * FROM batiments");
            

            while ($row = mysqli_fetch_assoc($result)) {
                echo "<li>";
                echo '<a href="./adminViewBuildingParameters.php?building='.$row['lettre_bat'].'">';
                echo "<h2>".$row['lettre_bat']."</h2>";
                echo "<h3>".$row['nom']."</h3>";
                echo "</a>";
                echo "</li>";
            }

            mysqli_close($id_bd);
            ?>
            <li id="addbutton">
                <a href="adminAddNewBuilding.php">
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
            <li id="footerleft"><p><a href="./projet.html">Gestion de projet</a></p></li>
            <li id="footercenter"><p><a href="#">Accès administrateur</a></p></li>
            <li id="footerright"><p><a href="./loginGestionnaire.html">Accès gestionnaire</a></p></li>
        </ul>
    </footer>

    <script src="./js/fonts.js"></script>
</body>
</html>

