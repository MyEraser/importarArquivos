


<input type="button" name="" value="deletar todas as variacoes" onclick="deletar_variacoes()">
<?php 
	include('pushDataBase.php');
	
	function deletar_variacoes(){

		$query = "DELETE FROM `indumentariastore` WHERE tipo = 'variation'";

		mysql_query($query);

		
	}



 ?>