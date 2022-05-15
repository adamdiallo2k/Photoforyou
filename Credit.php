<?php include "inc/header.php"; ?>

<div class="container">
    <div class="jumbotron">
      <h1 class="display-4">Achat de crédit</h1>
      <hr class="my-4">
      <p>N'oublier pas ! Un crédit = 2 euro </p>
    </div>

    <h1 class="display-4">Calcul de crédit </h1>

    <form id="form" action="" method="POST" novalidate>
		<div class="form-group row">
        	<div class="col-md-4 mb-3">
				<!-- saisie de l'email -->
          		<label for="Euro">Valeur en euro</label>
          		<input type="text" class="form-control"  name="Euro" placeholder="exemple 300 €" required>
          		<div class="invalid-feedback">
            		Le champ prénom est obligatoire
          		</div>
        	</div>
        </div>
       
		<!-- bouton d'envoie  --> 
      	<button name="resultat" class="btn btn-primary" type="submit">Resultat</button>
      
	</form>
</body>



<?php if(isset($_POST['resultat'])) 
{

	if(empty($_POST['Euro'])) 
	{
		echo 'veuillez saisir une valeur !';
	}
else 
{

// Traitement des crédit
$credit = $_POST['Euro'] * 2;
$_SESSION['Credit'] = $credit;
$_SESSION['Euro'] =  $_POST['Euro'];
echo 'Pour ' . $_POST['Euro']  . ' euro ' . '<br>' . 
 ' Vous obtenez ' . $credit . ' crédit ' . '<br>' .
 '<a href="paiement.php"> cliquez ici pour procéder au paiement<a>' ;
}
}
 ?>



<?php include 'inc/footer.php';?>