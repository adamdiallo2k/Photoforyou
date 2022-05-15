<?php
if(!isset($_SESSION)){
    session_start();
}
require 'inc/data.php'; ?>

<html>
    <head>
        <meta charset="utf-8">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
        <link rel="stylesheet" href="style.css">
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
                  echo '<a class="dropdown-item" href="#">Les plus populaires</a>';
                  echo '<a class="dropdown-item" href="#">Les nouveautés</a>';
                }
          else {
				// si le type est client
                if($_SESSION['type'] == 'client'){

                      $sql = 'SELECT * FROM navbar where proprietaire = "0";' ;
                      $sth = $pdo->prepare($sql);
                      $sth->execute();
                    
                      $result = $sth->fetchAll();
                    
                      foreach ($result as $enr)
                      {
                        $nom = $enr->nom;
                        
                         echo '<a class="dropdown-item" href=" '.$enr->chemin.' ">'.$enr->nom.' </a>';
                        
                      }
                  }
                  


                elseif($_SESSION['type'] == 'Photographe')
                  {
                    $sql = 'SELECT * FROM navbar where proprietaire = "1";' ;
                    $sth = $pdo->prepare($sql);
                    $sth->execute();
                  
                    $result = $sth->fetchAll();
                  
                    foreach ($result as $enr)
                    {
                      $nom = $enr->nom;
                      
                       echo '<a class="dropdown-item" href=" '.$enr->chemin.' ">'.$enr->nom.' </a>';
                    }
                }

                elseif($_SESSION['type'] == 'admin')
                  {
                    $sql = 'SELECT * FROM navbar where proprietaire = "2";' ;
                    $sth = $pdo->prepare($sql);
                    $sth->execute();
                  
                    $result = $sth->fetchAll();
                  
                    foreach ($result as $enr)
                    {
                      $nom = $enr->nom;
                      
                       echo '<a class="dropdown-item" href=" '.$enr->chemin.' ">'.$enr->nom.' </a>';
                    }
                }
                else {
                  echo 'erreur';
                }
                  }
                
                
                    ?>
                    
                  
				
              
						
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
                    echo '<a class="nav-link btn btn-outline-dark" href="../inscription.php">indentification</a>';
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