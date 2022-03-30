# jdr_php

# 30/03/2022

## Pour Race.class.php, faire :
Attributs (les ingrédients pour la gaufre) :
- identifiant de la race (un int privé)
- nom de la race (un string privé)
- force de la race (un int privé)
- dextérité de la race (un int privé)
- constitution de la race (un int privé)
- intelligence de la race (un int privé)
- sagesse de la race (un int privé)
- charisme de la race (un int privé)

## Accesseurs (les get et les set), à l'aide de cette page là : https://yard.onl/sitelycee/cours/php/_PHP.html?Creruneclasse.html
(Un get et un set par attributs)

## Constructeurs (recette à gaufre) :
- le Constructeur par défaut écrit de la façon suivante :
public function __constructeurRace()
{
this.idRace = 0;
this.nomRace = "Race par défaut";
this.forRace = 0;
this.dexRace = 0;
this.conRace = 0;
this.intRace = 0;
this.sagRace = 0;
this.chaRace = 0;
}

- Le Constructeur défini (pour un nombre particulier de gaufre), à partir de la ligne suivante et à l'aide de cette page  : https://yard.onl/sitelycee/cours/php/_PHP.html?Constructeurdestructeuretautresf.html
public function __constructeurRace(int idDefini, string nomDefini, int forDefini, int dexDefini, int conDefini, int intDefini, int sagDefini, int chaDefini)