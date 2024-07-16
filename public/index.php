<?php

require_once "../config.php";
require_once "../model/portfolioModel.php";

/*Connexion à la base de données*/
try {
    $db = new PDO(DB_DRIVER . ":host=" . DB_HOST . ";dbname=" . DB_NAME . ";charset=" . DB_CHARSET . ";port=" . DB_PORT, DB_LOGIN, DB_PWD);
} catch (Exception $e) {
    die($e->getMessage());
}

// Si le formulaire a été soumis

if (isset($_POST['firstname'],  $_POST['usermail'], $_POST['message'])) {

    // on appelle la fonction d'insertion dans la DB (addMessage())
    $insert = addMessage($db, $_POST['firstname'], $_POST['usermail'], $_POST['message']);

    //Si on obtient une erreur
    if ($insert === true) {
        $message = "Message envoyé";

    }
    else{
        $message = "Erreur lors de l'envoi du message";
    }



}

if (isset($_GET['section'])) {
    // on va utiliser un switch pour rediriger vers le bon fichier
    switch ($_GET['section']) {
        case 'accueil':
            $title = "Accueil";
            include('../view/accueilView.php');
            break;
        case 'Apropos':
            $title = "A propos";
            include('../view/Apropos.php');
            break;
        case 'projets':
            $title = "Projets";
            include('../view/projetsView.php');
            break;
        case 'contact':
            $title = "Contact";
            include('../view/contactView.php');
            break;
            # Si aucune des sections n'est valide, on affiche la page 404
        default:
            include('../view/404View.php');
    }
    // si le paramètre "section" n'est pas défini dans l'URL
} else {
    // on inclut le fichier accueil.php en suivant l'arborescence de fichiers
    include('../view/accueilView.php');
}


//Fermeture de la connexion 

$db = null;
