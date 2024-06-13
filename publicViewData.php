<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Consultation données</title>
    <link rel="stylesheet" type="text/css" href="./styles/main.css">
    <link rel="stylesheet" type="text/css" href="./styles/dataviewer.css?id=1">
</head>
<body>
    <header>
        <br><hr><h1>Consultation données</h1><hr><br>
    </header>
    <ul class="buildings">
        
        <?php 
        
            $id_bd = mysqli_connect("127.0.0.1", "proc", "prod", "sae23");
            mysqli_query($id_bd, "SET NAMES 'utf8'");
            $result = mysqli_query($id_bd, 'SELECT * FROM batiments');
            

            while ($row = mysqli_fetch_assoc($result)) {
                echo '<li class="building">';
                echo '<h2>Bâtiment '.$row['lettre_bat'].'</h2>';
                echo '<ul class="rooms">';
                $resultRoom = mysqli_query($id_bd, 'SELECT * FROM `salles` WHERE ref_batiment = "'.$row['lettre_bat'].'"');
                while ($rowRoom = mysqli_fetch_assoc($resultRoom)){
                    echo '<li class="room">';
                    echo '<h4>Salle '.$rowRoom['nom_salle'].' - '.$rowRoom['type'].'</h4>';
                    echo '<ul class="sensors">';
                    $resultSensors = mysqli_query($id_bd, 'SELECT * FROM `capteurs` WHERE ref_salle = "'.$rowRoom['nom_salle'].'"');
                    while ($rowSensors = mysqli_fetch_assoc($resultSensors)){
                        $lastMeasure = mysqli_query($id_bd, 'SELECT * FROM `mesures` WHERE ref_capteur = "'.$rowSensors['nom_capteur'].'" ORDER BY id DESC LIMIT 1');
                        $lastMeasureData = mysqli_fetch_assoc($lastMeasure);
                        if (!empty($lastMeasureData)){
                            echo '<li>';
                            echo '<h3>'.$lastMeasureData["valeur"].$rowSensors["unite"].'</h3>';
                            echo '<h4>'.$rowSensors["nom_capteur"].'</h4>';
                            echo '<h5>'.$rowSensors["type"].'</h5>';
                            echo '<h5>'.$lastMeasureData["date"].' '.$lastMeasureData["horaire"].'</h5>';
                            echo '</li>';
                        } else {
                            echo '<li>';
                            echo '<h3>NO DATA</h3>';
                            echo '<h4>'.$rowSensors["nom_capteur"].'</h4>';
                            echo '<h5>'.$rowSensors["type"].'</h5>';
                            echo '</li>';
                        }      
                    }
                    echo '</ul>';
                    echo '</li>';
                }
                echo '</ul>';
                echo '</li>';
            }

            mysqli_close($id_bd);
        
        ?>
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

