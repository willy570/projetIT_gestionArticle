<?php
//import de la classe de connexion
require '../CONFIG/Bd.class.php';

//import de la classe de user
require '../MANAGER/class.ManagerUser.php';

$user = new ManagerUser;

/*recuperation des informations du formulaire*/
$login = $_POST['login'];
$mdp = $_POST['password'];

if($user->verifConnexion($login, $mdp)){
	echo json_encode(1);
}else{
	echo json_encode(0);
}



