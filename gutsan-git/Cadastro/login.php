<?php
session_start();
if(isset($_POST['nome']) && empty($_POST['nome']) == false) {
	$nome = addslashes($_POST['nome']);
	$senha = md5(addslashes($_POST['senha']));
	
	$dsn = "mysql:dbname=cadastro_clientes;host=localhost;charset=utf8";
$dbuser = "root";
$dbpass = "";

try{
	$db = new PDO($dsn, $dbuser, $dbpass);
	$sql = $db->query("SELECT * FROM usuarios WHERE nome='$nome' AND senha='$senha'");
	if($sql->rowCount()>0){
		$dado = $sql->fetch();
		$_SESSION['id']=$dado['id'];
		header("Location: index.php");	
	}
	
} catch (PDOException $e) {
	echo "Falha na conexão. ".$e->getMessage();
}


}

?>



<link href="estilo.css" rel="stylesheet">

<div class="cabeca">
	<center>Página de Login</center>
</div>

<div class= "fundo">

<form method="POST">
	Nome:<br/>
	<input type="text" name="nome" /><br/><br/>
	Senha:<br/>
	<input type="password" name="senha" /><br/><br/>
	
	<input type="submit" value="Entrar" />
</form>

</div>
