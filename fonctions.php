<?php
    // Fichier servant à ranger toutes les fonctions php utilisées par le site web

    /*
        Fonction tableauPerso
        @params $result (object)
        @return un array avec les noms de personnages
    */

    function tableauPerso(object $result) : array
    {
        $tablePerso = array();
        while($row = $result->fetch_assoc()){
            array_push($tablePerso, $row["nomPerso"]);
        }
        return $tablePerso;
    }

    /*
        Fonction afficheTableau
        @params $tableauAffiche (array)
        @return un string avec des balises pour HTML
    */

    function afficheTableau(array $tableauAffiche) : string
    {
        $tabPerso = "<table style='width:100% ; border:2px solid black'>";
        $ligne = -1;
        while($ligne < count($tableauAffiche)){
            $tabPerso = $tabPerso . "<tr style='border:1px solid black'>";
            if($ligne == -1){
                $tabPerso = $tabPerso . "<th style='border:1px solid black'>Nom personnage</th>";
                $tabPerso = $tabPerso . "<th style='border:1px solid black'>Accéder à la fiche du personnage</th>";
            }
            else{
                $tabPerso = $tabPerso . "<td style='border:1px solid black'>". $tableauAffiche[$ligne] . "</td>";
                $tabPerso = $tabPerso . "<td style='border:1px solid black'><input type='submit' value='Accès à la fiche'></td>";
            }
            $tabPerso = $tabPerso . "</tr>";
            $ligne ++;
        }
        $tabPerso = $tabPerso . "</table>";
        return $tabPerso;
    }
?>