<div class="conteudo">
<?php
  // inclui classes necessárias
  spl_autoload_register(function ($class_name)
  {
    include 'html/'.$class_name.'.class.php';
  });
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

  $style = new TStyle('centra');
  $style->position='relative';
  $style->left='150px';
  $style->show();

  // *********************************************************
  // corrigir caracteres
  $html = new TElement('html');
  $html->lang = 'pt-br';
  //instancia seção head
  $head = new TElement('head');
  $html->add($head); //adiciona ao html
  $meta = new TElement('meta');
  $meta->charset = 'utf-8';
  $head->add($meta);

  $body = new TElement('body');
  $body->bgcolor = '#ffffdd';
  $html->add($body);

  // *********************************************************
  //instancia objeto-tabela
  $tabela = new TTable;
  //define algumas propriedades
  $tabela->width = 600;
  $tabela->border = 1;
  //instancia uma linha para o cabeçalho
  $cabecalho = $tabela->addRow();
  //define a cor de fundo
  $cabecalho->bgcolor = '#a0a0a0';
  //adiciona células
  $r = $cabecalho->addCell('<b>Matrícula</b>');
  $s = $cabecalho->addCell('<b>Nome</b>');
  $y = $cabecalho->addCell('<b>E-Mail</b>');
  $x = $cabecalho->addCell('<b>Data Cadastro</b>');
  $x->align = 'center';
  $r->align = 'center';
  $s->align = 'center';
  $y->align = 'center';

  $i = 0;
 
  while($fornecedor = $stmt->fetch(PDO::FETCH_ASSOC))
  {
    // verifica qual cor utilizará para o fundo
    $bgcolor = '#ffffff';
    $linha = $tabela->addRow();
    $linha->bgcolor = $bgcolor;
    // adiciona as células
    $z = $linha->addCell($fornecedor['idFornecedor']);
    $linha->addCell($fornecedor['nomeFornecedor']);
    $linha->addCell($fornecedor['email']);
    $x = $linha->addCell(dateConvert($fornecedor['dataFundacao']));
    $x->align = 'center';
    $z->align = 'center';
    $i++;
  }
  $tabela->class='centra';
  $body->add($tabela);
  $html->show();
?>
</div>

