<?php
if(!isset($_SESSION)){
    session_start();
}
?>
<html>
    <head>
        <meta charset="utf-8">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
        <title>Photo4You</title>
    </head>
<header>
		<!-- nav est un élément HTML servant à la navigation -->
    	<nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
        	<a class="navbar-brand" href="index.php">PhotoForYou</a>
        	<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
          	<span class="navbar-toggler-icon"></span>
        	</button>
        	<div class="collapse navbar-collapse" id="navbarCollapse">
          		<ul class="navbar-nav mr-auto">
            		<li class="nav-item dropdown">
						<a class="nav-link dropdown-toggle" data-toggle="dropdown" role="button" href="#">Photos</a>
						<div class="dropdown-menu">
              <?php
                if(!isset($_SESSION['type'])){
                  echo '<a class="dropdown-item" href="../inscription.php">Acheter</a>';
                  echo '<a class="dropdown-item" href="../inscription.php">Vendre</a>';
                }
                else {
				// si le type est client
                  if($_SESSION['type'] == 'client'){
                    echo '<a class="dropdown-item" href="#">Acheter</a>';
					 echo '<a class="dropdown-item" href="#">Vendre</a>';
                  }
                  else {
				  // si le type est photographe
                    echo '<a class="dropdown-item" href="#">Déposer photo</a>';
					echo '<a class="dropdown-item" href="#">Mes photos</a>';

                  }
                }
              ?>
							<a class="dropdown-item" href="#">Les plus populaires</a>
							<a class="dropdown-item" href="#">Les nouveautés</a>
						</div>
					</li>
            		<li class="nav-item">
              		<?php
                    if(!isset($_SESSION['type'])){
                      echo '<a class="nav-link" href="../inscription.php">Tarifs</a>';
                    }
                    else {
                      if($_SESSION['type'] == 'client'){
                        echo '<a class="nav-link" href="#">Tarifs</a>';
                      }
                      else {
                        echo '';
                      }
                    }
                  ?>
            		</li>
          		</ul>
          		<form class="form-inline mt-2 mt-md-0">
            		<input class="form-control mr-sm-2" type="text" placeholder="Rechercher..." aria-label="Search">
            		<button class="btn btn-outline-success my-2 my-sm-0" type="submit">Rechercher</button>
          		</form>
          		<ul class="navbar-nav mr-right">
            
        			<li class="nav-item">
                  <?php
                  if(isset($_SESSION['type'])){
              			echo '<a class="nav-link btn btn-outline-dark" href="../deconnexion.php">deconnexion</a>';
                  }
                  else{
                    echo '<a class="nav-link btn btn-outline-dark" href="../connexion.php">se connecter</a>';
                  }
                  ?>
            		</li>
            		<li class="nav-item">
                  <?php
                  if(isset($_SESSION['type'])){
                    echo '';
                  }
                  else{
                    echo '';
                  }
                  ?>
           			</li>
          		</ul>  
        	</div>
    	</nav>
    </header>
<body>


</html>