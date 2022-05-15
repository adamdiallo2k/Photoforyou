<!--- apppelle de la bse de donn�e -->
<?php require 'inc/data.php'; ?>
<?php include 'inc/header.php';?>

<br><br><br><br><br>





<link rel="stylesheet" href="paniercss/style.css" type="text/css" media="screen" charset="utf-8">

<form method="POST" action="achat.php" >



<div class="home">

	<div class="row">
		<div class="wrap">
		
		
			
			<?php $products = $pdo->query('SELECT id,name,price,idPhotographe, categorie,Chemin FROM products where idClient = 0'); ?>
			<?php foreach ( $products as $product ): ?>
				
				<form method="POST" action="achat.php">
				<div class="box"> 
					<div class="product full">
						<a href="#">
							<img src="<?= $product->Chemin; ?>">
						</a>
						<div  name="prix" value='<?$product->price?>' class="description">
							<?= $product->name; ?> 
							<h3 href="#" name="price"   class="price"><?= number_format($product->price,2,',',' '); ?> </h3> $
							
						</div>
						<a href="addpanier.php?id=<?= $product->id; ?>" class="gift addPanier">
							Gift
						</a>
						<div class="rating">
							<h2 name="categorie">Catégorie : <?= (string) $product->categorie;?></h2>
							
							
							
						</div>
						<?php
						echo 
						"<button name='Choix' class='add panier' value='$product->id'> Ajouter </button>
						";?>
					</div>
				</div>
			</form>
				
			<?php endforeach ?>
			
			
		</div>
	</div>
</div>

</form>





