<?php 
	//detectar codificação de caracteres
	//$encode = mb_detect_encoding($row[4], 'auto');
	//echo $encode;

	include('pushDataBase.php');
	

	header('Content-Type: text/html; charset=utf-8');
	
	$handle = fopen($_FILES['import_export']['tmp_name'],'r');//abre  o arquivo
	$cont_csv = 0; // variavel resposável por contar a quantidade de linhas do arquivo, limitar o laço de repetição e impedir erros de inserção
	$cabecalho = ""; //armazena o tipo de cabeçalho numa variável
	$matriz = 0; //esta deve controlar o numero de colunas que será exibido em cada linha
	$c_colunas; //conta quantas colunas e extrai o numero para fora do laço
	$query_in;	//concatena o INSERT para ser executado somente uma vez na query
	$query_ex_in = ""; //exibir externamente
	$query_val;  //concatena os VALUES para serem executados de acordo com a quantidade de registros
	$query_ex_val = ""; //permite exibir as variável externamente
	$sql = "";
	$_sql = '';
		
		while( ($row = fgetcsv($handle, 1000, ';')) !==false){
	
			if($cont_csv != 0){
				
				$c_colunas =  $rowNum = count($row);
				
				//A partir do segundo ciclo ele armazena todos os registros do csv
								 
					for($matriz = 0; $matriz < $c_colunas ; ++$matriz){
				 		
							$row[$matriz];
				 		
					}							
						//o cabeçalho da tabela será outro, adaptado para ser inserido no woocmmerce
						$query_ex_in = $query_in = "INSERT INTO indumentariastore(
						`Tipo`,
						 `REF`,
						 `Nome`,
						 `Nome do Atributo 1`,
						 `Valores do atributo 1`,
						 `Nome do Atributo 2`,
						 `Valores do atributo 2`,
						 `Estoque`) VALUES";
						


						$query_ex_val .= $query_val[$matriz] = "
						('variation','".$row[1]."','".$row[2]."','cores','".$row[4]."','Tamanhos','".$row[5]."','".$row[27]."'),";
						
						// var_dump($query_ex_val);
	
			}else{
				//este trecho deverá ser ignorado, pois servirá apenas para identificações posteriores
				
				$cabecalho = "'".$row[1]."','".$row[2]."','".$row[3]."','".$row[4]."','".$row[5]."','".$row[27]."'"; 	
			
			}
			
			++$cont_csv;
		
		}
			 $query_ex_val .= str_replace("),",");",$query_val[$matriz]);
							
				//Check connection
				if ($conn->connect_error) {
				   die("Connection failed: " . $conn->connect_error);
				}
	
				 $sql = $query_ex_in.$query_ex_val;
				
				$string = $sql;

				if ($conn->query($string) === TRUE) {
				   echo '<script type="text/javascript"> alert("Arquivo Gravado com sucesso");</script>';
				   echo "<a href='http://localhost/indumentariaArquivos/index.php'><input type='button' value='Voltar'></a>";
				 }else {
				   echo "Error: " . $string . "<br>" . $conn->error;
				
				}
			$conn->close();
				// var_dump("<br>".$sql);
	################################################################################
// para criar uma nova tabela, devo utilizar iso-8859-1 como codificação de caracteres



 ?>
