<?php
	require_once 'init.php';
	// abre a conexão
	$PDO=db_connect();
	/* SQL para contar o total de registros */
	$sql_count = "SELECT COUNT(*) AS total FROM clientes ORDER BY nomeCliente ASC";
	// SQL para selecionar os registros
	$sql = "SELECT idCliente, nomeCliente, dataCadastro, email FROM clientes ORDER BY nomeCliente ASC";
	// conta o total de registros
	$stmt_count=$PDO->prepare($sql_count);
	$stmt_count->execute();
	$total=$stmt_count->fetchColumn();
	// seleciona os registros
	$stmt=$PDO->prepare($sql);
	$stmt->execute();
?>
<!DOCTYPE html>
<html>
<head>
		<script type="text/javascript" src="js/jquery-2.1.1.min.js"></script>
		<script type="text/javascript" src="js/jquery.maskedinput.js"></script>
	 	<script type="text/javascript" src="js/script.js"></script>
</head>
<body>
 <div class="conteudo">
</script>
	 	<div class="addC">
		<p> <input type="button" href="form-addCliente.php" name="novo" value="Adicionar Cliente"  onClick="chama(this)"></p>
		</div>
		<h2>Lista de Cliente</h2>
		<p>Total de Clientes: <?php echo $total ?></p>
		<?php if($total > 0): ?>
		<table width="100%" border="1">
			<thead>
				<tr>
					<th>Matricula</th>
					<th>Nome</th>
					<th>Data de Cadastro</th>
					<th>Email</th>
					<th>Ações</th>
				</tr>
			</thead>
			<tbody>
				<?php while($cliente = $stmt->fetch(PDO::FETCH_ASSOC)): ?>
			<tr>
				<td><?php echo $cliente['idCliente']?></td>
				<td><?php echo $cliente['nomeCliente']?></td>
				<td><?php echo dateConvert($cliente['dataCadastro'])?></td>
				<td><?php echo $cliente['email']?></td>
				<td>
					<a href="form-editClientes.php?id=<?php echo $cliente['idCliente']?>">Editar</a>
					<a href="deleteClientes.php?id=<?php echo $cliente['idCliente']?>"onclick="return confirm('Tem certeza que deseja excluir?');">Excluir</a>
				</td>
				</tr>
				<?php endwhile; ?>
			</tbody>
		</table>
		<?php else: ?>
		<p>Nenhum Cliente registrado</p>
		<?php endif; ?>
  </div>
  </body>
</html>
