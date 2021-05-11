<?php include 'inc/header.php'; ?>
  <div class="container">
    <div class="jumbotron">
      <h1 class="display-4">Inscription</h1>
      <p class="lead">Merci de remplir ce formulaire d'inscription.</p>
      <hr class="my-4">
      <p>Vous ferez bientôt parti de nos membres. Vous avez fait le bon choix ;-)</p>
	  <p>Êtes-vous déjà inscrit? <a href="connexion.php"> CONNECTEZ-VOUS! </a></p>
    </div>
	
    <form oninput='motdepasse2.setCustomValidity(motdepasse2.value != motdepasse1.value ?  "Mot de passe non identique" : "")' id="form" action="controllers/envoie.php" method="POST" novalidate>
      <div class="form-group row">
        <div class="col-md-4 mb-3">
          <label for="prenom">Prénom</label>
          <input type="text" class="form-control" id="prenom" name="prenom" placeholder="Votre prénom" required>
          <div class="invalid-feedback">
            Le champ prénom est obligatoire
          </div>
        </div>
      </div>
      <div class="form-group row">
        <div class="col-md-4 mb-3">
          <label for="nom">Nom</label>
          <input type="text" class="form-control" id="nom" name="nom" placeholder="Votre nom" required>
          <div class="invalid-feedback">
            Les mots de passe ne sont pas identiques
          </div>
        </div>
      </div>
      <div class="form-group row">
        <div class="col-md-4 mb-3">
          <label for="email">Adresse électronique</label>
          <input type="email" class="form-control" id="email" name="email" placeholder="E-mail" required>
          <small id="emailHelp" class="form-text text-muted">Nous ne partagerons votre email.</small>
          <div class="invalid-feedback">
            Vous devez fournir un email valide.
          </div>
        </div>
      </div>
      <div class="form-group row">
        <div class="col-md-4 mb-3">
          <label for="motDePasse1">Votre mot de passe</label>
          <input type="password" class="form-control" name=motdepasse1 required>
        </div>
      </div>
      <div class="form-group row">
        <div class="col-md-4 mb-3">
          <label for="motDePasse2">Confirmation du mot de passe</label>
          <input type="password" class="form-control" name=motdepasse2 required>
          <div name="message" class="invalid-feedback">
            Mot de passe invalide
          </div>
        </div>
      </div>

      <!-- Choix entre Client ou Photographe -->
      <div class="btn-group btn-group-toggle" data-toggle="buttons">
        <label class="btn btn-info">
          <input type="radio" name="choixType" id="client" value="client">
          Client
        </label>
        <label class="btn btn-info">
          <input type="radio" name="choixType" id="Photographe" value="Photographe">
          Photographe
        </label>
      </div>

      <div class="form-group">
        <div class="form-check">
          <input class="form-check-input" type="checkbox" value="" id="emailPromo">
          <label class="form-check-label" for="emailPromo">
            Oui, je veux recevoir des sources d’inspiration visuelles, des offres spéciales et autres communications par e-mail. 
          </label>
        </div>
      </div>
      <button class="btn btn-primary" type="submit">Envoyer</button>
    </form>
  </div>

<?php include "inc/footer.php"; ?>