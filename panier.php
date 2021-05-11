<!--- apppelle de la bse de donnée -->
<?php require 'inc/data.php'; ?>
<link rel="stylesheet" href="css/style.css" type="text/css" media="screen" charset="utf-8">
<div class="home">
	<div class="row">
		<div class="wrap">
			
			<?php $products = $pdo->query('SELECT * FROM products'); ?>
			<?php foreach ( $products as $product ): ?>
				<div class="box">
					<div class="product full">
						<a href="#">
							<img src="<?= $product->Chemin; ?>">
						</a>
						<div class="description">
							<?= $product->name; ?>
							<a href="#" class="price"><?= number_format($product->price,2,',',' '); ?> €</a>
						</div>
						<a href="addpanier.php?id=<?= $product->id; ?>" class="gift addPanier">
							Gift
						</a>
						<div class="rating">
							<span>Rating :</span>
							<ul>
								<li><a href="#">1</a></li>
								<li><a href="#">2</a></li>
								<li><a href="#">3</a></li>
								<li><a href="#">4</a></li>
								<li><a href="#" class="off">5</a></li>
							</ul>
						</div>
						<a class="add addPanier" href="addpanier.php?id=<?= $product->id; ?>">
							add
						</a>
					</div>
				</div>
			<?php endforeach ?>
		</div>
	</div>
</div>
<div id="pagination">
	<ul class="wrap">
		<li><a href="#"> Prev </a></li>
		<li class="page"> Page : <a href="#">2</a> of 3</li>
		<li><a href="#"> Next</a></li>
	</ul>
</div>


