<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <script src="vendor/jquery/jquery.min.js" type="text/javascript"></script>
    <script src="vendor/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
	<title>Classes IP</title>
</head>
<body>
	<div align="center">
	<h1 align="center">Classes IP</h1>
	<b>Digite o endereço IP que pretende verificar:</b><br><br>
	
	<form action="verificar.php" method="POST">
	<input type="text" name="ip1" size="4" />
	<input type="text" name="ip2" size="4" />
	<input type="text" name="ip3" size="4" />
	<input type="text" name="ip4" size="4" /><br><br>
	<input type="submit" value="Verificar">
	</form>


	<h1 align="center">Protocolos</h1>
	<b>Selecione o Protocolo que pretende:</b><br><br>
	<form action="verificar.php" method="POST">
	<select name="protocolo">  
  <option value="dns" >DNS</option> 
  <option value="ftp" >FTP</option>  
  <option value="http" >HTTP </option>  
  <option value="ip">IP </option>
</select><br><br>
<input type="submit" value="Verificar"> 
	</div>
</form>




</body>
</html>