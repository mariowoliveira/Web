<?php
	spl_autoload_register(function($class_name){
		include 'ado/'.$class_name.'.class.php';
	});
	$sql="SELECT idCliente, NomeCliente, EmailCliente FROM Clientes";
	try{
			$conn= TConnection::open('config/my_config.ini');
			$result=$conn->query($sql);
			if($result){
					while($row=$result->fetch(PDO::FETCH_ASSOC)){
					echo $row['idCliente'].' - '.$row['NomeCliente'].' - '.$row['EmailCliente'];
					echo '<br>';
				}
			}	
			$conn=null;
		}
	catch(exception $e){
			print "ERRO!".$e->getmessage();
	}
?>
