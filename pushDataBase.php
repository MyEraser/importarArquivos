<?php 

	// Neste arquivo será realizado o download parcial dos 
	// arquivos do banco de dados para serem utilizados na comparação de dados
	// É uma espécie de validação de registros de dois arquivos diferentes
	// Listar todos os valores dos estoques
	// Listar Todas os Cores
	// Listar Todas os Tamanhos
	// Listar Todas as Referencias 

	
			$mysql_hostname = "localhost";
			$mysql_user = "root";
			$mysql_password = "";
			$mysql_database = "csv_db";
			
			$conn = mysqli_connect($mysql_hostname, $mysql_user, $mysql_password,$mysql_database) or die("Could not connect database");

			mysql_query("SET NAMES 'utf8'");
			mysql_query('SET character_set_connection=utf8');
			mysql_query('SET character_set_client=utf8');
			mysql_query('SET character_set_results=utf8');

// $query = "INSERT INTO `indumentariastore` (`Tipo`, `REF`, `Nome`, `Nome do Atributo 1`, `Valores do atributo 1`, `Nome do Atributo 2`, `Valores do atributo 2`, `Estoque`, `Preço`) VALUES ('variation', 'I62343423', 'Regata', 'cores', 'azul', 'Tamanhos', 'GG', '10', '10,00');";





 ?>