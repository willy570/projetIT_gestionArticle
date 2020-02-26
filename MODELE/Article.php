<?php
/**
 * 
 */
class Article
{
	private $id_art;
	private $libelle_art;
	private $descript;
	private $date_ajout;
	private $cat;
	private $id;
	
	function __construct($donnees)
	{
		$this->hydratation($donnees);
	}
		public function getId_art()	{
		return $this->id_art;
	}
		public function getLibelle_art() {
		return $this->libelle_art;
	}
		public function setLibelle_art($libelle_art) {
		$this->libelle_art=$libelle_art;
	}
		public function getDescript() {
		return $this->descript;
	}
		public function setDescript($descript) {
		$this->descript=$descript;
	}
		public function getDate_ajout() {
		return $this->date_ajout;
	}
		public function setDate_ajout($date_ajout) {
		$this->date_ajout=$date_ajout;
	}
		public function getCat() {
		return $this->cat;
	}
		public function setCat($cat) {
		$this->cat=$cat;
	}
		public function getId() {
		return $this->id;
	}

	function hydratation ($donnees){
		foreach ($donnees as $key => $value) {
			$methode='set'.ucfirst($key);
				if (method_exists($this,$methode)) {
					$this->$methode($value);
				}
		}
	}
		

}
/*
$art= new Article(array(
	"libelle_art"=>"BF",
	"descript"=>"Savon de marseille",
	"date_ajout"=>"13/01/2020",
	"cat"=>1
));
var_dump($art)

/*echo $art->getLibelle_art();
var_dump($art);
$art->setLibelle_art("BF");
var_dump($art);
echo $art->getLibelle_art();
*/

?>