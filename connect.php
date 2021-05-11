<?php
// appelle du fichier data
require('../inc/data.php');

// déclaration des variables
$mdp = $_POST['userpw']; // userpw
$emailuser = $_POST['emailuser']; // emailuser

$req = $pdo->prepare("SELECT * FROM users WHERE EmailUsers = ?");
$req->bindParam(1, $emailuser);
$req->execute();

if($account = $req->fetch()){

    $password = $account->mdpUsers;
    if(password_verify($mdp, $password)){

        session_start();
        //ceci est la session user contenant la totalité des infos en BDD
        $_SESSION["user"] = $account;

        $type = $account->Type;
        if($type == "photographe"){
            header("Location: /Photographe.php");
            exit();
        }else{
			
            //c'est un client faire ce qui doit être fait
			header("Location: /Client.php");
        }

    }else{
        echo "Mot de passe invalide !";
    }

}else{
    echo "Le compte n'existe pas !";
}

?>