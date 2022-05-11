<!DOCTYPE html>
    <html lang="fr">
        <head>
            <meta charset="UTF-8">
            <meta http-equiv="X-UA-Compatible" content="IE=edge">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <title>Authentification</title>
        </head>
        <body>
            <h1>Authentification</h1>
            <form onsubmit=wellReceived() action="./session.php" method="post"> <!-- Lors de l'appui du bouton Submit, appelle la fonction wellReceived pour confirmer l'envoie des valeurs-->
                <label for="idLog">Identifiant:</label><br>                     <!-- via la méthode d'envoi POST pour Identifiant et Mot de passe à la page session.php.-->
                <input type="text" id="idLog" name="idLog"><br><br>             <!-- Choix de la méthode POST plutôt que GET pour pas avoir les données visibles dans la barre de navigation-->
                <label for="passLog">Mot de passe :</label><br>
                <input type="password" id="passLog" name="passLog"><br><br>
                <?php
                    session_start();
                    if (isset($_SESSION["Message"])){ //Vérifie si la variable de session "Message" a déjà été initialisé ou non
                        echo $_SESSION["Message"];      // Si initialisé, affiche le message qui est stocké dans la variable
                    }
                    $_SESSION["Message"] = " ";         // Affiche un espace quoiqu'il arrive, permettant d'effacer le "Message" en cas de rechargement de la page
                ?>
                <br><br>
                <input type="submit" value="Submit">
            </form>
        </body>
        <script>
            function wellReceived() // Alerte validant la saisie de l'utilisateur
            {
                alert("Vos identifiants on été reçu, vous allez être redirigé de la façon approprié");
                Console.log("Les identifiants ont bien été reçu");  
            }
        </script>
    </html>