<?php
require 'conecta.php';
if(isset($_GET['id']) && empty($_GET['id']) == false) {
	$id = addslashes($_GET['id']);
	
	$sql = "DELETE FROM clientes WHERE id = '$id'";
	$pdo->query($sql);
	
	header("Location: index.php");
	
} else {
	header("Location: index.php");
}


?>