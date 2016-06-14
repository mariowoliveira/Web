<?php
	require 'init.php';
?>
<!DOCTYPE html>
<html lang="pt-br">
	<head>
		<title>Cadastro de dados</title>
		<meta charset="utf-8">
		<script type="text/javascript" src="jquery-2.1.1.min.js"></script>
		<script type="text/javascript" src="jquery.maskedinput.js"></script>
	</head>
	<body>
		<form method="post" name="formCadastro" action="add.php" enctype="multipart/form-data">
			<h1>Cadastro Alunos</h1>
			<table width="100%">
				<tr>
					<th width="18%"> Nome </th>
					<td width="82%"><input type="text" name="txtNome"></td>
				</tr>
				<tr>
					<th> Data de Nascimento </th>
					<td><input id="data" type="text" name="txtData"></td>
                    <script>
		            	$("#data").mask("99/99/9999");
		        	</script>
				</tr>
				<tr>
					<th>Foto</th>
					<td><input type="file" name="txtFoto"></td>
				</tr>
				<tr>
					<td></td>
					<td><input type="submit" name="btnEnviar" value="Cadastrar">
						<input type="reset" name="btnLimpar" value="Limpar"></td>
				</tr>
			</table>
		</form>
	</body>
</html>
