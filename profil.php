<?php include "inc/header.php"; ?>
<link rel="stylesheet" href="paniercss/style.css" type="text/css" media="screen" charset="utf-8">

<?php
require('inc/data.php');
if(!isset($_SESSION)){
    session_start();
}
?>

<?php $propriete = intval($_SESSION["user"]->IdUsers); ?>

<?php 
$afficher = $pdo->prepare("SELECT * FROM users Where IdUsers = ?");
$afficher->bindParam(1, $propriete);
$afficher->execute();

?>




<?php foreach ($afficher as $afficher): ?>

<br><br><br><br><br>
  <h1> nom : <?= $afficher->NomUsers; ?> </h1>
  <h1> prenom : <?= $afficher->PrenomUsers; ?> </h1>
  <h1> Email: <?= $afficher->EmailUsers; ?> </h1>
  <h1> sexe : <?= $afficher->sexe; ?> </h1>
  <h1> type : <?= $afficher->TypeUsers; ?> </h1>

  
			<?php endforeach ?>
      <p> Si vous le désirez vous pouvez modifier vos informations personnelles<p>
        <br>
      <form id="form"   method="POST">
      <div class="form-group row">
        <div class="col-md-4 mb-3">
          <label for="prenom">Nom</label>
          <input type="text" class="form-control" id="nom" name="NomM" placeholder="Votre Nom" required>
          <button class="btn btn-primary" name="ModifNom" >Valider</button>
</form>

<?php
if(isset($_POST['ModifNom']))
{
  $modifier = $pdo->prepare("UPDATE Users SET NomUsers = ? WHERE IdUsers = ?  ");
  $modifier->bindParam(1,$_POST['NomM']);
  $modifier->bindParam(2,$propriete);
  $modifier->execute();

}
?>


            
          
            <br><br>
            <form id="form1"   method="POST">
      <div class="form-group row">
        <div class="col-md-4 mb-3">
          <label for="prenom">Prénom</label>
          <input type="text" class="form-control" id="prenom" name="prenomM" placeholder="Votre prénom" required>
          <button class="btn btn-primary" name="ModifPrenom" type="submit">Valider</button>
        </div>
      </div>
</form>
<?php
if(isset($_POST['ModifPrenom']))
{
  $modifier = $pdo->prepare("UPDATE Users SET PrenomUsers = ? WHERE IdUsers = ?  ");
  $modifier->bindParam(1,$_POST['prenomM']);
  $modifier->bindParam(2,$propriete);
  $modifier->execute();

}
?>

<form id="form"   method="POST">
      <div class="form-group row">
        <div class="col-md-4 mb-3">
          <label for="nom">email</label>
          <input type="text" class="form-control" id="email" name="emailM" placeholder="Votre nom" required>
          <button class="btn btn-primary" name="Modifemail" type="submit">Valider</button>
        </div>
      </div>
</form>
<?php
if(isset($_POST['Modifemail']))
{
  $modifier = $pdo->prepare("UPDATE Users SET EmailUsers = ? WHERE IdUsers = ?  ");
  $modifier->bindParam(1,$_POST['emailM']);
  $modifier->bindParam(2,$propriete);
  $modifier->execute();

}
?>

     
    
    



     
  


