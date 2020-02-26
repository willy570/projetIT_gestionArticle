<?php

//import de la classe Article
require '../MODELE/Article.php';

/**
 * 
 */
class ManagerArticle
{
	public static $bd;

	function __construct()
	{
		self::$bd = BD::connexion();
	}


	/*Fonction permettant d'ajouter un article
	* elle prend en paramètre un article
	*
	* @parametre Article 
	*
	*/

	public function ajoutArticle(Article $article)
	{
		$response = false;
		try {

			$req = self::$bd->prepare('insert into article (id, libelleArt, description, datAjout, cat) values (null, ?, ?, now(), ?)');
			$req->execute([
				$article->getLibelle_art(),
				$article->getDescript(),
				$article->getCat()
			]);

			$response = true;
			
		} catch (Exception $e) {
			echo $e->getMessage();
		}
		
		return $response;
	}


	public function listeArticle()
	{
		$req = self::$bd->query("select * from article");

		$reponse = $req->fetchAll();
		return $reponse;
	}


}