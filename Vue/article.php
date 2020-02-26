<!DOCTYPE html>
<html>
<head>
	<title>Ajout article</title>
	<link rel="stylesheet" type="text/css" href="../css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="../css/style.css">
</head>
</head>
<body>
	<div class="container">
		
		<?php
  			include('menu.php');
  		?>

		<div class="col-md-12">
			<div class="col-md-4"></div>
			<div class="col-md-4">
				<form action="../traitement/ajoutArticle.php" method="POST" id="frmAjout">
					<div class="form-group">
						<label for="libelle">Libellé</label>
						<input type="text" name="libelle" class="form-control" placeholder="libelle">
					</div>
					<div class="form-group">
						<label for="description">Description</label>
						<textarea name="description"  class="form-control"> </textarea>
					</div>
			
			<div class="form-group">
				<label for="categorie">Type article</label>
				<select name="categorie" class="form-control">
					<option value="">Choisir</option>
					<option value="1">chaussures</option>
					<option value="2">huiles</option>
					<option value="3">savons</option>
				</select>
				
			</div>
			<div class="form-group">
				
					<input type="submit" name="" class="btn btn-primary" value="enregistrer">

					<input type="reset" name="" class="btn btn-warning pull-right annuler" value="annuler">
					
				
			</div>

		</form>
		<div class="message"></div>
			</div>

			<div class="col-md-4"></div>
		</div>
	</div>

	<script type="text/javascript" src="../js/jquery.min.js"></script>
	<script type="text/javascript" src="../js/script.js"></script>
</body>
</html>