<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">

</head>

<body>
	<div class="container">
		<div class="col-md-12">
			<div class="col-md-4 col-md-offset-4">
			<div class="alert message"></div>
				<form action="#" method="POST" class="frmconex">
					<div class="form-group">
						<label for="login">Login:</label>
						<input type="login" name="login" class="form-control">
					</div>
					<div class="form-group">
						<label for="mdp">Mot de passe:</label>
						<input type="password" name="password" class="form-control">
					</div>

					<div class="form-group">
						<input type="submit" class="btn btn-primary" value="Connexion">
						<input type="reset" class="btn btn-warning pull-right" value="Annuler">
					</div>
				</form>
			</div>
		</div>
	</div>
	<script type="text/javascript" src="js/jquery.min.js"></script>
	<script type="text/javascript" src="js/script.js"></script>
</body>
</html>