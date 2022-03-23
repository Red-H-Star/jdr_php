<!DOCTYPE html>
    <html lang="fr">
        <head>
            <meta charset="UTF-8">
            <meta http-equiv="X-UA-Compatible" content="IE=edge">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <title>Authentification</title>
            <script>
                function wellReceived()
                {
                    alert("Vos identifiants on été reçu, vous allez être redirigé de la façon approprié");
                    Console.log("Les identifiants ont bien été reçu");  
                }
            </script>
        </head>
        <body>
            <h1>
                Authentification
            </h1>
                <form onsubmit=wellReceived() action="./Session.php" method="post">
                    <label for="idLog">Identifiant:</label><br>
                    <input type="text" id="idLog" name="idLog"><br><br>
                    <label for="passLog">Mot de passe :</label><br>
                    <input type="password" id="passLog" name="passLog"><br><br>
                    <?php
                        session_start();
                        if (isset($_SESSION["Message"])){
                            echo $_SESSION["Message"];
                        }
                        $_SESSION["Message"] = " ";
                    ?>
                    <br><br>
                    <input type="submit" value="Submit">
                </form>
        </body>
    </html>