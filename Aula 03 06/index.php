<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Cadastro de Alunos</title>
	</head>
	<body>
		<h1>Cadastro de Alunos</h1>
		<p><a href="form-add.php">Adicionar Usuário</a></p>
		<h2>Lista de Alunos</h2>
		<p>Total de usuários: <?php echo $total ?></p>
		<?php if($total > 0): ?>
		<table width="100%" border="1">
			<thead>
				<tr>
					<th>Foto</th>
					<th>Matricula</th>
					<th>Nome</th>
					<th>Data Nascimento</th>
					<th>Ações</th>
				</tr>
			</thead>
			<tbody>
				<?php while($aluno = $stmt->fetch(PDO::FETCH_ASSOC)): ?>
			<tr>
				<?php $caminho = $aluno['foto']; ?>
				<td><?php echo "img src='$caminho' widht='100' height='100' alt='IMAGEM'"?>;</td>
				<td><?php echo $aluno['idAluno']?>;</td>
				<td><?php echo $aluno['nome']?>;</td>
			</tr>
	</body>
</html>
