<?php
// on fait appelle au fichier data
require('../inc/data.php');

// déclaration des variables
$nom = $_POST['nom'];

$prenom = $_POST['prenom'];

$email = $_POST['email'];

$type = $_POST['choixType'];

$mdp = password_hash($_POST['motdepasse1'], PASSWORD_DEFAULT);

//Penser à vérifer l'existance du compte avant enregistrement !!!!!!!!!!!!!!!!

// Requete pour l'insertion des données
$insertion = $pdo->prepare("INSERT INTO users (NomUsers, PrenomUsers, EmailUsers, mdpUsers, CreditUsers, Type) VALUES (?, ?, ?, ?, ?, ?)");
$insertion->bindParam(1, $nom);
$insertion->bindParam(2, $prenom);
$insertion->bindParam(3, $email);
$insertion->bindParam(4, $mdp);
$insertion->bindValue(5, 0);
$insertion->bindParam(6, $type);

$insertion->execute();
?>