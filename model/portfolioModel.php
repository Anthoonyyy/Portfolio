<?php


//Fonction qui récupère tous les messages de la table formulaire  par ordre de date croissante

function getAllMessage(PDO $db): array
{
    $sql = "SELECT * FROM formulaire ORDER BY datemessage ASC";
    $query = $db->query($sql);
    $result = $query->fetchAll(PDO::FETCH_ASSOC);
    $query->closeCursor();
    return $result;
}

//Fonction qui récupère le nombre de commentaires

function getNbMessage(PDO $db): int
{
    $sql = "SELECT COUNT(*) as nb FROM `formulaire` ORDER BY `datemessage` ASC";
    $query = $db->query($sql);
    $result = $query->fetch(PDO::FETCH_ASSOC);
    $query->closeCursor();
    return $result['nb'];
}


//Fonction qui insère un message dans la base de données 'portfolio' et sa table 'formulaire'

function addMessage(
    PDO $db,
    string $firstname,
    string $lastname,
    string $usermail,
    string $message
) {
    $firstname = htmlspecialchars(strip_tags(trim($firstname)), ENT_QUOTES);
    $lastname = htmlspecialchars(strip_tags(trim($lastname)), ENT_QUOTES);
    $usermail = filter_var($usermail, FILTER_VALIDATE_EMAIL);
    $message = htmlspecialchars(strip_tags(trim($message)), ENT_QUOTES);

    // si les données ne sont pas valides ou vide, cela retourne une erreur
    if (empty($firstname) || empty($lastname)  || $usermail === false || empty($message)) {
        return false;
    }
    //requete sql pour insérer dans les données dans la table formulaire
    $sql = "INSERT INTO `formulaire` (`firstname`,`lastname`,`usermail`,`message`) VALUES ('$firstname','$lastname','$usermail','$message')";

    //Cela tente d'executer la requete sql, si ça réussit, ça retourne true sinon, cela retourne un message d'erreur
    try {
        $db->exec($sql);
        return true;
    } catch (Exception $e) {
        return $e->getMessage();
    }
}
