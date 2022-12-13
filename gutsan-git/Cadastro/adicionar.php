<?php
require 'conecta.php';
if(isset($_POST['nome'])&& empty($_POST['nome'])==false) {
	$nome = addslashes($_POST['nome']);
	$nascimento = addslashes($_POST['nascimento']);
	$endereco = addslashes($_POST['endereco']);
	$cidade = addslashes($_POST['cidade']);
	$estado = addslashes($_POST['estado']);
	$telefone = addslashes($_POST['telefone']);
	$email = addslashes($_POST['email']);
	$senha = md5(addslashes($_POST['nome']));
	
	$sql = "INSERT INTO clientes SET nome='$nome', nascimento='$nascimento', endereco='$endereco', cidade='$cidade', estado='$estado', telefone='$telefone', email='$email', senha='$senha'";
	$pdo->query($sql);
	
	header("Location: index.php");
}
?>

<form method="POST">
	Nome:<br/>
	<input type="text" name="nome"/><br/><br/>
	Nascimento:<br/>
	<input type="text" name="nascimento"/><br/><br/>
	Endereço:<br/>
	<input type="text" name="endereco"/><br/><br/>
	Cidade:<br/>
	<input type="text" name="cidade"/><br/><br/>
	Estado:<br/>
	<input type="text" name="estado"/><br/><br/>
	Telefone:<br/>
	<input type="text" name="telefone"/><br/><br/>
	Email:<br/>
	<input type="text" name="email"/><br/><br/>
	Senha:<br/>
	<input type="password" name="senha"/><br/><br/>
	
	<input type="submit" value="Cadastrar"/>

</form>