<?php
    $id = $_POST["idLog"];
    $password = $_POST["passLog"];

    $mysqli = mysqli_connect("localhost", "root", "", "jdrphp");
    if (mysqli_connect_errno()) {
        echo "Echec lors de la connexion à MySQL : " . mysqli_connect_error();
    }

    $userExist = mysqli_query($mysqli, "SELECT * FROM USERS;");
    if($id == "root" && $password == ""){
        header("Location: Default.php");
    }
    else{
        $_SESSION["Message"] = "The logins that you entered were not recognized. Please enter correct logins.";
        header("Location: Authentification.php");
    }
?>