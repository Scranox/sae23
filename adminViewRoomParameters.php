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
        <h1>Liste des capteurs de la salle</h1>
        <ul>
            <?php 
            
            $id_bd = mysqli_connect("127.0.0.1", "proc", "prod", "sae23");
            mysqli_query($id_bd, "SET NAMES 'utf8'");
            $result = mysqli_query($id_bd, 'SELECT * FROM capteurs WHERE ref_salle = "'.$_GET["room"].'"');
            

            while ($row = mysqli_fetch_assoc($result)) {
                echo "<li>";
                echo '<a href="./adminViewSenorParameters.php?sensor='.$row['nom_capteur'].'">';
                echo "<h2>".$row['nom_capteur']."</h2>";
                echo "<h3>".$row['type']."</h3>";
                echo "<h4>Unité ".$row['unite']."</h4>";
                echo "<h4>Salle ".$row['ref_salle']."</h4>";
                echo "</a>";
                echo "</li>";
            }

            mysqli_close($id_bd);
            ?>
            <li id="addbutton">
                <?php 
                    echo '<a href="adminAddNewSensor.php?room='.$_GET["room"].'">';   
                ?>
                    <h2>+</h2>
                    <h3>Ajouter un nouveau capteur au bâtiment</h3>
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

