<?php
require('fonctions.php');

$persoChoisi = $_POST['personnage-select'];

$mysqli = mysqli_connect("localhost", "root", "", "jdrphp");
            if (mysqli_connect_errno()) {
                echo "Echec lors de la connexion à MySQL : " . mysqli_connect_error();
            }

$personnageSelection = mysqli_query($mysqli, "SELECT * FROM personnages WHERE nomPerso ='$persoChoisi';");


$colonnePersonnage = ["nomPerso","racePerso","classePerso","niveauPerso","FORpersonnage",
                        "DEXpersonnage","CONpersonnage","INTpersonnage","SAGpersonnage",
                        "CHApersonnage"];
$fichePersonnage = CreateLigne($personnageSelection, $colonnePersonnage);



echo "<h1>Ceci est la fiche de personnage de :</h1> <br>";

echo "<h3>Nom du personnage : $fichePersonnage[0]</h3>";

echo "Race du personnage : $fichePersonnage[1] <br><br>";

echo "Classe du personnage : $fichePersonnage[2] <br><br>";

echo "Niveau du personnage : $fichePersonnage[3] <br><br>";

echo "<table style='width:100% ; border:2px solid black'>
        <tr style='border:1px solid black'>
            <th style='border:1px solid black'>Charactéristique</th>
            <th style='border:1px solid black'>Valeur</th>
        </tr>
        <tr style='border:1px solid black'>
            <td style='border:1px solid black'>Force</td>
            <td style='border:1px solid black'>$fichePersonnage[4]</td>
        </tr>
        <tr style='border:1px solid black'>
            <td style='border:1px solid black'>Dextérité</td>
            <td style='border:1px solid black'>$fichePersonnage[5]</td>
        </tr>
        <tr style='border:1px solid black'>
            <td style='border:1px solid black'>Constitution</td>
            <td style='border:1px solid black'>$fichePersonnage[6]</td>
        </tr>
        <tr style='border:1px solid black'>
            <td style='border:1px solid black'>Intelligence</td>
            <td style='border:1px solid black'>$fichePersonnage[7]</td>
        </tr>
        <tr style='border:1px solid black'>
            <td style='border:1px solid black'>Sagesse</td>
            <td style='border:1px solid black'>$fichePersonnage[8]</td>
        </tr>
        <tr style='border:1px solid black'>
            <td style='border:1px solid black'>Charisme</td>
            <td style='border:1px solid black'>$fichePersonnage[9]</td>
        </tr>
            "

?>