<?php
	require_once 'init.php';
	// abre a conexão
	$PDO=db_connect();
	/* SQL para contar o total de registros */
	$sql_count = "SELECT COUNT(*) AS total FROM clientes ORDER BY nomeCliente ASC";
	// SQL para selecionar os registros
	$sql = " SELECT idCliente, nomeCliente, dataCadastro, email FROM clientes ORDER BY nomeCliente ASC";
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
		<meta charset="utf-8">
		<link rel="stylesheet" href="style.css" type="text/css">
		<title>Cadastro de Cliente</title>
	</head>
	<body>
		<p><a href="form-addCliente.php">Adicionar Cliente</a></p>
		<h2>Lista de Cliente</h2>
		<p>Total de Clientes: <?php echo $total ?></p>
		<?php if($total > 0): ?>
		<table width="100%" border="1">
			<thead>
				<tr>
					<th>Email</th>
					<th>Matricula</th>
					<th>Nome do Cliente</th>
					<th>Data de Cadastro</th>
					<th>Ações</th>
				</tr>
			</thead>
			<tbody>
				<?php while($cliente = $stmt->fetch(PDO::FETCH_ASSOC)): ?>
			<tr>
				<td><?php echo $cliente['idCliente']?>;</td>
				<td><?php echo $cliente['nomeCliente']?>;</td>
				<td><?php echo dateConvert($cliente ['dataCadastro'])?></td>
				<td>
					<a href="form-edit.php?id=<?php echo $cliente['idCliente']?>">Editar</a>
					<a href="delete.php?id=<?php echo $cliente['idCliente']?>"onclick="return confirm('Tem certeza que deseja excluir?');">Excluir</a>
				</td>
				</tr>
				<?php endwhile; ?>
			</tbody>
		</table>
		<?php else: ?>
		<p>Nenhum Cliente registrado</p>
		<?php endif; ?>
	</body>
</html>
