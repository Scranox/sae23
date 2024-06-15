<?php

session_start();

?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Gestion de projet</title>
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
        <br><hr><h1>Gestion de projet</h1><hr><br>
    </header>

    <h2>Sommaire :</h2>
    <ul>
        <li><a href="#collab">Outils de collaboration utilisés</a></li>
        <li><a href="#perso">Synthèse personnelle de chaque membre</a></li>
        <li><a href="#problemes">Problèmes rencontrés et solutions proposées</a></li>
        <li><a href="#conclusion">Conclusion générale sur les attendus du cahier des charges</a></li>
    </ul>

    <h2 id="collab">Les outils de collaboration utilisés :</h2>
    <ul>
        <li class="ligneprojet">
            Trello
        </li>
        <img class="ligneprojet" src="./images/trello.png" alt="Trello du projet" width="1000">

        <li class="ligneprojet">
            Gantt (initial)
        </li>
        <a href="./downloadable/gantt_initial.gan">
            <img class="ligneprojet" src="./images/gantt_initial.png" alt="Gantt initial du projet" width="1250">
        </a>

        <li class="ligneprojet">
            Gantt (final)
        </li>
        <a href="./downloadable/gantt_final.gan">
            <img class="ligneprojet" src="./images/gantt_final.png"  alt="Gantt final du projet" width="1250">
        </a>

        <li class="ligneprojet">
            Google Drive
        </li>
        <img class="ligneprojet" src="./images/drive.png"  alt="Google Drive du projet" width="1000">

        <li class="ligneprojet">
            Github
        </li>
        <a href="https://github.com/Scranox/sae23">
            <img src="./images/github.png" alt="Github du projet" width="750">
        </a>
    </ul>

    <h2 id="perso">La synthèse personnelle de chaque membre :</h2>
    <ul>
        <li class="ligneprojet">Adrien Capdeville</li>
        Adrien Capdeville est le chef de projet de notre groupe. Voici les tâches qu’il a réalisées :
        <ul class="ligneprojet">
            <li>Il a élaboré un diagramme de Gantt initial pour organiser et attribuer les étapes aux différents membres durant cette période de création.</li>
            <li>Il a créé une machine virtuelle où il a installé et configuré PHPMyAdmin et MariaDB pour la gestion des bases de données, InfluxDB, Node RED et Grafana pour visualiser les données.</li>
            <li>Il a également développé les pages principales du site web et son système d'authentification pour sécuriser l’accès au site web ainsi que réalisé le design (style CSS) des pages.</li>
            <li>Il a ensuite lié le site web à la base de données et créé l’entièreté du backend du site après coup.</li>
            <li>Enfin, une fois l’intégralité de ses tâches réalisées, il s'est entraîné avec ses collaborateurs à l’oral afin de préparer la présentation orale de ce projet et puis il a mis à jour le diagramme de Gantt avec les délais qui ont été plus longs ou plus courts pour certaines tâches.</li>
        </ul>

        <li>Samuel Allizard</li>
        <p>
            Samuel a développé en profondeur le site web, c’est-à-dire à créer et définir les pages web annexes. De plus, il a réalisé la structure du site web sur une feuille de papier avant de concevoir la structure HTML du site web mais aussi une grande partie du code CSS.<br>
            En restant dans le domaine du papier, il a élaboré le schéma entités-associations et le schéma relationnel de la base de données sous la supervision de Monsieur Mansalier. Il a également géré une partie des requêtes SQL utilisées au cours du projet.<br>
            Il a aussi été responsable des scripts de récupération de données des capteurs afin de recevoir les données de ces derniers et de les afficher sur l’interface graphique du site web.
        </p>

        <li>Mathys Castella</li>
        <p>
            Mathys Castella a effectué des modifications sur le diagramme de Gantt, légères modifications du site web s’occupe du brouillon de la rédaction des rendus assistance dans la réalisation de la base de donnée (MariaDB) et du Node RED.<br>
            Il a aussi été le fidèle assistant de Samuel ALLIZARD quant à la création du script en lui rappelant que “nous avons déjà fait ça en SAE 15”. Ce qui a permis à notre équipe de réaliser un meilleur script plus rapidement qu’en partant de 0.<br>
            De plus, il s'est occupé des installations comme le serveur Apache (apt get install apache2). De plus il s’est aussi occupé d’une partie docker du projet précisément pour la mise en place de mosquitto et grafana.<br>
            Enfin pour la création du site web il a aussi conseillé Samuel sur l’utilisation des scripts fait en TP de r209 pour ajouter et supprimer des bâtiments (et non des pièces comme dans les TP).
        </p>

        <li>Quentin Royo</li>
        <p>
            Quentin Royo a tout d’abord élaboré un diagramme de Gantt initial et un Trello pour organiser et attribuer les différentes tâches du projet aux membres de l’équipe. Ensuite, il a pris en main les services demandés pour cette SAE au travers du TP formatif mis en place par les enseignants afin d’acquérir des certitudes dans l'exécution des tâches.<br>
            Il a pu après coup mettre en place une machine virtuelle où il a installé et configuré InfluxDB, Node RED et Grafana pour visualiser les données. Il a également développé les principales pages du site web.<br>
            Enfin, il s’est préparé et entraîné à bien mettre ses idées en place afin d’être prêt pour la présentation orale de ce projet et à mettre à jour le diagramme de Gantt afin de changer quelques délais qui ont été écourtés ou rallongés.<br> 
        </p>
    </ul>

    <h2 id="problemes">Les problèmes rencontrés et les solutions proposées :</h2>
    <ul id="listeinvisible">
        <li>Quentin avait des problèmes de publication sur Github, les commits ont donc été faits sur les comptes d'autres étudiants.</li>
        <li>Mis à part cela, la plus grande difficulté a été de finir la SAÉ à temps au milieu de toutes les autres SAÉs et partiels de fin de semestre.</li>
    </ul>

    <h2 id="conclusion">La conclusion générale sur les attendus du cahier des charges :</h2>
    <p>
        Pour conclure, nous estimons notre projet très satisfaisant vis-à-vis du cahier des charges. En effet, nous avons pu tout d’abord, proposer une solution simple de visualisation des données publiées à l’aide d’un broker MQTT dans une interface homme machine (IHM) à l’aide d’un site web qui est accessible via n’importe quelle machine et un navigateur web.<br>
        Nous avons d'abord mis en place une chaîne de traitement à l’aide de conteneurs grâce notamment à Docker. De plus, nous avons créé un dashboard Grafana complet qui liste l’ensemble des valeurs que nous obtenons grâce aux capteurs et aux scripts créés. Ensuite, nous avons réussi à coder un magnifique site web RWD, sémantique et rigoureux. Nous avons non-seulement codé un site web, mais aussi des scripts qui nous permettent d'accéder aux valeurs des capteurs sur le broker MQTT, lesdits scripts réalisés en bash.<br>
        Afin de stocker ces données dans une base de données, nous avons donc créé cette dernière à l’aide de MariaDB et InfluxDB afin non seulement de gérer ces données mais aussi de les classer (les plus récentes, les moins récentes, les plus grandes, la moyenne etc.). Finalement, nous avons réussi à automatiser le tout à l’aide d’une commande crontab qui nous permet d’actualiser les valeurs affichées sur le site web automatiquement.
    </p>

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