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
			echo form_open(base_url('administracao/postagens/adicionar'), $atributos).
				form_label("Titulo:","txt_titulo").br().
				form_input('txt_titulo').br().
				form_label("Texto:","txt_texto").br().
				form_textarea('txt_texto').br().
				form_submit("btn_enviar","Cadastrar nova postagem").
				form_close();
				heading("Postagens existentes",3);
					foreach($postagens as $post){
						echo anchor(base_url("administracao/postagens/excluir/".$post->id),"Excluir -    ").
						     anchor(base_url("administracao/postagens/alterar/".$post->id),"  Alterar -"). 
						     " Postagem :". date("d/m/Y", strtotime($post->dataCadastro))." - ".$post->titulo.br();					
					}
		?>	
	</body>
</html>