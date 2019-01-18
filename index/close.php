<?php 

include "../inc/login.php";

$user = $_GET["username"];
$pass = $_GET["pass"];
$users = array('Renato', 'Rhian', 'Renan', 'Lilian', 'Renatão');
$passes = array('Plugxyvj9', 'rhian123', 'ABC11RENAN', 'pacocaebisteca', '3009');

session_start();

$_SESSION["nome"] = $user;
switch ($user) {
	case "Renato":
		$_SESSION["conected"] = 1;
		break;

	case "Lilian":
		$_SESSION["conected"] = 2;
		break;

	case "Renan":
		$_SESSION["conected"] = 3;
		break;


	case "Rhian":
		$_SESSION["conected"] = 4;
		break;


	case "Renatão":
		$_SESSION["conected"] = 5;
		break;

	default:
		break;
}

login($user, $pass, $users, $passes);

if($logado){
	header('Location: ../content/sessao.php'); 
}

 ?>