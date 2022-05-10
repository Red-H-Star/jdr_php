<?php

echo "Si vous êtes sur cette page, c'est que le site n'a pas bien enregistré
    votre création de personnage.<br>
    Veuillez contacter l'administrateur au plus vite.<br>";

$raceChoisi = $_POST["race-select"];
$classeChoisi = $_POST["classe-select"];
$forChoisi = $_POST["valeurForce"];
$dexChoisi = $_POST["valeurDextérité"];
$conChoisi = $_POST["valeurConstitution"];
$intChoisi = $_POST["valeurIntelligence"];
$sagChoisi = $_POST["valeurSagesse"];
$chaChoisi = $_POST["valeurCharisme"];
$nomChoisi = $_POST["choixNom"];

$sumStats = $forChoisi + $dexChoisi + $conChoisi + $intChoisi + $sagChoisi + $chaChoisi;

if($sumStats != 72){
    session_start();
    $_SESSION["Notification"] = "Les caractéristique sélectionner ne correspondent pas à la liste
                                donnée. Veuillez recommencer.";
        header("Location: nouveauPerso.php");
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
echo "Somme stats : $sumStats <br>";

?>