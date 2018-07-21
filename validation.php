<?php 
	//teste
		
	function justCsv(){
		$filtro = $_FILES['import_export']['name'];	

		$filtro = explode(".", $filtro);
	
		if($filtro[1] != "csv"){
				
				echo '<script type="text/javascript">alert("Arquivos Diferentes de CSV nao serao aceitos")</script>'; 
				
			}
	
	}


 ?>