<!DOCTYPE html>
<html lang="pt-br">
	<head>
		<title>Envio de dador</title>
		<meta charset="utf-8">
	</head>
	<body>
		<?php
			echo "<h1>Os dados informados são:</h1>";
			$nome = $_POST["txtNome"];
			$ender= $_POST["txtEndereco"];
			$cpf= $_POST["txtCPF"];
			$estado= $_POST["listEstados"];
			$dtNasc = $_POST["txtData"];
			$diaNasc = substr("$dtNasc",0,2);
			$mesNasc = substr("$dtNasc",3,-5);
			$anoNasc = substr("$dtNasc",6);
			$sexo= $_POST["sexo"];
			$cinema= $_POST["checkCinema"];
			$musica= $_POST["checkMusica"];
			$info= $_POST["checkInfo"];
			$login= $_POST["txtLogin"];
			$senha1= $_POST["txtSenha1"];
			$senha2= $_POST["txtSenha2"];
			$verificaData = true;			
			$camposOK= true;
			
			if(isset($POST["checkCinema"])){
				$cinema=true;
			}else{
				$cinema=false;
			}
			if(isset($POST["checkMusica"])){
				$musica=true;
			}else{
				$musica=false;
			}
			if(isset($POST["checkInfo"])){
				$info=true;
			}else{
				$info=false;
			}
			
			if ($nome == ""){
				echo"Informe o NOME.<br>";
				$camposOK=false;
			}
			
			if ($ender == ""){
				echo"Informe o Endereço.<br>";
				$camposOK=false;
			}
			
			if ($senha1 != $senha2){
				echo"As SENHAS não conferem.<br>";
				$camposOK=false;
			}
	//Verifica CPF	
			function validaCPF($cpf = null) {
 
				if(empty($cpf)) {
					return false;
				}
 
			$cpf = ereg_replace('[^0-9]', '', $cpf);
			$cpf = str_pad($cpf, 11, '0', STR_PAD_LEFT);
		  
			if (strlen($cpf) != 11) {
				return false;
			}
			else if ($cpf == '00000000000' || 
					$cpf == '11111111111' || 
					$cpf == '22222222222' || 
					$cpf == '33333333333' || 
					$cpf == '44444444444' || 
					$cpf == '55555555555' || 
					$cpf == '66666666666' || 
					$cpf == '77777777777' || 
					$cpf == '88888888888' || 
					$cpf == '99999999999') {
					return false;
		} else {   
         
			for ($t = 9; $t < 11; $t++) {
             
				for ($d = 0, $c = 0; $c < $t; $c++) {
					$d += $cpf{$c} * (($t + 1) - $c);
				}
				$d = ((10 * $d) % 11) % 10;
				if ($cpf{$c} != $d) {
					return false;
				}
			}
 
			return true;
		}
	}
     if(!validaCPF($cpf)){
		echo"<b>CPF INVÁLIDO</b><br>";
		$camposOK=false; 
	 }
	// Verifica DATA
	if($dtNasc == ""){
		$verificaData = false;
	}
		if(($mesNasc < 1) || ($mesNasc > 12)){
			$verificaData = false;
		}else if(($diaNasc < 1) || ($diaNasc > 31)){
			$verificaData = false;
		}else if(($mesNasc == 4) || ($mesNasc == 6) || ($mesNasc == 9) || ($mesNasc == 11) && ($diaNasc == 31)){
			$verificaData = false;
		}else if($mesNasc == 2){
		
			$isleap = (($anoNasc % 4 == 0) && ($anoNasc % 100 != 0) || ($anoNasc % 400 == 0));
			if(($diaNasc > 29) || ($diaNasc == 29) && ($isleap == false)){
				$verificaData = false;
			}
		 }	
			if($verificaData == false){
				echo "<b>Data Inválida</b>";
				$camposOK= false;
			}
			
			if ($camposOK){
				echo "<table border='0' cellpadding='5'>";
				echo "<tr><td>NOME: </td><td><b>$nome</b></td></tr>";
				echo "<tr><td>CPF: </td><td><b>$cpf</b></td></tr>";
				echo "<tr><td>ENDEREÇO: </td><td><b>$ender</b></td></tr>";
				echo "<tr><td>ESTADO: </td><td><b>$estado</b></td></tr>";
				echo "<tr><td>DATA NASC: </td><td><b>$dtNasc</b></td></tr>";
				echo "<tr><td>SEXO: </td><td><b>$sexo</b></td></tr>";
				echo "<tr><td>LOGIN: </td><td><b>$login</b></td></tr>";
				echo "<tr><td>SENHA: </td><td><b>$senha1</b></td></tr>";
				echo "<tr><td>ÁREAS DE INTERESSE: </td><td><b>";
				if ($cinema){
					echo "Cinema<br>";
				}
				if ($musica){
					echo "Música<br>";
				}
				if ($info){
					echo "Informática<br>";
				}
				echo "</b></td></tr></table>";
			}	
		?>
	</body>
</html>
