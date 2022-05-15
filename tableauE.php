

<!DOCTYPE html>
<html>
  <head>
  <?php include 'inc/header.php';?>
  <?php require 'inc/data.php'; ?>
    <title>Cours Complet Bootstrap 4</title>
    <meta charset='utf-8'>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  </head>
  <br>
  <body>
    <div class="container">
      <h1>Les tableaux Bootstrap</h1>
      <table class="table table-dark">
      <?php 


?>
       
      
           

            
          </thead>
        <tr>
            <th scope="col">IdUsers</th>
            <th scope="col">NomUsers</th>
            <th scope="col">PrenomUsers</th>
            <th scope="col">EmailUsers</th>
            <th scope="col">mdpUsers</th>
            <th scope="col">CreditUsers</th>
            <th scope="col">TypeUsers</th>
            <th scope="col">sexeUsers</th>
            <th scope="col">Supprimer</th>
            
        </tr>
        
        
        </thead>

                
               

      <?php 
$afficher = $pdo->prepare("SELECT 
IdUsers, NomUsers, PrenomUsers, EmailUsers, mdpUsers, CreditUsers, TypeUsers, sexeUsers
FROM users
");
$afficher->execute();

$compter = $pdo->prepare("Select * From users ;");
$compter->execute();

      ?>




<form method="POST">
<?php


foreach ($afficher as $afficher)
  {
       echo " '<tbody>'  '<tr>'  '<td>  $afficher->IdUsers </td>' 
       '<td>  $afficher->NomUsers  </td>' 
       '<td> $afficher->PrenomUsers  </td>'  
       '<td>  $afficher->EmailUsers  </td>' 
       '<td>  $afficher->mdpUsers  </td>' 
       '<td>  $afficher->CreditUsers  </td>'     
       '<td>  $afficher->TypeUsers  </td>'  
       '<td> $afficher->sexeUsers  </td>'   .
       '<td><button name='envoyer' value='$afficher->IdUsers' > Supprimer '</button><td>' ";
       
  }  

?>

</form>


     

      </table>
    </div>
  </body>

  <?php
if(isset($_POST["envoyer"]) )
{
    $idvalue = $_POST["envoyer"];
    $supprimer = $pdo->prepare("Delete  FROM users where IdUsers = ?
");
$supprimer->bindParam(1,$idvalue);
$supprimer->execute();


    
}
?>
  
</html>

