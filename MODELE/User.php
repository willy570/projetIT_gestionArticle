<?php


/**
 * 
 */
class User
{
	private $id, $login, $role, $mdp;

	function __construct($donnees)
	{
		$this->hydratation($donnees);
	}

	public function getId()
	{
		return $this->id;
	}

	public function getLogin()
	{
		return $this->login;
	}

	public function getRole()
	{
		return $this->role;
	}

	public function getMdp()
	{
		return $this->mdp;
	}

	public function setLogin($login)
	{
		$this->login = $login;
	}



	public function setRole($role)
	{
		$this->role = $role;
	}

	public function setMdp($mdp)
	{
		$this->mdp = $mdp;
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