<?php 

function login($t1, $t2, $Ar1, $Ar2){
	$ip = $_SERVER['REMOTE_ADDR'];
	// We'll use the IP in the section;

	// The $Ar1 and $Ar2 MUST be Arrays;

	$logado = false;

	foreach ($Ar1 as $x){
		if($t1 === $x){
			foreach ($Ar2 as $y){
				if($t2 == $y){
					echo "<b style='font-family: arial;'>Seja bem vindo, " . $x . " !</b>";
					global $logado;
					$logado = true;
					return;
				}

			}
		}

		else{
			global $logado;
			$logado = false;
		}

	}

}

// Test:

//$users = array("Renato", "Lenon");
//$passwords = array("dev", "dev1");
//login("Lenon", "dev", $users, $passwords);

 ?>