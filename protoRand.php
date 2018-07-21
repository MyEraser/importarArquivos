<?php 

	//obtem a hora do servidor onde estiver inserido
	// Data
		date_default_timezone_set('America/Sao_Paulo');
		$date = date('Ymd');
	//Hora
		date_default_timezone_set('America/Sao_Paulo');
		$date_hours = date('His');
	// $random_ =  rand($date,$date_hours);
	//concatena
    	$new_date =  $date.$date_hours;

 ?>

