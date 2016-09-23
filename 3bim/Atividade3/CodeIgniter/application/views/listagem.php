<?php
	require(' ../../assets/fpdf/fpdf.php');
	$pdf= new FPDF('P', 'pt', 'A4');
	$pdf->SetTitle('Relatorio');
	$pdf->SetAuthor('Escritor');
	$pdf->SetCreator('php' .phpVersion());
	$pdf->SetSubject('Referencia Bibliografica');

	foreach($citacoes as $cit ) {
	$pdf->AddPage();
	// configuração mes e pegando data atual 
	
	$pdf->Ln(20);
	$pdf->SetFont('Arial', '', 12);
	$pdf->SetTextColor(0, 0, 0);
	$pdf->SetY(50);
	$pdf->SetX(200);
	$txtn= ('Relação das Referências Biblográficas' );
	$txtn= utf8_decode($txtn);
	$pdf->Write(30, $txtn);
	
	$pdf->Ln(60);
	$pdf->SetFont('Arial', '', 12);
	$pdf->SetTextColor(0, 0, 0);
	$pdf->SetY(90);
	$pdf->SetX(40);
	$txtt= ('Nome do Arquivo: ' .$cit->nomeArquivo);
	$txtt= utf8_decode($txtt);
	$pdf->Write(20, $txtt);
	
	$pdf->Ln(20);
	$pdf->SetY(120);
	$pdf->SetX(40);
	$txtt= ('Título: ' .$cit->titulo);
	$txtt= utf8_decode($txtt);
	$pdf->Write(20, $txtt);
	
	$pdf->Ln(20);
	$pdf->SetY(150);
	$pdf->SetX(40);
	$txtt= ('Autores: ' .$cit->autores);
	$txtt= utf8_decode($txtt);
	$pdf->Write(20, $txtt);

	$pdf->Ln(20);
	$pdf->SetY(180);
	$pdf->SetX(40);
	$txtt= ('Citacões: ' .$cit->citacoes);
	$txtt= utf8_decode($txtt);
	$pdf->Write(20, $txtt);

	$pdf->Ln(20);
	$pdf->SetY(210);
	$pdf->SetX(40);
	$txtt= ('Referências: ' .$cit->referencias);
	$txtt= utf8_decode($txtt);
	$pdf->Write(20, $txtt);

	$pdf->Ln(20);
	$pdf->SetY(240);
	$pdf->SetX(40);
	$txtt= ('Palavra-Chave: ' .$cit->palavrasChave);
	$txtt= utf8_decode($txtt);
	$pdf->Write(20, $txtt);

	$pdf->Ln(20);
	$pdf->SetY(270);
	$pdf->SetX(40);
	$txtt= ('Data de inclusão: ' .$cit->dataCadastro);
	$txtt= utf8_decode($txtt);
	$pdf->Write(20, $txtt);
	
	}
	
		
	$pdf->Output();
?>
