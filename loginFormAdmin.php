<!DOCTYPE html>
<html>
    <head>
        <title>Authentification</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    <body>
        <section id="formAdmin">
            <h1>Authentification administrateur</h1>
            <h2>Veuillez remplir les informations</h2>
            <form method="post" action="loginAdminProcessing.php">
                <label for="username">Nom d'utilisateur</label>
                <input type="text" name="username" required>
                <label for="password">Mot de passe</label>
                <input type="text" name="password" required>
                <button type="submit">Envoi</button>
            </form>
        </section>
    </body>
    <script src="./js/error.js"></script>
</html>