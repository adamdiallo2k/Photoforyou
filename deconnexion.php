<?php
	session_start();
	session_destroy();
?>
<head>
	<meta charset="utf-8">
	<!-- on fait appelle au fichier bootsrap --> 
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
</head>
<body>
<!-- inclusion du haut de page --> 
<?php
    include ("inc/header.php");
?>
<div class="container">
    <div class="jumbotron">
      <h1 class="display-4">Vous êtes déconnécter</h1>
      <hr class="my-4">
      <p>Au plaisir de vous revoir prochainement</p>
    </div>
</body>