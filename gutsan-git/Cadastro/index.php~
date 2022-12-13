<?php 
session_start();
if(isset($_SESSION['id']) && empty($_SESSION['id']) == false) {
	echo " ";
} else{
	header("Location: login.php");
}
?>


<?php
require 'conecta.php';
?>
<input type="button" value="Cadastrar novo Cliente" onclick="javascript: location.href='adicionar.php';" />
<input type="button" value="Fechar o Sistema" onclick="javascript: location.href='sair.php';" />

<table border="0" width="100%">
	<tr>
		<th>Nome</th>
		<th>Nascimento</th>
		<th>Endereço</th>
		<th>Cidade</th>
		<th>Estado</th>
		<th>Telefone</th>
		<th>Email</th>
		<th>Ação</th>	
	</tr>
	<?php
	$sql = "SELECT * FROM clientes ORDER BY nome";
	$sql = $pdo->query($sql);
	if($sql->rowCount()>0) {
		foreach($sql->fetchAll() as $clientes) {
			echo '<tr>';
			echo '<td>'.$clientes['nome'].'</td>';
			echo '<td>'.date('d/m/Y',strtotime($clientes['nascimento'])).'</td>';
			echo '<td>'.$clientes['endereco'].'</td>';
			echo '<td>'.$clientes['cidade'].'</td>';
			echo '<td>'.$clientes['estado'].'</td>';
			echo '<td>'.$clientes['telefone'].'</td>';
			echo '<td>'.$clientes['email'].'</td>';
			echo '<td><a href="editar.php?id='.$clientes['id'].'">Editar</a></td>';
			echo '<td><a href="excluir.php?id='.$clientes['id'].'">Excluir</a></td>';
			echo '</tr>';
		}
	}
	?>
</table>