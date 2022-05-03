<?php
    session_start();
    $id = $_POST["idLog"];
    $password = $_POST["passLog"];
    $valid = false;
    

    $mysqli = mysqli_connect("localhost", "root", "", "jdrphp");
    if (mysqli_connect_errno()) {
        echo "Echec lors de la connexion à MySQL : " . mysqli_connect_error();
    }

    $userExist = mysqli_query($mysqli, "SELECT * FROM USERS;");
    while($row = $userExist->fetch_assoc()){
        if($id == $row["nomUser"] && $password == $row["mdp"]){
            $valid = true;
            header("Location: acceuil.php");
        }
    }
    
    if($valid == false){
        $_SESSION["Message"] = "The logins that you entered were not recognized. Please enter correct logins.";
        header("Location: authentification.php");
    }
?>