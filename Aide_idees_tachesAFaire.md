"Cahier des charges" du projet jeu de rôle
===

## Administratif

- Base de données OBLIGATOIRE                                                   -> 🗸
- Dans un premier temps, création de personnage par un simple formulaire        -> 🗸
- Authentification d'un utilisateur                                             -> to do
    - Accès à son personnage à lui, pas aux autres
    - Possibilité d'un utilisateur de créé un compte
        - Info à renseigner :
            - Nom utilisateur
            - Pseudo sur le site
            - Mdp du compte
            - Confirmation mdp
            - Email de récupération
    - Un seul compte UNIQUEMENT par utilisateur
    - Possibilité à un utilisateur de modifier son mdp
    - Utilisateur root qui permet de gérer les utilisateurs
    - root peut aussi gérer les personnages
- Déconnexion d'un utilisateur
- if (user == Not logged)  
    Send to acceuil


## Fonctionnalités

- Détails de toutes les sous races ? Ou choix races -> choix sous races (si disponible)
    - Humain variant = sous race humain
    - 
- Gestion de level up
    - Permettre une modification des charactéristiques
    - Augmenté les HP max
        - Donner le choix entre valeur médiane de la classe ou roll de dès de vie
            - Possibilité de reroll en cas de -25%?
- Ajout/Retrait d'objet
    - Gestion de l'argent (1000 pc -> 100 pa -> 10 po -> 1 pp)
    
    [/]: # (Fuck electrum)

    - Gestion du nombre d'objets (Flèches, torches, rations, etc)
- Choix des sorts
    - Modification de la liste de sorts actuelle
    - Liste de sorts correspond à la classe (aka pas de sorts de druide sur un clerc)
    - Display nombre d'emplacement de sorts  -> Nombre restant inutile
- Ajout de traits de charactères
    - Zone de texte
- Possibilité d'attacher du lore au personnage ?

(To sort out) 
===

### Pour Race.class.php, faire :
Attributs (les ingrédients pour la gaufre) :
- identifiant de la race (un int privé)
- nom de la race (un string privé)
- force de la race (un int privé)
- dextérité de la race (un int privé)
- constitution de la race (un int privé)
- intelligence de la race (un int privé)
- sagesse de la race (un int privé)
- charisme de la race (un int privé)

### Accesseurs (les get et les set), à l'aide de cette page là : https://yard.onl/sitelycee/cours/php/_PHP.html?Creruneclasse.html
(Un get et un set par attributs)

### Constructeurs (recette à gaufre) :
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