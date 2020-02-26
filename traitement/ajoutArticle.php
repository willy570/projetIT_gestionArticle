<?php
//import de la classe de connexion
require '../CONFIG/Bd.class.php';

//Import du manager
require '../MANAGER/class.ManagerArticle.php';

//creation d'une instance du manager
$manArticle = new ManagerArticle;

$article =  new Article([
	"libelle_art"=>$_POST['libelle'],
	"descript"=>$_POST['description'],
	"cat"=>$_POST['categorie']
]);

$res = $manArticle->ajoutArticle($article);

echo json_encode($res);




