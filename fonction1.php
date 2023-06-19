<?php
function connectAdmin($postData) {
    include 'connec.php';
    $email = $postData['email'];
    $mp = $postData['mp'];
    $requete = "SELECT * FROM administrat WHERE email = ? AND mp = ?";
    $stmt = $pdo->prepare($requete);
    $stmt->execute([$email, $mp]);
    $user = $stmt->fetch();
    return $user;
}
function getAlladmin(){
    //connexion a la base de donnee
include 'connec.php';
// creation de la requette
$requette = "SELECT * FROM administrat ";
// execution de la requette
$resultat = $pdo->query($requette);
// resultat de la requette 
$administrat = $resultat->fetchAll();
//var_dump($categorie);
return $administrat;
}

function getParent(){
    //connexion a la base de donnee
include 'connec.php';
// creation de la requette
$requette = "SELECT * FROM parent ";
// execution de la requette
$resultat = $pdo->query($requette);
// resultat de la requette 
$parent = $resultat->fetchAll();
//var_dump($categorie);
return $parent;
}

function getEleve(){
    //connexion a la base de donnee
include 'connec.php';
// creation de la requette
$requette = "SELECT * FROM eleve ";
// execution de la requette
$resultat = $pdo->query($requette);
// resultat de la requette 
$eleve = $resultat->fetchAll();
//var_dump($categorie);
return $eleve;
}

function getBulletin(){
    //connexion a la base de donnee
include 'connec.php';
// creation de la requette
$requette = "SELECT * FROM bulletin ";
// execution de la requette
$resultat = $pdo->query($requette);
// resultat de la requette 
$bulletin = $resultat->fetchAll();
//var_dump($categorie);
return $bulletin;
}







 

?>