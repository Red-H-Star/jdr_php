<!DOCTYPE html>
<html>
    <head>
        <title>JDR en ligne</title>
        <meta charset="utf-8">
    </head>
    <body>
    <h1>Liste de Personnages disponible</h1>
        <form action="./fichePerso.php" method="get">
            <?php
                require('fonctions.php');

                $mysqli = mysqli_connect("localhost", "root", "", "jdrphp");
                if (mysqli_connect_errno()) {
                    echo "Echec lors de la connexion à MySQL : " . mysqli_connect_error();
                }

                $persoDispo = mysqli_query($mysqli, "SELECT nomPerso FROM personnages;");

                $tabPerso = CreateTableau($persoDispo, "nomPerso") ;

                echo CreateSelect($tabPerso, "personnage");
                echo "<span STYLE='padding:0 0 0 20px'><input type='submit' value=
                    'Accès à la fiche'></span></td>";
            ?>
        </form>
        <input type="button" value="Nouveau personnage" id="btnNewChara" onclick=BtNew()>
    </body>
    <script>
        function BtNew(){
            window.location.href="./nouveauPerso.php";
        }
    </script>
</html>