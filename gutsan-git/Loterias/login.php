<?php
session_start();
if(isset($_POST['nome']) && empty($_POST['nome']) == false) {
	$nome = addslashes($_POST['nome']);
	$senha = md5(addslashes($_POST['senha']));

	$bdlogin = "mysql:dbname=usuarios_login; host=localhost; charset=utf8";
	$dbuser = "root";
	$dbpass = "";
	try{
		$db = new PDO($bdlogin, $dbuser, $dbpass);
		$sql = $db->query("SELECT * FROM usuarios WHERE nome='$nome' AND senha='$senha'");
		if($sql->rowCount()>0){
			$dado = $sql->fetch();
			$_SESSION['id']=$dado['id'];
			header("Location: index.php");
		}

	} catch (PDOException $erro) {
		echo "Falha na conexão com o bd usuarios_login ".$erro->getMessage();
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