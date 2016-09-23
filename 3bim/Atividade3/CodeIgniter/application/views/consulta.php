<!DOCTYPE html>
<html lang="pt-br">
	
	<head>
		<meta charset="utf-8">
		<title>Meu Blog</title>
		<?php
 			echo link_tag('https://fonts.googleapis.com/css?family=Roboto+Condensed');
 			echo link_tag('assets/css/estilo.css');
 		?>
	</head>
	
	<body>
		
		<?php
			echo anchor (base_url("welcome/index"), "Inicio").
		?>
		
		<h3> <?php echo $citacoes[0]->nomeArquivo ?></h3>
		<p> <?php echo $citacoes[0]->titulo ?></p>
		<p> <?php echo $citacoes[0]->autores ?></p>
		<p> <?php echo $citacoes[0]->citacoes ?></p>
		<p> <?php echo $citacoes[0]->referencias ?></p>
		<p> <?php echo $citacoes[0]->dataCadastro ?></p>
		<p> <?php echo $citacoes[0]->palavrasChave ?></p>
		<h3> Postagens recentes </h3>
		
	</body>
	
</html>
