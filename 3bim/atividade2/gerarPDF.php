<?php
	require('fpdf/fpdf.php');
	require_once 'init.php';
	// abre a conexão
	$PDO=db_connect();
	/* SQL para contar o total de registros */
	$sql_count = "SELECT COUNT(*) AS total FROM clientes ORDER BY nomeCliente ASC";
	// SQL para selecionar os registros
	$sql = "SELECT nomeCliente FROM clientes";
	// conta o total de registros
	$stmt_count=$PDO->prepare($sql_count);
	$stmt_count->execute();
	$total=$stmt_count->fetchColumn();
	
	// seleciona os registros
	$stmt=$PDO->prepare($sql);
	$stmt->execute();
	$pdf= new FPDF('P', 'pt', 'A4');
	$pdf->SetTitle('Convite');
	$pdf->SetAuthor('Gerente Comercial');
	$pdf->SetCreator('php' .phpVersion());
	$pdf->SetSubject('Aniversario Loja');

	
	while($cliente = $stmt->fetch(PDO::FETCH_ASSOC)){
		$pdf->AddPage();
	// configuração mes e pegando data atual 
	$mes = date('m');
	switch ($mes){
		case 1: $mes = "Janeiro"; break;
		case 2: $mes = "Fevereiro"; break;
		case 3: $mes = "Março"; break;
		case 4: $mes = "Abril"; break;
		case 5: $mes = "Maio"; break;
		case 6: $mes = "Junho"; break;
		case 7: $mes = "Julho"; break;
		case 8: $mes = "Agosto"; break;
		case 9: $mes = "Setembro"; break;
		case 10: $mes = "Outubro"; break;
		case 11: $mes = "Novembro"; break;
		case 12: $mes = "Dezembro"; break;
	}
	$dia = date('d');
	$ano = date('y');
	

	//Espaçamento Vertical
	$pdf->Ln(20);
	$pdf->SetFont('Arial', '', 12);
	$pdf->SetTextColor(0, 0, 0);
	$pdf->SetY(20);
	$pdf->SetX(380);
	$txtd= ('Varginha, ' .$dia .' de ' .$mes .' de ' .'20'.$ano);
	$txtd= utf8_decode($txtd);
	$pdf->Write(30, $txtd);
	
	$pdf->Ln(20);
	$pdf->SetFont('Arial', '', 12);
	$pdf->SetTextColor(0, 0, 0);
	$pdf->SetY(90);
	$pdf->SetX(30);
	$txtn= ('Prezado(a) Sr(a) '.$cliente['nomeCliente'] );
	$txtn= utf8_decode($txtn);
	$pdf->Write(30, $txtn);
	
	$pdf->Ln(60);
	$pdf->SetFont('Arial', '', 12);
	$pdf->SetTextColor(0, 0, 0);
	$pdf->SetY(200);
	$pdf->SetX(70);
	$txtt= ('Neste mês de aniversário, nossa loja está com promoções imperdíveis e selecionadas especialmente para você.');
	$txtt= utf8_decode($txtt);
	$pdf->Write(20, $txtt);
	
	$pdf->Ln(20);
	$pdf->SetX(70);
	$txtt= ('Não perca esta oportunidade de realizar bons negócios.');
	$txtt= utf8_decode($txtt);
	$pdf->Write(20, $txtt);
	
	$pdf->Ln(20);
	$pdf->SetX(70);
	$txtt= ('Faça-nos uma visita.');
	$txtt= utf8_decode($txtt);
	$pdf->Write(20, $txtt);
	
	$pdf->Ln(130);
	$pdf->SetX(30);
	$txtt= ('Cordialmente,');
	$txtt= utf8_decode($txtt);
	$pdf->Write(20, $txtt);
	
	$pdf->Ln(40);
	$pdf->SetX(256);
	$txtt= ('João de Oliveira');
	$txtt= utf8_decode($txtt);
	$pdf->Write(20, $txtt);
	
	$pdf->Ln(20);
	$pdf->SetX(250);
	$txtt= ('Gerente Comercial');
	$txtt= utf8_decode($txtt);
	$pdf->Write(20, $txtt);
	
	}
		
	$pdf->Output();
?>
