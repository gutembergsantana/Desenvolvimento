<?php
session_start();
if(isset($_SESSION['id']) && empty($_SESSION['id']) == false){
	echo " ";

} else {
	header("Location: login.php");
}
?>

<?php
require 'conecta.php';
?>
<input type="button" value="Cadastrar novo Sorteio" onclick="javascript:location.href='adicionar.php';" />
<input type="button" value="Fechar o Sistema" onclick="javascript:location.href='sair.php';" />

<table border="0" width="100%">
	<tr>
		<th>Jogo</th>
		<th>Data</th>
		<th>Dez 01</th>
		<th>Dez 02</th>
		<th>Dez 03</th>
		<th>Dez 04</th>
		<th>Dez 05</th>
		<th>Dez 06</th>
		<th>Dez 07</th>
		<th>Dez 08</th>
		<th>Dez 09</th>
		<th>Dez 10</th>
		<th>Dez 11</th>
		<th>Dez 12</th>
		<th>Dez 13</th>
		<th>Dez 14</th>
		<th>Dez 15</th>
	</tr>
	<?php
	$sql = "SELECT * FROM lotofacil";
	$sql = $pdo->query($sql);
	$ultimo=$sql->rowCount();
	if($sql->rowCount()>0){
		foreach($sql->fetchAll() as $sorteios) {
			echo '<tr>';
				echo '<td>'.$sorteios['lot_Jogo'].'</td>';
				echo '<td>'.date('d/m/Y', strtotime($sorteios['lot_Data'])).'</td>';
				echo '<td>'."  -  - ".$sorteios['lot_Dez01'].'</td>';
				echo '<td>'.$sorteios['lot_Dez02'].'</td>';
				echo '<td>'.$sorteios['lot_Dez03'].'</td>';
				echo '<td>'.$sorteios['lot_Dez04'].'</td>';
				echo '<td>'.$sorteios['lot_Dez05'].'</td>';
				echo '<td>'.$sorteios['lot_Dez06'].'</td>';
				echo '<td>'.$sorteios['lot_Dez07'].'</td>';
				echo '<td>'.$sorteios['lot_Dez08'].'</td>';
				echo '<td>'.$sorteios['lot_Dez09'].'</td>';
				echo '<td>'.$sorteios['lot_Dez10'].'</td>';
				echo '<td>'.$sorteios['lot_Dez11'].'</td>';
				echo '<td>'.$sorteios['lot_Dez12'].'</td>';
				echo '<td>'.$sorteios['lot_Dez13'].'</td>';
				echo '<td>'.$sorteios['lot_Dez14'].'</td>';
				echo '<td>'.$sorteios['lot_Dez15'].'</td>';
			echo '<tr>';

		}
	}
	echo "      o último foi o ".$ultimo;
	?>

</table>

