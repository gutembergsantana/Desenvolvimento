<?php
require 'conecta.php';
$id=0;
if(isset($_GET['id']) && empty($_GET['id']) == false) {
	$id = addslashes($_GET['id']);
}

if(isset($_POST['nome']) && empty($_POST['nome']) == false) {
	$nome = addslashes($_POST['nome']);
	$nascimento = addslashes($_POST['nascimento']);
	$endereco = addslashes($_POST['endereco']);
	$cidade = addslashes($_POST['cidade']);
	$estado = addslashes($_POST['estado']);
	$telefone = addslashes($_POST['telefone']);
	$email = addslashes($_POST['email']);
	
	$sql = "UPDATE clientes SET nome='$nome', nascimento='$nascimento', endereco='$endereco', cidade='$cidade', estado='$estado', telefone='$telefone', email='$email'WHERE id='$id'";  
	$pdo->query($sql);
	
	header("Location: index.php");
} 

$sql = "SELECT * FROM clientes WHERE id = '$id'";
$sql = $pdo->query($sql);
if($sql->rowCount()>0){
	$dado = $sql->fetch();
} else{
	header("Location: index.php");
}

?>

<form method="POST">
	Nome:<br/>
	<input type="text" name="nome" value="<?php echo $dado['nome'];?>"/><br/><br/>
	Nascimento:<br/>
	<input type="text" name="nascimento" value="<?php echo $dado['nascimento'];?>"/><br/><br/>
	Endereço:<br/>
	<input type="text" name="endereco" value="<?php echo $dado['endereco'];?>"/><br/><br/>
	Cidade:<br/>
	<input type="text" name="cidade" value="<?php echo $dado['cidade'];?>"/><br/><br/>
	Estado:<br/>
	<input type="text" name="estado" value="<?php echo $dado['estado'];?>"/><br/><br/>
	Telefone:<br/>
	<input type="text" name="telefone" value="<?php echo $dado['telefone'];?>"/><br/><br/>
	Email:<br/>
	<input type="text" name="email" value="<?php echo $dado['email'];?>"/><br/><br/>
	
	
	<input type="submit" value="Atualizar"/>

</form>