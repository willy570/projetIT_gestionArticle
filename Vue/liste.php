<?php
//import de la classe de connexion
require '../CONFIG/Bd.class.php';

//Import du manager
require '../MANAGER/class.ManagerArticle.php';

//creation d'une instance du manager
$manArticle = new ManagerArticle;
$liste =$manArticle->listeArticle();
?>
<!DOCTYPE html>
<html>
<head>
	<title>Liste article</title>
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
			<div class="col-md-6 col-md-offset-3">
				<table class="table table-hover table-bordered">
					<th>#</th>
					<th>Libellé</th>
					<th>Description</th>
					<th>Catégorie</th>
					<th>Action</th>
					<tbody>
						<?php foreach($liste as $art) :?>
							<tr>
								<td><?= $art['id']?></td>
								<td><?= $art['libelleArt']?></td>
								<td><?= $art['description']?></td>
								<td><?= $art['cat']?></td>
								<td>
									<a class="btn btn-primary" data-toggle="modal" href='#modal-id<?=$art['id']?>'><span class="glyphicon glyphicon-pencil"></span></a>

									<a class="btn btn-danger" data-toggle="modal" href='#modal-id'><span class="glyphicon glyphicon-trash"></span></a>

									<div class="modal fade" id="modal-id<?=$art['id']?>">
									<div class="modal-dialog">
										<div class="modal-content">
											<div class="modal-header">
												<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
												<h4 class="modal-title">Modal title</h4>
											</div>
											<div class="modal-body">
												<form action="" method="POST" class="form-horizontal" role="form">
														<div class="form-group">
															<legend>Modification article</legend>
														</div>
															<div class="form-group">
																<label for="libelle">Libelle</label>
																<input type="text" class="form-control" value="<?=$art['libelleArt']?>">
															</div>
															<div class="form-group">
																<label for="description">Description</label>
																<input type="text" class="form-control" value="<?= $art['description']?>">
															</div>
														
												
														<div class="form-group">
															<div class="col-sm-10 col-sm-offset-2">
																<button type="submit" class="btn btn-primary">Submit</button>
															</div>
														</div>
												</form>
											</div>
											<div class="modal-footer">
												<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
												<button type="button" class="btn btn-primary">Save changes</button>
											</div>
										</div>
									</div>
								</div>

								</td>
							</tr>
						<?php endforeach?>
					</tbody>
				</table>
			</div>
		</div>
	</div>
	

	<script type="text/javascript" src="../js/jquery.min.js"></script>
	<script type="text/javascript" src="../js/bootstrap.min.js"></script>
	<script type="text/javascript" src="../js/script.js"></script>
</body>
</html>