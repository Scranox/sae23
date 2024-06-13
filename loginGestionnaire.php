<!DOCTYPE html>
<html>
    <head>
        <title>Authentification</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" type="text/css" href="./styles/main.css">
    </head>
    <body>
        <section id="formAdmin">
            <h1>Authentification gestionnaire</h1>
            <h2>Veuillez choisir votre bâtiment et remplir les informations</h2>
            <form method="post" action="loginGestionnaireProcessing.php">
                <label for="building">Choix du bâtiment</label>
                <select id="building" name="building">
                    <?php 

                        $id_bd = mysqli_connect("127.0.0.1", "proc", "prod", "sae23");
                        mysqli_query($id_bd, "SET NAMES 'utf8'");
                        $result = mysqli_query($id_bd, 'SELECT * FROM batiments');

                        while ($row = mysqli_fetch_assoc($result)) {
                            echo '<option value="'.$row['lettre_bat'].'">'.$row['nom'].'</option>';
                        }

                        mysqli_close($id_bd);

                                  
                    ?>
                </select>
                <label for="username">Nom d'utilisateur</label>
                <input type="text" name="username" required>
                <label for="password">Mot de passe</label>
                <input type="password" name="password" required>
                <button type="submit">Envoi</button>
            </form>
        </section>
    </body>
    <script src="./js/error.js"></script>
</html>