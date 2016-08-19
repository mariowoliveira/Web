
<?php
	require_once 'init.php';
	// abre a conexão
	$PDO=db_connect();
	/* SQL para contar o total de registros */
	$sql_count = "SELECT COUNT(*) AS total FROM fornecedores ORDER BY nomeFornecedor ASC";
	// SQL para selecionar os registros
	$sql = "SELECT idFornecedor, nomeFornecedor, dataFundacao, email FROM fornecedores ORDER BY nomeFornecedor ASC";
	// conta o total de registros
	$stmt_count=$PDO->prepare($sql_count);
	$stmt_count->execute();
	$total=$stmt_count->fetchColumn();
	// seleciona os registros
	$stmt=$PDO->prepare($sql);
	$stmt->execute();
?>
<!DOCTYPE html>
<html lang="pt-br">
	<head>
		<title>Eletronica Hélle</title>
		<meta charset="utf-8">
		<link type="text/css" href="css/jquery-ui.css" rel="stylesheet"/>
		<link type="text/css" href="css/layout.css" rel="stylesheet"/>
		<script type="text/javascript" src="js/jquery-2.1.1.min.js"></script>
		<script type="text/javascript" src="js/jquery-ui.js"></script>
		<script type="text/javascript" src="js/jquery.maskedinput.js"></script>
		<script type="text/javascript" src="js/script.js"></script>
		<script type="text/javascript" src="js/datepicker-pt-BR.js"></script>

	</head>
	<body>
		<div class ="tudo">
			<div class="topo">
				<div class="imgTopo">
				<img src="img/logo.png" alt="Logo Iron Maiden">
			</div>
			<div class="menuTopo">
				<nav>
					<ul>
						<li><a href="index.html"> Home </a></li>
						<li><a href="cliente.php"> Clientes </a></li>
						<li><a href="fornecedor.php"> Fornecedores </a></li>
						<li><a href="sobre.html"> Sobre </a></li>
					</ul>
				</nav>
			</div>
		</div>
		<div class="principal" >
			<div class ="container">
				<div class="idBlog">
					<img src="img/idBlog.png" alt="Fã Club Iron Maiden">
				<p>Autor : Mário W. Oliveira/ Thamires Oliveira</p>
			</div>
 <div class="conteudo">
		<p> <input type="button" href="form-addFornecedor.php" name="novo" value="Adicionar Fornecedor"  onClick="chama(this)"></p>
		<p> <input class="gerar" type="button" href="gerarRelatorioF.php" name="gerar" value="Gerar Relatório"  onClick="chama(this)"></p>
		<h2>Lista de Fornecedor</h2>
		<p>Total de Fornecedor: <?php echo $total ?></p>
		<?php if($total > 0): ?>
		<table width="100%" border="1">
			<thead>
				<tr>
					<th>Matricula</th>
					<th>Nome do Fornecedor</th>
					<th>Data de Fundação</th>
					<th>Email</th>
					<th>Ações</th>
				</tr>
			</thead>
			<tbody>
				<?php while($fornecedor = $stmt->fetch(PDO::FETCH_ASSOC)): ?>
			<tr>
				<td><?php echo $fornecedor['idFornecedor']?></td>
				<td><?php echo $fornecedor['nomeFornecedor']?></td>
				<td><?php echo dateConvert($fornecedor ['dataFundacao'])?></td>
				<td><?php echo $fornecedor['email']?></td>
				<td>
					<a href="form-editFornecedor.php?id=<?php echo $fornecedor['idFornecedor']?>">Editar</a>
					<a href="deleteFornecedores.php?id=<?php echo $fornecedor['idFornecedor']?>"onclick="return confirm('Tem certeza que deseja excluir?');">Excluir</a>
				</td>
				</tr>
				<?php endwhile; ?>
			</tbody>
		</table>
		<?php else: ?>
		<p>Nenhum Fornecedor registrado</p>
		<?php endif; ?>
</div>
<div class="rodape">
	<h5> Grupo MT &copy ; Copyright 2016 - Todos os
	direitos reservados </h5>
	</div>
</body>
</html>
