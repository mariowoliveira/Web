<!DOCTYPE html>
<html lang ="pt-br">
	<head>
 		<meta charset="utf-8">
 		<title> Meu Blog - Administração </title>
		<?php
 			echo link_tag('https://fonts.googleapis.com/css?family=Roboto+Condensed');
 			echo link_tag('assets/css/estilo.css');
 		?> 	
 	</head>
 	<body>
 	<?php
 		$atributos = array('name' => 'formulario_login', 'id' => 'formulario_login');
 		echo form_open( base_url('administracao/login/efetuar_login'), $atributos).
 		form_label("Usuário:", "txt_usuario").br().
 		form_input('txt_usuario').br().
 		form_label("Senha: ", "txt_senha").br().
 		form_password('txt_senha').br().
 		form_submit("btn_enviar", "Efetuar Login").
 		form_close();
 	?>
 	</body>
 </html>