<!DOCTYPE html>
<html lang ="pt-br" >
	
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
			echo anchor (base_url("welcome/index"), "Inicio")
		?>
		<h3>A página que você está tentando acessar não existe ou seu endereço foi modificado </h3>
		
	</body>
	
</html>
