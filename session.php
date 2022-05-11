<?php
    session_start(); // Démarre une session, afin de permettre l'utilisation de la méthode POST
    $id = $_POST["idLog"];          // Récupération de l'Identifiant grâce à la méthode POST
    $password = $_POST["passLog"];  // Récupération du mot de passe à l'aide de la méthode POST
    $valid = false;                 // Variable servant de vérification de la présence de l'utilisateur dans la bdd
    

    $mysqli = mysqli_connect("localhost", "root", "", "jdrphp");
    if (mysqli_connect_errno()) {
        echo "Echec lors de la connexion à MySQL : " . mysqli_connect_error();
    }

    $userExist = mysqli_query($mysqli, "SELECT * FROM USERS;"); // Vérifie si l'utilisateur se trouve bien dans la base de donnée
    while($row = $userExist->fetch_assoc()){                    // Inconvénient pour le moment : Les données n'étant pas chiffrée,
        if($id == $row["nomUser"] && $password == $row["mdp"]){ // le site est vulnérable en cas de fuite de la bdd
            $valid = true;                                      // Solution : Utiliser une méthode de salage afin de crypté les mdp
            header("Location: acceuil.php");                    // se trouvant dans la bdd
        }
    }
    
    if($valid == false){    // Si l'utilisateur n'est pas présent dans la bdd, renvoie un message d'erreur
        $_SESSION["Message"] = "The logins that you entered were not recognized. Please
                                enter correct logins.";
        header("Location: authentification.php");
    }
?>