<?php 

session_start();

?>


<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Gestion salle</title>
    <link rel="stylesheet" type="text/css" href="./styles/main.css">
    <link rel="stylesheet" type="text/css" href="./styles/dataviewerGest.css?id=1">
</head>
<body>
    <header>
        <br><hr><h1>Gestion bâtiment</h1><hr><br>
    </header>
    <ul class="buildings">
        
        <?php 
        
            $id_bd = mysqli_connect("127.0.0.1", "proc", "prod", "sae23");
            mysqli_query($id_bd, "SET NAMES 'utf8'");
            $result = mysqli_query($id_bd, 'SELECT * FROM batiments WHERE lettre_bat = "'.$_SESSION["building"].'"');
            

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
                        $lastMeasure = mysqli_query($id_bd, 'SELECT * FROM `mesures` WHERE ref_capteur = "'.$rowSensors['nom_capteur'].'"');
                        $lastMeasureData = mysqli_fetch_assoc($lastMeasure);
                        if (!empty($lastMeasureData)){
                            echo '<li>';
                            echo '<h4>Capteur '.$rowSensors['nom_capteur'].' - '.$rowSensors['type'].'</h4>';
                            echo '<ul class="measures">';
                            echo '<li>';
                            echo '<table>';
                            echo '<thead>';
                            echo '<tr>';
                            echo '<th>';
                            echo 'Date';
                            echo '</th>';
                            echo '<th>';
                            echo 'Horaire';
                            echo '</th>';
                            echo '<th>';
                            echo 'Valeur';
                            echo '</th>';
                            echo '</tr>';
                            echo '</thead>';
                            echo '<tbody>';
                            // truc a loop
                            while ($rowMeasures = mysqli_fetch_assoc($lastMeasure)){
                                echo '<tr>';
                                echo '<td>'.$rowMeasures["date"].'</td>';
                                echo '<td>'.$rowMeasures["horaire"].'</td>';
                                echo '<td>'.$rowMeasures["valeur"].$rowSensors['unite'].'</td>';
                                echo '</tr>';
                            }
                            // truc a loop
                            echo '</tbody>';
                            echo '</table>';
                            echo '</li>';
                            $maxMeasure = mysqli_query($id_bd, 'SELECT ROUND(MAX(valeur), 2) FROM `mesures` WHERE ref_capteur="'.$rowSensors['nom_capteur'].'"');
                            $maxMeasureData = mysqli_fetch_row($maxMeasure);
                            // 2
                            echo '<li class="values">';
                            echo '<h4>Valeur MAX</h4>';
                            echo '<h3>'.$maxMeasureData[0].$rowSensors['unite'].'</h3>';
                            echo '</li>';
                            // 3
                            $minMeasure = mysqli_query($id_bd, 'SELECT ROUND(MIN(valeur), 2) FROM `mesures` WHERE ref_capteur="'.$rowSensors['nom_capteur'].'"');
                            $minMeasureData = mysqli_fetch_row($minMeasure);
                            echo '<li class="values">';
                            echo '<h4>Valeur MIN</h4>';
                            echo '<h3>'.$minMeasureData[0].$rowSensors['unite'].'</h3>';
                            echo '</li>';
                            $avgMeasure = mysqli_query($id_bd, 'SELECT ROUND(AVG(valeur), 2) FROM `mesures` WHERE ref_capteur="'.$rowSensors['nom_capteur'].'"');
                            $avgMeasureData = mysqli_fetch_row($avgMeasure);
                            echo '<li class="values">';
                            echo '<h4>Valeur MOYENNE</h4>';
                            echo '<h3>'.$avgMeasureData[0].$rowSensors['unite'].'</h3>';
                            echo '</li>';
                            echo '</ul>';
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
            <li id="footerright"><p><a href="./loginGestionnaire.php">Accès gestionnaire</a></p></li>
        </ul>
    </footer>

    <script src="./js/fonts.js"></script>
</body>
</html>

