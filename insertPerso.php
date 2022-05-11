<?php

$mysqli = mysqli_connect("localhost", "root", "", "jdrphp");
            if (mysqli_connect_errno()) {
                echo "Echec lors de la connexion à MySQL : " . mysqli_connect_error();
            }


echo "Si vous êtes sur cette page, c'est que le site n'a pas bien enregistré
    votre création de personnage.<br>
    Veuillez contacter l'administrateur au plus vite.<br>";

$nomChoisi = $_POST["choixNom"];
$raceChoisi = $_POST["race-select"];
$classeChoisi = $_POST["classe-select"];
$forChoisi = $_POST["valeurForce"];
$dexChoisi = $_POST["valeurDextérité"];
$conChoisi = $_POST["valeurConstitution"];
$intChoisi = $_POST["valeurIntelligence"];
$sagChoisi = $_POST["valeurSagesse"];
$chaChoisi = $_POST["valeurCharisme"];


$sumStats = $forChoisi + $dexChoisi + $conChoisi + $intChoisi + $sagChoisi + $chaChoisi;

if($sumStats != 72){
    session_start();
    $_SESSION["Notification"] = "Les caractéristique sélectionner ne correspondent pas à la liste
                                donnée. Veuillez recommencer.";
    header("Location: nouveauPerso.php");
}
else{
    require('fonctions.php');
    $colonneRace = ["bonusFOR", "bonusDEX", "bonusCON", "bonusINT", "bonusSAG", "bonusCHA"];
    $modifRace = mysqli_query($mysqli, "SELECT * FROM races WHERE nomRace = '$raceChoisi';");
    $bonusRace = CreateLigne($modifRace, $colonneRace);

    $forChoisi = $forChoisi + $bonusRace[0];
    $dexChoisi = $dexChoisi + $bonusRace[1];
    $conChoisi = $conChoisi + $bonusRace[2];
    $intChoisi = $intChoisi + $bonusRace[3];
    $sagChoisi = $sagChoisi + $bonusRace[4];
    $chaChoisi = $chaChoisi + $bonusRace[5];

    
    $request = mysqli_query($mysqli, "INSERT INTO personnages(nomPerso, racePerso,
                classePerso, niveauPerso, FORpersonnage, DEXpersonnage, CONpersonnage,
                INTpersonnage, SAGpersonnage, CHApersonnage)
                VALUES ('$nomChoisi', '$raceChoisi', '$classeChoisi', 1, $forChoisi, $dexChoisi,
                        $conChoisi, $intChoisi, $sagChoisi, $chaChoisi);");
    if (mysqli_query($mysqli, $request)!=true) {
        echo "Error: " . $request . "<br>" . mysqli_error($mysqli);
      }
      header("Location: acceuil.php");
    
}



echo "Vérification du bon fonctionnement de la méthode post :<br>";
echo "Race choisi : $raceChoisi <br>";
echo "Classe choisi : $classeChoisi <br>";
echo "Force choisi : $forChoisi <br>";
echo "Force choisi : $dexChoisi <br>";
echo "Force choisi : $conChoisi <br>";
echo "Force choisi : $intChoisi <br>";
echo "Force choisi : $sagChoisi <br>";
echo "Force choisi : $chaChoisi <br>";
echo "Nom choisi : $nomChoisi <br>";
echo "Somme stats (hors bonus): $sumStats <br>";

?>