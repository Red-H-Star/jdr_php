<!DOCTYPE html>
    <html>
        <head>
            <title>JDR en ligne</title>
            <meta charset="utf-8">
        </head>
        <body>
            <h1>Bienvenue sur la création de personnage !</h1>
            <form action="./insertPerso.php" method="post">
                <?php
                    require("fonctions.php");

                    $mysqli = mysqli_connect("localhost", "root", "", "jdrphp");
                    if (mysqli_connect_errno()) {
                    echo "Echec lors de la connexion à MySQL : " . mysqli_connect_error();
                    }

                    $raceDispo = mysqli_query($mysqli, "SELECT nomRace FROM races;");
                    $tabRace = CreateTableau($raceDispo, "nomRace");

                    echo CreateSelect($tabRace, "race");

                    $classeDispo = mysqli_query($mysqli, "SELECT nomClasse FROM classes;");
                    $tabClasse = CreateTableau($classeDispo, "nomClasse");

                    echo "<span STYLE='padding:0 0 0 20px;'".CreateSelect($tabClasse, "classe");
                    echo "</span><br><br><br>";
                    
                    $caracteristique = ["Force","Dextérité","Constitution",
                                        "Intelligence","Sagesse","Charisme"];
                    
                    echo "Veuillez choisir pour chaque caractéristique une valeur unique
                          parmi la liste suivante : <br>
                          15, 14, 13, 12, 10, 8 <br> <br>";

                    for($i = 0; $i < count($caracteristique); $i ++){
                        echo $caracteristique[$i] . " : " . "<input type='number'
                            name='valeur" . $caracteristique[$i] ."' id='idValeur" . 
                            $caracteristique[$i] . "' maxlength='2' step='1' min ='8' max='15'><br><br>";
                    }
                    
                    echo "Et enfin le plus important<br>
                        <h3>Comment s'appelle votre personnage ?</h3>";
                    echo "<input type='text' name='choixNom' id='idNomPerso' placeholder='Michel'>";
                ?>
                <br><br>
                <input type="submit" value="Valider la sélection"><br>
                <?php
                    session_start();
                    if (isset($_SESSION["Notification"])){
                        echo $_SESSION["Notification"];
                    }
                    $_SESSION["Notification"] = " ";
                ?>
            </form>
        </body>
</html>