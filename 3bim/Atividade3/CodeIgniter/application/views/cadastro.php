<!DOCTYPE html>
<html lang ="pt-br">
	
	<head>
		
		<meta charset="utf-8">
		<title>Referencias</title>
		<?php
 			echo link_tag('https://fonts.googleapis.com/css?family=Roboto+Condensed');
 			echo link_tag('assets/css/estilo.css');
 		?>
	</head>
	
	<body id='alinha'>
		
		<?php
		
			echo anchor (base_url("welcome/index"), "Inicio").
			heading("Adicionar nova postagem", 3);
			$atributos = array('name' => 'formulario_contato ', 'id'=>'formulario_contato'); ?>
		<div class='cad'>
		<?php	echo form_open(base_url('welcome/cadastrar_registro'), $atributos) .
			form_label("Nome do Arquivo: " ,"txt_nome") . br() .
			form_textarea('txt_nome') . br() .
			form_label("Titulo: ","txt_titulo") . br() .
			form_textarea('txt_titulo') . br() .
			form_label("Autores: ","txt_autores") . br() .
			form_textarea('txt_autores') . br() .
			form_label("Citações: ","txt_citacoes") . br() .
			form_textarea('txt_citacoes') . br() .
			form_label("Palavras-Chave: ","txt_palavrasChave") . br() .
			form_textarea('txt_palavrasChave') . br() .
			form_label("Referências: ","txt_referencias") . br() .
			form_textarea('txt_referencias') . br() . 
			form_submit("btn_enviar","Enviar Mensagem") .
			
			form_close();
		?>
		</div>
		
	</body>
</html>
