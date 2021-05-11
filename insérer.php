



<form id="form"  method="POST" action="upload.php" enctype="multipart/form-data">
 
 <div class="form-group row">
        <div class="col-md-4 mb-3">
          <label for="prenom">nom de la photo</label>
          <input type="text" class="form-control" id="prenom" name="nomPhoto" placeholder="nom de la photo" required>
        </div>
      
      <div class="form-group row">
        <div class="col-md-4 mb-3">
          <label for="nom">Prix de la photo</label>
          <input type="text" class="form-control" id="nom" name="prixPhoto" placeholder="prix de la photo" required>
         
        </div>
		


	<div class="form-group row">
        <div class="col-md-4 mb-3">
          <label for="prenom">Catérorie de la photo</label>
          <input type="text" class="form-control" id="prenom" name="categoriePhoto" placeholder="" required>
        
        
      </div>
  <div class="form-group row">
        <div class="col-md-4 mb-3">
          <label for="nom">dépot de la photo</label>
          <input type="file" class="form-control" id="img" name="img" placeholder="Dépot"  required>
		    
        </div>
		<button type="submit" class="btn btn-success btn-block">Soumettre</button>

      
    
    </form>