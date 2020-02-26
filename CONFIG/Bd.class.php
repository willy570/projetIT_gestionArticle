<?php
/**
 * 
 */
class BD
{
	private static $dns="mysql:host=localhost;dbname=gestion";
	private static $user="root";
	private static $pwd="";
	private static $bd="null";

	function __construct()
	{	
			#code...
	}
	public static function connexion()
	{
		try {
			self::$bd=new PDO(self::$dns,self::$user,self::$pwd);

		} catch (Exception $e) {
			die('Erreur:'.$e->getMessage());
			
		}

		//retourne la connexion en cas de succès de connexion à la BD
		return self::$bd;
	}
	}