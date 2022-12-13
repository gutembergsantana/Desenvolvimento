<?php
require 'conecta.php';

	$sql = "SELECT * FROM lotofacil";
	$sql = $pdo->query($sql);
	$ult=$sql->rowCount();
	echo "O último foi o ".$ult;

if(isset($_POST['lot_Jogo']) && empty($_POST['lot_Jogo']) == false){
	$jogo = addslashes($_POST['lot_Jogo']);
	$data = addslashes($_POST['lot_Data']);
	$dez01 = addslashes($_POST['lot_Dez01']);
	$dez02 = addslashes($_POST['lot_Dez02']);
	$dez03 = addslashes($_POST['lot_Dez03']);
	$dez04 = addslashes($_POST['lot_Dez04']);
	$dez05 = addslashes($_POST['lot_Dez05']);
	$dez06 = addslashes($_POST['lot_Dez06']);
	$dez07 = addslashes($_POST['lot_Dez07']);
	$dez08 = addslashes($_POST['lot_Dez08']);
	$dez09 = addslashes($_POST['lot_Dez09']);
	$dez10 = addslashes($_POST['lot_Dez10']);
	$dez11 = addslashes($_POST['lot_Dez11']);
	$dez12 = addslashes($_POST['lot_Dez12']);
	$dez13 = addslashes($_POST['lot_Dez13']);
	$dez14 = addslashes($_POST['lot_Dez14']);
	$dez15 = addslashes($_POST['lot_Dez15']);


	$sql = "INSERT INTO lotofacil SET lot_Jogo='$jogo', lot_Data='$data', lot_Dez01='$dez01', lot_Dez02='$dez02', lot_Dez03='$dez03', lot_Dez04='$dez04', lot_Dez05='$dez05', lot_Dez06='$dez06', lot_Dez07='$dez07', lot_Dez08='$dez08', lot_Dez09='$dez09', lot_Dez10='$dez10', lot_Dez11='$dez11', lot_Dez12='$dez12', lot_Dez13='$dez13', lot_Dez14='$dez14', lot_Dez15='$dez15'";
	$pdo->query($sql);
	header("Location: index.php");
}
?>

<form method="POST">
	Jogo Nº:<br/>
	<input type="text" name="lot_Jogo" /><br/><br/>
	Data do Jogo no formato AAAA-MM-DD:<br/>
	<input type="text" name="lot_Data" /><br/><br/>
	Dezena 01:<br/>
	<input type="text" name="lot_Dez01" /><br/><br/>
	Dezena 02:<br/>
	<input type="text" name="lot_Dez02" /><br/><br/>
	Dezena 03:<br/>
	<input type="text" name="lot_Dez03" /><br/><br/>
	Dezena 04:<br/>
	<input type="text" name="lot_Dez04" /><br/><br/>
	Dezena 05:<br/>
	<input type="text" name="lot_Dez05" /><br/><br/>
	Dezena 06:<br/>
	<input type="text" name="lot_Dez06" /><br/><br/>
	Dezena 07:<br/>
	<input type="text" name="lot_Dez07" /><br/><br/>
	Dezena 08:<br/>
	<input type="text" name="lot_Dez08" /><br/><br/>
	Dezena 09:<br/>
	<input type="text" name="lot_Dez09" /><br/><br/>
	Dezena 10:<br/>
	<input type="text" name="lot_Dez10" /><br/><br/>
	Dezena 11:<br/>
	<input type="text" name="lot_Dez11" /><br/><br/>
	Dezena 12:<br/>
	<input type="text" name="lot_Dez12" /><br/><br/>
	Dezena 13:<br/>
	<input type="text" name="lot_Dez13" /><br/><br/>
	Dezena 14:<br/>
	<input type="text" name="lot_Dez14" /><br/><br/>
	Dezena 15:<br/>
	<input type="text" name="lot_Dez15" /><br/><br/>

	<input type="submit" value="Cadastrar" />

</form>
