<!DOCTYPE html>
<html lang="pt-br">

	<head>
	
		<meta charset="utf-8">
		<title>Referencias</title>
		<?php
 			echo link_tag('https://fonts.googleapis.com/css?family=Roboto+Condensed');
 			echo link_tag('assets/css/estilo.css');
 		?>	
	</head>
	
	<body>
		
		<?php
		echo anchor(base_url("welcome/cadastro"), "Cadastrar Nova Referência") . br() . "<hr>" . 
		anchor(base_url("welcome/listagem"), "Listagem das Referências Cadastradas") . br() . "<hr>" . 
		anchor(base_url("welcome/consultar"), "Consultar Referências") . br() . "<hr>";
		?>
		
	</body>
</html>

