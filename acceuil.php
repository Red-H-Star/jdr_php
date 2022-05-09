<!DOCTYPE html>
<html>
    <head>
        <title>JDR en ligne</title>
        <meta charset="utf-8">
    </head>
    <body>
    <h1>Liste de Personnages disponible</h1>
        <form action="./test.php" method="post">
            <?php
            require('fonctions.php');

            $mysqli = mysqli_connect("localhost", "root", "", "jdrphp");
            if (mysqli_connect_errno()) {
                echo "Echec lors de la connexion à MySQL : " . mysqli_connect_error();
            }

            $persoDispo = mysqli_query($mysqli, "SELECT nomPerso FROM personnages;");

            $tabPerso = tableauPerso($persoDispo);

            echo afficheTableau($tabPerso);
            ?>
        </form>
        <input type="button" value="Nouveau personnage" id="btnNewChara" action="./test.php">
    </body>
</html>