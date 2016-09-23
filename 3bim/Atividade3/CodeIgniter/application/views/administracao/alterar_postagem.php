<!DOCTYPE html>
<html lang="pt-br">
	<head>
		<meta charset="utf-8">
		<title>Administração do Brogui</title>
		<?php
 			echo link_tag('https://fonts.googleapis.com/css?family=Roboto+Condensed');
 			echo link_tag('assets/css/estilo.css');
 		?>
	</head>
	<body>
		<?php
			echo anchor(base_url(),"Home").
			     anchor(base_url("administracao/postagens"),"Postagens").
			     anchor(base_url("administracao/logout"),"Logout").
			     heading("Adicionar uma nova postagem",3);
			$atributos = array('name' => 'formulario_postagem', "id" => 'formulario_postagem');
			echo form_open(base_url('administracao/postagens/salvar_alteracao'), $atributos).
				form_hidden('id', $postagem[0]->id).				
				form_label("Titulo:","txt_titulo").br().
				form_input('txt_titulo').br().
				form_label("Texto:","txt_texto").br().
				form_textarea('txt_texto').br().
				form_submit("btn_enviar","Alterar postagem").
				form_close();
		?>	
	</body>
</html>