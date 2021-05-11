<?php include "inc/header.php" ?>
  <div class="container">
    <div class="jumbotron">
      <h1 class="display-4">Connexion</h1>
      <hr class="my-4">
      <p>Remplisser les deux champs correctement et vous pourrez accédez à votre compte</p>
	  <p>Vous n'avez pas de compte? <a href="inscription.php">INSCRIVEZ-VOUS!</a></p>
    </div>
	<!--formulaire qui aprés validation redirige vers le fichier connect.php -->
	<form id="form" action="controllers/connect.php" method="POST" novalidate>
		<div class="form-group row">
        	<div class="col-md-4 mb-3">
				<!-- saisie de l'email -->
          		<label for="emailuser">Email</label>
          		<input type="text" class="form-control" id="emailuser" name="emailuser" placeholder="Votre email" required>
          		<div class="invalid-feedback">
            		Le champ prénom est obligatoire
          		</div>
        	</div>
        </div>
        <div class="form-group row">
        	<div class="col-md-4 mb-3">
			<!-- saisie du mot de passe -->
          		<label for="userpw">Mot de passe</label>
          		<input type="password" class="form-control" id="userpw" name="userpw" placeholder="Votre mot de passe" required>
          		<div class="invalid-feedback">
           			Les mots de passe ne sont pas identiques
          		</div>
        	</div>
      	</div>
		<!-- bouton d'envoie  --> 
      	<button class="btn btn-primary" type="submit">Connexion</button>
	</form>
<?php include "inc/footer.php"; ?>