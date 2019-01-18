<?php 
// Este bloco analisa se uma sessão é de alguém 0, 1, 2... E modifica o HTML de acordo com o mesmo
/////////////////////////////////////

session_start();

$pai = false;
$dev = false;
$normal = true;

switch ($_SESSION["conected"]) {
	case 1:
		$dev = true;
		$normal = false;
		break;

	case 2:
		$pai = true;
		$normal = false;
		break;

	case 3:
		break;

	case 4:
		break;

	case 5:
		$normal = false;
		$pai = true;
		break;

	default:
		echo "Erro: você não está realmente logado";
	// De agora em diante, vou ter que verificar se:
		// É $normal
		// É $pai
		// É $dev
		// Não é nenhum dos dois

};

if($pai){
	echo "é pai, ". $_SESSION["nome"];
}

else if($dev){
	echo "é developer , " . $_SESSION["nome"];
}

else if($normal){
	echo "Apenas um usuário normal, certo?";
}

else{
	echo "Você não é nenhum dos dois?";
	return;
}

ECHO "<a href='cpanel/index.php'> Clique para prosseguir </a>";

 ?>

 <?php 


  ?>