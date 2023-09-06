<?php
require('fonctions.php');

session_start();
$persoChoisi = $_GET['personnage-select'];

$mysqli = mysqli_connect("localhost", "root", "", "jdrphp");
            if (mysqli_connect_errno()) {
                echo "Echec lors de la connexion à MySQL : " . mysqli_connect_error();
            }

$personnageSelection = mysqli_query($mysqli, "SELECT * FROM personnages WHERE nomPerso ='$persoChoisi';");


$colonnePersonnage = ["nomPerso","racePerso","classePerso","niveauPerso","FORpersonnage",
                        "DEXpersonnage","CONpersonnage","INTpersonnage","SAGpersonnage",
                        "CHApersonnage"];
$fichePersonnage = CreateLigne($personnageSelection, $colonnePersonnage);

$caracteristique = ["Force", "Dextérité", "Constitution", "Intelligence", "Sagesse", "Charisme"];

echo "<h1>Ceci est la fiche de personnage de :</h1> <br>";

echo "<h3>Nom du personnage : $fichePersonnage[0]</h3>";

echo "Race du personnage : $fichePersonnage[1] <br><br>";

echo "Classe du personnage : $fichePersonnage[2] <br><br>";

echo "Niveau du personnage : $fichePersonnage[3] <br><br>";

echo "<table style='width:100% ; border:2px solid black'>";
for($i = -1; $i < count($caracteristique) ; $i ++){
    echo "<tr style='border:1px solid black'>";
    if($i == -1){
        echo    "<th style='border:1px solid black'>Charactéristique</th>
                <th style='border:1px solid black'>Valeur</th>";
    }
    else{
        echo    "<td style='border:1px solid black'>" . $caracteristique[$i] . "</td>
                <td style='border:1px solid black'>". $fichePersonnage[$i+4] . "</td>";
    }
    echo "</tr>";
}

echo    "</table>
        <br><br>
        <input type='button' value='Retour à la liste des personnages' id='btnRetourAcceuil' onclick=BtReturn()>
        <script>
            function BtReturn(){
                window.location.href='./acceuil.php';
            }
        </script>";

?>