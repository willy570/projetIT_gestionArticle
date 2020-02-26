<?php

//import de la classe Article
require '../MODELE/User.php';

/**
 * 
 */
class ManagerUser
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

	/*public function ajoutArticle(Article $article)
	{
		try {

			$req = self::$bd->prepare('insert into article (id, libelleArt, description, datAjout, cat) values (null, ?, ?, now(), ?)');
			$req->execute([
				$article->getLibelle_art(),
				$article->getDescript(),
				$article->getCat()
			]);
			
		} catch (Exception $e) {
			echo $e->getMessage();
		}
		
	}*/


	/*fonction de verification de connexion de l'utlisateur
	*@param login
	*@param mdp
	*/

	public function verifConnexion($login, $mdp)
	{
		try {

			$req = self::$bd->prepare('SELECT login, password from utilisateur where login =? and password =?');
			$req->execute([$login, $mdp]);

			/*retourne une seule information*/
			$rep = $req->fetch();
			//var_dump(count($rep));
			if ($rep) {
				return true;
			}else{
				return false;
			}

			/*retourne toute les informations*/
			//$rep = $req->fecthAll();
			
		} catch (Exception $e) {
			
		}
	}

}