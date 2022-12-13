<?php
$bd="mysql:dbname=loterias; host=localhost; charset=utf8";
$dbuser="root";
$dbpass="";

try{
	$pdo=new PDO($bd, $dbuser, $dbpass);
	//echo "conexão estabelecida com sucesso!";
} catch (PDOException $erro) {
	echo "Falha na conexão. ".$erro->getMessage();
}

?>
