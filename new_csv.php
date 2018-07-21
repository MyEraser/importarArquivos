<?php 
include('pushDataBase.php');

	
	header("Content-type: application/csv");   
	header("Content-Disposition: attachment; filename=Table_Woocommerce.csv");   
	header("Pragma: no-cache"); 
		$table  = "";

	$query = "SELECT * FROM `indumentariastore`";
	
	$result = mysqli_query($conn,$query);

	while($row=mysqli_fetch_array($result,MYSQL_ASSOC)){
		
		$table =implode(";",$row); 
		echo "\n".$table;

		}


		//testar o arquivo para adicionar um cabeçalho
		//adicionar separação por ponto e vírgula ou somente virgula no arquivo

?>