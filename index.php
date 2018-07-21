<!DOCTYPE html>
<html>
<head>
	<title>Formulários para WooCommerce</title>
	
</head>
<body>
	<meta http-equiv="content-type" content="text/html;charset=utf-8" />
	<h3>Para produtos variáveis utilizar este espaço</h3>
	<form name="frmimport" action="importarArquivo.php" enctype="multipart/form-data" method="POST"> 

		<input type="file" name="import_export" id="import_export">
		
		<input type="Submit" value="Gravar" onclick="justCsv()">

	<a href="new_csv.php">
		<input type="button" value="Gerar CSV">
	</a>
	</form>
</body>
</html>



