<?php

require_once "../config.php";

/*Connexion à la base de données*/
try {
    $db = new PDO(DB_DRIVER . ":host=" . DB_HOST . ";dbname=" . DB_NAME . ";charset=" . DB_CHARSET . ";port=" . DB_PORT, DB_LOGIN, DB_PWD);
} catch (Exception $e) {
    die($e->getMessage());
}

// Si le formulaire a été soumis

if (isset($_POST['firstname'], $_POST['lastname'], $_POST['usermail'], $_POST['message'])) {

    // on appelle la fonction d'insertion dans la DB (addMessage())
    $insert = addMessage($db, $_POST['firstname'], $_POST['lastname'], $_POST['usermail'], $_POST['message']);

    //Si on obtient une erreur
    if ($insert === true) $message = "Insertion réussie";
    else $message = $insert;



    // si l'insertion a réussi
    if ($insert === true) { //Contient la fonction d'insertion
        // on redirige vers la page actuelle
        header("Location: ./");
        exit();
    } else {
        // sinon, on affiche un message d'erreur
        $message = "Erreur lors de l'insertion";
    }
}
