<?php
    // Fichier servant à ranger toutes les fonctions php utilisées par le site web

    /*
        Fonction CreateTableau
        @params $result (object) and $colonne (string)
        @return un array avec la colonne de données souhaitée
    */

    function CreateTableau(object $result, string $colonne) : array
    {
        $table = array();
        while($row = $result->fetch_assoc()){
            array_push($table, $row[$colonne]);
        }
        return $table;
    }

    /*
        Fonction CreateLigne
        @params $result (object) and $tabColonne (array)
        @return un array selon les colonnes de données souhaitées
    */

    function CreateLigne(object $result, array $tabColonne) : array
    {
        $ligne = array();
        while($row = $result->fetch_assoc()){
            for($i = 0; $i < count($tabColonne); $i++){
                array_push($ligne, $row[$tabColonne[$i]]);
            }
        }
        return $ligne;
    }


    /*
        Fonction afficheTableau
        @params $tableauAffiche (array)
        @return un string avec des balises pour HTML ($tabCree)
    */

    function AfficheTableau(array $tableauAffiche) : string
    {
        $tabCree = "<table style='width:100% ; border:2px solid black'>";
        $ligne = -1;
        while($ligne < count($tableauAffiche)){
            $tabCree = $tabCree . "<tr style='border:1px solid black'>";
            if($ligne == -1){
                $tabCree = $tabCree . "<th style='border:1px solid black'>
                                        Personnage disponible</th>";
            }
            else{
                $tabCree = $tabCree . "<td style='border:1px solid black; text-align:center'>"
                            . $tableauAffiche[$ligne] .
                            "<span STYLE='padding:0 0 0 5em'><input type='submit'
                            value='Accès à la fiche'></span></td>";
            }
            $tabCree = $tabCree . "</tr>";
            $ligne ++;
        }
        $tabCree = $tabCree . "</table>";
        return $tabCree;
    }

    /*
    Fonction createSelect
    @params $list (array) and $itemToSelect (string)
    @return a select element in HTML using a string of caracters (string)
    */

    function CreateSelect(array $list, string $itemToSelect) : string{
        $databaseSelect = "<label for=" . $itemToSelect .
                          "-select'>Choisissez un " . $itemToSelect . ": </label>";

        $databaseSelect = $databaseSelect . "<select name='" .
                            $itemToSelect . "-select' id='id" . $itemToSelect . "-select'>";

        for($listIndex = -1; $listIndex < count($list) ; $listIndex++){
            if($listIndex == -1){
                $databaseSelect = $databaseSelect . "<option value=''>
                                                    --Veuillez choisir une option--</option>";
            }
            else{
                $databaseSelect = $databaseSelect . "<option value=" .
                                                    $list[$listIndex] . ">" .
                                                    $list[$listIndex] . "</option>";
            }
        }
        $databaseSelect = $databaseSelect . "</select>";
        return $databaseSelect;
    }
?>